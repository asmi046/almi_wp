<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 
<body>

<!-- Скрипт для вывода яндекс карт Подключать непосредственно перед вызовом скрипта инициализации карты-->
<!-- <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> -->

<!-- Меню -->
<?php wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>

<!-- Подключение  модальных окон-->
<? include "modal-win.php";?>

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
        <header id="header">
            <div class="large-decor-elem large-decor-elem__pet"> 
            </div>
            <div class="inner">
                
                <?php get_template_part('template-parts/top-header');?>
                <div class="logo__box logo__box-large">
                    <div class="logo__item">
                        <img src="<?php echo get_template_directory_uri();?>/image/pet-almi.svg" class="spacer" alt="Pet`almi logo">
                    </div>
                </div>
                <div class="header-content">
                    <h2>Products for pets</h2>
                    <h1>PET'ALMI</h1>
                    <p>
                        Made of high quality nylon fabric to ensure safety, features the solid zinc alloy swivel snap and metal buckles guarantee extra durability
                    </p>
                    <p>
                        Note: the tab on the seatbelt clip is 2cm, please check your buckle's size and compatibility before purchase
                    </p>
                    <a href="#" class="btn">To get a consultation</a>
                </div>
            </div>
        </header>