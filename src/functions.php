<?php

/**
 * Add theme support for various WordPress features.
 *
 * @return void
 */
function wp_blank_setup()
{
	// Support programmable title tag.
	add_theme_support('title-tag');

	// Support custom logo.
	add_theme_support('custom-logo');

	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wp-blank, use a find and replace
	 * to change 'wp-blank' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('wp-blank', get_template_directory() . '/languages');

	// Register top menu.
	register_nav_menus(
		array(
			'top' => esc_html__('Top Menu', 'wp-blank'),
		)
	);
}
add_action('after_setup_theme', 'wp_blank_setup');

/**
 * Specify JS bundle path.
 *
 * @return void
 */
function wp_blank_load_scripts()
{
	$script_directory = get_template_directory() . '/../dist/'; // Укажите путь к директории со скриптами
	$script_url = get_template_directory_uri() . '/../dist/'; // Укажите URL-адрес директории со скриптами

	$scripts = scandir($script_directory); // Получить список файлов в директории со скриптами

	foreach ($scripts as $script) {
		$extension = pathinfo($script, PATHINFO_EXTENSION);
		if ($extension === 'js') {
			$file = $script_url . basename($script, '.js') . '.js';

			// Подключение всех файлов JS
			wp_enqueue_script('main', $file);
		}
	}
}
add_action('wp_enqueue_scripts', 'wp_blank_load_scripts');

/**
 * Register widget area.
 *
 * @return void
 */
function wp_blank_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'wp-blank'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'wp-blank'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'wp_blank_widgets_init');

function get_menu_items_by_registered_slug($menu_slug)
{
	$menu_items = array();

	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_slug]) && $locations[$menu_slug] != 0) {
		$menu = get_term($locations[$menu_slug]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	}

	return $menu_items;
}



function handle_stayconnected_form_submission()
{
	$last_name = sanitize_text_field($_POST['last_name']);
	$first_name = sanitize_text_field($_POST['first_name']);
	$email = sanitize_email($_POST['email']);
	$phone = sanitize_text_field($_POST['phone']);
	$company = sanitize_text_field($_POST['company']);
	$preferences = sanitize_text_field($_POST['preferences']);
	$message = sanitize_textarea_field($_POST['message']);

	// Создание записи с полученными данными формы
	$post_data = array(
		'post_title' => 'Connected',
		'post_type' => 'connected', // Замените 'feedback' на тип записи, который вы хотите использовать для хранения обратной связи
		'post_status' => 'publish',
		'meta_input'  => [
			'first_name' => $last_name,
			'last_name' => $first_name,
			'email_address' => $email,
			'phone_number' => $phone,
			'company_name' => $company,
			'investment_preferences' => $preferences,
			'additional_comments' => $message,
		]
	);

	$post_id = wp_insert_post($post_data);

	// Отправка ответа обратно клиентской части
	wp_send_json(true);
}

add_action('wp_ajax_submit_stayconnected_form', 'handle_stayconnected_form_submission');
add_action('wp_ajax_nopriv_submit_stayconnected_form', 'handle_stayconnected_form_submission');



function handle_feedback_form_submission() {
	$last_name = sanitize_text_field($_POST['last_name']);
	$first_name = sanitize_text_field($_POST['first_name']);
	$email = sanitize_email($_POST['email']);
	$phone = sanitize_text_field($_POST['phone']);
	$company = sanitize_text_field($_POST['company']);
	$preferences = sanitize_text_field($_POST['preferences']);
	$message = sanitize_textarea_field($_POST['message']);

	// Создание записи с полученными данными формы
	$post_data = array(
		'post_title' => 'Connected',
		'post_type' => 'feedback', // Замените 'feedback' на тип записи, который вы хотите использовать для хранения обратной связи
		'post_status' => 'publish',
		/* 'meta_input'  => [
			'first_name' => $last_name,
			'last_name' => $first_name,
			'email_address' => $email,
			'phone_number' => $phone,
			'company_name' => $company,
			'investment_preferences' => $preferences,
			'additional_comments' => $message,
		] */
	);

	$post_id = wp_insert_post($post_data);

	// Отправка ответа обратно клиентской части
	wp_send_json(true);
}
add_action('wp_ajax_submit_feedback_form', 'handle_feedback_form_submission');
add_action('wp_ajax_nopriv_submit_feedback_form', 'handle_feedback_form_submission');



function handle_contacts_form_submission() {
	$full_name = sanitize_text_field($_POST['full_name']);
	$mobile_number = sanitize_text_field($_POST['mobile_number']);
	$email = sanitize_email($_POST['email']);
	$message = sanitize_text_field($_POST['message']);

	// Создание записи с полученными данными формы
	$post_data = array(
		'post_title' => 'Contacts',
		'post_type' => 'contacts', // Замените 'feedback' на тип записи, который вы хотите использовать для хранения обратной связи
		'post_status' => 'publish',
		'meta_input'  => [
			'full_name' => $full_name,
			'mobile_number' => $mobile_number,
			'email' => $email,
			'message' => $message,
		]
	);

	$post_id = wp_insert_post($post_data);

	// Отправка ответа обратно клиентской части
	wp_send_json(true);
}
add_action('wp_ajax_submit_contacts_form', 'handle_contacts_form_submission');
add_action('wp_ajax_nopriv_submit_contacts_form', 'handle_contacts_form_submission');

function handle_subscribe_form_submission() {
	$full_name = sanitize_text_field($_POST['full_name']);
	$email = sanitize_email($_POST['email']);

	// Создание записи с полученными данными формы
	$post_data = array(
		'post_title' => 'Subscribe',
		'post_type' => 'subscribe', // Замените 'feedback' на тип записи, который вы хотите использовать для хранения обратной связи
		'post_status' => 'publish',
		'meta_input'  => [
			'full_name' => $full_name,
			'email' => $email
		]
	);

	$post_id = wp_insert_post($post_data);

	// Отправка ответа обратно клиентской части
	wp_send_json(true);
}
add_action('wp_ajax_submit_subscribe_form', 'handle_subscribe_form_submission');
add_action('wp_ajax_nopriv_submit_subscribe_form', 'handle_subscribe_form_submission');

function devstages_video_embed( $attr, $content='' )
	{
	  if ( ! isset( $attr['poster'] ) && has_post_thumbnail() ) {
	    $poster = wp_get_attachment_image_src(
	      get_post_thumbnail_id(),
	      'poster'
	    );
	    $attr['poster'] = $poster['0'];
	  }
	  return wp_video_shortcode( $attr, $content );
	}
	
	add_shortcode( 'video', 'devstages_video_embed' );