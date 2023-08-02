<?php get_header(); ?>

<!-- Header -->
<?php 
    $header_image = get_field('header_image', 'careers-single');
    $header_title = get_field('header_title', 'careers-single');
    $button_back = get_field('button_back', 'careers-single');

    $info = get_field('info');
    $short_title = get_field('short_title');
    $content = get_field('content');

?>
<div class="relative w-full h-screen overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="px-[11.25rem] w-full h-full flex items-center justify-start bg-fixed max-md:bg-scroll bg-cover bg-center max-md:px-[2.1875rem]" style="background-image: url('<?php echo $header_image['url']; ?>')">
        <div>
            <h1 class="text-white font-caudex italic font-normal text-[5rem] text-start">
                <?php echo $header_title; ?>
            </h1>
        </div>
    </div>
</div>
<!-- Header end -->

<!-- Title -->
<div class="w-full relative">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 4 (1).svg'?>" alt="" class="absolute top-[26%] right-0 select-none z-10 animate-flicker" draggable="false">

    <div class="flex flex-col gap-10 pl-[11.25rem] pr-[25rem] pt-[8.125rem] pb-[10.375rem] max-md:px-[2.1875rem]">
        <div class="flex justify-between">
            <?php if (!empty($button_back['url'])) : ?>
            <a href="<?php echo $button_back['url']['url']; ?>">
            <?php endif; ?>
            <button class="relative flex gap-2 justify-between items-center pl-0 pr-9 py-3 rounded-3xl transition-all duration-300 group hover:bg-[#1c2126] hover:pl-11 hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <div class="group-hover:animate-bounce">
                    <img src="<?php echo $button_back['icon']['url']; ?>" alt="<?php echo $button_back['icon']['alt']; ?>" class=" transition duration-300 group-hover:scale-y-150 group-hover:-translate-x-3 ">
                </div>
                <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">
                    <?php echo $button_back['text']; ?>
                </span>
            </button>
            <?php if (!empty($button_back['url'])) : ?>
            </a>
            <?php endif; ?>
        </div>

        <div class="flex flex-col gap-8"> 
            <h2 class="text-[#1C2126] font-caudex text-[5rem] italic font-normal text-start max-md:text-[2.5rem]"><?php the_title(); ?></h2>
            <span class="text-start"><?php echo $short_title; ?></span>
        </div>
    </div>
</div>
<!-- Title end -->

