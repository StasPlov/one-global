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
            <p class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[23.125rem]">
                Posuere interdum mattis eu ipsum. Eget venenatis mauris eget eu molestie integer donec. 
                Cursus non purus in cras arcu. Aliquam et elit id vulputate hendrerit vestibulum justo pharetra consequat.
            </p>
        </div>
        <!-- end mobile -->

        <div class="flex flex-col flex-1 items-start gap-7 pl-[11.25rem] pr-[7.5rem] sticky top-[var(--header-menu-height)] max-md:px-[2.1875rem] max-md:absolute">
            <h1 class="text-[#1C2126] text-[5rem] font-caudex italic max-md:text-white"><?php echo $title; ?></h1>

            <span class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[23.125rem] max-md:hidden">
                <?php echo $description; ?>
            </span>
        </div>

        <div class="flex-1 h-full w-full">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" draggable="false" class="h-full w-full object-cover select-none">
        </div>
    </div>
</div>
<!-- header end -->