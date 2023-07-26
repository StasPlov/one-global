<?php get_header(); ?>
<!-- header -->
<div class="w-full h-screen">
    <div class="w-full h-full grid grid-cols-2 items-center">
        <div class="flex flex-col flex-1 items-start gap-7 pl-[180px] pr-[120px]">
            <h1 class="text-[#1C2126] text-[80px] font-caudex italic">Our <span class="font-lato not-italic font-medium">Blog</span></h1>

            <p class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[370px]">
                We would love to hear from you! Send your queries using this contact form.
                Alternatively, you can also reach us at below communication details.
            </p>
        </div>

        <div class="flex-1 h-full">
            <img :src="require('@/Assets/Images/maximalfocus-wcm2fKeJmt8-unsplash 4.png')" alt="image" class="h-full w-full object-cover">
        </div>
    </div>
</div>

<!-- content -->
<div class="w-full min-h-screen">
    <nav class="flex sticky top-[-1px] bg-white">
        <ul class="flex flex-[5]">
            <li class="flex-1 px-[36px] py-[22px] border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <span class="text-[#1C2126] font-lato text-sm font-medium uppercase leading-7">All Articles</span>   
            </li>
            
            <li class="flex-1 px-[36px] py-[22px] border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <span class="text-[#1C2126] font-lato text-sm font-medium uppercase leading-7">Technology</span>   
            </li>

            <li class="flex-1 px-[36px] py-[22px] border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <span class="text-[#1C2126] font-lato text-sm font-medium uppercase leading-7">Company</span>   
            </li>

            <li class="flex-1 px-[36px] py-[22px] border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <span class="text-[#1C2126] font-lato text-sm font-medium uppercase leading-7">Business</span>   
            </li>

            <li class="flex-1 px-[36px] py-[22px] border border-solid border-[#1c212633] border-l-0 transition hover:bg-gray-400/10 cursor-pointer">
                <span class="text-[#1C2126] font-lato text-sm font-medium uppercase leading-7">People</span>   
            </li>
        </ul>

        <div class="flex-[3]">
            <div class="border border-solid border-[#1c212633] border-l-0 h-full">
                <input type="text" value="" placeholder="Search for article">
                <img :src="require('@/Assets/Icons/codicon_search.svg')" alt="" class="h-4 w-4">
            </div>
        </div>
    </nav>

    <div class="flex flex-col">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="flex">
            <div class="h-[300px] flex-1">
                <img :src="require('@/Assets/Images/maximalfocus-wcm2fKeJmt8-unsplash 4.png')" alt="image" class="h-full w-full object-cover">
            </div>

            <div class="flex-[3] border-b border-solid border-[#1c212633]">
                <div class="flex flex-col pl-[52px] py-10 items-start justify-between h-full max-w-[738px]">
                    <div class="flex gap-2">
                        <?php foreach (get_the_terms( get_the_ID(), 'blog-category') as $cat) : ?>
                        <a href="<?php echo esc_url(get_term_link($cat)) ?>" class="flex items-center justify-center px-[14px] py-2 border border-solid border-[#1c212633] rounded-3xl transition hover:bg-gray-400/10 cursor-pointer">
                            <span class="text-[#1C2126] font-lato text-[10px] font-medium text-center"><?php echo esc_html($cat->name) ?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h2 class="font-lato text-[#1C2126] text-2xl font-medium leading-7 text-start"><?php the_title(); ?></h2>
                        <p class="font-lato text-[#1C2126] text-base font-light leading-7 text-start"><?php the_excerpt(); ?></p>
                    </div>

                    <div class="flex justify-between w-full items-center">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="flex gap-2 justify-between items-center pl-11 pr-9 py-3  border border-solid border-[#1c212633] rounded-3xl transition hover:bg-gray-400/10 cursor-pointer" id="view-anim" data-animation="animate-bounce">
                            <span class="text-[#1C2126] text-sm font-medium font-lato">Read More</span>
                            <img :src="require('@/Assets/Icons/arrow_rigth2_black.svg')" alt="">
                        </a>

                        <span class="text-[#1C2126]/70 font-lato text-[10px] font-medium text-center"><?php the_time('d/m/Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>