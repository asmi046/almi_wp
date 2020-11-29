<footer id="footer">
        <div class="inner clearfix">
            <div class="brend-link-box clearfix">
                <div class="brend-link_wr">
                    <div class="brend-link tb">
                        <span class="brend-link__logo tbc vM">
                            <img loading="lazy" src="<?php echo get_template_directory_uri();?>/image/Little_Almi-logo-footer.svg" alt="Little_Almi footer logo">
                        </span>
                        <a href="<?echo get_category_link(4);?>" class="brend-link__text tbc vM">
                            Products Little Almi
                        </a>
                    </div>
                </div>
                <div class="brend-link_wr">
                    <div class="brend-link tb">
                        <span class="brend-link__logo tbc vM">
                            <img loading="lazy" src="<?php echo get_template_directory_uri();?>/image/PET'ALMI-logo-footer.svg" alt="PET'ALMI footer logo">
                        </span>
                        <a href="<?bloginfo("url");?>" class="brend-link__text tbc vM">
                            Products PET'ALMI
                        </a>
                    </div>
                </div>
            </div>
            <div class="contacts-elem fright">
                <div class="phone-box inb vT rL desktop">
                    <span><?php echo carbon_get_theme_option('tel');?></span>
                </div>

                <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', carbon_get_theme_option('tel'));?>" class="phone-box inb vT rL mobil">
                    <span><?php echo carbon_get_theme_option('tel');?></span>
                </a>
            </div>

            <?php footer_menu();?>
            <span class="db copyright">
                © 2020 ALMI
            </span>
        </div>
    </footer>
</div>
	

<?php wp_footer(); ?>
</body>
</html>