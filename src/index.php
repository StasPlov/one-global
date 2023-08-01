<?php get_header(); ?>
<?php /* Template Name: Page Home */ ?>

<!-- header -->
<?php
	$header_button = get_field('header_button', 'home-page');
	$header_background = get_field('header_background', 'home-page');
?>
<div class="relative w-full h-screen overflow-hidden" id="scroll-trigger2">
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="px-[11.25rem] w-full h-full flex items-center justify-start max-md:px-[2.1875rem]">
		<?php if(!empty($header_background['video'])) :?>
        <video class="absolute w-full h-full object-cover top-0 left-0" autoplay loop muted poster="<?php echo $header_background['video']['icon']; ?>">
            <source src="<?php echo $header_background['video']['url']; ?>" type="video/mp4">
        </video>
        <?php endif; ?>

        <div class="bg-black/30 absolute w-full h-full top-0 left-0"></div>
        
        <div class="flex flex-col items-start gap-12">

            <?php $headerLogoData = get_field('header_logo', 'home-page'); ?>
            <?php if($headerLogoData['isenable'] && !empty($headerLogoData['Image'])) : ?>
            <img src="<?php echo $headerLogoData['Image']['url']; ?>" alt="<?php echo $headerLogoData['Image']['alt']; ?>" class="max-h-40 h-full z-0" id="view-anim" data-animation="animate-fadeInTop" data-duration="3s">
            <?php endif ?>
            
            <?php $headerTitleData = get_field('header_title', 'home-page'); ?>
            <?php if($headerTitleData['isenable']) : ?>
            <h1 class="text-4xl text-white z-0 text-start tracking-wide leading-normal max-w-[37.5rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s"><?php echo $headerTitleData['text']; ?></h1>
            <?php endif ?>
			
			<?php if(!empty($header_button)) : ?>
			<?php if($header_button['is_enable']) : ?>
			<?php if(!empty($header_button['url'])) : ?>
			<a href="<?php echo $header_button['url']['url']; ?>">
			<?php endif; ?>
            <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                <span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $header_button['text']; ?></span>
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

        <div class="text-white max-md:hidden">
            <?php $headerAnimTextData = get_field('header_animation_text', 'home-page'); ?>
            <?php if($headerAnimTextData['isenable']) : ?>
            <div class="absolute max-w-min text-start transition-all" id="scroll-anim2" style="<? echo ((pll_current_language() == 'ar') ? 'left: 20%;' : 'right: 20%;' ); ?> top: 29%;">
                <span class="italic text-5xl font-caudex"><?php echo $headerAnimTextData['text']; ?></span> 
            </div>
            <?php endif ?>
        </div>
    </div>
</div>
<!-- header end -->

<!-- wee inovate -->
<div class="relative w-full h-screen overflow-hidden relative" id="scroll-trigger">
    <img src="<?php echo get_template_directory_uri().'/assets/Images/Ellipse2.svg'; ?>" alt="" class="absolute w-full h-screen">
    
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="absolute max-w-min text-start transition-all" id="scroll-anim" style="top: 45%; left: 45%;">
        <?php $headerWeInnovatetData = get_field('we_innovate_animation_text', 'home-page'); ?>
        <?php if($headerWeInnovatetData['isenable']) : ?>
        <span class="italic text-5xl font-caudex"><?php echo $headerWeInnovatetData['text']; ?></span>
        <?php endif ?>
    </div>
</div>
<!-- wee inovate end -->

<!-- about us -->
<?php
	$about_us_button = get_field('about_us_button', 'home-page');
