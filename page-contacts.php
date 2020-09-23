<?php

/*
* Template Name: Контакты
*/
get_header();
get_template_part('template-parts/header-contacts');?>
       <main class="main">
            <div class="inner">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3052.9851079316713!2d-76.30769688461444!3d40.07574427940622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6236e218d3d7d%3A0xb5c10fff9e5ae24d!2zMzJEIEUgUm9zZXZpbGxlIFJkLCBMYW5jYXN0ZXIsIFBBIDE3NjAxLCDQodCo0JA!5e0!3m2!1sru!2sru!4v1600706685552!5m2!1sru!2sru" width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script>
                    //ymaps.ready(init);

                    function init () {
                    
                        var myMap = new ymaps.Map("map", {
                                center: <?php echo carbon_get_theme_option('mkad_map_point') ?>,
                                zoom: 14,
                                controls: ['zoomControl']
                            }),

                        myPlacemarkAdr = new ymaps.Placemark(<?php echo carbon_get_theme_option('mkad_map_point') ?>, {
                                iconContent: '',
                                balloonContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('tel') ?>',
                                hintContent: 'Наш адрес: <b><?php echo carbon_get_theme_option('address') ?></b><br/>Телефон: <b> <?php echo carbon_get_theme_option('tel') ?>',
                            }, {
                            iconLayout: 'default#image',
                            iconImageHref: '<?php bloginfo("template_url"); ?>/img/map.svg',
                            iconImageSize: [30, 54],
                            iconImageOffset: [-15, -54]
                            });
                            
                            myMap.geoObjects.add(myPlacemarkAdr);
                            
                        
                        
                        


                    myMap.behaviors.disable('scrollZoom');
                    }
                </script>
                <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();
