<?php

/*
* Template Name: FAQ
*/
get_header('faq');
?>
        <main class="main">
            <div class="inner">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><span>Customer questions &amp; answers</span></li>
                    </ul>
                </div> 
                <div class="FAQ-box">
                    <?php 
                        $args = array(
                            'cat' => 6
                        );
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                            while($query->have_posts()):
                                $query->the_post();
                    ?>
                                <div class="FAQ-item">
                                    <span class="FAQ-item__question db">
                                        <span class="FAQ-item__caption">
                                            Product: 
                                        </span>
                                        <?php the_title();?>
                                    </span>
                                    <span class="FAQ-item__answer db">
                                        <span class="FAQ-item__caption">
                                            Answer:
                                        </span>
                                        <?php the_content();?>
                                    </span>
                                </div>
                    <?php endwhile; endif; ?>
                    <div class="FAQ-item">
                        <span class="FAQ-item__question db">
                            <span class="FAQ-item__caption">
                                Product: 
                            </span>
                             Is it hard to fill when it’s almost empty?
                        </span>
                        <span class="FAQ-item__answer db">
                            <span class="FAQ-item__caption">
                                Answer:
                            </span>
                             No it’s not hard to fill. Remove the lip and refill. And the bowl fills easy when squeezed there is a straw inside that delivers the water easily to the bowl area without tilting bottle.
                        </span>
                    </div>
                    <div class="FAQ-item">
                        <span class="FAQ-item__question db">
                            <span class="FAQ-item__caption">
                                Product: 
                            </span>
                             Is it hard to fill when it’s almost empty?
                        </span>
                        <span class="FAQ-item__answer db">
                            <span class="FAQ-item__caption">
                                Answer:
                            </span>
                             No it’s not hard to fill. Remove the lip and refill. And the bowl fills easy when squeezed there is a straw inside that delivers the water easily to the bowl area without tilting bottle.
                        </span>
                    </div>
                    <div class="FAQ-item">
                        <span class="FAQ-item__question db">
                            <span class="FAQ-item__caption">
                                Product: 
                            </span>
                             Is it hard to fill when it’s almost empty?
                        </span>
                        <span class="FAQ-item__answer db">
                            <span class="FAQ-item__caption">
                                Answer:
                            </span>
                             No it’s not hard to fill. Remove the lip and refill. And the bowl fills easy when squeezed there is a straw inside that delivers the water easily to the bowl area without tilting bottle.
                        </span>
                    </div>
                    <div class="FAQ-item">
                        <span class="FAQ-item__question db">
                            <span class="FAQ-item__caption">
                                Product: 
                            </span>
                             Is it hard to fill when it’s almost empty?
                        </span>
                        <span class="FAQ-item__answer db">
                            <span class="FAQ-item__caption">
                                Answer:
                            </span>
                             No it’s not hard to fill. Remove the lip and refill. And the bowl fills easy when squeezed there is a straw inside that delivers the water easily to the bowl area without tilting bottle.
                        </span>
                    </div> 
                    <a href="#" class="btn">Ask a Question</a>
                </div>
                
                <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>
<?php
get_footer();