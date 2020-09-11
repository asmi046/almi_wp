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
            <?php 
            $inc = 5;
            $rating = carbon_get_the_post_meta('rating');
            if(!isset($rating) || empty($rating)) {
                $rating = 5;
            }
            // $rating *= 1;
            var_dump($rating);
           // while($inc != 0):?>
                <?php
                $inc_star = 0;
                // while($rating > ($inc_star + 0.5)) {
                //     var_dump($rating . ' inc' . $inc_star );
                //     echo '<li class="star-full star-track__item"></li>';
                //     $inc_star++; 
                // }
                $inc_star == 0;
                $floor_rating = ceil($rating) - 1; 
                var_dump($floor_rating);
                $is_half = true;
                while($inc_star < 5):
                    if($inc_star < $floor_rating):
                        echo '<li class="star-full star-track__item"></li>';
                    // elseif():
                    elseif(($floor_rating < $rating) && $is_half):
                        $is_half = 0;?>
                        <li class="star-half star-track__item"></li>
                    <?php else:?>
                        <li class="star-empty star-track__item"></li>
                    <?php endif; $inc_star++;
                endwhile;?>
            <?php $inc--; //endwhile;?>
            <!-- <li class="star-full star-track__item"></li>
            <li class="star-full star-track__item"></li>
            <li class="star-full star-track__item"></li>
            <li class="star-half star-track__item"></li>
            <li class="star-empty star-track__item"></li> -->
        </ul>
        <span class="catalog__item__price db">$<?php echo carbon_get_the_post_meta('price');?></span>
        <div class="catalog__link-box">
            Buy on
            <a href="<?php echo carbon_get_the_post_meta('amazon_link');?>" class="amazon-link"></a>
        </div>
    </div>

</div>