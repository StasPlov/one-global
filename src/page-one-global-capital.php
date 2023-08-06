<?php /* Template Name: Page One Global Capital */ ?>
<?php get_header(); ?>

<!-- header -->
<?php 
    $header_button = get_field('header_button');
    $header_background = get_field('header_background');
    $header_logo = get_field('header_logo');
    $header_title = get_field('header_title');
?>
<div class="relative w-full h-screen overflow-hidden">
	

    <div class="px-[11.25rem] w-full h-full flex items-center justify-start max-md:px-[2.1875rem]">
        <?php if(!empty($header_background)) :?>
        <video class="absolute w-full h-full object-cover top-0 left-0" autoplay loop muted playsinline preload="auto">
            <source src="<?php echo $header_background['url']; ?>" type="video/mp4">
        </video>
        <?php endif; ?>

        <div class="bg-black/30 absolute w-full h-full top-0 left-0"></div>
        
        <div class="flex flex-col items-start gap-12">
            <?php if(!empty($header_logo)) :?>
            <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" class="h-40 z-0 object-contain">
            <?php endif; ?>
            
            <?php if(!empty($header_title)) :?>
            <h1 class="text-4xl text-white z-0 text-start tracking-wide leading-normal max-w-[37.5rem]"><?php echo $header_title; ?></h1>
            <?php endif; ?>

            <?php if($header_button['is_enable']) :?>
            <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#5850E9] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0" >
                <span class="text-white text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $header_button['text']; ?></span>
                <div class="group-hover:animate-bounce">
                    <img src="<?php echo $header_button['icon']['url']; ?>" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                </div>
            </button>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- header end -->

<!-- about -->
<?php 
    $about_title = get_field('about_title');
    $about_description = get_field('about_description');
    $about_image = get_field('about_image');
?>
<div class="w-full min-h-screen bg-white relative">
	

    <div class="flex py-[11.25rem] gap-28 h-full max-md:flex-col-reverse">
        <div class="hidden flex-col gap-7 max-md:flex px-[2.1875rem]"  data-animation="animate-fadeInRight" data-duration="1.5s">
            <span class="font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[33.875rem]">
                <?php echo $about_description; ?>
            </span>
        </div>
        
        <div class="flex-1 relative max-h-screen max-w-[40.625rem] max-md:max-w-none"  data-animation="animate-fadeInLeft" data-duration="2s">
            <?php if($about_image) :?>
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="h-full w-full object-cover max-h-[46.5625rem]" draggable="false">
            <?php endif; ?>
        </div>

        <div class="flex flex-1 items-center justify-center max-md:px-[2.1875rem]">
            <div class="flex flex-col items-start gap-28">
                <div class="flex flex-col gap-14">
                    <h2 class="text-[5rem] font-medium font-caudex rtl:font-droidSansArabic italic text-start leading-none"  data-animation="animate-fadeInRight" data-duration="2.5s"><?php echo $about_title; ?></h2>

                    <div class="flex flex-col gap-7 max-md:hidden font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[33.875rem]"  data-animation="animate-fadeInRight" data-duration="1.5s">
                        <?php echo $about_description; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->

<!-- what does -->
<?php 
    $what_does_title = get_field('what_does_title');
    $what_does_description_first = get_field('what_does_description_first');
    $what_does_description_two = get_field('what_does_description_two');
?>
<div class="w-full min-h-screen bg-black relative">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 5 (2).svg'?>" alt="" class="absolute top-[10%] right-[8%] select-none" draggable="false">
			
	

    <div class="flex flex-col gap-[18.75rem] py-[11.25rem] z-0">
        <div class="flex flex-col gap-32 px-[11.25rem] z-0 max-md:px-[2.1875rem]">
            <h2 class="text-[5rem] text-white font-medium font-caudex rtl:font-droidSansArabic italic text-start leading-[5.625rem]"  data-animation="animate-fadeInLeft" data-duration="1.5s"><?php echo $what_does_title; ?></h2>

            <div class="flex gap-[9.5rem] max-md:flex-col max-md:gap-7">
                <div class="flex-1 flex flex-col gap-7 font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-white text-start max-w-[33.875rem]"  data-animation="animate-fadeInLeft" data-duration="2s">
                    <?php echo $what_does_description_first; ?>
                </div>

                <div class="flex-1 flex flex-col gap-7 font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-white text-start max-w-[33.875rem]"  data-animation="animate-fadeInRight" data-duration="3s">
                    <?php echo $what_does_description_two; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- what does end -->

