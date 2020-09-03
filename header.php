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
                <a href="#" class="burger-btn">
                    <div class="burger-btn__inner">
                        <span></span>
                    </div>
                </a>
                <div class="nav-panel clearfix">
                    <button class="close-btn abs close-menu-btn"></button>
                    <a href="#" class="home-link inb vT"></a>
                    <nav class="main-menu inb vT">
                        <ul>
                            <li><a href="#">Little ALMI</a></li>
                            <li><a href="#">PET'ALMI</a></li>
                            <li><a href="#">Payment and delivery</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="contacts-elem fright">
                        <a href="email:info@almi.ru" class="contacts-elem__email inb vT">info@almi.ru</a>

                        <div class="phone-box inb vT rL desktop">
                            <span>8 800 555 44 41</span>
                        </div>

                        <a href="tel:88005554441" class="phone-box inb vT rL mobil">
                            <span>8 800 555 44 41</span>
                        </a>
                    </div>

                </div>
                <div class="great-shadow"></div>
                <div class="logo__box logo__box-large">
                    <div class="logo__item">
                        <img src="image/pet-almi.svg" class="spacer" alt="Pet`almi logo">
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