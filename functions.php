<?php

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

//-------------------

register_nav_menus( array(
	'header_menu' => 'Главное меню'
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
		wp_enqueue_style("style-fa-font",get_template_directory_uri()."/fonts/fa/web-fonts-with-css/css/fontawesome-all.min.css");
		wp_enqueue_style("style-frontend",get_template_directory_uri()."/style.css");
		wp_enqueue_style("style-modal",get_template_directory_uri()."/css/jquery.arcticmodal-0.3.css");
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'cookie', get_template_directory_uri().'/js/jquery.cookie.js');
		wp_enqueue_script( 'masced', get_template_directory_uri().'/js/jquery.inputmask.bundle.js');
		wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js');
		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js');
		
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}

	
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
	
	/*интеграция битрикс
		define('CRM_HOST', 'b24-0c20cu.bitrix24.ru'); // your CRM domain name
		define('CRM_PORT', '443'); // CRM server port
		define('CRM_PATH', '/crm/configs/import/lead.php'); // CRM server REST service path


		define('CRM_LOGIN', 'potashov.denis@yandex.ru'); // login of a CRM user able to manage leads
		define('CRM_PASSWORD', 'RhmAbtP2OD'); // password of a CRM user
		
		add_action( 'wp_ajax_set_lis_z', 'set_lis_z' );
add_action( 'wp_ajax_nopriv_set_lis_z', 'set_lis_z' );

function set_lis_z() {
	if ( empty( $_REQUEST['nonce'] ) ) {
		wp_die( '0' );
	}
	
	if ( check_ajax_referer( 'huivzmaneinfa', 'nonce', false ) ) {
			
			$fio = explode(" ",$_REQUEST["zname"]);
			
			$sname = empty($fio[0])?"":$fio[0];
			$name = empty($fio[1])?"":$fio[1];
			$fname = empty($fio[2])?"":$fio[2];
			
			if (count($fio) == 1)
			{
				$name = $_REQUEST["zname"];
				$sname = "";
			}
			
			$postData = array(
				//'TITLE' => "Обратный звонорк (".$_REQUEST["name"]." ".$_REQUEST["phone"].")",
				'COMPANY_TITLE' => "Частное лицо",
				'NAME' => $name,
				'LAST_NAME' => $sname,
				'SECOND_NAME' => $fname,
				'PHONE_MOBILE' => $_REQUEST['zphone'],
				'ASSIGNED_BY_ID' => 12,
				//'COMMENTS' => "Перезвоните мне нужна консультация",
			);

			if ( $_REQUEST["ztype"] === "Микрозайм") {
				$postData['TITLE'] = "Заявка на микрозайм (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Микрозайм</h2>";
				$postData['COMMENTS'] .= "Необходим микрозайм на сумму: ".$_REQUEST["zmikrozaimsumma"]." руб.";
			}
			
			if ( $_REQUEST["ztype"] === "Автокредит") {
				$postData['TITLE'] = "Заявка на Автокредит (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Автокредит</h2>";
				$postData['COMMENTS'] .= "<strong>Марка автомобиля:</strong> ".$_REQUEST["zmrkaauto"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Год выпуска:</strong> ".$_REQUEST["zgodvipuska"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Стоимость:</strong> ".$_REQUEST["zstoimostavto"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Первоначальный взнос:</strong> ".$_REQUEST["zfirstvznos"]."<br/>";
			}
			
			if ( $_REQUEST["ztype"] === "Кредит наличными") {
				$postData['TITLE'] = "Заявка на Кредит наличными (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Кредит наличными</h2>";
				$postData['COMMENTS'] .= "<strong>Сумма:</strong> ".$_REQUEST["zsummakredita"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Подтверждение дохода:</strong> ".$_REQUEST["zpodtverzdeniedohoda"]."<br/>";
			}
			
			if ( $_REQUEST["ztype"] === "Ипотека") {
				$postData['TITLE'] = "Заявка на Ипотеку (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Ипотеку</h2>";
				$postData['COMMENTS'] .= "<strong>Вид жилья:</strong> ".$_REQUEST["zvidzilya"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Стоимость:</strong> ".$_REQUEST["zstoimost"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Первоначальный взнос:</strong> ".$_REQUEST["zfirstvznosipoteka"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Подтверждение дохода:</strong> ".$_REQUEST["zpodtverzdeniedohodaipoteka"]."<br/>";
			}
			
			
			if ( $_REQUEST["ztype"] === "Под залог недвижимости") {
				$postData['TITLE'] = "Заявка на Деньги под залог недвижимости (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на деньги под залог недвижимости</h2>";
				$postData['COMMENTS'] .= "<strong>Вид жилья под залог:</strong> ".$_REQUEST["zvidzilyapodzalog"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Сумма:</strong> ".$_REQUEST["zsummapodzalognedvizimost"]."<br/>";
			}
			
			if ( $_REQUEST["ztype"] === "Под залог ПТС") {
				$postData['TITLE'] = "Заявка на Деньги под залог ПТС (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на деньги под залог ПТС</h2>";
				$postData['COMMENTS'] .= "<strong>Марка авто под залог:</strong> ".$_REQUEST["zmrkaautopodzalog"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Год выпуска:</strong> ".$_REQUEST["zgodvipuskapodzalog"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Сумма:</strong> ".$_REQUEST["zsummapodzalog"]."<br/>";
			}
			
			if (defined('CRM_AUTH'))
			{
				$postData['AUTH'] = CRM_AUTH;
			}
			else
			{
				$postData['LOGIN'] = CRM_LOGIN;
				$postData['PASSWORD'] = CRM_PASSWORD;
			}

			// open socket to CRM
			$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
			if ($fp)
			{
				// prepare POST data
				$strPostData = '';
				foreach ($postData as $key => $value)
					$strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);

				// prepare POST headers
				$str = "POST ".CRM_PATH." HTTP/1.0\r\n";
				$str .= "Host: ".CRM_HOST."\r\n";
				$str .= "Content-Type: application/x-www-form-urlencoded\r\n";
				$str .= "Content-Length: ".strlen($strPostData)."\r\n";
				$str .= "Connection: close\r\n\r\n";

				$str .= $strPostData;

				// send POST to CRM
				fwrite($fp, $str);

				// get CRM headers
				$result = '';
				while (!feof($fp))
				{
					$result .= fgets($fp, 128);
				}
				fclose($fp);

				// cut response headers
				$response = explode("\r\n\r\n", $result);
				
				$json_in = array("{'", "'}", "':'", "','");
				$json_out = array('{"', '"}', '":"', '","');
				$json = str_replace($json_in, $json_out, $response[1]);
	
				// оповещение на email
				$headers = array(
					'From: Сайт Кредит-Консалт <noreply@kredit-konsalt.ru>',
					'content-type: text/html',
				);
			
				$EmailRez = "";
				add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
				if (wp_mail(array('kreditkonsaltkursk@yandex.ru','asmi046@gmail.com'), $postData['TITLE'], '<strong>Имя:</strong> '.$_REQUEST["zname"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["zphone"], $headers))
					$EmailRez = "<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>";
				else $EmailRez = "<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>";
	
				wp_die($json );
				
			}
			else
			{
				wp_die('Connection Failed! '.$errstr.' ('.$errno.')');
			}
		
		
		
		
		
	} else {
		wp_die( 'НО-НО-НО!', '', 403 );
	}
}
		
	*/
	
	/* Отправка почты
		
			$headers = array(
				'From: Сайт Кредит-Консалт <noreply@kredit-konsalt.ru>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			if (wp_mail(array('info@kredit-konsalt.ru','asmi046@gmail.com'), 'Заказ обратного звонка', '<strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["phone"], $headers))
				wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
			else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
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
	
?>