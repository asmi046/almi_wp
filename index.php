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

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                    </div>
                </div>
                <?php 
                $args = array(
                    'prev_text'    => 'Previous',
                    'next_text'    => 'Next',
                );
                        the_posts_pagination($args);?>
            <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>

<?php get_footer(); ?>