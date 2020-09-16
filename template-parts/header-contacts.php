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
                    <td><?php echo carbon_get_theme_option('address');?></td>
                </tr>
                <tr>
                    <th>Telephone:</th>
                    <td>
                        <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('tel'));?>" class="mobil"><?php echo carbon_get_theme_option('tel');?></a>
                        <span class="desktop"><?php echo carbon_get_theme_option('tel');?></span>
                    </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><a href="email:<?php echo carbon_get_theme_option('email');?>" class="link"><?php echo carbon_get_theme_option('email');?></a></td>
                </tr>
            </table>
        </div>
    </div>
</header>