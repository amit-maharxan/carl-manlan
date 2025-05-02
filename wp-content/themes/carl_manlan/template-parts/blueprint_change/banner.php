<section
class="bannerSection font-medium relative flex h-screen w-screen">
<div
    class="content container max-lg:pb-6 gap-8 m-auto max-lg:text-center z-1">
    <div
    class="bgWrapper absolute inset-0 after:absolute after:inset-0 after:bg-linear-to-b after:from-dark/10 after:via-dark/60 after:via-20% after:to-dark">
    <img
        src="<?php echo get_field('change_image');?>"
        alt=""
        class="h-screen w-screen object-cover" />
    </div>
    <div
    class="text-wrapper lg:py-8 uppercase text-white items-end content-center text-center">
    <div data-by=".char">
        <h1
        class="text-primary text-center text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
        <?php echo get_field('change_title');?>
        </h1>
    </div>
    </div>
    <div
    class="decorImg1 absolute inset-x-4 inset-y-4 my-auto h-max w-max opacity-50">
    <img
        src="<?php echo DK_ASSEST_URI.'/icons/Circles.svg';?>"
        alt=""
        class="lg:w-[236px] lg:h-[119px]" />
    </div>
    <div
    class="decorImg2 absolute inset-x-4 inset-y-4 mt-auto ml-auto mr-4 h-max w-max opacity-50">
    <img
        src="<?php echo DK_ASSEST_URI.'/icons/squarePolka.svg';?>"
        alt="" />
    </div>
</div>
</section>