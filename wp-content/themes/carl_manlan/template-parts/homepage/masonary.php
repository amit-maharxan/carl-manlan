<section class="container gap-4 text-light pt-10">
    <h1 class="uppercase text-3xl">Digital Scrapbook</h1>
    <div class="masonry pt-10 pb-20 font-over-the-rainbow">
        <?php
        if (have_rows('snaps_from_his_life')):
            // Define generator outside the loop
            function aspectRatioPattern()
            {
                $pattern = ['aspect-[0.75]', 'aspect-[1.25]', 'aspect-[1.25]', 'aspect-[0.75]'];
                $i = 0;
                while (true) {
                    yield $pattern[$i % 4];
                    $i++;
                }
            }

            $aspectGen = aspectRatioPattern(); // ✅ Initialize generator

            while (have_rows('snaps_from_his_life')) : the_row();
                $aspect = $aspectGen->current(); // ✅ Use it
                $aspectGen->next();
        ?>
                <div class="masonry__item mb-6 <?php echo $aspect; ?> overflow-hidden">
                    <div class="imgWrapper w-full h-full bg-gray mb-4">
                        <img loading="lazy" src="<?php the_sub_field('hp_snaps_select_image'); ?>" alt="" class="w-full h-full object-cover" />
                        <div class="txtWrapper">
                            <?php the_sub_field('hp_snaps_description'); ?>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>