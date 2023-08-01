<?php get_header(); ?>
<?php /* Template Name: Page About Us */ ?>

<!-- header -->
<?php 
    $about_title = get_field('about_title');
    $about_description = get_field('about_description');
    $about_image = get_field('about_image');
    $about_image_title = get_field('about_image_title');
?>
<div class="w-full bg-white h-full relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="flex gap-28 h-full max-md:flex-col max-md:min-h-screen">
        <div class="flex-1 relative" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="w-full h-full object-cover select-none max-md:h-screen" draggable="false">  
            
            <div class="flex w-full h-full max-md:flex-col max-md:gap-20 absolute top-0 left-0 items-center px-[11.25rem] bg-black/20 max-md:px-[2.1875rem] max-md:justify-center max-md:items-start" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2.5s">
                <span class="text-white z-0 text-[5rem] font-lato absolute max-sm:relative max-md:text-start">
                    <?php echo $about_image_title; ?>
                </span>

                <h2 class="text-white font-lato text-3xl hidden max-md:block text-start" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                    <?php echo $about_description; ?>
                </h2>
            </div>
        </div>

        <div class="flex flex-1 items-center justify-center">
            <div class="flex flex-col gap-6 max-w-[33.125rem] text-start items-start sticky top-[var(--header-menu-height)] max-md:max-w-none max-md:px-[2.1875rem]">
                <div class="flex flex-col gap-5">
                    <h2 class="font-caudex italic text-[1.375rem] text-[#14191D]/80 font-normal leading-7 max-md:hidden" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $about_title; ?>
                    </h2>

                    <span class="font-lato font-light text-lg leading-7 text-[#14191D]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $about_description; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->

<!-- history -->
<?php 
    $history_items = get_field('history_items');
?>
<div class="min-h-screen w-full relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 3.svg'?>" alt="" class="absolute bottom-[10%] left-0" id="view-anim" data-animation="animate-fadeInRight" data-duration="4s">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 2.svg'?>" alt="" class="absolute top-0 right-0" id="view-anim" data-animation="animate-fadeInRight" data-duration="4s">

    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="flex flex-col gap-[9.375rem] px-[11.25rem] py-[9.375rem] max-md:px-[2.1875rem] ">
        <?php if(!empty($history_items)) : ?>
        <?php foreach ($history_items as $key => $item) : $n = 15 * $key; ?>
        <div class="flex flex-col gap-7" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s" style="margin-left: <?php echo $n?>%;">
            <div class="flex flex-col gap-4">
                <h2 class="text-[#1C2126] font-caudex text-[3.75rem] italic font-normal text-start"><?php echo $item['title']; ?></h2>
                <span class="text-[#1C2126] font-caudex text-[2.5rem] italic font-normal text-start"><?php echo $item['year']; ?></span>
            </div>

            <span class="text-[#1C2126] font-lato text-lg font-light text-start max-w-[50rem]">
                <?php echo $item['description']; ?>
            </span>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- history end -->

<!-- elevating humanity -->
<?php 
    $elevating_background = get_field('elevating_background');
    $elevating_title = get_field('elevating_title');
    $elevating_description = get_field('elevating_description');
    $elevating_title_two = get_field('elevating_title_two');
    $elevating_desription_two = get_field('elevating_desription_two');
?>
<div class="flex min-h-screen w-full bg-fixed bg-cover bg-center overflow-hidden" id="paralax" style="background-image: url('<?php echo $elevating_background['url']; ?>')">
    <div class="flex flex-1 flex-col items-start gap-[9.375rem] px-[11.25rem] py-[11.25rem] max-md:px-[2.1875rem]">
        <div class="flex flex-col gap-8">
            <span class="text-white font-lato text-base font-medium text-start" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                <?php echo $elevating_title; ?>
            </span>
            <h2 class="text-[4rem] font-caudex font-medium text-white text-start italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                <?php echo $elevating_description; ?>
            </h2>  
        </div>

        <div class="flex flex-col gap-8 self-end">
            <span class="text-white font-lato text-base font-medium text-start" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                <?php echo $elevating_title_two; ?>
            </span>
            <h2 class="text-[2.5rem] font-caudex font-medium text-white text-start italic max-w-[47.5rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="3s">
                <?php echo $elevating_desription_two; ?>
            </h2>  
        </div>
    </div>
</div>
<!-- elevating humanity end -->

<!-- board -->
<?php 
    $board_items = get_field('board_items');
    $activeMenuId = 0;
