<a href="#" class="burger-btn">
    <div class="burger-btn__inner">
        <span></span>
    </div>
</a>
<div class="nav-panel clearfix">
    <button class="close-btn abs close-menu-btn"></button>
    <a href="<?php echo home_url('/');?>" class="home-link inb vT"></a>
    <?php main_menu();?>
    <!-- <nav class="main-menu inb vT">
        <ul>
            <li><a href="#">Little ALMI</a></li>
            <li><a href="#">PET'ALMI</a></li>
            <li><a href="#">Payment and delivery</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
    </nav> -->
    <div class="contacts-elem fright">
        <a href="mailto:<?php echo carbon_get_theme_option('email');?>" class="contacts-elem__email inb vT"><?php echo carbon_get_theme_option('email');?></a>

        <div class="phone-box inb vT rL desktop">
            <span><?php echo carbon_get_theme_option('tel');?></span>
        </div>

        <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('tel'));?>" class="phone-box inb vT rL mobil">
            <span><?php echo carbon_get_theme_option('tel');?></span>
        </a>
    </div>

</div>
<div class="great-shadow"></div>