?>
<div class="w-full bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex py-[11.25rem] gap-28 h-full max-md:flex-col">
        <div class="flex-1 relative" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
            <?php $headerAboutBgData = get_field('about_us_background', 'home-page'); ?>
            <?php if(!empty($headerAboutBgData['image'])) : ?>
            <img src="<?php echo $headerAboutBgData['image']['url']; ?>" alt="<?php echo $headerAboutBgData['image']['alt']; ?>" class="w-full h-full object-cover select-none" draggable="false">  
            <?php endif ?>
            

            <div class="flex w-full h-full absolute top-0 left-0 items-center px-[11.25rem] bg-black/20">
                <span class="text-white z-0 text-[5rem] font-lato absolute max-md:left-7 max-md:max-w-[40px]">
                    <?php if(!empty($headerAboutBgData['text'])) : ?>
                    <?php echo $headerAboutBgData['text']; ?>
                    <?php endif ?>
                </span>
            </div>
        </div>

        <div class="flex flex-1 items-center justify-center">
            <div class="flex flex-col gap-6 max-w-[33.125rem] max-md:px-[2.1875rem] max-md:gap-[4.375rem] text-start items-start sticky top-[var(--header-menu-height)]" id="view-anim" data-animation="animate-fadeInRight">
                <div class="flex flex-col gap-5">
                    <?php $headerAboutInfoData = get_field('about_us_info', 'home-page'); ?>
                    <h2 class="font-caudex italic text-[1.375rem] text-[#14191D]/80 font-normal leading-7"><?php echo $headerAboutInfoData['title']; ?></h2>

                    <span class="font-lato font-light text-lg leading-7 text-[#14191D]">
                        <?php echo $headerAboutInfoData['description']; ?>
                    </span>
                </div>
				
				<?php if(!empty($about_us_button)) : ?>
				<?php if($about_us_button['is_enable']) : ?>
					<?php if(!empty($about_us_button['url'])) : ?>
					<a href="<?php echo $about_us_button['url']['url']; ?>">
					<?php endif; ?>
                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
					<span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $about_us_button['text']; ?></span>
					
					<?php if(!empty($about_us_button['icon'])) : ?>
					<div class="group-hover:animate-bounce">
						<img src="<?php echo $about_us_button['icon']['url']; ?>" alt="<?php echo $about_us_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
					</div>
					<?php endif; ?>
				</button>
					<?php if(!empty($about_us_button['url'])) : ?>
					</a>
					<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- about us end -->

<!-- our promise -->
<?php 
	$our_promise_text_one = get_field('our_promise_text_one', 'home-page');
	$our_promise_text_two = get_field('our_promise_text_two', 'home-page');
 	$our_promise_title = get_field('our_promise_title', 'home-page');
?>
<div class="flex min-h-screen items-center w-full relative">
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex flex-col px-[11.25rem] max-md:px-[2.1875rem] max-md:pb-14 w-full h-full justify-center gap-[6.25rem]">
        <h2 class="font-lato font-medium text-[5rem] text-start max-w-[29.375rem] w-full" id="view-anim" data-animation="animate-fadeInTop" data-duration="1.5s">
			<?php echo $our_promise_title; ?>
		</h2>

        <div class="flex max-md:flex-col justify-between gap-[8.3125rem] max-md:gap-14">
            <span class="flex flex-col gap-6 max-w-[29.375rem] font-lato font-light text-lg leading-7 text-[#1C2126] text-start last:mt-9 max-md:text-lg" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                <?php echo $our_promise_text_one; ?>
            </span>

            <span class="flex flex-col gap-6 max-w-[29.375rem] font-lato font-light text-lg leading-7 text-[#1C2126] text-start last:mt-9 max-md:text-lg" id="view-anim" data-animation="animate-fadeInRight" data-duration="3s">
                <?php echo $our_promise_text_two; ?>
            </span>
        </div>
    </div>
</div>
<!-- our promise end -->

<!-- digital transform -->
<?php 
	$digital_title = get_field('digital_title', 'home-page'); 
	$digital_info_block = get_field('digital_info_block', 'home-page'); 
