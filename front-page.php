<?php 

/*
* Template Name: Главная
*/
get_header();
?>
<main class="main">
            <div class="inner">
                <div class="catalog rL hid">
                    <div class="row rL hid">

                    <?php
                    // $args = array('cat' => 3);
                    // query_posts($args);
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/product-loop' );
                        endwhile;

                        $args = array(
                            'prev_text'    => 'Previous',
                            'next_text'    => 'Next',
                        );
                        the_posts_pagination($args);
                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                    </div>
                </div>
                <div class="pagination clearfix">
                    <ul>
                        <li class="pagination__step pagination__prev">
                            <a href="#">
                                Previous
                            </a>
                        </li>
                        <li class="pagination__current pagination__circle"><span>1</span></li>
                        <li class="pagination__circle"><a href="#">2</a></li>
                        <li class="pagination__circle"><a href="#">3</a></li>
                        <li class="pagination__circle"><a href="#">4</a></li>
                        <li class="pagination__dots"><span>...</span></li>
                        <li class="pagination__last-page"><a href="#">7</a></li>
                        <li class="pagination__step pagination__next">
                            <a href="#">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
                <?php get_template_part('template-parts/feedback');?>
            </div>
            <div class="subfooter"></div>
        </main>
    </div>

<?php
get_footer();