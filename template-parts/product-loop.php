<div class="catalog__item__wr">
    <div class="catalog__item">
        <div class="birka">
            2 Packs
        </div>
        <div class="catalog__item__img cover" style="background-image: url(image/products-for-pets-4.jpg)">
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="spacer">
        </div>
        <p>
            <?php the_title();?>
        </p>
        <ul class="star-track">
            <li class="star-full star-track__item"></li>
            <li class="star-full star-track__item"></li>
            <li class="star-full star-track__item"></li>
            <li class="star-half star-track__item"></li>
            <li class="star-empty star-track__item"></li>
        </ul>
        <span class="catalog__item__price db"><?php echo carbon_get_the_post_meta('price');?></span>
        <div class="catalog__link-box">
            Buy on
            <a href="<?php echo carbon_get_the_post_meta('amazon_link');?>" class="amazon-link"></a>
        </div>
    </div>

</div>