?> 
<div class="w-full min-h-screen relative">
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex flex-col gap-[8.75rem] h-full items-center px-[11.25rem] max-md:px-[2.1875rem]">
       
        <h2 class="font-caudex text-5xl leading-[3.5rem] italic max-w-[47.9375rem] max-md:max-w-none text-center" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
			<?php echo $digital_title; ?>
		</h2>

        <div class="flex gap-11 items-start max-md:flex-col">
            <?php if(!empty($digital_info_block)) : ?>
            <?php foreach ($digital_info_block as $item) : ?>
            <div class="px-6 py-10 shadow-[0.625rem_0.625rem_1.25rem_0rem_#008AEE33] rounded-lg flex flex-col gap-10 max-w-[20.75rem] min-h-[26.5rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                <?php if(!empty($item['icon'])) : ?>
                <img src="<?php echo $item['icon']['url']; ?>" alt="" class="max-w-[3.125rem]">
                <?php endif ?>
                
                <div class="flex flex-col gap-4">
                    <?php if(!empty($item['title'])) : ?>
                    <h3 class="font-caudex italic text-5xl text-start"><?php echo $item['title']; ?></h3>
                    <?php endif ?>

                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start">
                        <?php if(!empty($item['description'])) : ?>
                        <?php echo $item['description']; ?>
                        <?php endif ?>
                    </span>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="flex flex-col self-start h-full py-[15.3125rem]">
            <?php $headerOurSubTitleData = get_field('our_subsidiaries_title', 'home-page'); ?>
            <h2 class="font-lato font-medium text-[5rem] max-md:text-[3.75rem] text-start w-full" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s"><?php echo $headerOurSubTitleData; ?></h2>
        </div>
    </div>
</div>
<!-- digital transform end -->

<!-- og innovation -->
<?php $headerOgInnovationData = get_field('og_innovation', 'home-page'); ?>
<div class="w-full h-screen bg-black pl-[11.25rem] py-[8.125rem] relative overflow-hidden max-md:px-0 max-md:pt-0">
    <img src="<?php echo $headerOgInnovationData['background_image']['url']; ?>" alt="<?php echo $headerOgInnovationData['background_image']['alt']; ?>" class="absolute w-full h-full top-0 left-0" id="view-anim" data-animation="animate-fadeInRight" data-duration="3s">
	
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex gap-28 justify-start items-center h-full max-md:flex-col-reverse">
        <div class="flex flex-1 z-0 max-md:px-[2.1875rem]">
            <div class="flex flex-col items-start gap-28">
                <div class="flex flex-col gap-8">
                    <img src="<?php echo $headerOgInnovationData['logo']['url']; ?>" alt="<?php echo $headerOgInnovationData['logo']['alt']; ?>" class="h-40 object-contain" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">

                    <span class="font-lato font-light text-lg leading-7 text-white text-start max-w-[27.5rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $headerOgInnovationData['description']; ?>
                    </span>
                </div>

                <?php if(!empty($headerOgInnovationData['button'])) : ?>
				<?php if($headerOgInnovationData['button']['is_enable']) : ?>
				<?php if(!empty($headerOgInnovationData['button']['url'])) : ?>
				<a href="<?php echo $headerOgInnovationData['button']['url']['url']; ?>">
				<?php endif; ?>
				<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
					<span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $headerOgInnovationData['button']['text']; ?></span>
					<?php if(!empty($headerOgInnovationData['button']['icon'])) : ?>
					<div class="group-hover:animate-bounce">
						<img src="<?php echo $headerOgInnovationData['button']['icon']['url']; ?>" alt="<?php echo $headerOgInnovationData['button']['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
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

        <div class="flex-1 h-full z-0" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
            <img src="<?php echo $headerOgInnovationData['image']['url']; ?>" alt="<?php echo $headerOgInnovationData['image']['alt']; ?>" class="h-full w-full object-cover">
        </div>
    </div>
</div>
<!-- og innovation end -->

