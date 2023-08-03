<!-- content -->
<div class="w-full min-h-screen">
    <nav class="flex sticky top-[var(--header-menu-height)] bg-white z-10 max-md:flex-col">
        <ul class="flex flex-[5] max-md:grid max-md:grid-cols-2">
            <li class="flex flex-1 border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <a href="/blog" class="px-[2.25rem] py-[1.375rem] w-full text-center">
                    <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-sm font-medium uppercase leading-7">All Articles</span>
                </a>
            </li>
            
            <?php foreach (wp_get_nav_menu_items(26) as $menu) : ?>
            <li class="flex flex-1 border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <a href="<?php echo $menu->url; ?>" class="px-[2.25rem] py-[1.375rem] w-full text-center">
                    <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-sm font-medium uppercase leading-7"><?php echo $menu->title; ?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <div class="flex-[3] max-md:sticky max-md:top-[var(--header-menu-height)]">
            <div class="flex border border-l-0 border-r-0 border-solid border-[#1c212633] h-full relative">
                <input type="text" value="" id="blog-search" placeholder="" class="max-md:py-8 transition w-0 h-0 outline-0 bg-white focus:bg-slate-300/10 focus:w-full focus:h-full focus:px-3 focus:py-2">
                <label for="blog-search" class="max-md:py-8 absolute flex gap-3 items-center justify-center top-0 bottom-0 left-0 right-0 self-center transition hover:bg-gray-400/10 cursor-pointer">
                    <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-sm font-medium uppercase leading-7">Search for article</span>
                    <img :src="require('@/Assets/Icons/codicon_search.svg')" alt="" class="h-4 w-4">
                </label>
            </div>
        </div>
    </nav>

    <div class="flex flex-col items-start gap-16">
        <div class="flex flex-col w-full">
            <?php 
                $category = get_queried_object()->name;
                $args = [
                    'post_type' => 'blog',
                    'posts_per_page' => 5
                ];

                if(!empty($category)) {
                    $args = [
                        ...$args,
                        'tax_query' => [
                            [
                                'taxonomy' => 'blog-category',
                                'field' => 'slug',
                                'terms' => $category
                            ]
                        ]
                    ];
                }
                
                $query = new WP_Query($args);
            ?>
            <?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post();?>
            <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                <div class="flex-1">
                    <img src="<?php echo get_field('image'); ?>" alt="image" class="h-full w-full object-cover">
                </div>

                <div class="flex-[3] border-b border-solid border-[#1c212633]">
                    <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8">
                        <div class="flex gap-2">
                            <?php foreach (get_the_terms( get_the_ID(), 'blog-category') as $cat) : ?>
                            <a href="<?php echo esc_url(get_term_link($cat)) ?>" class="relative flex gap-2 justify-between items-center px-[0.875rem] py-2 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-[0.625rem] font-medium text-center group-hover:text-white transition duration-300"><?php echo esc_html($cat->name) ?></span>
                            </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex flex-col gap-4">
                            <h2 class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-2xl font-medium leading-7 text-start"><?php the_title(); ?></h2>
                            <p class="font-lato rtl:font-droidSansArabic text-[#1C2126] text-base font-light leading-7 text-start"><?php echo the_excerpt(); ?></p>
                        </div>

                        <div class="flex justify-between w-full items-center">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">Read More</span>
                                <img src="<?php echo get_template_directory_uri().'/assets/Icons/arrow_rigth2_black.svg'; ?>" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">
                            </a>

                            <span class="text-[#1C2126]/70 font-lato rtl:font-droidSansArabic text-[0.625rem] font-medium text-center"><?php the_time('d/m/Y'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>

        <div class="flex w-full pb-16">
            <div class="flex-1"></div>
            <div class="flex-[3] pl-[3.25rem]">
                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                    <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300">Load More</span>
                    <img src="<?php echo get_template_directory_uri().'/assets/Icons/simple-line-icons_reload.svg'; ?>" alt="" class="transition duration-300 group-hover:animate-rotateEnd ">
                </button>
            </div>
        </div>
    </div>
</div>
<!-- content end -->