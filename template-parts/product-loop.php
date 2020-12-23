<div class="catalog__item__wr">
    <div class="catalog__item">

        <? $stiker = carbon_get_the_post_meta("stiker");
        if (!empty($stiker)) { ?>
            <div class="birka">
                <? echo $stiker; ?>
            </div>
            <?}?>
            <div class="catalog__item__img cover" >
                <a target="_blank" href = "<?php echo carbon_get_the_post_meta('amazon_link');?>">
                    <img loading="lazy" src="<?php echo get_the_post_thumbnail_url($post_id, "medium");?>" alt="" class="spacer">
                </a>
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
                var_dump($rating);?>
                <?php
                $inc_star = 0;
                $inc_star == 0;
                $floor_rating  = $rating;
                $is_half = 0;
                if(strpos($rating, ','))
                    $floor_rating = ceil($rating); 
                $is_half = 1;
                var_dump($floor_rating);
                while($inc_star < 5):
                    if($inc_star < $floor_rating):
                        echo '<li class="star-full star-track__item"></li>';
                    // elseif():
                    elseif($is_half):
                        $is_half = 0;?>
                        <li class="star-empty star-track__item"></li>
                        <?php else:?>
                            <li class="star-empty star-track__item"></li>
                        <?php endif; $inc_star++;
                    endwhile;?>
                    <?php $inc--;?>
            <!-- <li class="star-full star-track__item"></li>
            <li class="star-full star-track__item"></li>
            <li class="star-full star-track__item"></li>
            <li class="star-half star-track__item"></li>
            <li class="star-empty star-track__item"></li> -->
        </ul>
        <span class="catalog__item__price db">$<?php echo carbon_get_the_post_meta('price');?></span>
        <div class="catalog__link-box">
            Buy on
            <?php
            if (!empty($_COOKIE["DataSendet"])) {
            echo '<a target="_blank" href="'.carbon_get_the_post_meta("amazon_link").'" class="amazon-link"></a>';
           }
           else {
            echo '<a href="#" class="almi-modal__popup amazon-link"></a>';
           } 
           ?>

       </div>
   </div>

</div>