<!-- og hub -->
<?php $headerOgHubData = get_field('og_hub', 'home-page'); ?>
<div class="w-full min-h-screen bg-black relative overflow-hidden">
    <img src="<?php echo $headerOgHubData['background_image']['url']; ?>" alt="<?php echo $headerOgHubData['background_image']['alt']; ?>" class="absolute w-full h-full top-0 left-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
	
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>
	
    <div class="flex flex-col items-center h-full py-[6.375rem] pb-[9.375rem] gap-28 max-md:flex-col-reverse">
        <div class="flex flex-col items-start gap-16 ml-80 z-0 max-md:m-0 max-md:px-[35px]">
            <img src="<?php echo $headerOgHubData['logo']['url']; ?>" alt="<?php echo $headerOgHubData['logo']['alt']; ?>" class="h-48 z-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2.5s">

            <div class="flex items-center gap-16 max-md:flex-col max-md:items-start">
                <span class="font-lato font-light text-lg leading-7 text-white text-start max-w-[32.1875rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                    <?php echo $headerOgHubData['description']; ?>
                </span>

                <?php if(!empty($headerOgHubData['button'])) : ?>
				<?php if($headerOgHubData['button']['is_enable']) : ?>
				<?php if(!empty($headerOgHubData['button']['url'])) : ?>
				<a href="<?php echo $headerOgHubData['button']['url']['url']; ?>">
				<?php endif; ?>
				<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
					<span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $headerOgHubData['button']['text']; ?></span>
					<?php if(!empty($headerOgHubData['button']['icon'])) : ?>
					<div class="group-hover:animate-bounce">
						<img src="<?php echo $headerOgHubData['button']['icon']['url']; ?>" alt="<?php echo $headerOgHubData['button']['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
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

        <div class="max-h-[26.125rem] max-w-[87%] h-full w-full self-end z-0 max-md:max-w-none max-md:max-h-none" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
            <img src="<?php echo $headerOgHubData['image']['url']; ?>" alt="<?php echo $headerOgHubData['image']['alt']; ?>" class="h-full max-h-[inherit] max-md:h-[34.125rem] w-full object-cover">
        </div>
    </div>
</div>
<!-- og hub end -->

<!-- og capital -->
<?php 
	$headerOgCapitalData = get_field('og_capital', 'home-page'); 
?>
<div class="w-full h-screen bg-black pr-[11.25rem] py-[6.25rem] pt-[10.625rem] relative overflow-hidden max-md:pt-0 max-md:px-0">
    <img src="<?php echo $headerOgCapitalData['background_image']['url']; ?>" alt="<?php echo $headerOgCapitalData['background_image']['alt']; ?>" class="absolute w-full h-full top-0 left-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">

	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex flex-row-reverse gap-28 justify-start items-center h-full max-md:flex-col-reverse">
        <div class="flex flex-1 justify-end z-0 max-md:px-[35px]">
            <div class="flex flex-col items-start gap-28">
                <div class="flex flex-col gap-8">
                    <img src="<?php echo $headerOgCapitalData['logo']['url']; ?>" alt="<?php echo $headerOgCapitalData['logo']['alt']; ?>" class="h-40 object-contain" id="view-anim" data-animation="animate-fadeInRight" data-duration="1s">

                    <span class="font-lato font-light text-lg leading-7 text-white text-start max-w-[27.5rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $headerOgCapitalData['description']; ?>
                    </span>
                </div>

                <?php if(!empty($headerOgCapitalData['button'])) : ?>
				<?php if($headerOgCapitalData['button']['is_enable']) : ?>
				<?php if(!empty($headerOgCapitalData['button']['url'])) : ?>
				<a href="<?php echo $headerOgCapitalData['button']['url']['url']; ?>">
				<?php endif; ?>
				<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
					<span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $headerOgCapitalData['button']['text']; ?></span>
					<?php if(!empty($headerOgCapitalData['button']['icon'])) : ?>
					<div class="group-hover:animate-bounce">
						<img src="<?php echo $headerOgCapitalData['button']['icon']['url']; ?>" alt="<?php echo $headerOgCapitalData['button']['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
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

        <div class="flex-1 h-full z-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2.5s">
            <img src="<?php echo $headerOgCapitalData['image']['url']; ?>" alt="<?php echo $headerOgCapitalData['image']['alt']; ?>" class="h-full w-full object-cover" >
        </div>
    </div>
</div>
<!-- og capital end -->

<!-- our services -->
<!-- доделать этот блок -->
<?php $headerOurServicesTitleData = get_field('our_service_title', 'home-page'); ?>

<?php $headerOurServicesFirstData = get_field('our_service_first', 'home-page'); ?>
<?php $headerOurServicesTwoData = get_field('our_service_two', 'home-page'); ?>
<?php $headerOurServicesThreeData = get_field('our_service_three', 'home-page'); ?>
<?php $headerOurServicesFourData = get_field('our_service_four', 'home-page'); ?>

