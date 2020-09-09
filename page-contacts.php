<?php

/*
* Template Name: Контакты
*/
get_header('contacts');?>
       <main class="main">
            <div class="inner">
                <div id="map"></div>
                <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script>
                    ymaps.ready(init);

                    function init () {
                    
                        var myMap = new ymaps.Map("mapLine", {
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
                            iconImageHref: '<?php bloginfo("template_url"); ?>/img/pointermapmaster.svg',
                            iconImageSize: [30, 54],
                            iconImageOffset: [-15, -54]
                            });
                            
                            myMap.geoObjects.add(myPlacemarkAdr);
                            
                        
                        
                        


                    myMap.behaviors.disable('scrollZoom');
                    }
                </script>
                <form class="feedback clearfix rL">
                    <div class="form-contaner">
                        <h3 class="form-name">Feedback </h3>
                        <span class="form-text">
                            Leave a request and our specialists will answer all your questions
                        </span>
                        <div class="field-box rL">
                            <input type="text" class="inputbox" placeholder="Name">
                            <input type="tel" class="inputbox" placeholder="Telephone">
                            <input type="submit" class="btn" value="Send message">
                        </div>
                    </div>
                    <div class="feedback__decor feedback__decor__headhpones">
                        <img src="<?php echo get_template_directory_uri();?>/img/headphones.png" alt="pets" class="spacer">
                    </div>
                </form>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();
