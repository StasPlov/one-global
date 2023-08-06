<?php get_header(); ?>
<?php /* Template Name: Page One Global Hub */ ?>

<!-- header -->
<?php 
    $header_button = get_field('header_button');
    $header_background = get_field('header_background');
    $header_logo = get_field('header_logo');
    $header_title = get_field('header_title');
?>
<div class="relative w-full h-screen overflow-hidden">
    <div class="px-[11.25rem] w-full h-full flex items-center justify-start max-md:px-[2.1875rem]">
		<?php if(!empty($header_background)) : ?>
        <video class="absolute w-full h-full object-cover top-0 left-0" autoplay loop muted playsinline preload="auto">
            <source src="<?php echo $header_background['url']; ?>" type="video/mp4">
        </video>
        <?php endif; ?>

        <div class="bg-black/30 absolute w-full h-full top-0 left-0"></div>
        
        <div class="flex flex-col items-start gap-12">
            <?php if(!empty($header_logo)) :?>
            <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" class="h-40 z-0 object-contain">
            <?php endif; ?>
            
            <?php if(!empty($header_title)) :?>
            <h1 class="text-4xl text-white z-0 text-start tracking-wide leading-normal max-w-[37.5rem]"><?php echo $header_title; ?></h1>
            <?php endif; ?>

            <?php if(!empty($header_button) && $header_button['is_enable'] && !empty($header_button['text'])) : ?>
			<?php if(!empty($header_button['url'])) : ?>
			<a href="<?php echo $header_button['url']['url']; ?>">
			<?php endif; ?>
            <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0"  data-animation="animate-fadeInLeft" data-duration="3s">
                <span class="text-white text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $header_button['text']; ?></span>
                <?php if(!empty($header_button['icon'])) : ?>
				<div class="group-hover:animate-bounce">
					<img src="<?php echo $header_button['icon']['url']; ?>" alt="<?php echo $header_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                </div>
				<?php endif; ?>
            </button>
				<?php if(!empty($header_button['url'])) : ?>
				</a>
				<?php endif; ?>
			<?php endif; ?>
        </div>
    </div>
</div>
<!-- header end -->

<!-- about -->
<?php 
    $about_title = get_field('about_title');
    $about_description = get_field('about_description');
    $about_image = get_field('about_image');
?>
<div class="w-full min-h-screen bg-white py-[10.625rem] relative">
    <div class="flex gap-28 justify-start items-center h-full max-md:flex-col">
        <div class="flex flex-1 w-[57%] z-0 pl-[11.25rem] max-md:w-full max-md:px-[2.1875rem] rtl:pr-[11.25rem] rtl:pl-0">
            <div class="flex flex-col items-start gap-28">
                <div class="flex flex-col gap-14">
                    <?php if($about_title) :?>
                    <h2 class="text-[5rem] font-medium font-caudex rtl:font-droidSansArabic italic text-start leading-none"><?php echo $about_title; ?></h2>
                    <?php endif; ?>

                    <div class="flex flex-col gap-7 max-md:hidden">
                        <?php if($about_description) :?>
                        <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[33.875rem]">
                            <?php echo $about_description; ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 relative max-h-screen max-w-[40.625rem] max-md:max-w-none">
            <?php if($about_image) :?>
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="h-full w-full object-cover max-h-[46.5625rem]">
            <?php endif; ?>
        </div>

        <!-- mobile -->
        <div class="hidden flex-col gap-7 max-md:flex px-[2.1875rem]">
            <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[33.875rem]">
                <?php echo $about_description; ?>
            </span>
        </div>
        <!-- end mobile -->
    </div>
</div>
<!-- about end -->

<!-- does go hub  -->
<?php 
    $what_does_items = get_field('what_does_items');
    $what_does_title = get_field('what_does_title');
    $what_does_description_first = get_field('what_does_description_first');
    $what_does_description_two = get_field('what_does_description_two');
