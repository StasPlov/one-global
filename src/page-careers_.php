<?php get_header(); ?>
<?php /* Template Name: Page Careers */ ?>

<!-- Header -->
<?php
    $header_image = get_field('header_image');
    $header_title = get_field('header_title'); 
    $header_description = get_field('header_description'); 
?>
<div class="w-full">
    <div class="flex max-md:hidden">
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col items-start gap-7 px-[11.25rem] sticky top-[var(--header-menu-height)] max-md:px-[2.1875rem] max-lg:px-[3.125rem]">
                <h1 class="text-[#1C2126] text-[5rem] font-caudex rtl:font-droidSansArabic italic">
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
        <div class="flex items-center h-[calc(100vh-var(--header-menu-height))] bg-fixed max-md:bg-scroll bg-cover bg-center" id="paralax" style="background-image: url('<?php echo $header_image['url']; ?>')">
            <div class="flex items-center justify-center">
                <div class="px-[2.1875rem]">
                    <h1 class="text-white text-[5rem] font-caudex rtl:font-droidSansArabic italic text-start flex flex-col">
                        <?php echo $header_title; ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="px-[2.1875rem] py-[6.25rem]">
            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem]">
                <?php echo $header_description; ?>
            </span>
        </div>
    </div>
    <!-- end mobile -->
</div>
<!-- Header end -->

<!-- Content -->
<?php
    $info_first = get_field('info_first');
    $info_two = get_field('info_two'); 
    $info_three = get_field('info_three'); 

    $search_button = get_field('search_button');
    $clear_button = get_field('clear_button'); 
