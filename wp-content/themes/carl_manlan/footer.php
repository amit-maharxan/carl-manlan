<?php
/**
 * Footer Template
 *
 * @package CARL
 */
?>

<?php

/**
 * carl_footer_content hook
 *
 * @hooked carl_output_footer_content()
 *
 */
do_action( 'carl_footer_content' );

wp_footer(); ?>

<script defer>
    document.addEventListener('DOMContentLoaded', () => {
    const lenis = new Lenis({
        lerp: 0.08,
        smoothWheel: true,
    });
    window.lenis = lenis; // Expose Lenis instance globally for debugging
    // Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
    lenis.on('scroll', ScrollTrigger.update);

    gsap.registerPlugin(ScrollTrigger);
    // Add Lenis's requestAnimationFrame (raf) method to GSAP's ticker
    // This ensures Lenis's smooth scroll animation updates on each GSAP tick
    gsap.ticker.add((time) => {
        lenis.raf(time * 1000); // Convert time from seconds to milliseconds
    });

    // Disable lag smoothing in GSAP to prevent any delay in scroll animations
    gsap.ticker.lagSmoothing(0);
    });
</script>
<script
    src="https://unpkg.com/split-type"
    defer></script>

<script defer>
    document.addEventListener('DOMContentLoaded', () => {
    feather.replace();
    });
</script>

</body>
</html>