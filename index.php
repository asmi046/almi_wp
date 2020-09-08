<?php get_header(); ?>
<main class="main">
            <div class="inner">
                <div class="catalog rL hid">
                    <div class="row rL hid">

                    <?php
                    $args = array('cat' => 3);
                    query_posts($args);
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
                        <!-- <div class="catalog__item__wr">
                            <div class="catalog__item">
                                <div class="birka">
                                    Best Seller
                                </div>
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/products-for-pets-1.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/products-for-pets-2.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/products-for-pets-3.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(<?php echo get_template_directory_uri();?>/image/products-for-pets-4.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(image/products-for-pets-1.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(image/products-for-pets-2.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(image/products-for-pets-3.jpg)">
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
                                <div class="catalog__item__img cover" style="background-image: url(image/products-for-pets-4.jpg)">
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

                        </div> -->

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
                    <div class="feedback__decor feedback__decor__pets"> 
                        <img src="<?php echo get_template_directory_uri();?>/img/enimal.png" alt="pets" class="spacer">
                    </div>
                </form>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>

<?php get_footer(); ?>