<!-- optimal -->
<?php 
    $optimal_returns_title = get_field('optimal_returns_title');
    $optimal_returns_items = get_field('optimal_returns_items'); 
?>
<div class="min-h-screen w-full relative">
	

    <div class="flex flex-col -z-0">
        <div class="flex w-full pt-[9.375rem] px-[11.25rem] items-center relative max-md:px-[2.1875rem] max-md:py-[6.25rem]">
            <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 8 (2).svg'?>" alt="" class="absolute top-0 left-0 select-none max-md:hidden z-10" draggable="false">
            <h2 class="text-[5rem] text-[#14191D] font-medium font-caudex rtl:font-droidSansArabic italic text-start leading-[5.625rem]"  data-animation="animate-fadeInLeft" data-duration="1.5s"><?php echo $optimal_returns_title; ?></h2>
        </div>

        <div class="flex flex-col">

            <!-- info block -->
            <?php foreach($optimal_returns_items as $item ): ?>
            <div class="w-full min-h-screen bg-white relative max-md:min-h-max">
                <?php if(!empty($item['use_background_effects'])) : ?>
                <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 7.svg'?>" alt="" class="absolute bottom-[15%] right-0 select-none z-0 max-md:hidden" draggable="false">
                <?php endif; ?>

                <div class="flex py-[11.25rem] gap-28 h-full max-md:flex-col-reverse max-md:pt-0 <?php echo ($item['is_revers']) ? 'flex-row-reverse' : ''; ?>">
                    <div class="flex flex-1 items-center justify-center z-0">
                        <div class="flex flex-col gap-14">
                            <h2 class="text-[4.375rem] font-medium font-caudex rtl:font-droidSansArabic italic text-start text-[#1C2126]"><?php echo $item['title']; ?></h2>

                            <div class="flex flex-col gap-7 font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-[#1C2126] text-start max-w-[23.125rem]">
                                <?php echo $item['description']; ?>
                            </div>
                        </div>
                    </div>

                    <?php if(!empty($item['image'])) : ?>
                    <div class="flex-1 relative max-h-screen">
                        <img src="<?php echo $item['image']['url']; ?>" alt="arrow icon" class="h-full w-full object-cover">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- optimal end -->

<!-- for investors -->
<?php 
    $for_investors_title = get_field('for_investors_title');
    $for_investors_description = get_field('for_investors_description'); 
    $for_investors_button = get_field('for_investors_button'); 
