<?php

/*
* Template Name: Контакты
*/
get_header('contacts');
get_template_part('template-parts/header-contacts');?>
       <main class="main">
            <div class="inner">
                <div id="map"></div>
                <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script>
                    ymaps.ready(init);

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
