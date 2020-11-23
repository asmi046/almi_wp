<div id="wrapper">
<header id="header">
    <div class="large-decor-elem large-decor-elem__pet"> 
    </div>
    <div class="inner">
        
        <?php get_template_part('template-parts/top-header');?>
        <div class="logo__box logo__box-large">
            <div class="logo__item">
                <img src="<?php echo get_template_directory_uri();?>/image/pet-almi.svg" class="spacer" alt="Pet`almi logo">
            </div>
        </div>
        <div class="header-content">
            <h2>Products for pets</h2>
            <h1>PET'ALMI <?
             $t_paged = get_query_var('paged');
             
             if (!empty($t_paged)){
                 echo "<span>( Page # ".$t_paged." )</span>";
             }
             
             ?></h1>
            <p>
                PET'ALMI products meet the highest requirements in terms of safety and comfort for you and your pets. When buying our product, you can be sure that you are buying the best. Look no further, your pet will thank you.
            </p>
    
            <a href="#" data-mailmsg="Заявка c главной" class="btn popup-content">To get a consultation</a>
        </div>
    </div>
</header>