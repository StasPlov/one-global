<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>

	<body>
		<header class="relative z-10">
			<nav class="bg-black min-h-[90px] flex justify-between border-b border-solid border-[#c4c4c44d]">
				<div class="flex px-5 flex-1 items-center justify-center border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10 ">
					<img :src="require('@/Assets/logo.png')" alt="ONE GLOBAL HOLDING" class="max-h-16">
				</div>

				<div class="flex px-5 flex-1 items-center justify-center border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10 group">
					<span class="text-sm text-white group-hover:text-[#057EED] transition">ONE GLOBAL Innovation</span>
				</div>

				<div class="flex px-5 flex-1 items-center justify-center border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10 group">
					<span class="text-sm text-white group-hover:text-[#057EED] transition">ONE GLOBAL Hub</span>
				</div>

				<div class="flex px-5 flex-1 items-center justify-center border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10 group">
					<span class="text-sm text-white group-hover:text-[#057EED] transition">ONE GLOBAL Capital</span>
				</div>

				<div class="flex px-5 flex-1 items-center justify-center gap-4 border-r border-solid border-[#c4c4c45e] cursor-pointer transition hover:bg-white/10" >
					<div class="flex flex-1 justify-center">
						<div class="flex gap-4">
							<div class="flex gap-3 min-w-max">
								<img :src="require('../Assets/Icons/planet.svg')" alt="planet icon">
								<span class="text-sm text-white">English</span>
							</div>
							
							<img :src="require('../Assets/Icons/arrow_right.svg')" alt="arrow icon">
						</div>
					</div>

					<div class="flex flex-1 justify-center">
						<img :src="require('../Assets/Icons/menu_burger.svg')" alt="menu icon" class="min-w-[30px]" @click="menuIsActive = !menuIsActive">
					</div>
				</div>
			</nav>

			<Transition>
				<HeaderMenu v-if="menuIsActive"
				></HeaderMenu>
			</Transition>
		</header>
		
		<main>