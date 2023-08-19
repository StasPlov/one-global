<?php get_header(); ?>
<?php /* Template Name: Page Contact Us */ ?>

<!-- header -->
<?php 
    $header_image = get_field('header_image');
    $header_title = get_field('header_title');
    $header_description = get_field('header_description');
?>
<div class="w-full min-h-screen">
    <div class="flex min-h-screen max-md:hidden">
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col flex-1 items-start gap-7 pl-[11.25rem] pr-[7.5rem] sticky top-[var(--header-menu-height)]">
                <h1 class="text-[#1C2126] text-[5rem] font-caudex rtl:font-droidSansArabic italic leading-none">
                    <?php echo $header_title; ?>
                </h1>

                <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem]">
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
        <div class="flex items-center min-h-screen bg-fixed max-md:bg-scroll bg-cover bg-center" id="paralax" style="background-image: url('<?php echo $header_image['url']; ?>')">
            <div class="flex items-center justify-center">
                <div class="px-[2.1875rem]">
                    <h1 class="text-white text-[5rem] font-caudex rtl:font-droidSansArabic italic text-start flex flex-col max-md:leading-none">
                        <?php echo $header_title; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="px-[2.1875rem] pt-[6.25rem]">
            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem]">
                <?php echo $header_description; ?>
            </span>
        </div>
    </div>
    <!-- end mobile -->
</div>
<!-- header end -->

<!-- info -->
<?php 
    $form_title = get_field('form_title');
    $form_description = get_field('form_description');
    $form_inputs = get_field('form_inputs');
    $form_button_text = get_field('form_button_text');
    $info_contacts = get_field('info_contacts');
    $form_button = get_field('form_button');
?>
<div class="w-full py-[4.375rem] max-md:pb-0">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 4 (2).svg'?>" alt="" class="absolute right-0 max-md:hidden">

    <div class="flex max-lg:flex-col-reverse max-lg:items-center max-lg:gap-10">
        <div class="flex-1 flex items-center justify-center max-lg:w-full">
            <!-- form -->
			<div class="shadow-2xl rounded-xl px-[5.25rem] py-[4.625rem] max-md:rounded-none">
                <div class="flex flex-col gap-11 items-center justify-center max-w-[26.25rem] w-full">
					<?php
						$num = 2; // 13
						if(pll_current_language() == 'ar') {
							$num = 3; // 9
						}
						echo do_shortcode("[ninja_form id=$num]"); 
					?>
                </div>
			</div>
            <!-- form end -->
        </div>

        <div class="flex-1 max-md:px-[2.1875rem] max-md:pb-16">
            <div class="flex flex-col items-start gap-9">
                <?php if(!empty($info_contacts)) : ?>
                <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-medium"><?php echo $info_contacts['title']; ?></span>

                <div class="flex flex-col gap-6">
                    <?php if(!empty($info_contacts['items'])) : ?>
                    <?php foreach ($info_contacts['items'] as $item) : ?>
                    <div class="flex flex-col gap-6"  data-animation="animate-fadeInLeft" data-duration="4s">
                        <div class="flex gap-6 items-center">
							<?php if(!empty($item['icon'])) : ?>
                            <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" class="select-none" draggable="false">
                            <?php endif; ?>

							<?php if($item['options'] == 'text') :?>
                            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light max-w-[20.625rem] text-start">
                                <?php echo $item['text']; ?>
                            </span>
                            <?php elseif($item['options'] == 'email') : ?>
                                <a href="mailto:<?php echo $item['text']; ?>" class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light max-w-[20.625rem] text-start"><?php echo $item['text']; ?></a>
                            <?php elseif($item['options'] == 'phone') : ?>
                                <a href="tel::<?php echo $item['text']; ?>" class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light max-w-[20.625rem] text-start"><?php echo $item['text']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- info end -->

<!-- map -->
<?php 
    $map_link = get_field('map_link');
?>
<div class="w-full flex items-center justify-center max-md:h-[34.5625rem] object-cover overflow-hidden px-[11.25rem] h-[43.75rem] pb-[8.125rem] max-md:px-0 max-md:pb-0 max-md:max-h-screen">
    <?php if(!empty($map_link)) : ?>
		<iframe src="<?php echo $map_link['url']; ?>" class="rounded-xl max-md:rounded-none	" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php endif; ?>
</div>
<!-- map end -->
<?php get_footer(); ?>