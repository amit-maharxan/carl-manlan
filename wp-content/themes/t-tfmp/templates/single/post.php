<?php get_header(); ?>

    <section class="single-post pad-50 pad-top-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="entry-header text-center">
                        <h1 class="entry-title">
                            <?php the_title(); ?>
                        </h1>
                        <h4 class="entry-meta">
                            <?php
                            $date   = get_the_date('Y-m-d');
                            $date_d = date("F jS, Y", strtotime($date));
							$author = get_queried_object();
							$author_id = get_post_field( 'post_author', get_the_id());
                            ?>
                            Originally published on <?php the_field('organization_post'); ?>, <?php echo $date_d; ?>
							<br><br>
							<?php echo 'Author: ' . get_the_author_meta( 'display_name', $author_id );?>
                        </h4>
                        <div class="entry-share-div text-center">
                            <?php
                            $id_post        = get_the_ID();
                            $url_post       = get_the_permalink();
                            $title_post     = get_the_title();
                            $ext_post       = get_the_excerpt();
                            $img_post       = $illu;
                            ?>
                            <ul class="social-text light list-inline">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_post; ?>&quote=<?php echo $title_post; ?>" title="Share on Facebook" target="_blank">
                          <span>
                            <i class="fa fa-facebook-f"></i>
                          </span>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="https://twitter.com/intent/tweet?source=<?php echo $url_post; ?>&text=<?php echo $title_post; ?>:%20<?php echo $url_post; ?>" target="_blank" title="Tweet">
                          <span>
                            <i class="fa fa-twitter"></i>
                          </span>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url_post; ?>&title=<?php echo $title_post; ?>" target="_blank" >
                          <span>
                            <i class="fa fa-linkedin"></i>
                          </span>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="mailto:?subject=<?php echo $title_post; ?>&body=<?php echo $ext_post; ?>:<?php echo $url_post; ?>" target="_blank">
                          <span>
                            <i class="fa fa-envelope"></i>
                          </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-media">
                            <?php the_post_thumbnail('large', array('class'=>'img-fluid')); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="entry-content">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="seemore text-center">
                        <?php if(get_field('link_to_post_post')): ?>
                            <a href="<?php the_field('link_to_post_post'); ?>" class="btn-add-to-cart" target="_blank">
                                Read this article
                                <?php if(get_field('private_post')): ?>
                                    <i class="far fa-lock-alt"></i>
                                <?php else: ?>
                                    <i class="far fa-unlock-alt"></i>
                                <?php endif; ?>
                                on <?php the_field('organization_post'); ?> <i class="far fa-external-link"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php $next_post        = get_next_post(); ?>
                <?php $previous_post    = get_previous_post(); ?>
                <?php if($next_post): ?>
                    <div class="col-lg-10 offset-lg-1 bottom-border text-center next-article top-border">
                        <p>Next Article</p>
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                            <h2><?php echo get_the_title( $next_post->ID ); ?></h2>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="col-lg-10 offset-lg-1 bottom-border text-center next-article top-border">
                        <p>Previous Article</p>
                        <a href="<?php echo get_permalink( $previous_post->ID ); ?>">
                            <h2><?php echo get_the_title( $previous_post->ID ); ?></h2>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="goback text-center col-12">
                    <div class="button-4">
                        <div class="eff-4"></div>
                        <a href="<?php the_permalink(7); ?>">Back to all</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>