<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 

<body>
    <div id="wrapper" class="contacts-page">
        <header id="header">
            <div class="middle-decor-elem middle-decor-elem__contacts">
            </div>
            <div class="inner">

                <?php get_template_part('template-parts/top-header');?>
                <div class="header-content">
                    <h1>CONTACTS</h1>
                    <table class="contacts-table">
                        <tr>
                            <th>Address:</th>
                            <td>Address: Address: Address:</td>
                        </tr>
                        <tr>
                            <th>Telephone:</th>
                            <td>
                                <a href="tel:88005554441" class="mobil">8 800 555 44 41</a>
                                <span class="desktop">8 800 555 44 41</span>
                            </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><a href="email:info@almi.ru" class="link">info@almi.ru</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </header>