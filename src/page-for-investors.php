<?php get_header(); ?>
<?php /* Template Name: Page For Investors */ ?>

<!-- header -->
<?php 
    $header_background_image = get_field('header_background_image');
    $header_title = get_field('header_title'); 
    $header_description = get_field('header_description'); 
?>
<div class="relative w-full h-screen overflow-hidden">
    <div class="px-[11.25rem] w-full h-full flex items-center justify-start bg-fixed bg-cover bg-center max-md:px-[2.1875rem]" id="paralax" style="background-image: url('<?php echo $header_background_image['url']; ?>')">
        <div class="bg-black/30 absolute w-full h-full top-0 left-0"></div>
        
        <div class="flex flex-col items-start gap-12 z-0">
            <h1 class="text-[5rem] font-lato font-medium text-white text-start leading-[5.625rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s"><?php echo $header_title; ?></h1>  
            <h2 class="text-4xl text-white  text-start tracking-wide leading-normal max-w-[37.5rem]" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s"><?php echo $header_description; ?></h2>
        </div>
    </div>
</div>
<!-- header end -->

<!-- portfolio -->
<?php 
	$portfolio_title = get_field('portfolio_title');
	$portfolio_description_one = get_field('portfolio_description_one'); 
	$portfolio_description_two = get_field('portfolio_description_two');
	$portfolio_menu = get_field('portfolio_menu'); 
	$portfolio_items = get_field('portfolio_items'); 
	$portfolio_load_button = get_field('portfolio_load_button'); 
?>
<div class="min-h-screen w-full">
    <div class="flex flex-col items-center gap-[8.125rem] px-[11.25rem] py-[8.125rem] max-md:px-[2.1875rem]">
        <!-- title -->
        <div class="w-full flex flex-col gap-11 max-md:gap-24">
            <h1 class="font-caudex text-[#1C2126] text-[5rem] italic text-start" id="view-anim" data-animation="animate-fadeInLeft" data-duration="2s"><?php echo $portfolio_title; ?></h1>

            <div class="flex gap-[9.375rem] max-md:flex-col max-md:gap-7">
                <span class="flex-1 text-[#1C2126] text-2xl font-lato font-medium leading-8 text-start" id="view-anim" data-animation="animate-fadeInLeft" data-duration="3s">
                    <?php echo $portfolio_description_one; ?>
                </span>

                <span class="flex-1 text-[#1C2126] text-2xl font-lato font-medium leading-8 text-start" id="view-anim" data-animation="animate-fadeInRight" data-duration="2.5s">
                    <?php echo $portfolio_description_two; ?>
                </span>
            </div>
        </div>

        <!-- menu -->
        <nav class="w-full">
            <ul class="flex justify-between max-md:grid max-md:grid-cols-2 max-md:text-start max-md:gap-4">
                <?php if(!empty($portfolio_menu)) : ?>
                <?php foreach ($portfolio_menu as $item) : ?>
                <li>
                    <a href="<?php echo $item['url']['url']; ?>" target="<?php echo $item['url']['target']; ?>" class="text-[#1C2126] text-lg font-lato font-medium leading-7"><?php echo $item['url']['name']; ?></a>
                </li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </nav>

        <!-- galery -->
        <div class="grid grid-cols-3 gap-8 w-full max-md:flex max-md:flex-col">
            <?php if(!empty($portfolio_items)) : ?>
            <?php foreach ($portfolio_items as $item) : ?>
            <?php if(!empty($item['url'])) : ?>
                <a href="<?php echo $item['url']['url']; ?>">
            <?php endif; ?>
            <div class="transition-all duration-500 hover:scale-105 cursor-pointer relative overflow-hidden h-[21.875rem] w-full bg-cover rounded-lg drop-shadow-[0rem_0rem_6.25rem_#057eed4d]" style="background-image: url('<?php echo $item['image']['url']; ?>')">
                <div class="flex w-full h-full py-7 px-6">
                    <div class="bg-black/30 absolute w-full h-full top-0 left-0 -z-10"></div>
                    <h2 class="text-white font-caudex italic text-[2.5rem] leading-10"><?php echo $item['title']; ?></h2>
                </div>
            </div>
            <?php if(!empty($item['url'])) : ?>
                </a>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <?php if($portfolio_load_button['is_enable']) : ?>
        <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" id="view-anim" data-animation="animate-bounce">
            <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $portfolio_load_button['text']; ?></span>
            <div class="group-hover:animate-bounce">
                <img src="<?php echo $portfolio_load_button['icon']['url']; ?>" alt="<?php echo $portfolio_load_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
            </div>
        </button>
        <?php endif; ?>
    </div>
</div>
<!-- portfolio end -->

<!-- for investors -->
<?php 
    $for_investors_background = get_field('for_investors_background');
    $for_investors_title = get_field('for_investors_title'); 
    $for_investors_description = get_field('for_investors_description'); 
    $for_investors_button = get_field('for_investors_button'); 
?>
<div class="flex items-center min-h-screen w-full relative bg-fixed bg-cover bg-center" id="paralax" style="background-image: url('<?php echo $for_investors_background['url']; ?>')">
    <div class="flex-1 flex flex-col gap-[6.875rem] px-[11.25rem] py-[8.125rem] max-md:px-[2.1875rem]">
        <h1 class="text-[5rem] font-lato font-medium text-white text-start leading-[5.625rem]"><?php echo $for_investors_title; ?></h1>  

        <div class="flex max-md:flex-col max-md:items-start max-md:gap-20">
            <div class="flex-1">
                <div class="max-w-[30.375rem] font-lato text-white text-lg font-light leading-7 text-start">
                    <?php echo $for_investors_description; ?>
                </div>
            </div>

            <div class="flex-1 flex justify-center items-center">
                <?php if($for_investors_button['is_enable']) : ?>
                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                    <span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300"><?php echo $for_investors_button['text']; ?></span>
                    <div class="group-hover:animate-bounce">
                        <img src="<?php echo $for_investors_button['icon']['url']; ?>" alt="<?php echo $for_investors_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                    </div>
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- for investors end -->
<?php get_footer(); ?>