?>
<div class="w-full overflow-hidden">
    <div class="grid grid-cols-3 grid-flow-row max-md:flex max-md:flex-col">
        
        <div class="flex flex-col">
            <div class="flex">
                <?php if(!empty($board_items)) : ?>
                <?php foreach ($board_items as $key => $item) : ?>
                <div class="flex-1 flex items-center justify-center px-[2.75rem] py-[1.375rem] bg-white" style="<?php if($activeMenuId == $key) { echo 'background: #000103;'; } ?>">
                    <span class="text-white font-lato text-sm font-medium uppercase" style="text-wrap: nowrap; <?php if($activeMenuId != $key) { echo 'color: #000103;'; } ?>"> 
                        <?php echo $item['button_text']; ?>
                    </span>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="flex-1 flex items-center justify-center h-full">
                <?php if(!empty($board_items)) : ?>
                <?php foreach ($board_items as $key => $item) : ?>
                <?php if($activeMenuId == $key) : ?>
                <div class="flex flex-col gap-5">
                    <h3 class="text-[#1C2126] font-lato text-2xl font-medium text-start" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $item['title']?>
                    </h3>

                    <span class="text-[#1C2126] font-lato text-base font-light text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2.5s">
                        <?php echo $item['description']?>
                    </span>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="py-[1.5rem]">
                
            </div>
        </div>
        
        <?php if(!empty($board_items)) : ?>
        <?php foreach ($board_items as $key => $item) : ?>
        <?php if($activeMenuId == $key) : ?>
        <?php foreach ($item['items'] as $user) : ?>
        <div class="flex flex-col">
            <div class="flex-1 max-h-[19.75rem]">
                <img src="<?php echo $user['image']['url']; ?>" alt="<?php echo $user['image']['alt']; ?>" class="w-full h-full object-cover select-none" draggable="false">
            </div>

            <div class="py-[1.5rem] px-[3.25rem]">
                <div class="flex flex-col gap-2 ite">
                    <h3 class="text-[#1C2126] font-lato text-2xl font-medium text-start">
                        <?php echo $user['name']; ?>
                    </h3>

                    <div class="flex gap-2">
                        <span class="border-r border-solid border-[#1c212633] pr-2">
                            <?php echo $user['post']; ?>
                        </span>
                        <span class="text-[#1C2126] font-lato text-sm font-light">
                            <?php echo $user['company']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- board end -->

<!-- geography -->
<?php 
    $geography_background = get_field('geography_background');
    $geography_title = get_field('geography_title');
    $geography_description = get_field('geography_description');
    $geography_contacts = get_field('geography_contacts');
    $geography_map = get_field('geography_map');
?>
<div class="w-full bg-black relative overflow-hidden">
    <img src="<?php echo $geography_background['url'];?>" alt="<?php echo $geography_background['alt'];?>" class="absolute w-full h-full top-0 left-0" id="view-anim" data-animation="animate-fadeInRight" data-duration="1s">
    
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>
    
    <div class="px-[11.25rem] py-[8.125rem] grid grid-cols-2 max-md:px-[2.1875rem] max-md:flex max-md:flex-col">
        <div class="flex flex-col gap-14 z-0">
            <div class="flex flex-col gap-6">
                <h2 class="text-white font-caudex text-[4rem] italic leading-[4rem] font-normal text-start" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                    <?php echo $geography_title;?>
                </h2>

                <div class="max-w-[26.25rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                    <span class="text-white text-lg font-light leading-9 text-start">
                        <?php echo $geography_description;?>
                    </span>
                </div>
            </div>

            <div class="flex flex-col items-start gap-9">
                <?php if(!empty($geography_contacts)) : ?>
                <span class="text-white font-lato text-lg font-light" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s"><?php echo $geography_contacts['title']; ?></span>
                
                <?php if(!empty($geography_contacts['items'])) : ?>
                <?php foreach ($geography_contacts['items'] as $item) : ?>
                <div class="flex flex-col gap-6" id="view-anim" data-animation="animate-fadeInLeft" data-duration="4s">
                    <div class="flex gap-6">
                        <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" class="select-none" draggable="false">  
                        <span class="text-white font-lato text-lg font-light max-w-[20.625rem] text-start">
                            <?php echo $item['text']; ?>
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        
        <?php if(!empty($geography_map)) : ?>
        <img src="<?php echo $geography_map['url']; ?>" alt="<?php echo $geography_map['alt']; ?>" class="absolute w-full h-[33.3125rem] top-[14%] left-[18%] select-none max-md:relative max-md:left-0" draggable="false" id="view-anim" data-animation="animate-fadeInRight" data-duration="4s">
        <?php endif; ?>
    </div>
</div>
<!-- geography end -->

<!-- media center -->
<?php 
    $media_center_title = get_field('media_center_title');
    $media_center_description = get_field('media_center_description');
    $media_center_button = get_field('media_center_button');
    $media_center_image = get_field('media_center_image');
    $media_center_image_title = get_field('media_center_image_title');
