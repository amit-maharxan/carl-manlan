<section class="relative">
    <div
        class="hexBg pattern1 bgEffect linear-grad-mask absolute inset-0 z-0 after:z-0 after:blocsk after:inset-0 after:absolute after:bg-linear-to-b after:from-transparent after:via-dark/40 after:via-80% after:to-dark"
        data-gradX="0.8"
        data-gradSize="farthest-corner"
        data-gradY="0"></div>
    <div class="titleDiv relative pb-10 pt-[max(4rem,_30vh)]">
        <h1 class="text-4xl font-bold w-full text-light text-center">
            Get In Touch
        </h1>
    </div>
</section>

<!-- form -->
<section class="uppercase font-medium bg-dark text-light/75 py-20">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="c43f149" title="Contact Page Form"]');?>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('form').addClass('flex flex-col gap-6 max-w-[44rem] mx-auto');
    });
</script>