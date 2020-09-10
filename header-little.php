<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 

<body>
    <div id="wrapper" class="little-almi-page">
        <header id="header">
            <div class="large-decor-elem large-decor-elem__kids"> 
            </div>
            <div class="inner">

                <?php get_template_part('template-parts/top-header');?>
                <div class="logo__box logo__box-large">
                    <div class="logo__item">
                        <img src="<?php echo get_template_directory_uri();?>/image/littleALMI.svg" class="spacer" alt="Pet`almi logo">
                    </div>
                </div>
                <div class="header-content">
                    <h2>Goods for kids</h2>
                    <h1>Little ALMI</h1>
                    <p>
                        Made of high quality nylon fabric to ensure safety, features the solid zinc alloy swivel snap and metal buckles guarantee extra durability
                    </p>
                    <p>
                        Note: the tab on the seatbelt clip is 2cm, please check your buckle's size and compatibility before purchase
                    </p> 
                    <a href="#" data-mailmsg="Заявка со страницы <?php the_title();?>" class="btn popup-content">To get a consultation</a>
                </div>
            </div>
        </header>