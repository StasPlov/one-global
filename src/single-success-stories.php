<?php get_header(); ?>

<!-- Header -->
<?php 
    $header_background = get_field('header_background');
    $header_title = get_field('header_title');
    $header_description = get_field('header_description');
?>
<div class="relative w-full h-[calc(100vh-var(--header-menu-height))] overflow-hidden">
    <div class="px-[11.25rem] w-full h-full flex items-center justify-start max-md:px-[2.1875rem]">
		<?php if(!empty($header_background)) : ?>
        <video class="absolute w-full h-full object-cover top-0 left-0" autoplay loop muted playsinline preload="auto">
            <source src="<?php echo $header_background['url']; ?>" type="video/mp4">
        </video>
        <?php endif; ?>

        <div class="bg-black/30 absolute w-full h-full top-0 left-0"></div>
        
        <div class="flex flex-col items-start gap-12 z-0">
            <?php if(!empty($header_title)) :?>
            <h1 class="text-[5rem] font-lato font-medium text-white text-start leading-[5.625rem]"><?php echo $header_title; ?></h1>
            <?php endif; ?>
            
            <?php if(!empty($header_description)) :?>
            <h12 class="text-4xl text-white  text-start tracking-wide leading-normal max-w-[37.5rem]"><?php echo $header_description; ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Header end -->

<!-- Title -->
<?php 
    $title_button = get_field('title_button');
    $title_text = get_field('title_text');
    $title_description = get_field('title_description');
?>
<div class="w-full relative">
    <div class="flex flex-col w-full h-full px-[11.25rem] gap-8 py-[8.125rem] items-start max-md:px-[2.1875rem]">

        <?php if($title_button['is_enable']) : ?>
        <?php if(!empty($title_button['url'])) : ?>
        <a href="<?php echo $title_button['url']['url']; ?>">
        <?php endif; ?>
        <button class="relative flex gap-2 justify-between items-center pl-0 pr-9 py-3 rounded-3xl transition-all duration-300 group cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
            <?php if(!empty($title_button['icon'])) : ?>
            <div class="group-hover:animate-bounce">
                <img src="<?php echo $title_button['icon']['url']; ?>" alt="<?php echo $title_button['icon']['alt']; ?>" class="transition duration-300 group-hover:-translate-x-3">
            </div>
            <?php endif; ?>

            <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabi transition duration-300"><?php echo $title_button['text']; ?></span>
        </button>
        <?php if(!empty($title_button['url'])) : ?>
        </a>
        <?php endif; ?>
        <?php endif; ?>

        <div class="flex flex-col items-start gap-5 max-md:gap-10">
            <h2 class="text-[5rem] font-caudex font-normal text-[#1C2126] text-start leading-none">
                <?php echo $title_text; ?>
            </h2>

            <h3 class="text-[#1C2126] font-lato text-2xl font-medium leading-8 max-w-[40rem] text-start">
                <?php echo $title_description; ?>
            </h3>
        </div>
    </div>
</div>
<!-- Title end -->

<!-- info -->
<?php 
    $items = get_field('items');
