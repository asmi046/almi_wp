<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    
    <link rel="icon" type="image/png" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="<? echo get_template_directory_uri();?>/image/pet-almi.svg">

    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 
<body>

<!-- Скрипт для вывода яндекс карт Подключать непосредственно перед вызовом скрипта инициализации карты-->
<!-- <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> -->

<!-- Меню -->
<?php //wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>

<!-- Подключение  модальных окон-->


<!-- Блок вывода иконок -->
<!-- 
  <link rel="icon" type="image/png" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png">
  <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png">
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png">
  <link rel="icon" type="image/svg+xml" sizes="any" href="/images/icons/any-109fcff231.svg"> 
-->
<div id="wrapper">
    <?php if(is_home() || is_front_page()):
            get_template_part('template-parts/header-main');?>
    <?php elseif(is_page(5)):?>
    <?php   get_template_part('template-parts/header-contacts');
    elseif(is_page(9)):
            get_template_part('template-parts/header-delivery');
    elseif(is_category(4)):
            get_template_part('template-parts/header-little');
    elseif(is_page(11)):
            get_template_part('template-parts/header-faq');
    elseif(is_page(13)):
            get_template_part('template-parts/header-reviews');
    else:
        get_template_part('template-parts/header-main');
    endif;?>
