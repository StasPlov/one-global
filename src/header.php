<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="max-md:text-[12px]">

	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">

		<?php wp_head(); ?>
	</head>

	<body>
		<!-- header -->
		<header class="sticky top-[0rem] z-20">
			<nav class="bg-black h-[var(--header-menu-height)] flex justify-between border-b border-solid border-[#c4c4c44d]">
				<div class="flex px-5 flex-1 items-center justify-center border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10 ">
					<?php $logo = get_field('main_logo', 'general-settings'); ?>
					<a href="<?php echo pll_home_url()?>">
						<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" class="max-h-16">
					</a>
				</div>
				
				<?php $topMenuList = get_field('top_menu', 'general-settings'); ?>
				<?php if(is_array($topMenuList)): ?>
				<?php foreach($topMenuList as $item ) : ?>
				<a href="<?php echo $item['item']['url']; ?>" target="<?php echo $item['item']['target']; ?>" title="<?php echo $item['item']['title']; ?>" class="max-md:hidden flex px-5 flex-1 items-center justify-center border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10 group">
					<span class="text-sm text-white transition uppercase"><?php echo $item['item']['name']; ?></span>
				</a>
				<?php endforeach; ?>
				<?php endif; ?>

				<div class="flex px-5 flex-1 items-center justify-center gap-4 border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10">
					<div class="flex flex-1 justify-center max-md:hidden">
						<div class="flex gap-4 items-center">

							<?php foreach(pll_the_languages(['raw' => true]) as $item ) : ?>
							<a href="<?php echo $item['url']; ?>" class="first:border-r first:border-solid first:border-white first:pr-4 rtl:first:border-l rtl:first:border-solid rtl:first:border-white rtl:first:pl-4">
							<div class="flex gap-3 min-w-max items-center">
								<span class="text-sm text-white capitalize">
									<?php echo $item['slug'];  ?>
								</span>
							</div>
							</a>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="flex flex-1 justify-center">
						<img src="<?php echo get_template_directory_uri().'/assets/Icons/menu_burger.svg'; ?>" alt="menu icon" class="min-w-[1.875rem]" id="main-menu-button">
					</div>
				</div>
			</nav>

			<!-- menu -->
			<div class="bg-black/80 absolute max-w-[calc(100%/2)] right-0 w-full h-[37.5rem] max-md:max-w-none max-md:h-screen flex max-md:flex-col max-md:justify-between hidden rtl:right-auto rtl:left-0" id="main-menu">
				<div class="flex flex-col gap-24 py-14 px-28 w-full max-md:py-9 max-md:px-16">
					<div class="flex justify-end max-md:hidden rtl:justify-start">
						<span class="text-white text-4xl opacity-50 z-0 cursor-pointer transition-all hover:rotate-180 hover:opacity-90" id="main-menu-button-close">✕</span>
					</div>
					
					<?php $mainMenuList = get_field('main_menu', 'general-settings');?>
					<div class="grid grid-flow-col grid-rows-6 gap-4 w-full text-start max-md:flex max-md:flex-col max-md:items-end">
						<?php if(!empty($mainMenuList)) : ?>
						<?php foreach ($mainMenuList as $item) : ?>
						<a href="<?php echo $item['item']['url']; ?>" target="<?php echo $item['item']['target']; ?>" title="<?php echo $item['item']['title']; ?>">
						<li class="flex cursor-pointer">
							<span class="text-white transition hover:text-[#057EED] text-xl"><?php  echo $item['item']['name']; ?></span>
						</li>
						</a>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php  
					$menu_login_items = get_field('menu_login_items', 'general-settings');
				?>
				<div class="hidden flex-col w-full mb-[var(--header-menu-height)] max-md:flex">
					<div class="flex justify-center">
						<div class="flex gap-8">
							<?php foreach(pll_the_languages(['raw' => true]) as $item ) : ?>
							<a href="<?php echo $item['url']; ?>">
							<div class="flex gap-3 min-w-max items-center px-6 py-5">
								<span class="text-sm text-white">
									<?php echo $item['name'];  ?>
								</span>
							</div>
							</a>
							<?php endforeach; ?>
						</div>
					</div>

					<?php if(!empty($menu_login_items)) : ?>
						<?php foreach ($menu_login_items as $item) : ?>
							<?php if(!empty($item['url'])) : ?>
								<a href="<?php echo $item['url']; ?>">
							<?php endif; ?>
							<button class="flex items-center gap-[0.625rem] border-b border-solid border-[#c4c4c44d] max-md:border-t px-6 py-5 w-full transition hover:bg-white/10 cursor-pointer">
								<?php if(!empty($item['icon'])) : ?>
								<img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>" class="w-5">
								<?php endif; ?>
								<span class="text-sm text-white/40 font-lato font-medium uppercase"><?php echo $item['title']; ?></span>
							</button>
							<?php if(!empty($item['url'])) : ?>
								</a>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- menu end -->
		</header>
		<!-- header end -->
		
		<main>