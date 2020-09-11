<?php

/*
* Template Name: Отзывы
*/

get_header('reviews');
?>
        <main class="main">
            <div class="inner">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Reviews</span></li>
                    </ul>
                </div> 
                <div class="reviews-box">
                   <?php 
                    $args = array(
                        'cat' => '5',
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()):
                        while($query->have_posts()):
                            $query->the_post();
                   ?>
                    <div class="review clearfix">
                        <div class="review__avatar cover fleft" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)"></div>
                        <span class="review__user-name db rL hid"><?php the_title();?></span>
                        <span class="db review__product">Product: <?php carbon_get_the_post_meta('name_product')?></span>
                        <div class="review__star-track-box">
                            
                            <ul class="star-track">
                            <?php 
                                $inc = 5;
                                $rating = carbon_get_the_post_meta('stars_product');
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
                                            <li class="star-half star-track__item"></li>
                                        <?php else:?>
                                            <li class="star-empty star-track__item"></li>
                                        <?php endif; $inc_star++;
                                    endwhile;?>
                                <?php $inc--;?>
                            </ul>
                            Product Quality
                        </div>
                        <div class="review__star-track-box">
                            <ul class="star-track">
                            <?php 
                                $inc = 5;
                                $rating = carbon_get_the_post_meta('stars_brand');
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
                                            <li class="star-half star-track__item"></li>
                                        <?php else:?>
                                            <li class="star-empty star-track__item"></li>
                                        <?php endif; $inc_star++;
                                    endwhile;?>
                                <?php $inc--;?>
                            </ul>
                            Brand Quality
                        </div>
                        <p class="review-message">
                            <?php the_content();?>       
                        </p>
                        <div class="review__file__track">
                            <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('img_1'), 'full')[0];?>" class="review__file cover inb vT fancybox" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('img_1'), 'full')[0];?>)"></a>
                            <a href="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('img_2'), 'full')[0];?>" class="review__file cover inb vT fancybox" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('img_2'), 'full')[0];?>)"></a> 
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif;?>
                    
                    <div class="review clearfix">
                        <div class="review__avatar cover fleft" style="background-image: url(<?php echo get_template_directory_uri();?>/image/user-avatar-2.png)"></div>
                        <span class="review__user-name db rL hid">User Name</span>
                        <span class="db review__product">Product: &lt;Product name&gt;</span>
                        <div class="review__star-track-box">
                            <ul class="star-track">
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                            </ul>
                            Product Quality
                        </div>
                        <div class="review__star-track-box">
                            <ul class="star-track">
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                                <li class="star-full star-track__item"></li>
                            </ul>
                            Brand Quality
                        </div>
                        <p class="review-message">
                            This is the BEST water bottle I have found on the market. It has a locking mechanism so that there's no leaks or spills. It has a straw attached on the inside so that you can get every last drop. A foldable bowl for the dog to easily drink out of. And it makes it smaller in size which is easier to carry around. A strap to carry from your belt loop, wrist, backpack loop, etc... Love the color options as well. This is a must have!       
                        </p>
                    </div>
                    
                    <a href="" class="db btn">Add review</a>
                    
                </div>
                <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();