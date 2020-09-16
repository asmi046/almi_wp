<?php

get_header();
get_template_part('template-parts/header-little');
?>
        <main class="main">
            <div class="inner">
                <div class="catalog rL hid">
                    <div class="row rL hid">
                    <?php
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
                
                <?
                    the_posts_pagination(array(
                        'prev_text'    => 'Previous',
                        'next_text'    => 'Next',
                    ));
                ?>
    
                <?php get_template_part('template-parts/feedback-litle');?>
            <div class="subfooter"></div>
            </main>
<?php
get_footer();