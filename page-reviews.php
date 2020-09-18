<?php

/*
* Template Name: Отзывы
*/

get_header();
get_template_part('template-parts/header-reviews');?>
        <main class="main">
            <div class="inner">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="<?bloginfo("url");?>">Home</a></li>
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
                            if (!carbon_get_the_post_meta("show_rev")) continue;   
                   ?>
                    <div class="review clearfix">
                        <div class="review__avatar cover fleft" style="background-image: url(<?php 
                        $urlUser = get_the_post_thumbnail_url(); 
                        if (!empty(get_the_post_thumbnail_url()))
                            echo get_the_post_thumbnail_url();
                        else 
                            echo "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB2aWV3Qm94PSIwIDAgNDc4LjAyNCA0NzguMDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NzguMDI0IDQ3OC4wMjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8Zz4KCQk8cGF0aCBmaWxsID0gIiNFQjQxMjUiIGQ9Ik00MTEuNzAzLDczLjU2MWMtNDUuMTE3LTQ3LjA5My0xMDcuNTQyLTczLjY3LTE3Mi43Ni03My41NUMxMDcuMTQ1LTAuMTU1LDAuMTY2LDEwNi41NTQsMCwyMzguMzUzCgkJCWMtMC4wODIsNjUuMTcsMjYuNDkyLDEyNy41MzgsNzMuNTUsMTcyLjYyM2MwLjEzNywwLjEzNiwwLjE4OCwwLjM0MSwwLjMyNCwwLjQ2MWMxLjM4MiwxLjMzMSwyLjg4NCwyLjQ1OCw0LjI4NCwzLjczOAoJCQljMy44NCwzLjQxMyw3LjY4LDYuOTQ2LDExLjcyNSwxMC4yNGMyLjE2NywxLjcwNyw0LjQyLDMuNDEzLDYuNjM5LDQuOTgzYzMuODIzLDIuODUsNy42NDYsNS43LDExLjYzOSw4LjMyOQoJCQljMi43MTQsMS43MDcsNS41MTMsMy40MTMsOC4yOTQsNS4xMmMzLjY4NiwyLjIxOSw3LjM1Niw0LjQ1NCwxMS4xNjIsNi40ODVjMy4yMjYsMS43MDcsNi41MTksMy4xNzQsOS43OTYsNC43MjcKCQkJYzMuNTg0LDEuNzA3LDcuMTE3LDMuNDEzLDEwLjc4Niw0Ljk0OWMzLjY2OSwxLjUzNiw3LjM1NiwyLjczMSwxMS4wNzYsNC4wNjJzNi45MjksMi41NiwxMC40OTYsMy42NTIKCQkJYzQuMDI4LDEuMjEyLDguMTU4LDIuMTUsMTIuMjU0LDMuMTU3YzMuNDEzLDAuODM2LDYuNzI0LDEuNzkyLDEwLjI0LDIuNDc1YzQuNzEsMC45MzksOS40ODksMS41MzYsMTQuMjY4LDIuMTg1CgkJCWMyLjk1MywwLjQxLDUuODM3LDAuOTksOC44MjMsMS4yOGM3LjgxNywwLjc2OCwxNS43MDEsMS4xOTUsMjMuNjU0LDEuMTk1czE1LjgzOC0wLjQyNywyMy42NTQtMS4xOTUKCQkJYzIuOTg3LTAuMjksNS44NzEtMC44Nyw4LjgyMy0xLjI4YzQuNzc5LTAuNjQ5LDkuNTU3LTEuMjQ2LDE0LjI2OC0yLjE4NWMzLjQxMy0wLjY4Myw2LjgyNy0xLjcwNywxMC4yNC0yLjQ3NQoJCQljNC4wOTYtMS4wMDcsOC4yMjYtMS45NDYsMTIuMjU0LTMuMTU3YzMuNTY3LTEuMDkyLDcuMDE0LTIuNDIzLDEwLjQ5Ni0zLjY1MmMzLjQ4Mi0xLjIyOSw3LjQ0MS0yLjU2LDExLjA3Ni00LjA2MgoJCQlzNy4yMDItMy4yNiwxMC43ODYtNC45NDljMy4yNzctMS41NTMsNi41NzEtMy4wMjEsOS43OTYtNC43MjdjMy44MDYtMi4wMzEsNy40NzUtNC4yNjcsMTEuMTYyLTYuNDg1CgkJCWMyLjc4Mi0xLjcwNyw1LjU4MS0zLjI2LDguMjk0LTUuMTJjMy45OTQtMi42MjgsNy44MTctNS40NzgsMTEuNjM5LTguMzI5YzIuMjE5LTEuNzA3LDQuNDcxLTMuMjQzLDYuNjM5LTQuOTgzCgkJCWM0LjA0NS0zLjI0Myw3Ljg4NS02LjY5LDExLjcyNS0xMC4yNGMxLjM5OS0xLjI4LDIuOTAxLTIuNDA2LDQuMjg0LTMuNzM4YzAuMTM2LTAuMTE5LDAuMTg4LTAuMzI0LDAuMzI0LTAuNDYxCgkJCUM0OTkuNjQ0LDMxOS43OTgsNTAyLjg4MSwxNjguNzMyLDQxMS43MDMsNzMuNTYxeiBNMzczLjM0NCwzOTMuMTA3Yy0zLjEwNiwyLjczMS02LjMxNSw1LjMyNS05LjU1Nyw3LjgzNAoJCQljLTEuOTExLDEuNDY4LTMuODIzLDIuOTE4LTUuNzg2LDQuMzE4Yy0zLjA4OSwyLjIzNi02LjIyOSw0LjM1Mi05LjQyMSw2LjM4M2MtMi4zMjEsMS40ODUtNC42OTMsMi45MTgtNy4wODMsNC4zMTgKCQkJYy0zLjAwNCwxLjcwNy02LjA1OSwzLjQxMy05LjE0OCw1LjEyYy0yLjczMSwxLjM5OS01LjUxMywyLjcxNC04LjMxMSw0LjAxMXMtNS44ODgsMi42NzktOC45MDksMy44OTEKCQkJYy0zLjAyMSwxLjIxMi02LjIyOSwyLjM1NS05LjM4NywzLjQxM2MtMi44ODQsMC45OS01Ljc2OCwyLjAxNC04LjY4NywyLjg4NGMtMy40MTMsMS4wMjQtNi45OCwxLjg2LTEwLjUxMywyLjcxNAoJCQljLTIuNzY1LDAuNjQ4LTUuNDk1LDEuMzgyLTguMjk0LDEuOTI5Yy00LjA0NSwwLjc4NS04LjE3NSwxLjMzMS0xMi4zMjIsMS44OTRjLTIuMzU1LDAuMzA3LTQuNjkzLDAuNzM0LTcuMDY2LDAuOTczCgkJCWMtNi41NTQsMC42MzEtMTMuMTkzLDEuMDA3LTE5LjksMS4wMDdzLTEzLjM0Ni0wLjM3NS0xOS45LTEuMDA3Yy0yLjM3Mi0wLjIzOS00LjcxLTAuNjY2LTcuMDY2LTAuOTczCgkJCWMtNC4xNDctMC41NjMtOC4yNzctMS4xMDktMTIuMzIyLTEuODk0Yy0yLjc5OS0wLjU0Ni01LjUzLTEuMjgtOC4yOTQtMS45MjljLTMuNTMzLTAuODUzLTcuMDQ5LTEuNzA3LTEwLjUxMy0yLjcxNAoJCQljLTIuOTE4LTAuODctNS44MDMtMS44OTQtOC42ODctMi44ODRjLTMuMTU3LTEuMDkyLTYuMzE1LTIuMjAyLTkuMzg3LTMuNDEzYy0zLjA3Mi0xLjIxMi01Ljk3My0yLjU0My04LjkwOS0zLjg5MQoJCQlzLTUuNTgxLTIuNjExLTguMzExLTQuMDExYy0zLjA4OS0xLjYwNC02LjE0NC0zLjI5NC05LjE0OC01LjEyYy0yLjM4OS0xLjM5OS00Ljc2Mi0yLjgzMy03LjA4My00LjMxOAoJCQljLTMuMTkxLTIuMDMxLTYuMzMyLTQuMTQ3LTkuNDIxLTYuMzgzYy0xLjk2My0xLjM5OS0zLjg3NC0yLjg1LTUuNzg2LTQuMzE4Yy0zLjI0My0yLjUwOS02LjQ1MS01LjEyLTkuNTU3LTcuODM0CgkJCWMtMC43NTEtMC41NjMtMS40MzQtMS4yOC0yLjE2Ny0xLjkyOWMwLjc2My01OC4wNTcsMzguMDYtMTA5LjMyMSw5My4wNjUtMTI3LjkxNWMyNy41MDMsMTMuMDgzLDU5LjQzNSwxMy4wODMsODYuOTM4LDAKCQkJYzU1LjAwNCwxOC41OTQsOTIuMzAxLDY5Ljg1Nyw5My4wNjUsMTI3LjkxNUMzNzQuNzYsMzkxLjgyNywzNzQuMDc3LDM5Mi40NzYsMzczLjM0NCwzOTMuMTA3eiBNMTc5LjQzLDEzNi44NDkKCQkJYzE4LjQ3OS0zMi44NjQsNjAuMS00NC41MjUsOTIuOTY0LTI2LjA0NnM0NC41MjUsNjAuMSwyNi4wNDYsOTIuOTY0Yy02LjEzMSwxMC45MDQtMTUuMTQxLDE5LjkxNC0yNi4wNDYsMjYuMDQ2CgkJCWMtMC4wODUsMC0wLjE4OCwwLTAuMjksMC4xMDJjLTQuNTI2LDIuNTE5LTkuMzA5LDQuNTQ1LTE0LjI2OCw2LjA0MmMtMC44ODcsMC4yNTYtMS43MDcsMC41OTctMi42NDUsMC44MTkKCQkJYy0xLjcwNywwLjQ0NC0zLjQ5OSwwLjc1MS01LjI1NywxLjA1OGMtMy4zMSwwLjU3OS02LjY1OSwwLjkxNS0xMC4wMTgsMS4wMDdoLTEuOTQ2Yy0zLjM1OS0wLjA5Mi02LjcwOC0wLjQyOC0xMC4wMTgtMS4wMDcKCQkJYy0xLjcwNy0wLjMwNy0zLjUxNi0wLjYxNC01LjI1Ni0xLjA1OGMtMC45MDUtMC4yMjItMS43MDctMC41NjMtMi42NDUtMC44MTljLTQuOTU5LTEuNDk3LTkuNzQyLTMuNTIyLTE0LjI2OC02LjA0MmwtMC4zMDctMC4xMDIKCQkJQzE3Mi42MTIsMjExLjMzNCwxNjAuOTUxLDE2OS43MTMsMTc5LjQzLDEzNi44NDl6IE00MDUuNzUzLDM1Ny4zMzZMNDA1Ljc1MywzNTcuMzM2Yy0xMC45NTItNTEuMDgzLTQ0LjU5LTk0LjM5LTkxLjM3NS0xMTcuNjQKCQkJYzM4LjI0NS00MS42NjEsMzUuNDc1LTEwNi40MzgtNi4xODYtMTQ0LjY4M2MtNDEuNjYxLTM4LjI0NS0xMDYuNDM4LTM1LjQ3NS0xNDQuNjgzLDYuMTg2CgkJCWMtMzUuOTU0LDM5LjE2Ni0zNS45NTQsOTkuMzMyLDAsMTM4LjQ5N2MtNDYuNzg1LDIzLjI1MS04MC40MjMsNjYuNTU3LTkxLjM3NSwxMTcuNjRDNi42OSwyNjUuMTUzLDI4LjM2NiwxMzcuMzcxLDEyMC41NDksNzEuOTI3CgkJCXMyMTkuOTY1LTQzLjc2OCwyODUuNDA5LDQ4LjQxNWMyNC42MDEsMzQuNjUzLDM3LjgwNyw3Ni4xMDQsMzcuNzg2LDExOC42MDJDNDQzLjc0NCwyODEuNDA1LDQzMC40NiwzMjIuODAyLDQwNS43NTMsMzU3LjMzNnoiLz4KCTwvZz4KPC9nPgo8L3N2Zz4="
                        ?>)"></div>
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
                                            <li class="star-empty star-track__item"></li>
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
                                            <li class="star-empty star-track__item"></li>
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
                    
                    <!-- <div class="review clearfix">
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
                    </div> -->
                    
                    <a href="#" id="add-reviews" class="db btn">Add review</a>
                    
                </div>
                <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();