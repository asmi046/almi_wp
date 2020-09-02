<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    
    <meta name="viewport" content="width=device-width">
	
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/icon.png" />
    <?php wp_head();?> 
	
</head> 
<body>
<!-- Арктик модал -->
<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
		</div>
		
		<div class = "modalline" id = "lineMsg">
		</div>
    </div>
</div>

	<script>
		$(document).ready(function() { 
	
		});		
	</script>

<div class = "main">

<!-- Меню -->
<?php $options = get_option( "wpuniq_theme_options" ); ?>
<?php wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>