<!-- Description -->
<div class="w-full">
    <div class="flex border-t border-solid border-[#1c212633] max-md:flex-col max-md:border-t-0 max-md:pb-[3.125rem]">
        <div class="flex flex-[2]">
            <div class="flex-1 h-full flex items-center border-r border-solid border-[#1c212633] max-md:border-r-0">
                <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem]">
                    <div class="flex gap-2">

                        <?php if (!empty($info['schedule']['icon'])) : ?>
                        <img src="<?php echo $info['schedule']['icon']['url']; ?>" alt="<?php echo $info['schedule']['icon']['alt']; ?>" class="max-h-[1rem]">
                        <?php endif; ?>

                        <span class="text-[#1C2126] font-lato text-base font-medium text-start">
                            <?php echo $info['schedule']['text'];  ?>
                            </span>
                        </div>

                        <div class="flex gap-2">

                            <?php if (!empty($info['location']['icon'])) : ?>
                            <img src="<?php echo $info['location']['icon']['url']; ?>" alt="<?php echo $info['location']['icon']['alt']; ?>" class="max-h-[1rem]">
                            <?php endif; ?>

                            <span class="text-[#1C2126] font-lato text-base font-medium text-start">
                                <?php echo $info['location']['text']; ?>
                            </span>
                        </div>

                        <div class="flex gap-2">

                        <?php if (!empty($info['time']['icon'])) : ?>
                        <img src="<?php echo $info['time']['icon']['url']; ?>" alt="<?php echo $info['time']['icon']['alt']; ?>" class="max-h-[1rem]">
                        <?php endif; ?>

                        <span class="text-[#1C2126] font-lato text-base font-medium text-start">
                            <?php echo $info['time']['text']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-[37.7%] flex items-center">
            <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem] max-md:pb-0">
                <h2 class="text-[#1C2126] font-lato text-2xl font-medium text-start">Summary</h2>

                <span class="text-[#1C2126] font-lato font-light text-base text-start">
                    <?php the_content(); ?>
                </span>
            </div>
        </div>
    </div>
    
    <?php if(!empty($content)) : ?>
    <?php foreach($content as $item) : ?>
    <div class="flex border-t border-solid border-[#1c212633] max-md:flex-col max-md:pb-[8.125rem]">
        <div class="flex flex-[2]">
            <div class="flex-1 h-full flex items-center border-r border-solid border-[#1c212633] max-md:border-r-0">
                <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem] max-md:pb-0 text-[#1C2126] font-lato text-2xl font-medium text-start">
                    <?php echo $item['title']?>
                </div>
            </div>
        </div>
        <div class="flex-[37.7%] flex items-center">
            <div class="flex flex-col gap-4 px-[4.375rem] py-[3.125rem] max-md:px-[2.1875rem] max-md:py-[2.5rem] max-md:pb-0 text-[#1C2126] font-lato text-base font-light text-start">
                <?php echo $item['description']?>
            </div>
        </div>
    </div>
    <?php endforeach;?>
    <?php endif; ?>
</div>
<!-- Descriptino end -->

<!-- Apply -->

<?php 
    $form_title = get_field('form_title', 'careers-single');
    $form_description = get_field('form_description', 'careers-single');
    $form_inputs = get_field('form_inputs', 'careers-single');
    $form_info = get_field('form_info', 'careers-single');
    $form_button = get_field('form_button', 'careers-single');
    $form_check = get_field('form_check', 'careers-single');
    $form_send_button_text = get_field('form_send_button_text', 'careers-single');
    $form_background = get_field('form_background', 'careers-single');
?>
<div class="w-full relative bg-black">
    <img src="<?php echo $form_background['url']; ?>" alt="<?php echo $form_background['alt']; ?>" class="absolute w-full h-full top-0 left-0 sele" id="view-anim" draggable="false" data-animation="animate-fadeInLeft" data-duration="1s">

    <div class="flex items-center justify-center max-md:px-[2.1875rem]">
        <div class="flex flex-col gap-12 items-center">

            <div class="shadow-2xl px-[8.125rem] py-[10.625rem] max-md:rounded-none z-10 bg-white max-md:bg-transparent max-md:px-[2.1875rem]">
                <div class="flex flex-col gap-11 items-center justify-center max-w-[26.25rem] w-full">
                    <div class="flex flex-col gap-8">
                        <div class="flex flex-col gap-14">
                            <h2 class="text-[#1C2126] font-lato text-2xl font-medium text-start max-md:text-white"><?php echo $form_title; ?></h2>
                            <span class="text-[#1C2126] font-lato text-lg font-light text-start max-md:text-white"><?php echo $form_description; ?></span>
                        </div>

                        <div>
                            <div class="flex flex-col gap-8">
                                <input type="text" placeholder="<?php echo $form_inputs['full_name_placeholder']; ?>" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 max-md:text-white">
                                <input type="text" placeholder="+965 XXX-XX-XX" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 max-md:text-white">
                                <input type="text" placeholder="<?php echo $form_inputs['email_placeholder']; ?>" class="border-0 border-b border-solid border-[#1C2126] bg-transparent py-3 text-[#1C2126] outline-0 max-md:text-white">
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col gap-12 w-full">
                        <div class="flex justify-between">
                            <span class="text-[#1C2126] font-lato text-[0.75rem] font-normal max-md:text-white"><?php echo $form_info; ?></span>
                            
                            <button type="file" class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300 max-md:text-white"><?php echo $form_button['text']; ?></span>
                                <div class="group-hover:animate-bounce">
                                    <img src="<?php echo $form_button['icon']['url']; ?>" alt="<?php echo $form_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 ">
                                </div>
                            </button>
                        </div>

                        <div class="flex justify-between gap-3 items-start">
                            <img :src="require('@/assets/images/Frame 244.svg')" alt="" class="">
                            <span class="text-[#1C2126] font-lato text-[0.75rem] font-normal text-start max-md:text-white">By using this form you agree with the storage and handling of your data by this website.</span>
                        </div>

                        <button class="self-center relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                            <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300 max-md:text-white"><?php echo $form_send_button_text; ?></span>
                        </button>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- Apply end -->
<?php get_footer(); ?>