?>
<?php if(!empty($items)): ?>
<?php foreach($items as $item ): ?>
<div class="w-full bg-white relative">
    <?php if(!$item['is_revers'] && $item['use_background_effect']): ?>
    <img src="<?php echo get_template_directory_uri().'/assets/Images/Ellipse 4.svg'?>" alt="" class="absolute top-[26%] left-0 select-none z-10" draggable="false">
    <?php endif; ?>

    <?php if($item['is_revers'] && $item['use_background_effect']): ?>
    <img src="<?php echo get_template_directory_uri().'/assets/Images/Ellipse 10.svg'?>" alt="" class="absolute top-[26%] right-0 select-none z-10 <?php echo (($item['is_revers']) ? 'top-[10%]' : '' ) ?>" draggable="false">
    <?php endif; ?>
    
    <?php if($item['background_image']): ?>
    <img src="<?php echo $item['background_image']['url']; ?>" alt="<?php echo $item['background_image']['alt']; ?>" class="absolute w-full h-full top-0 left-0 -z-0 select-none" draggable="false">
    <?php endif; ?>

    <div class="flex py-[11.25rem] max-md:pt-0 gap-28 h-full max-md:flex-col-reverse <?php echo (($item['is_revers']) ? 'flex-row-reverse' : '' ); ?>">
        <div class="flex flex-1 items-center justify-center z-0">
            <div class="flex flex-col gap-14 max-md:w-full  max-md:px-[2.1875rem]">
                <h2 class="text-[4.375rem] font-medium font-caudex italic text-start text-[#1C2126] max-md:text-5xl <?php echo (($item['background_image']) ? 'text-white' : '' ) ?>"><?php echo $item['title']; ?></h2>

                <div class="flex flex-col gap-7">
                    <span class="font-lato font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.125rem] <?php echo (($item['background_image']) ? 'text-white' : '' ) ?>">
                        <?php echo $item['description']; ?>
                    </span>
                </div>
            </div>
        </div>

        <?php if(!empty($item['image'])): ?>
        <div class="flex-1 relative max-h-screen max-w-[45%] max-md:max-w-none">
            <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" class="max-lg:max-h-[50vh] h-full w-full object-cover">
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>
<!-- info end -->

<!-- other -->
<?php 
    $success_stories_title = get_field('success_stories_title');
    $success_stories_items = get_field('success_stories_items');
?>
<div class="w-full bg-white relative">
    <img src="<?php echo get_template_directory_uri().'/assets/icons/Ellipse 8.svg'?>" alt="" class="absolute top-[40%] right-0 select-none" draggable="false">
    <img src="<?php echo get_template_directory_uri().'/assets/icons/Ellipse 9.svg'?>" alt="" class="absolute top-[-10%] left-0 select-none" draggable="false">

    <div class="flex flex-col gap-[8.125rem] pb-[10.625rem] z-0">
        <div class="flex flex-col gap-[4.625rem] px-[11.25rem] z-0 max-md:px-[2.1875rem] max-lg:px-[3.125rem] max-phoneX:px-[2.1875rem]">
            <h2 class="text-[5rem] text-[#1C2126] font-medium font-lato rtl:font-droidSansArabic text-start leading-[5.625rem]"><?php echo $success_stories_title; ?></h2>
        </div>

        <div class="grid grid-cols-3 gap-12 px-[11.25rem] z-0 max-md:px-[2.1875rem] max-md:flex max-md:flex-col max-lg:px-[3.125rem] max-phoneX:px-[2.1875rem]">
            <?php if(!empty($success_stories_items)) : ?>
            <?php foreach ($success_stories_items as $item) : ?>
            <div class="flex flex-col gap-8 transition-all duration-500 hover:scale-105">
                <div class="h-[22vw] bg-black/20 flex overflow-hidden rounded-lg max-phoneX:h-[21.875rem] max-md:h-[38.125rem]">
                    <img src="<?php echo $item['image']['url']; ?>" alt="image" class="h-full w-full object-cover">
                </div>

                <div class="flex flex-col gap-10 items-start">
                    <div class="flex flex-col gap-5">
                        <h3 class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-2xl font-medium leading-[1.875rem] text-start max-w-[11.75rem]"><?php echo $item['title']; ?></h3>

                        <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[19.375rem]">
                            <?php echo $item['description']; ?>
                        </span>
                    </div>
                    
                    <?php if(!empty($item['button']) && $item['button']['is_enable'] && !empty($item['button']['text'])) : ?>
                    <?php if(!empty($item['button']['url'])) : ?>
                    <a href="<?php echo $item['button']['url']; ?>" class="cursor-default">
                    <?php endif; ?>
					<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
						<?php if(!empty($item['button']['icon'])) : ?>
						<img src="<?php echo $item['button']['icon']['url']; ?>" alt="<?php echo $item['button']['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">
						<?php endif; ?>
						<span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $item['button']['text']; ?></span>
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
<!-- other end -->
<?php get_footer(); ?>