?>
<div class="w-full bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="flex py-[11.25rem] gap-14 h-full max-md:flex-col">
        <div class="flex-1 relative" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
            <!-- mobile -->
            <div class="w-full h-full top-0 left-0 items-center px-[11.25rem] hidden max-md:flex max-md:px-[2.1875rem] max-md:pb-16">
                <span class="text-[#14191D] z-0 text-[5rem] font-lato text-start"><?php echo $media_center_image_title; ?></span>
            </div>
            <!-- end mobile -->

            <img src="<?php echo $media_center_image['url']; ?>" alt="<?php echo $media_center_image['alt']; ?>" class="w-full h-[34.1875rem] object-cover select-none" draggable="false">  
            
            <div class="flex w-full h-full absolute top-0 left-0 items-center px-[11.25rem] bg-black/20 max-md:hidden">
                <span class="text-white z-0 text-[5rem] font-lato absolute">
                    <?php echo $media_center_image_title; ?>
                </span>
            </div>
        </div>

        <div class="flex flex-1 items-center justify-center">
            <div class="flex flex-col gap-6 max-w-[33.125rem] text-start items-start sticky top-[var(--header-menu-height)] max-md:max-w-none max-md:px-[2.1875rem]" id="view-anim" data-animation="animate-fadeInRight">
                <div class="flex flex-col gap-5">
                    <h2 class="font-caudex italic text-[1.375rem] text-[#14191D]/80 font-normal leading-7">
                        <?php echo $media_center_title; ?>
                    </h2>

                    <span class="font-lato font-light text-lg leading-7 text-[#14191D]">
                        <?php echo $media_center_description; ?>
                    </span>
                </div>

                <?php if($media_center_button['is_enable']) : ?>
                <?php if(!empty($media_center_button['url'])) : ?>
                <a href="<?php echo $media_center_button['url']['url']; ?>">
                <?php endif; ?>
                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                    <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $media_center_button['text']; ?></span>
                    <div class="group-hover:animate-bounce">
                        <img src="<?php echo $media_center_button['icon']['url']; ?>" alt="<?php echo $media_center_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                    </div>
                </button>
                <?php if(!empty($media_center_button['url'])) : ?>
                </a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- media center end -->

<!-- subscribe -->
<?php 
    $subscribe_background = get_field('subscribe_background');
    $subscribe_title = get_field('subscribe_title');
    $subscribe_description = get_field('subscribe_description');
    $subscribe_input_one_placeholder = get_field('subscribe_input_one_placeholder');
    $subscribe_input_two_placeholder = get_field('subscribe_input_two_placeholder');
    $subscribe_button = get_field('subscribe_button');
?>
<div class="min-h-screen w-full relative bg-black">
    <img src="<?php echo $subscribe_background['url']; ?>" alt="<?php echo $subscribe_background['alt']; ?>" class="absolute w-full h-full top-0 left-0 sele" id="view-anim" draggable="false" data-animation="animate-fadeInLeft" data-duration="1s">
    
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="flex h-screen items-center justify-center max-md:px-[2.1875rem]">
        <div class="flex flex-col gap-12 items-center">
            <div class="flex flex-col items-center gap-4 z-0">
                <h2 class="text-white font-caudex font-normal text-[4rem] leading-[4rem] italic">
                    <?php echo $subscribe_title; ?>
                </h2>
                <span class="text-white font-lato text-center text-lg font-light max-w-[30.625rem]">
                    <?php echo $subscribe_description; ?>
                </span>
            </div>

            <div class="flex flex-col gap-12 w-[25.3125rem] z-0">
                <div class="w-full">
                    <div class="flex flex-col gap-8">
                        <input type="text" placeholder="<?php echo $subscribe_input_one_placeholder; ?>" class="border-0 border-b border-solid border-white bg-transparent py-3 text-white outline-0">
                        <input type="text" placeholder="<?php echo $subscribe_input_two_placeholder; ?>" class="border-0 border-b border-solid border-white bg-transparent py-3 text-white outline-0">
                    </div>
                </div>

                <div class="flex-1 flex justify-center items-center z-0">
                    <?php if($subscribe_button['is_enable']) : ?>
                    <?php if(!empty($subscribe_button['url'])) : ?>
                    <a href="<?php echo $subscribe_button['url']['url']; ?>">
                    <?php endif; ?>
                    <button class="w-full relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300 text-center w-full"><?php echo $subscribe_button['text']; ?></span>
                        <div class="group-hover:animate-bounce">
                            <img src="<?php echo $subscribe_button['icon']['url']; ?>" alt="<?php echo $subscribe_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                        </div>
                    </button>
                    <?php if(!empty($subscribe_button['url'])) : ?>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- subscribe end -->
<?php get_footer(); ?>