?>
<div class="w-full min-h-screen bg-black relative">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 6 (2).svg'?>" alt="" class="absolute top-[10%] right-0 select-none" draggable="false">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Ellipse 2323.svg'?>" alt="" class="absolute top-0 left-0 select-none" draggable="false">

	

    <div class="flex flex-col gap-[18.75rem] py-[11.25rem] z-0">
        <div class="flex flex-col gap-32 px-[11.25rem] z-0 max-md:px-[2.1875rem]">
            <h2 class="text-[5rem] text-white font-medium font-lato rtl:font-droidSansArabic text-start leading-[5.625rem]"  data-animation="animate-fadeInLeft" data-duration="1.5s"><?php echo $for_investors_title; ?></h2>

            <div class="flex gap-[9.5rem] max-md:flex-col">
                <div class="flex-1 flex flex-col gap-7 font-lato rtl:font-droidSansArabic font-light text-lg leading-7 text-white text-start max-w-[33.875rem]"  data-animation="animate-fadeInLeft" data-duration="2s">
                    <?php echo $for_investors_description; ?>
                </div>

                <div class="flex-1 flex items-center justify-center max-md:justify-start">
                    <?php if(!empty($for_investors_button) && $for_investors_button['is_enable']) : ?>
                    <?php if(!empty($for_investors_button['url'])) : ?>
                    <a href="<?php echo $for_investors_button['url']; ?>">
                    <?php endif; ?>
                    <button id="formOpenButton" class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0"  data-animation="animate-fadeInLeft" data-duration="3s">
                        <span class="text-white text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $for_investors_button['text']; ?></span>
                        <?php if(!empty($for_investors_button['icon'])) : ?>
                        <div class="group-hover:animate-bounce">
                            <img src="<?php echo $for_investors_button['icon']['url']; ?>" alt="<?php echo $for_investors_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                        </div>
                        <?php endif; ?>
                    </button>
                        <?php if(!empty($for_investors_button['url'])) : ?>
                        </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

	<?php
		$stay_connected_from_form_title = get_field('stay_connected_from_form_title', 'general-settings');
		$stay_connected_from_form_description = get_field('stay_connected_from_form_description', 'general-settings');
		$stay_connected_from_inputs = get_field('stay_connected_from_inputs', 'general-settings');
		$stay_connected_from_rules = get_field('stay_connected_from_rules', 'general-settings');
		$stay_connected_from_button = get_field('stay_connected_from_button', 'general-settings');
		$stay_connected_from_agreement_policy = get_field('stay_connected_from_agreement_policy', 'general-settings');
	?>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', () => {
			let formWrapper = document.getElementById('stayFormWrapper');
			let formOpenButton = document.getElementById('formOpenButton');
			let stayForm = document.getElementById('stayForm');
			
			formOpenButton.addEventListener('click', (e) => {
				openForm();
			});

			formWrapper.addEventListener('click', (e) => {
				const target = e.target;

				if (target !== stayForm && !stayForm.contains(target)) {
					closeForm();
				}
			});

			function openForm() {
				formWrapper.classList.remove('hidden');	
			}

			function closeForm(e) {
				formWrapper.classList.add('hidden');
			}

			function toogleForm() {
				formWrapper.classList.toggle('hidden');	
			}
		});
	</script>
	<!-- Stay Connected from -->
	<div id="stayFormWrapper" class="fixed top-0 left-0 w-full h-full flex justify-center items-center after:content-normal after:absolute after:bg-black after:opacity-50 after:w-full after:h-full after:top-0 after:left-0 overflow-auto py-[100vh] z-50 hidden">
		<form id="stayForm" data-endpoint="<?php echo admin_url('admin-ajax.php'); ?>" class="bg-white px-[5rem] py-[5.625rem] flex flex-col gap-[3.125rem] max-w-[46.875rem] rounded-3xl z-50 scale-[0.7]">
			<div class="flex flex-col gap-8">
				<h2 class="text-[#14191D] text-caudex text-[4rem] font-medium italic leading-none"><?php echo $stay_connected_from_form_title; ?></h2>
				<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic font-light">
					<?php echo $stay_connected_from_form_description; ?>
				</span>
			</div>

			<div class="flex flex-col gap-[1.375rem] roundex-xl">

				<?php if(!empty($stay_connected_from_inputs)) : ?>
				<div class="flex flex-col gap-[1.0625rem]">
					<input type="text" name="first_name" maxlength="255" placeholder="<?php echo $stay_connected_from_inputs['first_name']; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium">
					<input type="text" name="last_name" maxlength="255" placeholder="<?php echo $stay_connected_from_inputs['last_name'] ?? ''; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium">
					<input type="email" name="email" maxlength="255" placeholder="<?php echo $stay_connected_from_inputs['email_address'] ?? ''; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium">
					<input type="text" name="phone" maxlength="13" placeholder="<?php echo $stay_connected_from_inputs['phone_number'] ?? ''; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium">
					<input type="text" name="company" maxlength="500" placeholder="<?php echo $stay_connected_from_inputs['company_name'] ?? ''; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium">
					<input type="text" name="preferences" maxlength="2500" placeholder="<?php echo $stay_connected_from_inputs['investment_preferences']; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium">
					<textarea name="message" maxlength="2500" placeholder="<?php echo $stay_connected_from_inputs['additional_comments'] ?? ''; ?>" class="border border-solid border-[#c4c4c480] bg-[#c4c4c41a] py-[0.9375rem] px-[1.875rem] outline-0 rounded-xl font-medium"></textarea>
				</div>
				<?php endif; ?>

				<div class="flex flex-col gap-4">
					<?php if(!empty($stay_connected_from_rules)) : ?>
					<?php foreach($stay_connected_from_rules as $key => $item) : ?>
					<div class="flex gap-2">
						<input type="checkbox" name="chekbox_rules_<?php echo $key; ?>" checked="<?php echo $item['checkbox']; ?>" class="checked:invert checked:grayscale opacity-[0.4] contrast-[0.99] w-[1.5625rem] h-[1.5625rem]">
						<span class="font-lato rtl:font-droidSansArabic text-base font-light text-[#1c212680] text-start"><?php echo $item['description']; ?></span>
					</div>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
				
				<?php $captcha_key = get_field('captcha_key', 'general-settings'); ?>
                <div class="g-recaptcha" data-sitekey="<?php echo $captcha_key; ?>"></div>
				
				<div class="flex flex-col gap-4 items-start">
					<?php if(!empty($stay_connected_from_button) && $stay_connected_from_button['is_enable'] && $stay_connected_from_button['text']) : ?>
					<button type="submit" class="relative flex gap-2 justify-between items-center px-[2.625rem] py-[0.875rem] border border-solid border-[#057EED] rounded-3xl transition duration-300 group hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
						<span class="text-[#004C92] text-sm font-extrabold font-lato rtl:font-droidSansArabic transition duration-300"><?php echo $stay_connected_from_button['text']; ?></span>
						
						<?php if(!empty($stay_connected_from_button['icon'])) : ?>
						<div class="ml-[0.625rem]">
							<img src="<?php echo $stay_connected_from_button['icon']['url']; ?>" alt="<?php echo $stay_connected_from_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
						</div>
						<?php endif; ?>
					</button>
					<?php endif; ?>

					<span class="text-[#1C2126] font-lato rtl:font-droidSansArabic font-ligh text-xs text-start"><?php $stay_connected_from_agreement_policy?></span>
				</div>
			</div>
		</form>
	</div>
	<!-- Stay Connected from -->
