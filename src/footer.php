</main>
<!-- footer -->
<?php 
    $footer_logo = get_field('footer_logo', 'general-settings');
    $footer_copyright = get_field('footer_copyright', 'general-settings'); 
    $footer_menu_icon = get_field('footer_menu_icon', 'general-settings');
    $footer_background = get_field('footer_background', 'general-settings');
    $footer_menu = get_field('footer_menu', 'general-settings');
    $menu_login_items = get_field('menu_login_items', 'general-settings');
	$footer_menu_icon_title = get_field('footer_menu_icon_title', 'general-settings');
?>
<footer class="flex flex-col bg-black border-t border-solid border-[#c4c4c44d] relative z-20" >
    <img src="<?php echo $footer_background['url'] ?>" alt="<?php echo $footer_background['alt'] ?>" class="absolute w-full h-full top-0 left-0 select-none" draggable="false">
	
    <div class="flex flex-1 min-h-[26.625rem] z-0 max-md:flex-col">
        <div class="flex flex-1 max-w-[35%] border-r border-solid border-[#c4c4c44d] max-md:border-r-0 max-md:max-w-none">
            <div class="px-6 py-5">
                <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" class="max-h-16">
            </div>
        </div>

        <div class="flex flex-1 max-md:hidden">
            <div class="flex-1 border-r border-solid border-[#c4c4c44d]">
                <div class="flex flex-col gap-0 items-start px-6 py-5">
                    <h3 class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-normal uppercase rtl:text-lg"><?php echo $footer_menu_icon_title; ?></h3>

                    <div class="flex flex-col gap-0 items-start">
                        <?php if(!empty($footer_menu_icon)) : ?>
                            <?php foreach ($footer_menu_icon as $item) : ?>
                                <?php if(!empty($item['url'])) : ?>
                                <a href="<?php echo $item['url']['url']; ?>">
                                <?php endif; ?>
                                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" class="h-[5rem] object-contain">
                                <?php if(!empty($item['url'])) : ?>
                                </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <?php if(!empty($footer_menu)) : ?>
            <?php foreach ($footer_menu as $item) : ?>
            <div class="flex-1 border-r border-solid border-[#c4c4c44d]">
                <div class="flex flex-col gap-6 items-start px-6 py-5">
                    <h3 class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-normal uppercase rtl:text-lg"><?php echo $item['title']; ?></h3>

                    <div class="flex flex-col gap-5 items-start">
                        <?php if(!empty($item['menu'])) : ?>
                        <?php foreach ($item['menu'] as $itemMenu) : ?>

						<?php if(!empty($itemMenu['url'])) : ?>
							<a href="<?php echo $itemMenu['url']['url']; ?>" target="<?php echo $itemMenu['url']['target']; ?>" class="text-white/40 text-sm font-lato rtl:font-droidSansArabic font-medium leading-7 rtl:text-base"><?php echo  (!empty($itemMenu['title'])) ? $itemMenu['title'] : $itemMenu['url']['name']; ?></a>
						<?php elseif(!empty($itemMenu['title'])) : ?>
							<span class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-normal rtl:text-base cursor-pointer"><?php echo $itemMenu['title']; ?></span>
						<?php endif; ?>

                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- mobile -->
        <div class="hidden gap-0 max-md:flex flex-col">
            <div class="border-b border-solid border-[#c4c4c44d]">
                <div class="flex flex-col gap-0 items-start px-6 py-5">
                    <h3 class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-normal uppercase rtl:text-lg"><?php echo $footer_menu_icon_title; ?></h3>

                    <div class="flex flex-col gap-0 items-start">
                        <?php if(!empty($footer_menu_icon)) : ?>
                            <?php foreach ($footer_menu_icon as $item) : ?>
                                <?php if(!empty($item['url'])) : ?>
                                <a href="<?php echo $item['url']['url']; ?>">
                                <?php endif; ?>

                                    <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>" class="h-[5rem] object-contain">

                                <?php if(!empty($item['url'])) : ?>
                                </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php if(!empty($footer_menu)) : ?>
            <?php foreach ($footer_menu as $item) : ?>
            <div class="border-r border-solid border-[#c4c4c44d] flex">
                <div class="flex-1">
                    <div class="flex flex-col gap-6 items-start px-6 py-5">
                        <h3 class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-normal uppercase"><?php echo $item['title']; ?></h3>

                        <div class="flex flex-col gap-5 items-start">
                            <?php if(!empty($item['menu'])) : ?>
                            <?php foreach ($item['menu'] as $itemMenu) : ?>
								<?php if(!empty($itemMenu['url'])) : ?>
									<a href="<?php echo $itemMenu['url']['url']; ?>" target="<?php echo $itemMenu['url']['target']; ?>" class="text-white/40 text-sm font-lato rtl:font-droidSansArabic font-medium leading-7 rtl:text-lg"><?php echo  (!empty($itemMenu['title'])) ? $itemMenu['title'] : $itemMenu['url']['name']; ?></a>
								<?php elseif(!empty($itemMenu['title'])) : ?>
									<span class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-normal rtl:text-lg"><?php echo $itemMenu['title']; ?></span>
								<?php endif; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- end mobile -->

        <div class="flex max-w-[20%] flex-1 max-md:max-w-none rtl:border-r rtl:border-solid rtl:border-[#c4c4c44d]">
            <div class="flex flex-col w-full">
                <?php if(!empty($menu_login_items)) : ?>
                <?php foreach ($menu_login_items as $item) : ?>
					<?php if(!empty($item['url'])) : ?>
					<a href="<?php echo $item['url']['url']; ?>">
					<?php endif; ?>
                <button class="flex items-center gap-[0.625rem] border-b border-solid border-[#c4c4c44d] max-md:border-t px-6 py-5 w-full transition hover:bg-white/10 cursor-pointer">
					<?php if(!empty($item['icon'])) : ?>
					<img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" class="w-5">
					<?php endif; ?>
                    
					<span class="text-sm text-white/40 font-lato rtl:font-droidSansArabic font-medium uppercase rtl:text-lg"><?php echo $item['title']; ?></span>
                </button>
					<?php if(!empty($item['url'])) : ?>
					</a>
					<?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="flex border-t border-solid border-[#c4c4c44d] z-0">
        <div class="flex items-start flex-1 border-r border-solid border-[#c4c4c44d]">
            <span class="text-[0.625rem] font-lato rtl:font-droidSansArabic py-6 px-[4.375rem] text-white/60"><?php echo $footer_copyright; ?></span>
        </div>

        <div class="flex max-w-[20%] flex-1 max-md:hidden"></div>
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
			let formOpenButton = document.querySelectorAll('#formOpenButton');
			let stayForm = document.getElementById('stayForm');
			
			formOpenButton.forEach((button) => {
				button.addEventListener('click', (e) => {
					openForm();
				});
			});

			formWrapper.addEventListener('click', (e) => {
				const target = e.target;
				if(e.target.getAttribute('type') == 'submit') {
					return;
				}

				console.log(target !== stayForm);
				console.log(!stayForm.contains(target));
				if (target !== stayForm && !stayForm.contains(target) && target) {
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
		<div id="stayForm" class="bg-white px-[5rem] py-[5.625rem] flex flex-col gap-[3.125rem] max-w-[46.875rem] rounded-3xl z-50 scale-[0.7]">
			<?php 
				$num = 6; // 11
				if(pll_current_language() == 'ar') {
					$num = 4; // 12
				}
				echo do_shortcode("[ninja_form id=$num]");
			?>
		</form>
	</div>
	<!-- Stay Connected from -->
</footer>
<?php wp_footer (); ?>