?>
<div class="w-full overflow-hidden">
    <div>
        <div class="grid grid-cols-3 grid-rows-3 gap-0 max-md:hidden">
            <div class="flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start p-[2.1875rem]">
                    <h3 class="text-[#1C2126] font-caudex rtl:font-droidSansArabic text-[6.25rem] italic"   >
                        <?php echo $info_first['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato rtl:font-droidSansArabic"   >
                        <?php echo $info_first['title']; ?>
                    </span>
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]"  >
                        <?php echo $info_first['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-span-2 max-h-[53.75rem]">
                <img src="<?php echo $info_first['image']['url']; ?>" alt="<?php echo $info_first['image']['alt']; ?>" class="h-full w-full object-cover select-none">
            </div>

            <div class="max-h-[26.875rem]"  data-animation="animate-fadeInRight" data-duration="3.5s">
                <img src="<?php echo $info_first['image_two']['url']; ?>" alt="<?php echo $info_first['image_two']['alt']; ?>" class="h-full w-full object-cover select-none">
            </div>

            <div class="max-h-[26.875rem]"   data-duration="3.5s">
                <img src="<?php echo $info_two['image']['url']; ?>" alt="<?php echo $info_two['image']['alt']; ?>" class="h-full w-full object-cover select-none">
            </div>

            <div class="col-start-3 flex items-center justify-center bg-white max-h-[26.875rem]">
                <div class="flex flex-col gap-6 items-start p-[2.1875rem]">
                    <h3 class="text-[#1C2126] font-caudex rtl:font-droidSansArabic text-[6.25rem] italic"  data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $info_two['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato rtl:font-droidSansArabic"  data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $info_two['title']; ?>
                    </span>
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]"  data-animation="animate-fadeInRight" >
                        <?php echo $info_two['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-start-3 flex items-center justify-center bg-white max-h-[26.875rem] border-r border-solid border-[#1c212633]">
                <div class="flex flex-col gap-6 items-start p-[2.1875rem]">
                    <h3 class="text-[#1C2126] font-caudex rtl:font-droidSansArabic text-[6.25rem] italic"   >
                        <?php echo $info_three['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato rtl:font-droidSansArabic"   >
                        <?php echo $info_three['title']; ?>
                    </span>
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]"  >
                        <?php echo $info_three['description']; ?>
                    </span>
                </div>
            </div>

			<?php
				$carrers_category = get_terms('carrers-category');
				$carrers_job_type = get_terms('carrers-job-type');
				$carrers_location = get_terms('carrers-location');

				/* hardcode arabic language =) */
				$keywords = 'Keywords';
				$allCategories = 'All Categories';
				$allJobTypes = 'All Job Types';
				$allLocations = 'All Locations';

				if(pll_current_language() == 'ar') {
					$keywords = 'كلمات البحث';
					$allCategories = 'جميع الأقسام';
					$allJobTypes = 'جميع الوظائف';
					$allLocations = 'جميع الدول';
				}
			?>
            <div class="col-span-2 row-start-3 max-h-[26.875rem]">
                <form onsubmit="return false" class="flex flex-col justify-center px-[3.125rem] h-full w-full gap-[3.75rem] transition-all" id="careersFilter" data-endpoint="<?php echo admin_url('admin-ajax.php'); ?>">
                    <div class="flex flex-col gap-8 w-full">
                        <input type="text" name="post_id" hidden value="<?php echo get_the_ID(); ?>">
                        <input type="text" name="search" id="inputSearch" placeholder="<?php echo $keywords; ?>" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0">

                        <div class="flex gap-5 w-full">                            
                            <select name="carrers_category" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                                <option value="" selected id="category"><?php echo $allCategories; ?></option>
                                <?php foreach ($carrers_category as $key => $item) : ?>
                                    <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                                <?php endforeach; ?>
                            </select>

                            <select name="carrers_job_type" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                                <option value="" selected><?php echo $allJobTypes; ?></option>
                                <?php foreach ($carrers_job_type as $key => $item) : ?>
                                    <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                                <?php endforeach; ?>
                            </select>

                            <select name="carrers_location" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                                <option value="" selected><?php echo $allLocations; ?></option>
                                <?php foreach ($carrers_location as $key => $item) : ?>
                                    <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <?php if(!empty($clear_button) && $clear_button['is_enable']) : ?>
                        <button id="clearFilterButton" class="flex-[3] w-full relative flex gap-2 justify-center items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <?php if(!empty($clear_button['text'])) :?>
                            <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">
                                <?php echo $clear_button['text']; ?>
                            </span>
                            <?php endif; ?>

                            <?php if(!empty($clear_button['icon'])) :?>
                            <div class="group-hover:animate-bounce">
                                <img src="<?php echo $clear_button['icon']['url']; ?>" alt="<?php echo $clear_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 select-none">
                            </div>
                            <?php endif; ?>

                        </button>
                        <?php endif; ?>
                        
                        <?php if (!empty($search_button) && !empty($search_button['is_enable'])) : ?>
                        <button id="filterSubmit" class="flex-[6.8] relative flex gap-4 justify-center items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <div class="scale-[0.2] absolute grayscale contrast-200 left-0 hidden" id="loader">
                                <div class="loader">
                                    <svg class="circular" viewBox="25 25 50 50">
                                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                                    </svg>
                                </div>
                            </div>

                            <?php if(!empty($search_button['icon'])) :?>
                            <div class="group-hover:animate-bounce">
                                <img src="<?php echo $search_button['icon']['url']; ?>" alt="<?php echo $search_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 select-none">
                            </div>
                            <?php endif; ?>
                           
                            <?php if(!empty($search_button['text'])) :?>
                            <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">
                                <?php echo $search_button['text']; ?>
                            </span>
                            <?php endif; ?>
                        </button>
                        <?php endif; ?>

                    </div>
                </form>
            </div>
        </div>

        <!-- mobile -->
        <div class="hidden flex-col max-md:flex">
            <div class="flex items-center justify-center bg-white max-h-[50vh] max-md:flex-col-reverse max-md:max-h-full">
                <img src="<?php echo $info_first['image']['url']; ?>" alt="<?php echo $info_first['image']['alt']; ?>" class="h-full w-full object-cover max-lg:max-h-[50vh] select-none">

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem] max-md:pt-0">
                    <h3 class="text-[#1C2126] font-caudex rtl:font-droidSansArabic text-[6.25rem] italic">
                        <?php echo $info_first['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato rtl:font-droidSansArabic">
                        <?php echo $info_first['title']; ?>
                    </span>
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]">
                        <?php echo $info_first['description']; ?>
                    </span>
                </div>
            </div>

            <div class="col-start-3 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col-reverse max-md:max-h-full">
                <img src="<?php echo $info_first['image_two']['url']; ?>" alt="<?php echo $info_first['image_two']['alt']; ?>" class="h-[34.1875rem] w-full object-cover max-lg:max-h-[50vh] select-none">

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex rtl:font-droidSansArabic text-[6.25rem] italic"  data-animation="animate-fadeInRight" data-duration="3.5s">
                        <?php echo $info_two['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato rtl:font-droidSansArabic"  data-animation="animate-fadeInRight" data-duration="2.5s">
                        <?php echo $info_two['title']; ?>
                    </span>
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]"  data-animation="animate-fadeInRight" >
                        <?php echo $info_two['description']; ?>
                    </span>
                </div>
            </div>

            <div class="row-start-3 flex items-center justify-center bg-white max-h-[26.875rem] max-md:flex-col-reverse max-md:max-h-full">
                <img src="<?php echo $info_two['image']['url']; ?>" alt="<?php echo $info_two['image']['alt']; ?>" class="h-[34.1875rem] w-full object-cover max-lg:max-h-[50vh] select-none">

                <div class="flex flex-col gap-6 items-start max-md:px-[2.1875rem] max-md:py-[6.25rem]">
                    <h3 class="text-[#1C2126] font-caudex rtl:font-droidSansArabic text-[6.25rem] italic">
                        <?php echo $info_three['num']; ?>
                    </h3>
                    <span class="text-[#1C2126] text-2xl font-medium leading-7 font-lato rtl:font-droidSansArabic">
                        <?php echo $info_three['title']; ?>
                    </span>
                    <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.625rem]">
                        <?php echo $info_three['description']; ?>
                    </span>
                </div>
            </div>
            <div class="max-md:py-[2.1875rem]">
                <form onsubmit="return false" class="flex flex-col justify-center px-[3.125rem] h-full w-full gap-[3.75rem] transition-all" id="careersFilterMob" data-endpoint="<?php echo admin_url('admin-ajax.php'); ?>">
                    <div class="flex flex-col gap-8 w-full">
                        <input type="text" name="post_id" hidden value="<?php echo get_the_ID(); ?>">
                        <input type="text" name="search" placeholder="Keywords" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0">

                        <div class="flex gap-5 w-full">
                            <select name="carrers_category" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                                <option value="" selected>All Categories</option>
                                <?php foreach ($carrers_category as $key => $item) : ?>
                                    <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                                <?php endforeach; ?>
                            </select>

                            <select name="carrers_job_type" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 w-full">
                                <option value="" selected>All Job Types</option>
                                <?php foreach ($carrers_job_type as $key => $item) : ?>
                                    <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="flex gap-5">
                            <select name="carrers_location" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 flex-1">
                                <option value="" selected>All Locations</option>
                                <?php foreach ($carrers_location as $key => $item) : ?>
                                    <option value="<?php echo $item->slug ?>"><?php echo $item->name ?></option>
                                <?php endforeach; ?>
                            </select>

                            <?php if(!empty($clear_button) && $clear_button['is_enable']) : ?>
                                <?php if(!empty($clear_button['url'])) : ?>
                                    <a href="<?php echo $clear_button['url']['url']; ?>" class="flex-1">
                                <?php endif; ?>
                            <button class="flex-1 w-full relative flex gap-2 justify-center items-center pl-4 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                
                                <?php if(!empty($clear_button['text'])) :?>
                                <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">
                                    <?php echo $clear_button['text']; ?>
                                </span>
                                <?php endif; ?>

                                <?php if(!empty($clear_button['icon'])) :?>
                                <div class="group-hover:animate-bounce">
                                    <img src="<?php echo $clear_button['icon']['url']; ?>" alt="<?php echo $clear_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 select-none">
                                </div>
                                <?php endif; ?>

                            </button>
                                <?php if(!empty($clear_button['url'])) : ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (!empty($search_button) && !empty($search_button['is_enable'])) : ?>
                    <button id="filterSubmit" class="relative flex gap-4 justify-center items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <div class="scale-[0.2] absolute grayscale contrast-200 left-0 hidden" id="loader">
                            <div class="loader">
                                <svg class="circular" viewBox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                                </svg>
                            </div>
                        </div>

                        <?php if(!empty($search_button['icon'])) :?>
                        <div class="group-hover:animate-bounce">
                            <img src="<?php echo $search_button['icon']['url']; ?>" alt="<?php echo $search_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 select-none">
                        </div>
                        <?php endif; ?>
                        
                        <?php if(!empty($search_button['text'])) :?>
                        <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">
                            <?php echo $search_button['text']; ?>
                        </span>
                        <?php endif; ?>
                    </button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
        <!-- mobile end -->
    </div>
