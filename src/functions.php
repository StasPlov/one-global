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



function handle_stayconnected_form_submission() {
	$recaptcha = $_POST['g-recaptcha-response'];
	if(empty($recaptcha)) {
		wp_send_json(false);
	}

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



function handle_contacts_form_submission() {
	$recaptcha = $_POST['g-recaptcha-response'];
	if(empty($recaptcha)) {
		wp_send_json(false);
	}

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
	$recaptcha = $_POST['g-recaptcha-response'];
	if(empty($recaptcha)) {
		wp_send_json(false);
	}

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


function handle_get_careers() {

	$carrers_category = trim($_POST['carrers_category']);
	$carrers_job_type = trim($_POST['carrers_job_type']);
	$carrers_location = trim($_POST['carrers_location']);
	$search = trim($_POST['search']);
	$post_id = trim($_POST['post_id']);

	$taxList = [];

	if(!empty($carrers_category)) {
		array_push($taxList, [
			'taxonomy' => 'carrers-category',
			'field' => 'slug',
			'terms' => $carrers_category
		]);
	}

	if(!empty($carrers_job_type)) {
		array_push($taxList, [
			'taxonomy' => 'carrers-job-type',
			'field' => 'slug',
			'terms' => $carrers_job_type
		]);
	}

	if(!empty($carrers_location)) {
		array_push($taxList, [
			'taxonomy' => 'carrers-location',
			'field' => 'slug',
			'terms' => $carrers_location
		]);
	}


	$args = [
		'post_type' => 'careers',
		'posts_per_page' => 10
	];

	if(!empty($search)) {
		$args = [
			'post_type' => 'careers',
			's' => $search
		];
	}

	if(!empty($taxList)) {
		$args = [
			'post_type' => 'careers',
			'posts_per_page' => 10,
			'tax_query' => $taxList
		];

		if(!empty($search)) {
			$args = [
				'post_type' => 'careers',
				'posts_per_page' => 10,
				'tax_query' => $taxList,
				's' => $search
			];
		}
	}

	$posts = (new WP_Query($args))->get_posts();
	$result = [];

	foreach($posts as $post ) {
		array_push($result, [
			'title' => get_the_title($post),
			'excerpt' => get_the_excerpt($post),
			'link' => get_permalink($post),
			'info' => get_field('info', $post),
			'content_button' => get_field('content_button', $post_id)
		]);
	}

	$json = json_decode( json_encode( $result ), true );
	wp_send_json($json);
}
add_action('wp_ajax_get_careers', 'handle_get_careers');
add_action('wp_ajax_nopriv_get_careers', 'handle_get_careers');


function handle_search_blog() {
	$search = trim($_POST['search-input']);
	$post_id = trim($_POST['post-id']);

	$args = [
		'post_type' => 'blog',
		'posts_per_page' => 10,
		's' => $search
	];

	if(!empty($search)) {
		$args = [
			'post_type' => 'blog',
			'posts_per_page' => 10,
			's' => $search,
		];
	}

	$posts = (new WP_Query($args))->get_posts();
	$result = [];

	foreach($posts as $post ) {
		$terms = wp_get_post_terms($post->ID, 'blog-category');
		$categoryList = [];

		foreach ($terms as $term) {
			array_push($categoryList, [
				'name' => $term->name,
				'link' => get_term_link($term)
			]);
		}

		array_push($result, [
			'title' => get_the_title($post),
			'excerpt' => get_the_excerpt($post),
			'link' => get_permalink($post),
			'blog-category' => $categoryList,
			'image' => get_field('image', $post->ID),
			'content_button' => get_field('content_button', 102)
		]);
	}

	$json = json_decode( json_encode( $result ), true );
	wp_send_json($json);
}
add_action('wp_ajax_search_blog', 'handle_search_blog');
add_action('wp_ajax_nopriv_search_blog', 'handle_search_blog');


function handle_submit_resume_form() {
	$recaptcha = $_POST['g-recaptcha-response'];

	if(empty($recaptcha)) {
		wp_send_json(false);
	}

	$full_name = (string)sanitize_text_field($_POST['full_name']);
	$phone = (string)sanitize_text_field($_POST['phone']);
	$email = (string)sanitize_email($_POST['email']);
	$chekbox_rules = (bool)$_POST['chekbox_rules']; // chekbox_rules

	// Создание записи с полученными данными формы
	$post_data = array(
		'post_title' => 'Resume',
		'post_type' => 'resume-from', // Замените 'feedback' на тип записи, который вы хотите использовать для хранения обратной связи
		'post_status' => 'publish',
		'meta_input'  => [
			'full_name' => $full_name,
			'phone' => $phone,
			'email' => $email,
			'agree' => $chekbox_rules
		]
	);

	$post_id = wp_insert_post($post_data);

	if(!empty($post_id)) {
		$attachment_id = media_handle_upload('file', $_POST['post_id'] ); //multipart/form-data
		if(!is_wp_error($attachment_id)) {
			update_field('resume', $attachment_id, $post_id);
		} 
	}

	// Отправка ответа обратно клиентской части
	wp_send_json(true);
}
add_action('wp_ajax_submit_resume_form', 'handle_submit_resume_form');
add_action('wp_ajax_nopriv_submit_resume_form', 'handle_submit_resume_form');




function handle_load_more() {
	$post_type = trim($_POST['post_type']);
	$post_id = trim($_POST['post_id']);
	$page = (int)trim($_POST['page']);

	$args = [
		'post_type' => $post_type,
		'posts_per_page' => 5,
		'paged' => $page
	];

	$posts = (new WP_Query($args))->get_posts();
	$result = [];

	foreach($posts as $post ) {
		array_push($result, [
			'title' => get_the_title($post),
			'excerpt' => get_the_excerpt($post),
			'link' => get_permalink($post),
			'image' => get_field('image', $post),
			/* 'content_button' => get_field('content_button', $post_id) */
		]);
	}

	$json = json_decode( json_encode( $result ), true );
	wp_send_json($json);
}
add_action('wp_ajax_load_more', 'handle_load_more');
add_action('wp_ajax_nopriv_load_more', 'handle_load_more');