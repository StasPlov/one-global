<?php get_header(); ?>

<!-- header -->

<?php 
    $header_image = get_field('header_image', 'publications-and-reports-single');
    $header_button = get_field('header_button', 'publications-and-reports-single');
    $see_post_tag= get_field('see_post_tag', 'publications-and-reports-single');
?>
<div class="relative w-full h-screen overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>
	
    <?php if(!empty($header_image)) :?>
    <div class="px-[11.25rem] w-full h-full flex items-center justify-start bg-fixed max-md:bg-scroll bg-cover bg-center" style="background-image: url(<?php echo $header_image['url']; ?>)">
    </div>
    <?php endif; ?>
</div>
<!-- header end -->

<!-- content -->
<div class="w-full min-h-screen relative">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 4 (1).svg'?>" alt="" class="absolute top-[26%] right-0 select-none -z-0 animate-flicker" draggable="false">
    
    <div class="flex flex-col gap-10 pl-[11.25rem] pr-[25rem] pt-[8.125rem] pb-[10.375rem] max-md:px-[2.1875rem]">
        <div class="flex justify-between">
            <?php if(!empty($header_button) && !empty($header_button['text'])) :?>
                <?php if(!empty($header_button['url'])) :?>
                <a href="<?php echo $header_button['url']['url']; ?>">
                <?php endif; ?>
            <button class="relative flex gap-2 justify-between items-center pl-0 pr-9 py-3 rounded-3xl transition-all duration-300 group hover:bg-[#1c2126] hover:pl-11 hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <?php if(!empty($header_button['icon'])) :?>
                <div class="group-hover:animate-bounce">
                    <img src="<?php echo $header_button['icon']['url']; ?>" alt="<?php echo $header_button['icon']['alt']; ?>" class=" transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 ">
                </div>
                <?php endif; ?>
                <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $header_button['text'] ?></span>
            </button>
                <?php if(!empty($header_button['url'])) :?>
                </a>
                <?php endif; ?>
            <?php endif; ?>

            <div class="flex gap-6 items-center">
                <?php if($see_post_tag) :?>
                <div class="flex gap-2">
                    <?php foreach (get_the_terms( get_the_ID(), 'blog-category') as $cat) : ?>
                    <a href="<?php echo esc_url(get_term_link($cat)) ?>" class="relative flex gap-2 justify-between items-center px-[0.875rem] py-2 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-[0.625rem] font-medium text-center group-hover:text-white transition duration-300"><?php echo esc_html($cat->name) ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <span class="text-[#1C2126]/70 font-lato rtl:font-droidSansArabic text-xs font-medium text-center"><?php the_time('d/m/Y'); ?></span>
            </div>
        </div>

        <div class="flex flex-col gap-8"> 
            <h2 class="font-lato rtl:font-droidSansArabic text-5xl font-medium leading-[4rem] text-[#1C2126] text-start"><?php the_title(); ?></h2>

            <div class="flex flex-col gap-10 font-lato rtl:font-droidSansArabic text-[#1C2126] text-base font-light leading-7 text-start">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<!-- content end -->

<!-- next -->
<?php 
    $footer_button = get_field('footer_button', 'publications-and-reports-single');
    $footer_share = get_field('footer_share', 'publications-and-reports-single');
    $next_post = get_adjacent_post(false, '', false);
?>
<div class="flex justify-between pl-[11.25rem] pr-[4.375rem] pt-[8.125rem] pb-[10.375rem] relative max-md:px-[2.1875rem]">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 5 (1).svg'?>" alt="" class="absolute bottom-[0%] left-0 select-none -z-0 animate-flicker" draggable="false">
    
    <?php if(!empty($footer_button) && !empty($footer_button['text'])) :?>
        <?php if(!empty($next_post)) :?>
        <a href="<?php echo get_permalink($next_post->ID); ?>">
        <?php endif; ?>
    <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
        <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $footer_button['text'] ?></span>
        <?php if(!empty($footer_button['icon'])) :?>
        <div class="group-hover:animate-bounce">
            <img src="<?php echo $footer_button['icon']['url']; ?>" alt="<?php echo $footer_button['icon']['alt']; ?>" class=" transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 ">
        </div>
        <?php endif; ?>
    </button>
        <?php if(!empty($next_post)) :?>
        </a>
        <?php endif; ?>
    <?php endif; ?>
    

    <div class="flex gap-3 items-center">
        <?php if(!empty($footer_share['title'])) :?>
        <span><?php echo $footer_share['title']; ?></span>
        <?php endif; ?>

        <div class="flex gap-2 max-md:grid max-md:grid-col">
            <?php if(!empty($footer_share['item'])) :?>
            <?php foreach ($footer_share['item'] as $item) :?>
            <?php if(!empty($item['icon']) && !empty($item['url'])) :?>
            <a href="<?php echo $item['url']['url']; ?>" class="relative flex gap-2 justify-between items-center p-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <div class="group-hover:animate-bounce">
                    <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" class="transition duration-300 ">
                </div>
            </a>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- next end -->
<?php get_footer(); ?>