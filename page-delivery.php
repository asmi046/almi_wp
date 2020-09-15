<?php

/*
* Template Name: Доставка
*/
get_header();
get_template_part('template-parts/header-delivery');?>
       <main class="main">
            <div class="inner">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Payment and delivery</span></li>
                    </ul>
                </div> 
                <div class="pd-info-box">
                    <div class="pd-info__message">
                        We sell goods through Amazon.com services. You can find out more about the terms of sale and delivery on the official Amazon website
                    </div>
                    <div class="terms-box">
                        <div class="terms__item">
                            <a href="#" class="amazon-link"></a>
                            <h4>Payment, Pricing &amp; Promotions</h4>
                            <a href="#" class="btn">More details</a>
                        </div>
                        <div class="terms__item">
                            <a href="#" class="amazon-link"></a>
                            <h4>Shipping &amp; Delivery</h4>
                            <a href="#" class="btn">More details</a>
                        </div>
                    </div>
                </div>
                <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();