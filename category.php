<?php

get_header('little');
?>
        <main class="main">
            <div class="inner">
                <div class="catalog rL hid">
                    <div class="row rL hid">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/product-loop' );
                        endwhile;

                        the_posts_pagination();
                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="birka">
                                    Best Seller
                                </div>
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-1.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    URPOWER Upgraded Dog Seat Belt 2 Pack Car Seat Belt for Dogs, Cats and Pets
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$10.99</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>

                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-2.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    URPOWER Dog Seat Cover Car Seat Cover for Pets 100% Waterproof Pet Seat Cover Hammock 600D Heavy Duty
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$31.99</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>

                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-3.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    Dog Treat Pouch, Dog Treat Bag for Training Small to Large Dogs, Easily Carries Pet Toys, Kibble, Treats, Built-in Poop Bag Dispenser
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$9.97</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>

                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="birka">
                                    2 Packs
                                </div>
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-4.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    URPOWER Upgraded Dog Seat Belt 2 Pack Car Seat Belt for Dogs, Cats and Pets
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$10.99</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>

                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="birka">
                                    Best Seller
                                </div>
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-5.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    URPOWER Upgraded Dog Seat Belt 2 Pack Car Seat Belt for Dogs, Cats and Pets
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$10.99</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-6.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    URPOWER Dog Seat Cover Car Seat Cover for Pets 100% Waterproof Pet Seat Cover Hammock 600D Heavy Duty
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$31.99</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>

                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-7.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    Dog Treat Pouch, Dog Treat Bag for Training Small to Large Dogs, Easily Carries Pet Toys, Kibble, Treats, Built-in Poop Bag Dispenser
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$9.97</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="birka">
                                    2 Packs
                                </div>
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/Goods-for-kids-8.jpg)">
                                    <img src="<?php echo get_template_directory_uri();?>/img/catalog__item__img-spacer.png" alt="" class="spacer">
                                </div>
                                <p>
                                    URPOWER Upgraded Dog Seat Belt 2 Pack Car Seat Belt for Dogs, Cats and Pets
                                </p>
                                <ul class="star-track">
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-full star-track__item"></li>
                                    <li class="star-half star-track__item"></li>
                                    <li class="star-empty star-track__item"></li>
                                </ul>
                                <span class="catalog__item__price db">$10.99</span>
                                <div class="catalog__link-box">
                                    Buy on
                                    <a href="#" class="amazon-link"></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="pagination clearfix">
                    <ul>
                        <li class="pagination__step pagination__prev">
                            <a href="#">
                                Previous
                            </a>
                        </li>
                        <li class="pagination__current pagination__circle"><span>1</span></li>
                        <li class="pagination__circle"><a href="#">2</a></li>
                        <li class="pagination__circle"><a href="#">3</a></li>
                        <li class="pagination__circle"><a href="#">4</a></li>
                        <li class="pagination__dots"><span>...</span></li>
                        <li class="pagination__last-page"><a href="#">7</a></li>
                        <li class="pagination__step pagination__next">
                            <a href="#">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
                <?php get_template_part('template-parts/feedback');?>
<?php
get_footer();