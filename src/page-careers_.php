<?php get_header(); ?>
<?php /* Template Name: Page Careers */ ?>

<!-- Header -->
<?php
    $header_image = get_field('header_image');
    $header_title = get_field('header_title'); 
    $header_description = get_field('header_description'); 
?>
<div class="w-full min-h-screen">
    <div class="flex min-h-screen max-md:hidden">
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col flex-1 items-start gap-7 pl-[11.25rem] pr-[7.5rem] sticky top-[var(--header-menu-height)]">
                <h1 class="text-[#1C2126] text-[5rem] font-caudex itali">
                    <?php echo $header_title; ?>
                </h1>

                <span class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[23.125rem]">
                    <?php echo $header_description; ?>
                </span>
            </div>
        </div>

        <div class="flex-1">
            <img src="<?php echo $header_image['url']; ?>" alt="<?php echo $header_image['alt']; ?>" draggable="false" class="h-full w-full object-cover select-none">
        </div>
    </div>

    <!-- mobile -->
    <div class="hidden max-md:flex flex-col">
        <div class="flex items-center min-h-screen bg-fixed bg-cover bg-center" id="paralax" style="background-image: url('<?php echo $header_image['url']; ?>')">
            <div class="flex items-center justify-center">
                <div class="px-[2.1875rem]">
                    <h1 class="text-white text-[5rem] font-caudex italic text-start flex flex-col">
                        <?php echo $header_title; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="px-[2.1875rem] pt-[6.25rem]">
            <span class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[23.125rem]">
                <?php echo $header_description; ?>
            </span>
        </div>
    </div>
    <!-- end mobile -->
</div>
<!-- Header end -->

<!-- Content -->
<?php
    $info_first = get_field('info_first');
    $info_two = get_field('info_two'); 
    $info_three = get_field('info_three'); 
