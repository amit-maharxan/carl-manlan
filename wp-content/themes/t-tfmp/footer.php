<!-- footer wrapper -->
<section class="footer-wrapper pad-75 bg-lightblue">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <ul class="social-icons-two light list-inline">
                    <?php if(get_field('linkedin_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('linkedin_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('facebook_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('facebook_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('twitter_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('twitter_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('instagram_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('instagram_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('email_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="mailto:<?php the_field('email_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <p class="copyright-text">Copyrights ©<?php echo date('Y'); ?> - <a href="<?php the_permalink(23); ?>">Legal Notice</a></p>
                <a href="#" class="back-top">BACK TO TOP</a>
            </div>
        </div>
    </div>
</section>
<!-- footer wrapper -->

<!-- SCRIPTS -->
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-1.12.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/plugin.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>