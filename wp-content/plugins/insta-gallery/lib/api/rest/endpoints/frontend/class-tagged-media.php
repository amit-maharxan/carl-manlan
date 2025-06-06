<?php
namespace QuadLayers\IGG\Api\Rest\Endpoints\Frontend;

use QuadLayers\IGG\Api\Rest\Endpoints\Base;
use QuadLayers\IGG\Models\Accounts as Models_Accounts;
use QuadLayers\IGG\Api\Fetch\Business\Tagged\Get as Api_Fetch_Business_Tagged;
use QuadLayers\IGG\Services\Cache;

class Tagged_Media extends Base {

	protected static $route_path = 'frontend/tagged-media';

	protected $media_cache_engine;
	protected $media_cache_key = 'tagged';

	public function callback( \WP_REST_Request $request ) {

		$after                     = $request->get_param( 'after' );
		$account_id                = $request->get_param( 'account_id' );
		$limit                     = $request->get_param( 'limit' );
		$hide_items_with_copyright = $request->get_param( 'hide_items_with_copyright' );
		$hide_reels                = $request->get_param( 'hide_reels' );

		// Set prefix to cache.
		$feed_md5 = md5(
			wp_json_encode(
				array(
					'account_id'                => $account_id,
					'limit'                     => $limit,
					'hide_items_with_copyright' => $hide_items_with_copyright,
					'hide_reels'                => $hide_reels,
				)
			)
		);

		$media_complete_prefix = "{$this->media_cache_key}_{$feed_md5}_{$after}";

		$this->media_cache_engine = new Cache( 6, true, $media_complete_prefix );

		// Get cached tagged media data.
		$response = $this->media_cache_engine->get( $media_complete_prefix );

		// Check if $response has data, if it has, return it.
		if ( ! QLIGG_DEVELOPER && ! empty( $response['response'] ) ) {
			return $response['response'];
		}

		$account = Models_Accounts::instance()->get( $account_id );

		// Check if exist an access_token and access_token_type related to id setted by param, if it is not return error.
		if ( ! isset( $account['access_token'], $account['access_token_type'] ) ) {
			return $this->handle_response(
				array(
					'code'    => 412,
					'message' => sprintf( esc_html__( 'Account id %s not found to fetch tagged media.', 'insta-gallery' ), $account_id ),
				)
			);
		}

		$access_token = $account['access_token'];

		// Check if access_token_type is 'BUSINESS', else return error.
		if ( $account['access_token_type'] !== 'BUSINESS' ) {
			return $this->handle_response(
				array(
					'code'    => 403,
					'message' => esc_html__( 'The account must be professional to show tagged media.', 'insta-gallery' ),
				)
			);
		}

		// Get tagged media data.
		$response = ( new Api_Fetch_Business_Tagged() )->get_data( $access_token, $account_id, $limit, $after, $hide_items_with_copyright, $hide_reels );

		// Check if response is an error and return it.
		if ( isset( $response['message'], $response['code'] ) ) {
			return $this->handle_response( $response );
		}

		if ( empty( $response['data'] ) ) {
			if ( $hide_reels === true ) {
				return array(
					'code'    => 404,
					'message' => esc_html__( 'This feed has no elements. Reels are currently hidden in this feed.', 'insta-gallery' ),
				);
			}
			return array(
				'code'    => 404,
				'message' => esc_html__( 'No tagged media found for this account.', 'insta-gallery' ),
			);
		}

		// Update tagged media data cache and return it.
		if ( ! QLIGG_DEVELOPER ) {
			$this->media_cache_engine->update( $media_complete_prefix, $response );
		}

		return $this->handle_response( $response );
	}

	public static function get_rest_args() {
		return array(
			'account_id'                => array(
				'required'          => true,
				'sanitize_callback' => function ( $account_id ) {
					return sanitize_text_field( $account_id );
				},
				'validate_callback' => function ( $account_id ) {
					return is_numeric( $account_id );
				},
			),
			'limit'                     => array(
				'default'           => 12,
				'sanitize_callback' => function ( $limit ) {
					return (int) $limit;
				},
				'required'          => false,
			),
			'after'                     => array(
				'default'           => '',
				'sanitize_callback' => function ( $after ) {
					return sanitize_text_field( $after );
				},
				'required'          => false,
			),
			'hide_items_with_copyright' => array(
				'default'           => false,
				'sanitize_callback' => function ( $hide_items_with_copyright ) {
					return filter_var( $hide_items_with_copyright, FILTER_VALIDATE_BOOLEAN );
				},
				'required'          => false,
			),
			'hide_reels'                => array(
				'default'           => false,
				'sanitize_callback' => function ( $hide_reels ) {
					return filter_var( $hide_reels, FILTER_VALIDATE_BOOLEAN );
				},
				'required'          => false,
			),
		);
	}

	public static function get_rest_method() {
		return \WP_REST_Server::READABLE;
	}

	public function get_rest_permission() {
		return true;
	}
}