</div>
<!-- Content end -->

<!-- Careers list -->
<?php
    $content_button = get_field('content_button');
?>
<div class="w-full overflow-hidden relative flex flex-col">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 4 (3).svg'?>" alt="" class="absolute bottom-[5%] right-0 select-none" draggable="false">
    
    <div class="flex absolute top-0 left-0 w-full h-full blur-[100vh] z-10 transition-all hidden items-center justify-center bg-black/20" id="placeholderLoader">
        <div class="grayscale contrast-200">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
    </div>

    <div id="careers-list" class="flex flex-col">
        <?php 
            $args = [
                'post_type' => 'careers',
                'posts_per_page' => 10
            ];
            
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post();?>
        <?php 
            $info = get_field('info');
        ?>
        <div class="flex border-b first:border-t border-solid border-[#1c212633] max-md:flex-col max-md:border-x-0 max-md:border-t-0">
            <div class="flex-[37.7%] flex items-center border-r border-solid border-[#1c212633]">
                <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem] max-md:pb-0">
                    <h2 class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-2xl font-medium text-start">
                        <?php the_title(); ?>
                    </h2>

                    <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic font-light text-base text-start">
                        <?php echo the_excerpt(); ?>
                    </span>
                </div>
            </div>
            <div class="flex flex-[2]">
                <div class="flex-1 h-full flex items-center border-r border-solid border-[#1c212633] max-md:border-r-0">
                    <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem]">
                        <div class="flex gap-2">
                            <?php if(!empty($info['schedule']['icon'])) : ?>
                            <img src="<?php echo $info['schedule']['icon']['url']; ?>" alt="<?php echo $info['schedule']['icon']['alt']; ?>" class="max-h-[1rem] select-none">
                            <?php endif; ?>
                            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-base font-medium text-start">
                                <?php echo $info['schedule']['text'];  ?>
                            </span>
                        </div>

                        <div class="flex gap-2">
                        <?php if(!empty($info['location']['icon'])) : ?>
                            <img src="<?php echo $info['location']['icon']['url']; ?>" alt="<?php echo $info['location']['icon']['alt']; ?>" class="max-h-[1rem] select-none">
                            <?php endif; ?>
                            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-base font-medium text-start">
                                <?php echo $info['location']['text']; ?>
                            </span>
                        </div>

                        <div class="flex gap-2">
                            <?php if(!empty($info['time']['icon'])) : ?>
                            <img src="<?php echo $info['time']['icon']['url']; ?>" alt="<?php echo $info['time']['icon']['alt']; ?>" class="max-h-[1rem] select-none">
                            <?php endif; ?>
                            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-base font-medium text-start">
                                <?php echo $info['time']['text']; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php if(!empty($content_button) && $content_button['is_enable']) : ?>
                <div class="flex-1 flex items-center justify-center">
                    <div class="px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:pt-[1.5625rem]">
                        <a href="<?php the_permalink(); ?>">
                        <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $content_button['text']; ?></span>
                            
                            <?php if(!empty($content_button['icon'])) : ?>
                                <img src="<?php echo $content_button['icon']['url']; ?>" alt="<?php echo $content_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">
                            <?php endif; ?>
                        </button>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </div>

    <div class="flex items-center justify-center max-md:px-[2.1875rem] hidden" id="careersForm">
        <div class="flex flex-col gap-12 items-center">

            <div class="px-[8.125rem] py-[10.625rem] max-md:rounded-none z-10 max-md:bg-transparent max-md:px-[2.1875rem] max-w-[42.625rem]">
                <?php 
                    $num = 16; // 11
                    if(pll_current_language() == 'ar') {
                        $num = 16; // 12
                    }
                    echo do_shortcode("[ninja_form id=$num]");
                ?>
            </div>

        </div>
    </div>
</div>
<!-- Careers list -->
<?php get_footer(); ?>