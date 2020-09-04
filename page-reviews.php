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
                   
                    <div class="review clearfix">
                        <div class="review__avatar cover fleft" style="background-image: url(image/user-avatar-1.png)"></div>
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
                        <div class="review__file__track">
                            <a href="image/review-file-1.png" class="review__file cover inb vT fancybox" style="background-image: url(image/review-file-1.png)"></a>
                            <a href="image/review-file-1.png" class="review__file cover inb vT fancybox" style="background-image: url(image/review-file-2.png)"></a>
                            <a href="image/review-file-1.png" class="review__file cover inb vT fancybox" style="background-image: url(image/review-file-3.png)"></a>
                        </div>
                    </div>
                    
                    <div class="review clearfix">
                        <div class="review__avatar cover fleft" style="background-image: url(image/user-avatar-2.png)"></div>
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
                        <div class="review__file__track">
                            <a href="image/review-file-4.png" class="review__file cover inb vT fancybox" style="background-image: url(image/review-file-4.png)"></a>
                            <a href="image/buran.png" class="review__file cover inb vT fancybox" style="background-image: url(image/buran.png)"></a> 
                        </div>
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