<?php /* Template Name: Home */ ?>
<?php get_header();?>
<section id="top_block" class="top_block" style="background-image: url(<?php the_field( 'top_bg_image' )?>">
     <div class="top_content zoomIn">
          <div class="top_content_text">
                <?php the_field( 'top_content' )?>
          </div>
          <div class="top_images">
              <?php if( have_rows('top_images') ): ?>



                <?php while( have_rows('top_images') ): the_row();

                    ?>

                    <div class="top_image">
<img src="<?php echo get_sub_field( 'top_image' )?>" >
                        
                    </div>
<?php endwhile; ?>


            

        <?php endif; ?>
          </div>
        </div>
</section>
<section  class="three_blocks">
    <div class="wrap">
        

                    
                        <?php if( have_rows('three_blocks') ): ?>



                        <?php while( have_rows('three_blocks') ): the_row();

                        // vars
                        $block_content = get_sub_field('block_content');
                        $three_button = get_sub_field('three_button');

                        ?>

                            <?php if( $block_content ): ?>
                                
                           <div class="service_block"><?php echo $block_content; ?>
                        <?php endif; ?>
                        <?php

                        if( $three_button ):

                        $three_button_title = $three_button['title'];

                        ?>
                            <a class="button" href="<?php echo esc_url( $three_button ); ?>" target=""><?php echo esc_html( $three_button_title ); ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>


                    
                            



            

        <?php endif; ?>
    </div>
</section>
<section id="about" class="about_block">
    <div class="about_img">
        <img src="<?php the_field( 'about_image' )?>">
    </div>
    <div class="about_content wow fadeInRight" data-wow-duration="2s"> 
        <?php the_field( 'about_content' )?>
        
            <div class="acordion">
                    
                <?php

                    // check if the repeater field has rows of data
                    if( have_rows('acordion') ):

                        // loop through the rows of data
                        while ( have_rows('acordion') ) : the_row();?>

                            <button class="accordion_button"><?php the_sub_field('acordion_title'); ?></button>
                            <div class="panel">
                            <p class="content"><?php the_sub_field('acordion_content'); ?></p>
                            </div >

                         <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                
            </div>
    
        
    </div>



            
        </div>
    </div>
    




    
</section>

<section id="services" class="help_block">
    <div class="help_tittle">
        <?php the_field( 'help_block_tittle' )?>
    </div>
    
    <div class="help_items">
        
        
            
<?php

                    // check if the repeater field has rows of data
                    if( have_rows('help_block') ):

                        // loop through the rows of data
                        while ( have_rows('help_block') ) : the_row();?>

                            <div class="help_item">
                            <img src="<?php the_sub_field( 'help_image' )?>">
                            <p class="content"><?php the_sub_field('help_content'); ?></p>
                            </div>

                         <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>

        </div>
    </div>
</section>
<section class="agent_block">
    <div class="agent_content">
        <?php the_field( 'dentist_block_content' )?>
    </div>
    <div class="about_image">
     <img  src="<?php the_field( 'dentist_block_image' )?>">
    </div>
</section>
<section class="grey_blocks">
    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('advantage_block') ):

                        // loop through the rows of data
                        while ( have_rows('advantage_block') ) : the_row();?>

                            <div class="advantage_block">
                            <h3 id="value"><?php the_sub_field( 'advantage_number' )?></h3>
                            <div class="divider"></div>
                            <p class="content"><?php the_sub_field('advantage_content'); ?></p>
                            </div >

                         <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
</section>
<section class="offers">
    <div class="offers_title">
    <h2>Our Special Offers</h2>
<h4>START TO BE HEALTHY TODAY</h4>
</div>
<div class="three_blocks">
    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('offers_block') ):

                        // loop through the rows of data
                        while ( have_rows('offers_block') ) : the_row();?>
                            <div class="service_block"><?php the_sub_field( 'offers_content' )?></h3>
                                
                         <?php 
$offers_button = get_sub_field('offers_button');
                         if( $offers_button ):
                            
                $offers_button_title = $offers_button['title'];?>
                    

     
                    <a class="button" href="<?php echo esc_url( $offers_button ); ?>" target=""><?php echo esc_html( $offers_button_title ); ?></a>
                    </div >
                <?php endif; ?>
                            
                            

                         <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>

</div>

</section>
<section class="map">
   
</section>
<section id="contact" class="grey_section">
    <div class="grey_blocks">
    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('adress_block') ):

                        // loop through the rows of data
                        while ( have_rows('adress_block') ) : the_row();?>
                            <div class="adress_block">
                                <i class="<?php the_sub_field( 'adress_icon' )?>"></i>
                                <div class="adress_content">
                                <p><?php the_sub_field( 'adress_text')?></p>
                            </div>
                            </div>
                                
                         
                                                   
                            

                         <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>

</div>
</section >
<section class="contact_form">
    <?php the_field('contact_form'); ?>
</section>






<?php get_footer();?>