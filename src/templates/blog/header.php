<!-- header -->
<?php 
    $title = get_field('title');
    $description = get_field('description');
    $image = get_field('image');
?>

<div class="w-full">
    <div class="w-full h-full grid grid-cols-2 items-center max-md:flex max-md:flex-col-reverse">
        <!-- mobile -->
        <div class="hidden max-md:px-[2.1875rem] max-md:flex max-md:pb-16 max-md:pt-20">
            <?php if(!empty($description)) : ?>
            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem]">
                <?php echo $description; ?>
            </span>
            <?php endif; ?>
        </div>
        <!-- end mobile -->

        <div class="flex flex-col flex-1 items-start gap-7 pl-[11.25rem] pr-[7.5rem] sticky top-[var(--header-menu-height)] max-md:px-[2.1875rem] max-md:absolute">
            <?php if(!empty($title)) : ?>
            <h1 class="text-[#1C2126] text-[5rem] font-caudex rtl:font-droidSansArabic italic max-md:text-white"><?php echo $title; ?></h1>
            <?php endif; ?>

            <?php if(!empty($description)) : ?>
            <span class="text-[#1C2126] font-lato rtl:font-droidSansArabic text-lg font-light leading-7 text-start max-w-[23.125rem] max-md:hidden">
                <?php echo $description; ?>
            </span>
            <?php endif; ?>
        </div>

        <?php if(!empty($image)) : ?>
        <div class="flex-1 h-full w-full">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" draggable="false" class="h-full w-full object-cover select-none">
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- header end -->