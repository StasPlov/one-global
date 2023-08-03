<?php get_header(); ?>
<?php /* Template Name: Page One Global Innovation */ ?>

<!-- header -->
<?php 
    $header_button = get_field('header_button');
    $header_background = get_field('header_background');
    $header_logo = get_field('header_logo');
    $header_title = get_field('header_title');
?>
<div class="relative w-full h-screen overflow-hidden">
	

    <div class="px-[11.25rem] w-full h-full flex items-center justify-start max-md:px-[2.1875rem]">
        <?php if(!empty($header_background)) :?>
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

            <?php if(!empty($header_button)) : ?>
			<?php if($header_button['is_enable']) : ?>
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
				<?php if(!empty($media_center_button['url'])) : ?>
				</a>
				<?php endif; ?>
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
<div class="w-full min-h-screen bg-white relative">
	

    <div class="flex py-[11.25rem] gap-28 h-full max-md:flex-col-reverse">
        <!-- mobile -->
        <div class="hidden flex-col gap-7 max-md:px-[2.1875rem] max-md:flex">
            <?php if($about_description) :?>
            <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[33.875rem]">
                <?php echo $about_description; ?>
            </span>
            <?php endif; ?>
        </div>
        <!-- end mobile -->

        <div class="flex-1 relative max-h-screen max-w-[40.625rem] max-md:max-w-none">
            <?php if($about_image) :?>
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="h-full w-full object-cover max-h-[46.5625rem]">
            <?php endif; ?>
        </div>

        <div class="flex flex-1 items-center justify-center max-md:px-[2.1875rem]">
            <div class="flex flex-col items-start gap-28 sticky top-[var(--header-menu-height)]">
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
    </div>
</div>
<!-- about end -->

<!-- does go innovation -->
<?php 
    $what_does_title = get_field('what_does_title');
    $what_does_description_first = get_field('what_does_description_first');
    $what_does_description_two = get_field('what_does_description_two');
    $what_does_info = get_field('what_does_info');
?>
<div class="w-full min-h-screen bg-black relative">
    <div class="flex flex-col gap-[20.625rem] py-[11.25rem] max-md:gap-[6.25rem]">
        <div class="flex flex-col gap-[9.25rem] px-[11.25rem] max-md:px-[2.1875rem]">
            <h2 class="text-[5rem] text-white font-medium font-caudex rtl:font-droidSansArabic italic text-start leading-[5.625rem]"><?php echo $what_does_title; ?></h2>

            <div class="flex gap-[9.5rem] max-md:flex-col max-md:gap-7">
                <div class="flex-1 flex flex-col gap-7 text-white">
                    <?php echo $what_does_description_first; ?>
                </div>

                <div class="flex-1 flex flex-col gap-7 text-white">
                    <?php echo $what_does_description_two; ?>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-[3.625rem] px-[4.375rem] max-md:flex-col max-md:px-0">
            <img src="<?php echo $what_does_info['image']['url']; ?>" alt="<?php echo $what_does_info['image']['alt']; ?>" class="max-h-[38.375rem]">

            <div class="flex flex-col gap-20 max-md:px-[2.1875rem]">
                <h3 class="text-5xl text-white font-caudex rtl:font-droidSansArabic italic text-start max-w-[35.1875rem] leading-[3.5rem]"><?php echo $what_does_info['title']; ?></h3>
                
                <div class="flex flex-col gap-7 items-start max-md:flex-col-reverse max-md:gap-10">

					<?php if(!empty($what_does_info['button']) && $what_does_info['button']['is_enable'] && $what_does_info['button']['text']) : ?>
						<?php if(!empty($what_does_info['button']['url'])) : ?>
						<a href="<?php echo $what_does_info['button']['url']['url']; ?>">
						<?php endif; ?>
					<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0"  data-animation="animate-fadeInLeft" data-duration="3s">
						<span class="text-white text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">
							<?php echo $what_does_info['button']['text']; ?>
						</span>
						
						<?php if(!empty($what_does_info['button']['icon'])) : ?>
						<div class="group-hover:animate-bounce">
							<img src="<?php echo $what_does_info['button']['icon']['url']; ?>" alt="<?php echo $what_does_info['button']['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
						</div>
						<?php endif; ?>
					</button>
						<?php if(!empty($what_does_info['button']['url'])) : ?>
						</a>
						<?php endif; ?>
					<?php endif; ?>

                    <span class="font-lato rtl:font-droidSansArabic text-lg font-light text-white"><?php echo $what_does_info['description']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- does go innovation end -->

<!-- our framework -->
<?php 
    $venture_building_title = get_field('venture_building_title');
    $venture_building_image = get_field('venture_building_image');
?>
<div class="w-full min-h-screen bg-white">
    <div class="flex flex-col gap-[5rem] pt-[12.6875rem] pb-[9.375rem]">
        <div class="flex flex-col gap-[2.125rem] px-[11.25rem] max-md:px-[2.1875rem]">
            <h2 class="text-[5rem] text-[#14191D] font-medium font-lato rtl:font-droidSansArabic text-start leading-[5rem]"><?php echo $venture_building_title; ?></h2>
        </div>

        <div class="flex items-center justify-center max-md:px-[35px] px-[11.25rem]">
            <img src="<?php echo $venture_building_image['url']; ?>" alt="<?php echo $venture_building_image['alt']; ?>" class="object-contain">
        </div>
    </div>
</div>
<!-- our framework end -->

<?php get_footer(); ?>