</div>
<!-- for investors end -->

<!-- investing in digital -->
<?php 
    $investing_image = get_field('investing_image');
    $investing_title = get_field('investing_title'); 
    $investing_button = get_field('investing_button'); 
?>
<div class="w-full min-h-screen bg-white py-[10.625rem] relative">
	

    <div class="flex gap-28 justify-start items-center h-full max-md:flex-col">
        <div class="flex-1 z-0 pl-[5.375rem] max-md:p-0">
            <img src="<?php echo $investing_image['url']; ?>" alt="<?php echo $investing_image['alt']; ?>" class="h-full w-full object-cover max-h-[46.5625rem]">
        </div>

        <div class="flex flex-col gap-[4.1875rem] flex-1 w-[57%] z-0 items-start max-md:px-[2.1875rem] max-md:max-w-none max-md:w-full">
            <h2 class="text-5xl font-normal text-[#1C2126] font-caudex rtl:font-droidSansArabic italic text-start leading-[3.5rem] max-w-[34.6875rem]"><?php echo $investing_title; ?></h2>

            <?php if(!empty($investing_button) && $investing_button['is_enable']) : ?>
                <?php if(!empty($investing_button['url'])) : ?>
                <a href="<?php echo $investing_button['url']['url']; ?>">
                <?php endif; ?>
            <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c2126] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                <span class="text-[#1C2126] text-sm font-medium font-lato rtl:font-droidSansArabic group-hover:text-white transition duration-300"><?php echo $investing_button['text']; ?></span>
                
                <?php if(!empty($investing_button['icon'])) : ?>
                <div class="group-hover:animate-bounce">
                    <img src="<?php echo $investing_button['icon']['url']; ?>" alt="<?php echo $investing_button['icon']['alt']; ?>" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                </div>
                <?php endif; ?>
            </button>
                <?php if(!empty($investing_button['url'])) : ?>
                </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- investing in digital end -->

<?php get_footer(); ?>