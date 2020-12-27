<?php

/*
* Template Name: Текстовая страница
*/
get_header();
get_template_part('template-parts/header-text');?> 
<main class="main">
    <div class="inner">
        <div class="breadcrumbs">
            <ul>
                <li><a href="<?bloginfo("url");?>">Home</a></li>
                <li><span><?php the_title();?></span></li>
            </ul>
        </div> 
        <div class="text-box">
            <?php 
            global $post;
            echo apply_filters('the_content', $post->post_content); 
            ?>
            <a href="#" id="add-faq" class="btn text-box__btn">Ask a Question</a>
            <?php get_template_part('template-parts/feedback');?>
        </div>
    </div>
    <div class="subfooter"></div>
</main>
</div>
<?php
get_footer();