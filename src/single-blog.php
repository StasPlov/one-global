<?php get_header(); ?>

<!-- header -->
<div class="relative w-full h-screen overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="px-[11.25rem] w-full h-full flex items-center justify-start bg-fixed bg-cover bg-center" :style="background-image: url('${require('@/Assets/Images/3d-motion-flow-background-with-digital-particles 1.png')}')">
    </div>
</div>
<!-- header end -->

<!-- content -->
<div class="w-full min-h-screen relative">
    <img :src="require('@/Assets/Images/Ellipse 4 (1).svg')" alt="" class="absolute top-[26%] right-0 select-none z-10 animate-flicker" draggable="false">
    
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="flex flex-col gap-10 pl-[11.25rem] pr-[25rem] pt-[8.125rem] pb-[10.375rem] max-md:px-[2.1875rem]">
        <div class="flex justify-between">
            <a href="/blog">
            <button class="relative flex gap-2 justify-between items-center pl-0 pr-9 py-3 rounded-3xl transition-all duration-300 group hover:bg-[#1c2126] hover:pl-11 hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <div class="group-hover:animate-bounce">
                    <img :src="require('@/Assets/Icons/arrow_left_black.svg')" alt="" class=" transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 group-hover:invert">
                </div>
                <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Back to Blog</span>
            </button>
            </a>

            <div class="flex gap-6 items-center">
                <div class="flex gap-2">
                    <?php foreach (get_the_terms( get_the_ID(), 'blog-category') as $cat) : ?>
                    <a href="<?php echo esc_url(get_term_link($cat)) ?>" class="relative flex gap-2 justify-between items-center px-[0.875rem] py-2 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <span class="text-[#1C2126] font-lato text-[0.625rem] font-medium text-center group-hover:text-white transition duration-300"><?php echo esc_html($cat->name) ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>

                <span class="text-[#1C2126]/70 font-lato text-xs font-medium text-center"><?php the_time('d/m/Y'); ?></span>
            </div>
        </div>

        <div class="flex flex-col gap-8"> 
            <h2 class="font-lato text-5xl font-medium leading-[4rem] text-[#1C2126] text-start"><?php the_title(); ?></h2>

            <div class="flex flex-col gap-10 font-lato text-[#1C2126] text-base font-light leading-7 text-start">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<!-- content end -->

<!-- next -->
<div class="flex justify-between pl-[11.25rem] pr-[4.375rem] pt-[8.125rem] pb-[10.375rem] relative max-md:px-[2.1875rem] relative">
    <img :src="require('@/Assets/Images/Ellipse 5 (1).svg')" alt="" class="absolute bottom-[0%] left-0 select-none z-0 animate-flicker" draggable="false">

    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
        <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Back to Case Studies</span>
        <div class="group-hover:animate-bounce">
            <img :src="require('@/Assets/Icons/arrow_left_black.svg')" alt="" class="-rotate-90 transition duration-300 group-hover:-scale-y-150 group-hover:invert">
        </div>
    </button>

    <div class="flex gap-3 items-center">
        <span>Share via:</span>

        <div class="flex gap-2 max-md:grid max-md:grid-col">
            <button class="relative flex gap-2 justify-between items-center p-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <div class="group-hover:animate-bounce">
                    <img :src="require('@/Assets/Icons/bx_bxl-facebook.svg')" alt="" class="transition duration-300 group-hover:invert">
                </div>
            </button>

            <button class="relative flex gap-2 justify-between items-center p-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <div class="group-hover:animate-bounce">
                    <img :src="require('@/Assets/Icons/ant-design_twitter-outlined.svg')" alt="" class="transition duration-300 group-hover:invert">
                </div>
            </button>

            <button class="relative flex gap-2 justify-between items-center p-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <div class="group-hover:animate-bounce">
                    <img :src="require('@/Assets/Icons/bx_bxl-linkedin.svg')" alt="" class="transition duration-300 group-hover:invert">
                </div>
            </button>
        </div>
    </div>
</div>
<!-- next end -->

<?php get_footer(); ?>