?>
<div class="w-full overflow-hidden">
    <div>
        <div class="grid grid-cols-3 grid-rows-3 gap-0 max-md:hidden">
            <div class="flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $info_first['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $info_first['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $info_first['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-span-2 max-h-[53.75rem]">
                <img src="<?php echo $info_first['image']['url']; ?>" alt="<?php echo $info_first['image']['alt']; ?>" class="h-full w-full object-cover">
            </div>

            <div class="max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                <img src="<?php echo $info_first['image_two']['url']; ?>" alt="<?php echo $info_first['image_two']['alt']; ?>" class="h-full w-full object-cover">
            </div>

            <div class="max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3.5s">
                <img src="<?php echo $info_two['image']['url']; ?>" alt="<?php echo $info_two['image']['alt']; ?>" class="h-full w-full object-cover">
            </div>

            <div class="col-start-3 flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $info_two['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $info_two['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $info_two['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-start-3 flex items-center justify-center bg-white max-h-[26.875rem] border-r border-solid border-[#1c212633]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $info_three['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $info_three['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $info_three['description']; ?>
                    </span>
                </div>
            </div>

            <div class="col-span-2 row-start-3 max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="3s">
                <div class="flex flex-col justify-center px-[3.125rem] h-full w-full gap-[3.75rem]">
                    <div class="flex flex-col gap-8 w-full">
                        <input type="text" placeholder="Keywords" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0">

                        <div class="flex gap-5 w-full">
                            <input type="text" placeholder="All Categories" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                            <input type="text" placeholder="All Job Types" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                            <input type="text" placeholder="All Locations" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <button class="flex-[3] relative flex gap-2 justify-center items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Clear filter</span>
                            <img src="<?php echo get_template_directory_uri().'/assets/Icons/arrow_rigth2_black.svg'?>" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                        </button>

                        <button class="flex-[6.8] relative flex gap-4 justify-center items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <img src="<?php echo get_template_directory_uri().'/assets/Icons/codicon_search (1).svg'?>" alt="" class="transition duration-300 group-hover:-translate-x-3 group-hover:invert">
                            <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Search for Job</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile -->
        <div class="hidden flex-col max-md:flex">
            <div class="flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <img src="<?php echo $info_first['image']['url']; ?>" alt="<?php echo $info_first['image']['alt']; ?>" class="h-[34.1875rem] h-full w-full object-cover">

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $info_first['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $info_first['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $info_first['description']; ?>
                    </span>
                </div>
            </div>

            <div class="col-start-3 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <img src="<?php echo $info_first['image_two']['url']; ?>" alt="<?php echo $info_first['image_two']['alt']; ?>" class="h-[34.1875rem] w-full object-cover">

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $info_two['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $info_two['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $info_two['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-start-3 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <img src="<?php echo $info_two['image']['url']; ?>" alt="<?php echo $info_two['image']['alt']; ?>" class="h-[34.1875rem] w-full object-cover">

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $info_three['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $info_three['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $info_three['description']; ?>
                    </span>
                </div>
            </div>

            <div class="" id="view-anim" data-animation="animate-fadeInRight" data-duration="3s">
                <div class="flex flex-col justify-center px-[3.125rem] h-full w-full gap-[3.75rem]">
                    <div class="flex flex-col gap-8 w-full">
                        <input type="text" placeholder="Keywords" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0">

                        <div class="flex gap-5 w-full">
                            <input type="text" placeholder="All Categories" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                            <input type="text" placeholder="All Job Types" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                        </div>
                        
                        <div class="flex gap-5">
                            <input type="text" placeholder="All Locations" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 flex-1">
                            <button class="flex-1 relative flex gap-2 justify-center items-center pl-4 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Clear filter</span>
                                <img src="<?php echo get_template_directory_uri().'/assets/Icons/arrow_rigth2_black.svg'?>" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                            </button>
                        </div>
                    </div>

                    <button class="relative flex gap-4 justify-center  items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <img src="<?php echo get_template_directory_uri().'/assets/Icons/codicon_search (1).svg'?>" alt="" class="transition duration-300 group-hover:-translate-x-3 group-hover:invert">
                        <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Search for Job</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile end -->
    </div>
</div>
<!-- Content end -->

<!-- Careers list -->
<?php
    $content_button = get_field('content_button');
?>
<div class="w-full overflow-hidden relative">
    <img src="<?php echo get_template_directory_uri().'/assets/Images/Ellipse 4 (3).svg'?>" alt="" class="absolute bottom-[5%] right-0" id="view-anim" data-animation="animate-fadeInRight" data-duration="4s">
    
    <div>
        <?php 
            /* $category = get_queried_object()->name; */
            $args = [
                'post_type' => 'careers',
                'posts_per_page' => 10
            ];
            /* 
            if(!empty($category)) {
                $args = [
                    ...$args,
                ];
            } */
            
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post();?>
        <?php 
            $info = get_field('info'); 
        ?>
        <div class="flex border border-solid border-[#1c212633] max-md:flex-[100%] max-md:flex-wrap max-md:border-x-0 max-md:border-t-0">
            <div class="flex-[37.7%] flex items-center border-r border-solid border-[#1c212633]">
                <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem] max-md:pb-0">
                    <h2 class="text-[#1C2126] font-lato text-2xl font-medium text-start">
                        <?php the_title(); ?>
                    </h2>

                    <span class="text-[#1C2126] font-lato font-light text-base text-start">
                        <?php echo the_excerpt(); ?>
                    </span>
                </div>
            </div>
            <div class="flex flex-[2]">
                <div class="flex-1 h-full flex items-center border-r border-solid border-[#1c212633] max-md:border-r-0">
                    <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem]">
                        <div class="flex gap-2">
                            <?php if(!empty($info['schedule']['icon'])) : ?>
                            <img src="<?php echo $info['schedule']['icon']['url']; ?>" alt="<?php echo $info['schedule']['icon']['alt']; ?>" class="max-h-[1rem]">
                            <?php endif; ?>
                            <span class="text-[#1C2126] font-lato text-base font-medium text-start">
                                <?php echo $info['schedule']['text'];  ?>
                            </span>
                        </div>

                        <div class="flex gap-2">
                        <?php if(!empty($info['location']['icon'])) : ?>
                            <img src="<?php echo $info['location']['icon']['url']; ?>" alt="<?php echo $info['location']['icon']['alt']; ?>" class="max-h-[1rem]">
                            <?php endif; ?>
                            <span class="text-[#1C2126] font-lato text-base font-medium text-start">
                                <?php echo $info['location']['text']; ?>
                            </span>
                        </div>

                        <div class="flex gap-2">
                            <?php if(!empty($info['time']['icon'])) : ?>
                            <img src="<?php echo $info['time']['icon']['url']; ?>" alt="<?php echo $info['time']['icon']['alt']; ?>" class="max-h-[1rem]">
                            <?php endif; ?>
                            <span class="text-[#1C2126] font-lato text-base font-medium text-start">
                                <?php echo $info['time']['text']; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php if($content_button['is_enable']) : ?>
                <div class="flex-1 flex items-center justify-center">
                    <div class="px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:pt-[1.5625rem]">
                        <a href="<?php the_permalink(); ?>">
                        <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $content_button['text']; ?></span>
                            <img src="<?php echo $content_button['icon']['url']; ?>" alt="<?php echo $content_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                        </button>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </div>
</div>
<!-- Careers list -->
<?php get_footer(); ?>