?>
<div class="w-full min-h-screen bg-black relative">
    <img src="<?php echo get_template_directory_uri().'/assets/Icons/Ellipse_orange_2.svg'; ?>" alt="" class="absolute top-[19%] right-0 select-none" draggable="false">
    <img src="<?php echo get_template_directory_uri().'/assets/Icons/Ellipse_orange_3.svg'; ?>" alt="" class="absolute top-[45%] left-0 select-none" draggable="false">
    
	
	
    <div class="flex flex-col gap-[18.75rem] py-[12.5rem] pb-[24.375rem] z-0">
        <div class="flex flex-col gap-[12.5rem] px-[11.25rem] max-md:px-[35px] max-md:gap-[6.25rem]">
            <div class="gap-14 max-md:flex-col max-md:gap-[6.25rem] grid grid-cols-3 grid-flow-row max-md:grid-cols-1 max-lg:grid-cols-2 z-10">
                <?php if(!empty($what_does_items)) : ?>
                <?php foreach ($what_does_items as $item) : ?>
                <div class="flex flex-col gap-[1.375rem] flex-1">
                    <h3 class="font-caudex rtl:font-droidSansArabic text-5xl italic leading-[64x] text-white text-start"><?php echo $item['title']; ?></h3>

                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-white text-start max-w-[19.125rem]">
                        <?php echo $item['description']; ?>
                    </span>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="flex flex-col gap-[7.3125rem] px-[11.25rem] z-0 max-md:px-[2.1875rem]">
            <h2 class="text-[5rem] text-white font-medium font-caudex rtl:font-droidSansArabic italic text-start leading-[5.625rem]"><?php echo $what_does_title; ?></h2>

            <div class="flex gap-[9.5rem] max-md:flex-col max-md:gap-7">
                <div class="flex-1 flex flex-col gap-7">
                    <?php echo $what_does_description_first ?>
                </div>

                <div class="flex-1 flex flex-col gap-7">
                    <?php echo $what_does_description_two ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- does go hub end -->

<!-- business incubation -->
<?php 
    $business_incubation_title = get_field('business_incubation_title');
    $business_incubation_items = get_field('business_incubation_items');
    $business_incubation_map = get_field('business_incubation_map');
    $business_incubation_map_mobile = get_field('business_incubation_map_mobile');
    $business_accelerator_title = get_field('business_accelerator_title');
    $business_accelerator_items = get_field('business_accelerator_items');
    $business_accelerator_map = get_field('business_accelerator_map');
    $business_accelerator_map_mobile = get_field('business_accelerator_map_mobile');
