<?php get_header(); ?>

<!-- Header -->
<?php 
    $header_background = get_field('header_background');
    $header_title = get_field('header_title');
    $header_description = get_field('header_description');
?>
<div class="relative w-full h-[calc(100vh-var(--header-menu-height))] overflow-hidden">
    <div class="px-[11.25rem] w-full h-full flex items-center justify-start bg-fixed max-md:bg-scroll bg-cover bg-center max-md:px-[2.1875rem]" id="paralax" style="background-image: url('<?php echo $header_background['url'] ;?>')">
        <div class="bg-black/30 absolute w-full h-full top-0 left-0"></div>
        
        <div class="flex flex-col items-start gap-12 z-0">
            <h1 class="text-[5rem] font-lato rtl:font-droidSansArabic font-medium text-white text-start leading-[5.625rem]"  data-animation="animate-fadeInLeft" data-duration="2s">
                <?php echo $header_title ;?>
            </h1>  
            <h2 class="text-4xl text-white  text-start tracking-wide leading-normal max-w-[37.5rem]"  data-animation="animate-fadeInLeft" data-duration="2.5s">
                <?php echo $header_description ;?>
            </h2>
        </div>
    </div>
</div>
<!-- Header end -->

<!-- Title -->
<?php 
    $title_logo = get_field('title_logo');
    $title_description = get_field('title_description');
    $title_button = get_field('title_button');
?>
<div class="flex flex-col relative">
    <div class="flex flex-col items-start px-[11.25rem] pt-[8.125rem] max-md:px-[2.1875rem]">
        <div class="flex flex-col items-start">
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
        </div>

        <div class="flex flex-col items-start"  data-animation="animate-fadeInLeft" data-duration="2s">
            <img src="<?php echo $title_logo['url']; ?>" alt="<?php echo $title_logo['alt']; ?>" draggable="false" class="select-none transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3  max-h-[13.125rem]">
            <h3 class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-2xl font-medium text-start">
                <?php echo $title_description; ?>
            </h3>
        </div>
    </div>
</div>
<!-- Title end -->

<!-- Content -->
<?php 
    $content_image = get_field('content_image');
    $content_title = get_field('content_title');
    $content_description = get_field('content_description');
    $content_button = get_field('content_button');
?>
<div class="w-full overflow-hidden relative">
    <div class="flex flex-col py-[8.125rem] max-md:py-0">
        <div class="flex pr-[4.375rem] max-md:pr-0">
            <div class="flex w-full bg-white shadow-[0.625rem_0.625rem_1.875rem_0rem_#057eed33] py-[5.625rem] max-md:shadow-none max-md:flex-col">
                <div class="flex-1"  data-animation="animate-fadeInLeft" data-duration="2s">
                    <img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_image['alt']; ?>" draggable="false" class="h-full w-full object-top object-contain max-h-screen max-md:object-cover max-md:h-[34.1875rem]">
                </div>

                <div class="flex-1 flex flex-col gap-24 pl-[3.375rem] pr-[5.375rem] max-md:pt-20 max-md:px-[2.1875rem]">
                    <div class="flex flex-col gap-7 max-md:gap-20">
                        <div class="flex flex-col gap-7 text-[#1C2126] font-lato rtl:font-droidSansArabic text-2xl font-bold text-start"  data-animation="animate-fadeInRight" data-duration="3s">
                            <?php echo $content_title; ?>
                        </div>

                        <div class="flex flex-col gap-7 font-lato rtl:font-droidSansArabic text-[#1C2126] text-lg font-light text-start"  data-animation="animate-fadeInRight" data-duration="2s">
                            <?php echo $content_description; ?>
                        </div>
                    </div>

                    <div class="flex justify-end max-md:justify-start">
                        <?php if($content_button['is_enable']) : ?>
                        <?php if(!empty($content_button['url'])) : ?>
                        <a href="<?php echo $content_button['url']['url']; ?>">
                        <?php endif; ?>
                        <button class="relative flex gap-2 justify-between border border-solid border-[#1C2126] items-center pr-9 pl-9 py-3 rounded-3xl transition-all duration-300 group hover:bg-[#1c2126] hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $content_button['text']; ?></span>
                            <?php if(!empty($content_button['icon'])) : ?>
                            <div class="group-hover:animate-bounce">
                                <img src="<?php echo $content_button['icon']['url']; ?>" alt="<?php echo $content_button['icon']['alt']; ?>" class="transition duration-300 group-hover:translate-x-3 ">
                            </div>
                            <?php endif; ?>
                        </button>
                        <?php if(!empty($content_button['url'])) : ?>
                        </a>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content end -->

<!-- For investors -->
<?php 
    $for_investors_title = get_field('for_investors_title');
    $for_investors_description = get_field('for_investors_description');
    $for_investors_button = get_field('for_investors_button');
    $for_investors_background = get_field('for_investors_background');
?>
<div class="flex items-center w-full relative bg-fixed max-md:bg-scroll bg-cover bg-center max-md:min-h-auto" id="paralax" style="background-image: url('<?php echo $for_investors_background['url']; ?>')">
    <div class="flex-1 flex flex-col gap-[6.875rem] px-[11.25rem] py-[8.125rem] max-md:px-[2.1875rem] max-xl:px-[7.5rem]">
        <h1 class="text-[5rem] font-lato rtl:font-droidSansArabic font-medium text-white text-start leading-[5.625rem]"><?php echo $for_investors_title; ?></h1>  

        <div class="flex max-md:flex-col max-md:items-start max-md:gap-20">
            <div class="flex-1">
                <div class="max-w-[30.375rem] font-lato rtl:font-droidSansArabic text-white text-lg font-light leading-7 text-start">
                    <?php echo $for_investors_description; ?>
                </div>
            </div>

            <div class="flex-1 flex justify-center items-center">
                <?php if(!empty($for_investors_button) && $for_investors_button['is_enable'] && $for_investors_button['text']) : ?>
                <button id="formOpenButton" class="bottom-[] relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                    <span class="text-white text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $for_investors_button['text']; ?></span>
					
					<?php if(!empty($for_investors_button['icon'])) : ?>
					<div class="group-hover:animate-bounce">
                        <img src="<?php echo $for_investors_button['icon']['url']; ?>" alt="<?php echo $for_investors_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                    </div>
					<?php endif; ?>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- For investors end -->

<?php get_footer(); ?>