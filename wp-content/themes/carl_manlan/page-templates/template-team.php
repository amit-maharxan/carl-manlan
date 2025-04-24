<?php
/**
 * Template Name: Team Layout
 */

do_action('carl_header');

$postID = get_the_ID();
$url    = wp_get_attachment_url( get_post_thumbnail_id($postID), 'thumbnail' ); ?>

<!-- Hero -->
<section class="hero">
  <div class="bannerSm blueOverlay">
    <img
      src="<?php echo $url;?>"
      alt="" />
    <div class="txtWrapper mainGrid">
      <div class="content">
        <small> Home / Team </small>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->

<!-- About -->
<section class="mainGrid team">
  <div class="content">
    <div class="teams">
      <div class="top">
        <h1>Meet Our Team</h1>
        <div class="tabs">
          <button
            data-target="#currentTeam"
            class="active">
            Current Team
          </button>
          <button data-target="#pastTeam">Past Team</button>
        </div>
      </div>
      <div class="bottom">
        <div
          class="tabGrid active"
          id="currentTeam">
          <?php
          if( have_rows('team_members') ):
          while( have_rows('team_members') ) : the_row(); ?>
          <div class="grid-item">
            <div class="imgWrapper">
              <img src="<?php the_sub_field('team_image'); ?>" alt="" />
            </div>
            <div class="txtWrapper">
              <div class="left">
                <strong class="name"><?php the_sub_field('team_name'); ?></strong>
                <small class="post"><?php the_sub_field('team_designation'); ?></small>
              </div>
              <div class="right">
                <a href="<?php the_sub_field('facebook'); ?>">
                  <img src="<?php echo DK_IMG . '/facebook ixon.svg'; ?>" alt="" />
                </a>
                <a href="<?php the_sub_field('x'); ?>">
                  <img src="<?php echo DK_IMG . '/x icon.svg'; ?>" alt="" />
                </a>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <div
          class="tabGrid"
          id="pastTeam">
          <div class="grid-item">
            <span class="title"><?php the_field('past_heading');?></span>
            <ul>
              <?php
              if( have_rows('old_team_members') ):
              while( have_rows('old_team_members') ) : the_row(); ?>
              <li><?php the_sub_field('old_team_name'); ?></li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script defer>
    document.addEventListener('DOMContentLoaded', () => {
      const toggleBtns = document.querySelectorAll('.teams .tabs button');
      const targets = document.querySelectorAll('.teams .bottom .tabGrid');
      toggleBtns.forEach((toggleBtn) => {
        const clickedTargetId = toggleBtn.getAttribute('data-target');
        const clickedTarget = document.querySelector(clickedTargetId);
        if (!clickedTarget) return;
        toggleBtn.addEventListener('click', (e) => {
          e.preventDefault();
          targets.forEach((target) => {
            if (target != clickedTarget) {
              target.classList.remove('active');
              return;
            }
            target.classList.add('active');
          });
          toggleBtns.forEach((toggleBtnNested) => {
            if (toggleBtn != toggleBtnNested) {
              //   debugger;
              toggleBtnNested.classList.remove('active');
              return;
            }
            toggleBtnNested.classList.add('active');
          });
        });
      });
    });
  </script>
</section>
<!-- About End -->

<?php do_action('carl_footer'); ?>