<section class="font-medium w-full relative flex flex-col py-20 lg:pb-0">
<div
    class="hexBg pattern1 bgEffect absolute inset-0 z-0 after:absolute after:inset-0 after:bg-linear-to-b after:from-transparent after:via-transparent after:via-10% after:to-dark"
    data-gradX="0.9"
    data-gradY="-0.5"
    data-gradSize="farthest-corner"
    data-box-dimension="180"></div>
<div
    class="content container grid lg:grid-cols-2 gap-8 mt-auto max-lg:text-center z-1">
    <div
    class="text-wrapper lg:py-8 uppercase text-white items-end content-center">
    <div data-scrub-by=".word">
        <p class="max-w-[30ch] text-3xl">
        <?php the_field('about_section_title');?>
        </p>
    </div>
    </div>
    <div
    class="txt-wrapper text-sm max-lg:mt-8 flex font-poppins font-bold text-light/75 m-auto"
    data-scrub-by=".line">
    <?php the_field('about_section_description');?>
    </div>
</div>
<div
    class="content pt-10 container grid lg:grid-cols-2 gap-8 mt-auto z-1">
    <div class="imgWrapper content-end w-full h-full justify-center">
    <img
        src="<?php the_field('about_section_image');?>"
        loading="lazy"
        height="500"
        width="500"
        class="object-scale-down mx-auto"
        alt="" />
    </div>
    <div class="txtWrapper text-light/75 flex flex-col gap-15">
    <div
        class="contentCard"
        data-scrub-by=".line">
        <h1 class="text-2xl">MO Ibrahim Fellowship</h1>
        <time class="text-2xl text-primary">2014</time>
        <p class="text-sm font-normal mt-4 font-poppins">
        Awarded annually to only three exceptional African leaders, this
        fellowship honors individuals committed to driving governance,
        economic inclusion, and social impact in Africa. Carl’s
        selection highlights his remarkable leadership qualities and
        impact.
        </p>
    </div>
    <div
        class="contentCard"
        data-scrub-by=".line">
        <h1 class="text-2xl">Benin National Honors</h1>
        <h2 class="text-2xl text-primary">
        Chevalier de l’ordre national du mérite du Benin
        </h2>
        <time class="text-2xl text-primary">2014</time>
        <p class="text-sm font-normal mt-4 font-poppins">
        Awarded annually to only three exceptional African leaders, this
        fellowship honors individuals committed to driving governance,
        economic inclusion, and social impact in Africa. Carl’s
        selection highlights his remarkable leadership qualities and
        impact.
        </p>
    </div>
    <div
        class="contentCard"
        data-scrub-by=".line">
        <h1 class="text-2xl">Euromoney Award for Excellence</h1>
        <time class="text-2xl text-primary">2014</time>
        <p class="text-sm font-normal mt-4 font-poppins">
        Awarded annually to only three exceptional African leaders, this
        fellowship honors individuals committed to driving governance,
        economic inclusion, and social impact in Africa. Carl’s
        selection highlights his remarkable leadership qualities and
        impact.
        </p>
    </div>
    </div>
</div>
</section>