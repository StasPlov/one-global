<?php get_header(); ?>
<?php /* Template Name: Page Publications and Reports */ ?>

<!-- Header -->
<?php 
    $header_image = get_field('header_image');
    $header_title = get_field('header_title'); 
    $header_description = get_field('header_description');
?>
<div class="w-full min-h-screen relative">
    <div class="flex flex-row-reverse min-h-screen max-md:hidden">
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col flex-1 items-start gap-7 pl-[11.25rem] pr-[7.5rem] sticky top-[var(--header-menu-height)]">
                <h1 class="text-[#1C2126] text-[5rem] font-caudex rtl:font-droidSansArabic itali leading-none">
					<?php echo $header_title; ?>
				</h1>

                <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem]">
                    <?php echo $header_description; ?>
				</span>
            </div>
        </div>

		<?php if(!empty($header_image)) : ?>
        <div class="flex-1">
            <img src="<?php echo $header_image['url']?>" alt="<?php echo $header_image['url']?>" draggable="false" class="h-full w-full object-cover select-none">
        </div>
		<?php endif; ?>
    </div>

    <!-- mobile -->
    <div class="hidden max-md:flex flex-col">
		<?php if(!empty($header_image)) : ?>
        <div class="flex items-center min-h-screen bg-fixed max-md:bg-scroll bg-cover bg-center" id="paralax" style="background-image: url('<?php echo $header_image['url']?>')">
            <div class="flex items-center justify-center">
                <div class="px-[2.1875rem]">
                    <h1 class="text-white text-[5rem] font-caudex rtl:font-droidSansArabic italic text-start flex flex-col max-phoneX:text-5xl">
						<!-- Media <span class="font-lato rtl:font-droidSansArabic not-italic font-medium">Center</span> -->
						<?php echo $header_title; ?>
					</h1>
                </div>
            </div>
        </div>
		<?php endif; ?>

        <div class="px-[2.1875rem] pt-[6.25rem]">
			<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem]">
				<?php echo $header_description; ?>
			</span>
        </div>
    </div>
    <!-- end mobile -->
</div>
<!-- Header end -->

<!-- Content -->
<div class="w-full min-h-screen relative">
    <div class="flex flex-col items-start gap-16 pl-[11.25rem] py-[11.25rem] max-md:pl-0">
		<div class="flex flex-col w-full">
            <?php 
                $args = [
                    'post_type' => 'publications-and-rep',
                    'posts_per_page' => 5
                ];
                
                $query = new WP_Query($args);
            ?>
            <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post();?>
            <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                <div class="flex-1">
                    <img src="<?php echo get_field('image'); ?>" alt="image" class="h-full w-full object-cover">
                </div>

                <div class="flex-[3] border-b border-solid border-[#1c212633]">
                    <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                        <div class="flex gap-2">
                            
                        </div>

                        <div class="flex flex-col gap-4">
                            <h2 class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-2xl font-medium leading-7 text-start"><?php the_title(); ?></h2>
                            <p class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-base font-light leading-7 text-start"><?php echo the_excerpt(); ?></p>
                        </div>

                        <div class="flex justify-between w-full items-center">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">Read More</span>
                                <img src="<?php echo get_template_directory_uri().'/assets/icons/arrow_rigth2_black.svg'; ?>" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">
                            </a>

                            <span class="text-[#1C2126]/70 font-lato rtl:font-droidSansArabic text-[0.625rem] font-medium text-center"><?php the_time('d/m/Y'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>

		<!-- mobile -->
		<div class="hidden w-full pb-16 max-md:flex">
			<div class="flex-1"></div>
			<div class="flex-[3] pl-[3.25rem]">
				<button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
					<span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">Load More</span>
					<img :src="require('@/Assets/Icons/simple-line-icons_reload.svg')" alt="" class="transition duration-300 group-hover:animate-rotateEnd ">
				</button>
			</div>
		</div>
		<!-- end mobile -->
    </div>
</div>
<!-- Content end -->

<?php get_footer(); ?>