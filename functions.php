<?php

//SetCookie("datasendet", "User send data",  0, "/", "almiproducts.com");

//error_reporting(E_ALL);
//ini_set('display_startup_errors', 1);
//ini_set('display_errors', '1');

define("COMPANY_NAME", "Almi");
define("MAIL_RESEND", "rudikov-web@yandex.ru");

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' ); 
function crb_attach_theme_options() {
	require_once __DIR__ . "/themes-fields.php";
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

//-----Блок описания вывода меню
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

register_nav_menus( array(
	'header_menu' => 'Главное меню',
	'footer_menu' => 'Меню в подвале',
) );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_post_type_support( 'page', 'excerpt' );

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action( 'wp_enqueue_scripts', 'my_assets' );
	function my_assets() {

		// Подключение стилей 

		$style_version = "1.0.10";
		$scrypt_version = "1.0.10";
		
		// wp_enqueue_style("style-modal", get_template_directory_uri()."/css/jquery.arcticmodal-0.3.css", array(), $style_version, 'all'); //Модальные окна (стили)
		// wp_enqueue_style("style-lightbox", get_template_directory_uri()."/css/lightbox.min.css", array(), $style_version, 'all'); //Лайтбокс (стили)
		// wp_enqueue_style("style-slik", get_template_directory_uri()."/css/slick.css", array(), $style_version, 'all'); //Слайдер (стили)
		
		wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all' ); // Подключение основных стилей в самом конце

		// Подключение скриптов
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'fancybox', get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), $scrypt_version , true); //Модальные окна
		
		//wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js', array(), $scrypt_version , true); //Модальные окна
		//wp_enqueue_script( 'mask', get_template_directory_uri().'/js/jquery.inputmask.bundle.js', array(), $scrypt_version , true); //маска для инпутов
		//wp_enqueue_script( 'lightbox', get_template_directory_uri().'/js/lightbox.min.js', array(), $scrypt_version , true); //Лайтбокс
		//wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array(), $scrypt_version , true); //Слайдер

		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), $scrypt_version , true); // Подключение основного скрипта в самом конце
		
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}


	// Заготовка для вызова ajax
	
	add_action( 'wp_ajax_aj_fnc', 'aj_fnc' );
	add_action( 'wp_ajax_nopriv_aj_fnc', 'aj_fnc' );

	function aj_fnc() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {


			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}
	
	function main_menu() {
		wp_nav_menu(array(
			'theme_location' => 'header_menu',
			'container' => 'nav',
			'container_class' => 'main-menu inb vT'
		));
	}
	function footer_menu() {
		wp_nav_menu(array(
			'theme_location' => 'footer_menu',
			'container' => 'nav',
			'container_class' => 'footer-menu rL hid'
		));
	}
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ){
		return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links pagination clearfix">%3$s</div>
		</nav>    
		';
	}

//------Отправка со стандартного окна
	
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );

function send_mail() {
  if ( empty( $_REQUEST['nonce'] ) ) {
	wp_die( '0' );
  }
  
  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
	
	
  
	$headers = array(
		'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>',
		'content-type: text/html',
	);


	add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
	
	$adr_to_send = carbon_get_theme_option('email_send');
	$mail_content = 'Заявка с формы '.$_REQUEST["formsubject"].'<br><strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"];
	$mail_them = "Заявка с сайта Almi";

	// wp_die( $headers );

	if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
		wp_die(json_encode(array("send" => true )));
	}
	else {
		wp_die( 'Ошибка отправки!', '', 403 );
	}
	
  } else {
	wp_die( 'НО-НО-НО!', '', 403 );
  }
}


//------Отправка с окна задать вопрос
	
add_action( 'wp_ajax_get_qestion', 'get_qestion' );
add_action( 'wp_ajax_nopriv_get_qestion', 'get_qestion' );

function get_qestion() {
  if ( empty( $_REQUEST['nonce'] ) ) {
	wp_die( '0' );
  }
  
  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
	
	$headers = array(
		'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>',
		'content-type: text/html',
	);

	add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
	
	$adr_to_send = carbon_get_theme_option('email_send');
	$mail_content = 'Заявка с формы '.$_REQUEST["formsubject"].'<br><strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"].' <br/> <strong>Вопрос:</strong> <br/>'.$_REQUEST["quest"];
	$mail_them = "Вопрос с сайта Almi";

	//  Записываем вопрос в админку
	$post_data = array(
		'post_title'    => wp_strip_all_tags( $_REQUEST["quest"] ),
		'post_content'  => "",
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_category' => array( 6 )
	);

	$post_id = wp_insert_post( $post_data );
	
	// Если пост вставлен добавляем параметры

	if (!empty($post_id)) {
		add_post_meta( $post_id, "_q_name", $_REQUEST["name"], true );
		add_post_meta( $post_id, "_q_phone", $_REQUEST["tel"], true );
	}


	if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
		wp_die(json_encode(array("send" => true )));
	}
	else {
		wp_die( 'Ошибка отправки!', '', 403 );
	}
	
  } else {
	wp_die( 'НО-НО-НО!', '', 403 );
  }
}


