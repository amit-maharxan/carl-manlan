<?php do_action('carl_header');

$blogID     = get_the_ID();
$post_type  = get_post_type();
if($post_type == 'post'){
  $page_url = site_url('blueprint-for-change');
} ?>

<section class="relative">
  <div
    class="hexBg pattern1 bgEffect linear-grad-mask absolute inset-0 z-0 after:z-0 after:blocsk after:inset-0 after:absolute after:bg-linear-to-b after:from-transparent after:via-dark/40 after:via-80% after:to-dark"
    data-gradX="0.8"
    data-gradSize="farthest-corner"
    data-gradY="0"></div>
  <div class="titleDiv relative pb-10 pt-[max(4rem,_30vh)]">
    <h1 class="text-4xl font-bold w-full text-light text-center"><?php the_title(); ?></h1>
  </div>
</section>

<section class="mainGrid blog-section relative">
  <div class="content container text-light z-1">
    <div class="left__part">

    <?php if($post_type == 'post'){ ?>
      <div id="blog-image" class="">
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($blogID), 'thumbnail'); ?>
        <img src="<?php echo $url; ?>" alt="image">
      </div>
    <?php
      $organization_post = get_field('organization_post');
      $link_to_post_post = get_field('link_to_post_post');
    } ?>

      <div class="blog-details pb-10">

        <div class="flex flex-wrap justify-between w-full">
          <?php if($post_type == 'news-stories'){ ?>
          <p class="added-on"><?php echo get_field('originally_posted_on'); ?></p>
          <?php } if($post_type == 'post'){ 
            if($organization_post){ ?>
          <p class="added-on"><?php echo 'Originally published on '.$organization_post.', '.get_the_date('F m, Y'); ?></p>
          <?php } } ?>
          <p class="flex gap-2 shareSocials">SHARE 
            <a id="fb-share" class="contents" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>&text=<?php echo urlencode( get_the_title() );?>&summary=<?php echo urlencode( get_the_title() );?>&source=<?php echo 'Carl_Manlan';?>">
              <img class="!my-auto" src="<?php echo DK_ASSEST_URI . '/icons/fb.svg'; ?>" alt="facebook">
            </a>
            <a id="x-share" class="contents" target="_blank" href="https://x.com/share?url=<?php the_permalink();?>&via=<?php echo 'Carl_Manlan';?>&related=<?php echo urlencode( get_the_title() );?>&hashtags=<?php echo 'Media';?>&text=<?php echo urlencode( get_the_title() );?>">
              <img class="!my-auto" src="<?php echo DK_ASSEST_URI . '/icons/xTwitter.svg' ?>" alt="X">
            </a>
            <a id="in-share" class="contents" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&text=<?php echo urlencode( get_the_title() );?>&summary=<?php echo urlencode( get_the_title() );?>&source=<?php echo 'Carl_Manlan';?>">
              <img class="!my-auto" src="<?php echo DK_ASSEST_URI . '/icons/ln.svg' ?>" alt="Linkedin">
            </a>
            <a id="mail-share" class="contents" target="_blank" href="mailto:?subject=<?php echo rawurlencode( get_the_title() ); ?>&body=<?php echo rawurlencode( get_permalink() ); ?>">
              <img class="!my-auto" src="<?php echo DK_ASSEST_URI . '/icons/mail.svg' ?>" alt="Mail">
            </a>
          </p>
        </div>

        <p class="desc">
          <?php the_content(); ?>
          <?php if($post_type == 'post'){
            echo '<a href="'.$link_to_post_post.'" target="_blank">'.$link_to_post_post.'</a>';
          } ?>
        </p>
        <a class="btn-primary view-all uppercase" href="">Back To All</a>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    var postype   = '<?php echo $post_type; ?>';
    var blueprint = '<?php echo site_url('blueprint-for-change') ?>';
    var media     = '<?php echo site_url('media') ?>';

    if (postype == 'post') {
      $('li#menu-item-119').addClass('active');
      $('.view-all').attr('href', blueprint);
    }
    if (postype == 'news-stories') {
      $('li#menu-item-120').addClass('active');
      $('.view-all').attr('href', media);
    }
  });
</script>

<?php do_action('carl_footer'); ?>