<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 

<body>
    <div id="wrapper" class="reviews-page">
        <header id="header">
            <div class="middle-decor-elem middle-decor-elem__reviews"> 
            </div>
            <div class="inner">

                <?php get_template_part('template-parts/top-header');?>
                <div class="logo__box logo__box-small">
                   <div class="logo__item">
                        <img src="<?php echo get_template_directory_uri();?>/image/littleALMI.svg" class="spacer" alt="Pet`almi logo">
                    </div>
                    <div class="logo__item">
                        <img src="<?php echo get_template_directory_uri();?>/image/pet-almi.svg" class="spacer" alt="Pet`almi logo">
                    </div>
                </div>
                <div class="header-content"> 
                    <h1>Reviews</h1>  
                </div>
            </div>
        </header>