<div class="w-full overflow-hidden relative">
    <div class="flex flex-col justify-center px-[11.25rem] pt-[15.625rem] pb-[17.5rem] max-md:px-[2.1875rem]">
        <?php if(!empty($headerOurServicesTitleData)) : ?>
        <h2 class="font-lato font-medium text-[5rem] text-start w-full" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s"><?php echo $headerOurServicesTitleData; ?></h2>
        <?php endif ?>
    </div>
	
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div>
        <div class="grid grid-cols-3 grid-rows-4 gap-0 max-md:hidden">
            <div class="flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $headerOurServicesFirstData['num']; ?>           
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $headerOurServicesFirstData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $headerOurServicesFirstData['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-span-2 max-h-[53.75rem]">
                <?php if(!empty($headerOurServicesFirstData['image'])) : ?>
                <img src="<?php echo $headerOurServicesFirstData['image']['url']; ?>" alt="<?php echo $headerOurServicesFirstData['image']['alt']; ?>" class="h-full w-full object-cover">
                <?php endif ?>
            </div>

            <div class="max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                <?php if(!empty($headerOurServicesFirstData['image_two'])) : ?>
                <img src="<?php echo $headerOurServicesFirstData['image_two']['url']; ?>" alt="<?php echo $headerOurServicesFirstData['image_two']['alt']; ?>" class="h-full w-full object-cover">
                <?php endif ?>
            </div>

            <div class="max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3.5s">
                <?php if(!empty($headerOurServicesTwoData['image'])) : ?>
                <img src="<?php echo $headerOurServicesTwoData['image']['url']; ?>" alt="<?php echo $headerOurServicesTwoData['image']['alt']; ?>" class="h-full w-full object-cover">
                <?php endif ?>
            </div>

            <div class="col-start-3 flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $headerOurServicesTwoData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $headerOurServicesTwoData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $headerOurServicesTwoData['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-start-3 flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $headerOurServicesThreeData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $headerOurServicesThreeData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $headerOurServicesThreeData['description']; ?>
                    </span>
                </div>
            </div>

            <div class="col-span-2 row-start-3 max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="3s">
                <?php if(!empty($headerOurServicesThreeData['image'])) : ?>
                <img src="<?php echo $headerOurServicesThreeData['image']['url']; ?>" alt="<?php echo $headerOurServicesThreeData['image']['alt']; ?>" class="h-full w-full object-cover">
                <?php endif ?>
            </div>

            <div class="col-span-2 row-start-4 max-h-[26.875rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                <?php if(!empty($headerOurServicesFourData['image'])) : ?>
                <img src="<?php echo $headerOurServicesFourData['image']['url']; ?>" alt="<?php echo $headerOurServicesFourData['image']['alt']; ?>" class="h-full w-full object-cover">
                <?php endif ?>
            </div>

            <div class="col-start-3 row-start-4 flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $headerOurServicesFourData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInRight" data-duration="1.5s">
                        <?php echo $headerOurServicesFourData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $headerOurServicesFourData['description']; ?>
                    </span>
                </div>
            </div>
        </div>
        <!-- mobile -->
        <div class="hidden flex-col max-md:flex">
            <div class="flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <?php if(!empty($headerOurServicesFirstData['image'])) : ?>
                <img src="<?php echo $headerOurServicesFirstData['image']['url']; ?>" alt="<?php echo $headerOurServicesFirstData['image']['alt']; ?>" class="h-[34.1875rem] h-full w-full object-cover">
                <?php endif ?>

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $headerOurServicesFirstData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $headerOurServicesFirstData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $headerOurServicesFirstData['description']; ?>
                    </span>
                </div>
            </div>

            <div class="col-start-3 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <?php if(!empty($headerOurServicesTwoData['image'])) : ?>
                <img src="<?php echo $headerOurServicesTwoData['image']['url']; ?>" alt="<?php echo $headerOurServicesTwoData['image']['alt']; ?>" class="h-[34.1875rem] w-full object-cover">
                <?php endif ?>

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $headerOurServicesTwoData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $headerOurServicesTwoData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $headerOurServicesTwoData['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-start-3 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <?php if(!empty($headerOurServicesThreeData['image'])) : ?>
                <img src="<?php echo $headerOurServicesThreeData['image']['url']; ?>" alt="<?php echo $headerOurServicesThreeData['image']['alt']; ?>" class="h-[34.1875rem] w-full object-cover">
                <?php endif ?>

                <div class="flex flex-col gap-6 items-start ax-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                        <?php echo $headerOurServicesThreeData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s">
                        <?php echo $headerOurServicesThreeData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="1s">
                        <?php echo $headerOurServicesThreeData['description']; ?>
                    </span>
                </div>
            </div>

            <div class="col-start-3 row-start-4 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col max-md:max-h-full">
                <?php if(!empty($headerOurServicesFourData['image'])) : ?>
                <img src="<?php echo $headerOurServicesFourData['image']['url']; ?>" alt="<?php echo $headerOurServicesFourData['image']['alt']; ?>" class="h-[34.1875rem] w-full object-cover">
                <?php endif ?>

                <div class="flex flex-col gap-6 items-start max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex text-[6.25rem] italic" id="view-anim" data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $headerOurServicesFourData['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato" id="view-anim" data-animation="animate-fadeInRight" data-duration="1.5s">
                        <?php echo $headerOurServicesFourData['title']; ?>
                    </span>
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]" id="view-anim" data-animation="animate-fadeInRight" data-duration="2s">
                        <?php echo $headerOurServicesFourData['description']; ?>
                    </span>
                </div>
            </div>
        </div>
        <!-- mobile end -->
    </div>
</div>
<!-- our services end -->

<!-- invested ventures -->
<?php $headerInvestedVenturesBgData = get_field('invested_ventures_background', 'home-page'); ?>
<?php $headerInvestedVenturesTitleData = get_field('invested_ventures_title', 'home-page'); ?>
<?php $headerInvestedVenturesDescriptionData = get_field('invested_ventures_description', 'home-page'); ?>
<?php $headerInvestedVenturesItemsListData = get_field('invested_ventures_items', 'home-page'); ?>

<div class="flex flex-col gap-36 py-[10.75rem] pb-[11.875rem] bg-black after:contents relative overflow-hidden max-md:px-[35px]">
    <?php if($headerInvestedVenturesBgData['is_enable']) : ?>
    <img src="<?php echo $headerInvestedVenturesBgData['image']['url'] ?>" alt="<?php echo $headerInvestedVenturesBgData['image']['alt'] ?>" class="absolute w-full h-full top-0 left-0" id="view-anim" data-animation="animate-fadeInLeft" data-duration="5s">
    <?php endif ?>
	
	<div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex flex-col gap-14 px-[11.25rem] z-0 max-md:px-0">
        <?php if($headerInvestedVenturesTitleData['isenable']) : ?>
        <h2 class="font-lato font-medium text-[5rem] text-start w-full text-white" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s"><?php echo $headerInvestedVenturesTitleData['text']; ?></h2>
        <?php endif ?>
        
        <?php if($headerInvestedVenturesTitleData['isenable']) : ?>
        <span class="font-lato font-light text-lg leading-7 text-white text-start max-w-[25.5rem]" id="view-anim" data-animation="animate-fadeInBottom" data-duration="2.5s">
            <?php echo $headerInvestedVenturesDescriptionData['text']; ?>
        </span>
        <?php endif ?>
        
        <?php if(!empty($headerInvestedVenturesItemsListData)) : ?>
        <div class="flex flex-col gap-32 max-md:flex-row max-md:pt-[6.25rem] max-md:gap-14" id="view-anim" data-animation="animate-fadeInRight" data-duration="4s">
            <div class="flex gap-20 justify-between max-md:flex-col max-md:gap-10">
                <?php foreach ($headerInvestedVenturesItemsListData as $key => $item) : ?>
                <?php if($key < 4) : ?>
                <div class="flex items-center justify-center">
                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" style="wisth: 12.5rem;">
                </div>
                <?php endif ?>
                <?php endforeach ?>
            </div>

            <div class="flex gap-[18.125rem] self-center max-md:flex-col max-md:gap-10 max-md:self-start">
                <?php foreach ($headerInvestedVenturesItemsListData as $key => $item) : ?>
                <?php if($key > 3) : ?>
                <div class="flex items-center justify-center">
                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                </div>
                <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
        <?php endif ?>
    </div>
</div>
<!-- invested ventures end -->
<?php get_footer(); ?>