add_action( 'wp_ajax_set_rev', 'set_rev' );
add_action( 'wp_ajax_nopriv_set_rev', 'set_rev' );

function set_rev() {
  if ( empty( $_REQUEST['nonce'] ) ) {
	wp_die( '0' );
  }
  
  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
	
	$headers = array(
		'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>',
		'content-type: form/multipart',
	);

	add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
	
	$adr_to_send = carbon_get_theme_option('email_send');
	$mail_content = '<h2>Новый отзыв на сайте Almi</h2><br>'.
	'<strong>Имя:</strong> '.$_REQUEST["name"].' <br/>'.
	'<strong>Телефон:</strong> '.$_REQUEST["tel"].' <br/>'. 
	'<strong>Отзыв:</strong> '.$_REQUEST["rev"].' <br/>'.
	'<strong>Продукты:</strong> '.$_REQUEST["product"].' <br/>'.
	'<strong>Оценка товара:</strong> '.$_REQUEST["reiting_prod"].' <br/>'.
	'<strong>Оценка бренда:</strong> '.$_REQUEST["reiting_brend"].' <br/>';
	$mail_them = "Отзыв на сайте Almi";

		//  Записываем отзыв в админку
		$post_data = array(
			'post_title'    => wp_strip_all_tags( $_REQUEST["name"] ),
			'post_content'  => $_REQUEST["rev"],
			'post_status'   => 'publish',
			'post_author'   => 1,
			'post_category' => array( 5 )
		);
	
		$post_id = wp_insert_post( $post_data );

		if (!empty($post_id)) {
			add_post_meta( $post_id, "_stars_product", $_REQUEST["reiting_prod"], true );
			add_post_meta( $post_id, "_stars_brand", $_REQUEST["reiting_brend"], true );
			add_post_meta( $post_id, "_name_product", $_REQUEST["product"], true );
			
			if (!empty($_REQUEST["img1"])){
				$url_img1 = get_bloginfo("template_url").'/revimg/'.basename($_REQUEST["img1"]);
				$img_id1 = media_sideload_image( $url_img1, $post_id, $_REQUEST["name"]."-rev-1", "id" );
				add_post_meta( $post_id, "_img_1", $img_id1, true );
			}
				if (!empty($_REQUEST["img2"])){
				$url_img2 = get_bloginfo("template_url").'/revimg/'.basename($_REQUEST["img2"]);
				$img_id2 = media_sideload_image( $url_img2, $post_id, $_REQUEST["name"]."-rev-2", "id" );
				add_post_meta( $post_id, "_img_2", $img_id2, true );
			}
		}

	if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers, array($_REQUEST["img1"],$_REQUEST["img2"]) )) {
		wp_die(json_encode(array("send" => true )));
	}
	else {
		wp_die( 'Ошибка отправки!', '', 403 );
	}
	
  } else {
	wp_die( 'НО-НО-НО!', '', 403 );
  }
}


add_action( 'wp_ajax_main_load_file', 'main_load_file' );
add_action( 'wp_ajax_nopriv_main_load_file', 'main_load_file' );

function main_load_file() {
    
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

       $movrez = move_uploaded_file($_FILES['file']['tmp_name'], get_template_directory().'/revimg/'.$_FILES['file']['name']);

       if ($movrez)
       {
         wp_die(get_template_directory().'/revimg/'.$_FILES['file']['name']);
       }
       else {
         wp_die( 'При загрузке файла произошла ошибка', '', 403 );
       }
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
}

	/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/
	
	
	/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/

add_action( 'wp_ajax_almi_buy', 'almi_buy' );
add_action( 'wp_ajax_nopriv_almi_buy', 'almi_buy' );

function almi_buy() {
  if ( empty( $_REQUEST['nonce'] ) ) {
	wp_die( '0' );
  }
  
  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
	
	
  
	$headers = array(
		'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>',
		'content-type: text/html',
	);


	add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
	
	$adr_to_send = carbon_get_theme_option('email_send');
	$mail_content = 'Заявка с формы '.$_REQUEST["formsubject"].'<br><strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["email"];
	$mail_them = "Заявка с сайта Almi";

	global $wpdb;
		
	$wpdb->insert(
		'almi_contacts',
		array( 'type' => 'mail', 'name' => $_REQUEST["name"], 'mail' => $_REQUEST["email"] ),
		array( '%s', '%s', '%s' )
	);

	if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {


		wp_die(json_encode(array("send" => true )));
	}
	else {
		wp_die( 'Ошибка отправки!', '', 403 );
	}
	
  } else {
	wp_die( 'НО-НО-НО!', '', 403 );
  }
}


	
?>