?>
<div class="w-full min-h-screen bg-white pt-[20rem] pb-[15.125rem] relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri().'/assets/Icons/Ellipse_orange_5.svg'; ?>" alt="" class="absolute top-[1%] right-0 select-none" draggable="false">
    <img src="<?php echo get_template_directory_uri().'/assets/Icons/Ellipse_orange_6.svg'; ?>" alt="" class="absolute top-[46%] left-[6%] select-none" draggable="false">

	

    <div class="flex flex-col gap-[15.3125rem]">
        <div class="flex flex-col gap-[10.625rem] z-0">
            <div class="flex flex-col gap-[8.125rem] px-[11.25rem] max-md:px-[2.1875rem]">
                <div class="flex flex-col">
                    <h2 class="text-[5rem] text-[#14191D] font-medium font-lato rtl:font-droidSansArabic text-start leading-[5.625rem]"><?php echo $business_incubation_title; ?></h2>
                </div>

                <div class="flex gap-[10.9375rem] max-md:flex-col">
                    <?php if(!empty($business_incubation_items)) : ?>
                    <?php foreach ($business_incubation_items as $item) : ?>
                    <div class="flex gap-11 shadow-[0.625rem_0.625rem_1.25rem_0rem_#ff850033] py-[2.625rem] px-[2.375rem] rounded-lg bg-white max-md:flex-col">
                        <img src="<?php echo $item['icon']['url']; ?>" alt="" class="max-w-[3.125rem]">

                        <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-6 text-[#14191D] text-start max-w-[17.625rem]">
                            <?php echo $item['description']; ?>
                        </span>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <img src="<?php echo $business_incubation_map['url']; ?>" alt="" class="px-[11.25rem] max-md:hidden">
            <img src="<?php echo $business_incubation_map_mobile['url']; ?>" alt="" class="px-[1.5625rem] hidden max-md:block">
        </div>

        <div class="flex flex-col gap-[10.625rem] z-0">
            <div class="flex flex-col gap-[6.5625rem] px-[11.25rem] items-start">
                <h2 class="text-[5rem] text-[#14191D] font-medium font-lato rtl:font-droidSansArabic text-start leading-[5.625rem]"><?php echo $business_accelerator_title; ?></h2>
                
                <?php if(!empty($business_accelerator_items)) : ?>
                <?php foreach ($business_accelerator_items as $item) : ?>
                <div class="flex gap-11 shadow-[0.625rem_0.625rem_1.25rem_0rem_#ff850033] py-[2.625rem] px-[2.375rem] rounded-lg bg-white max-md:flex-col">
                    <img src="<?php echo $item['icon']['url']; ?>" alt="" class="max-w-[3.125rem]">

                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-6 text-[#14191D] text-start max-w-[17.625rem]">
                        <?php echo $item['description']; ?>
                    </span>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <img src="<?php echo $business_accelerator_map['url']; ?>" alt="" class=" px-[11.25rem] max-md:hidden">
            <img src="<?php echo $business_accelerator_map_mobile['url']; ?>" alt="" class="px-[1.5625rem] hidden max-md:block">
        </div>
    </div>
</div>
<!-- business incubation end -->

<!-- success stories -->
<?php 
    $success_stories_title = get_field('success_stories_title');
    $success_stories_description = get_field('success_stories_description');
    $success_stories_items = get_field('success_stories_items');
?>
<div class="w-full min-h-screen bg-black relative">
    <img src="<?php echo get_template_directory_uri().'/assets/Icons/Ellipse 4.svg'?>" alt="" class="absolute top-0 left-0 select-none" draggable="false">
    
	

    <div class="flex flex-col gap-[8.125rem] py-[10.625rem] z-0 ">
        <div class="flex flex-col gap-[4.625rem] px-[11.25rem] z-0 max-md:px-[2.1875rem]">
            <h2 class="text-[5rem] text-white font-medium font-lato rtl:font-droidSansArabic text-start leading-[5.625rem]"><?php echo $success_stories_title; ?></h2>

            <div class="flex gap-[9.5rem]">
                <div class="flex-1 flex flex-col gap-7">
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-white text-start max-w-[35.3125rem]">
                        <?php echo $success_stories_description; ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-12 px-[11.25rem] z-0 max-md:px-[2.1875rem] max-md:flex max-md:flex-col">
            <?php if(!empty($success_stories_items)) : ?>
            <?php foreach ($success_stories_items as $item) : ?>
            <div class="flex flex-col gap-8 transition-all duration-500 hover:scale-105">
                <div class="bg-black/20 flex drop-shadow-[0rem_0rem_6.25rem_#ff85004d] overflow-hidden rounded-lg">
                    <img src="<?php echo $item['image']['url']; ?>" alt="image" class="flex-1 object-contain">
                </div>

                <div class="flex flex-col gap-10 items-start">
                    <div class="flex flex-col gap-5">
                        <h3 class="font-lato rtl:font-droidSansArabic text-white text-2xl font-medium leading-[1.875rem] text-start max-w-[11.75rem]"><?php echo $item['title']; ?></h3>

                        <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-white text-start max-w-[19.375rem]">
                            <?php echo $item['description']; ?>
                        </span>
                    </div>
                    
                    <?php if(!empty($item['button']) && $item['button']['is_enable'] && !empty($item['button']['text'])) : ?>
                    <?php if(!empty($item['button']['url'])) : ?>
                    <a href="<?php echo $item['button']['url']; ?>" class="cursor-default">
                    <?php endif; ?>
					<button class="flex items-center gap-[0.625rem] border-b border-solid border-[#c4c4c44d] max-md:border-t px-6 py-5 w-full transition hover:bg-white/10 cursor-pointer">
						<?php if(!empty($item['button']['icon'])) : ?>
						<img src="<?php echo $item['button']['icon']['url']; ?>" alt="<?php echo $item['button']['icon']['alt']; ?>" class="w-5">
						<?php endif; ?>
						<span class="text-sm text-white/50 font-lato rtl:font-droidSansArabic font-medium uppercase"><?php echo $item['button']['text']; ?></span>
					</button>
                    <?php if(!empty($item['button']['url'])) : ?>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- success stories end -->

<!-- ready -->
<?php 
    $ready_title = get_field('ready_title');
    $ready_button = get_field('ready_button');
    $ready_description = get_field('ready_description');
    $ready_image = get_field('ready_image');
?>
<div class="w-full min-h-screen bg-white py-[10.625rem] relative">
	

    <div class="flex gap-28 justify-start items-center h-full max-md:flex-col-reverse">
        <div class="flex flex-col gap-[4.1875rem] flex-1 w-[57%] z-0 pl-[11.25rem] items-start max-md:px-[35px] max-md:w-full rtl:pr-[11.25rem] rtl:pl-0">
            <h2 class="text-5xl font-normal text-[#1C2126] font-caudex rtl:font-droidSansArabic italic text-start leading-[3.5rem] max-w-[34.6875rem]"><?php echo $ready_title; ?></h2>

            <div class="flex flex-col gap-7 items-start max-md:flex-col-reverse">

			
                <?php if($ready_button['is_enable']) : ?>
                <a href="<?php echo $ready_button['url']['url'] ?? ''; ?>">
                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#5850E9] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" >
                    <span class="text-[#1c2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $ready_button['text']; ?></span>
                    <div class="group-hover:animate-bounce">
                        <img src="<?php echo $ready_button['icon']['url']; ?>" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                    </div>
                </button>
                </a>
                <?php endif; ?>

                <span class="text-start font-lato rtl:font-droidSansArabic text-lg text-[#1C2126] font-normal leading-7">
                    <?php echo $ready_description; ?>
                </span>
            </div>
        </div>

        <div class="flex-1 z-0 pr-[5.375rem] max-md:p-0">
            <img src="<?php echo $ready_image['url']; ?>" alt="<?php echo $ready_image['alt']; ?>" class="h-full w-full object-cover max-h-[46.5625rem]">
        </div>
    </div>
</div>
<!-- ready end -->


<?php get_footer(); ?>