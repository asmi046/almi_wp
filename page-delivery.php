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
                            <a target="_blank" href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_v4_sib?ie=UTF8&nodeId=201894450" class="amazon-link"></a>
                            <h4>Payment, Pricing &amp; Promotions</h4>
                            <a target="_blank" href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_left_v4_sib?ie=UTF8&nodeId=201894450" class="btn">More details</a>
                        </div>
                        <div class="terms__item">
                            <a target="_blank" href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_bc_nav?ie=UTF8&nodeId=201910060" class="amazon-link"></a>
                            <h4>Shipping &amp; Delivery</h4>
                            <a target="_blank" href="https://www.amazon.com/gp/help/customer/display.html/ref=hp_bc_nav?ie=UTF8&nodeId=201910060" class="btn">More details</a>
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