    <?php if( have_rows('box_list') ): ?>
        <?php while( have_rows('box_list') ): the_row();
            // vars  ?>

<div class="careers__menu" id="infor_<?php echo get_row_index(); ?>">
  <div class="bock__top"><a class="close__" href="javascript:;"></a></div>
  
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
     <div class="box__name">
        <h3 class="info"><?php the_sub_field('title'); ?></h3>
    </div>
  <?php endif; ?>
  


              <div class="item-top-row">
                <div class="position-period">
                 
      <?php if( have_rows('application') ): ?>

        <?php while( have_rows('application') ): the_row();
            // vars ?>
                 
 
  <?php if( get_sub_field('application__')): ?><!-- if under__the -->
    <h4 ><?php the_sub_field('application__'); ?></h4>
  <?php endif; ?> 
  
                  
  <?php if( get_sub_field('data')): ?><!-- if under__the -->
    <div class="date"><?php the_sub_field('data'); ?></div>
  <?php endif; ?> 
  
                </div>

  <?php if( get_sub_field('clock')): ?><!-- if under__the -->
    <div class="clock"><?php the_sub_field('clock'); ?></div>
  <?php endif; ?> 

  <?php if( get_sub_field('part-time')): ?><!-- if under__the -->
    <div class="working"><?php the_sub_field('part-time'); ?></div>
  <?php endif; ?>
               
               
                
           <?php endwhile; ?>
           
      <?php endif; ?>
                
                
                 <?php if( get_sub_field('location')): ?><!-- if under__the -->
                  <div class="location"><?php the_sub_field('location'); ?></div>
                <?php endif; ?>
                

                
                
      <?php if( have_rows('application') ): ?>

        <?php while( have_rows('application') ): the_row();
            // vars ?>  

                  <a class="see-details form__skroll" href="#form">Apply now</a>

                
           <?php endwhile; ?>
           
      <?php endif; ?>
                
                
                
              </div>
  

  
  <div class="item-content">
    
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
      <?php the_sub_field('content'); ?>
  <?php endif; ?>

  </div>
</div>


          
          
           <?php endwhile; ?>
      <?php endif; ?>
      
      
      
      
 

 <section class="careers__3">
  <div class="container">
    <div class="row">
      <div class="position-wrap"  id="positions">
       
       
  <?php if( get_field('sub_text')): ?><!-- if under__the -->
    <p class="sub"><?php the_field('sub_text'); ?></p>
  <?php endif; ?>

  <?php if( get_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_field('title'); ?></h2>
  <?php endif; ?>
        
        <?php $rt = 1; ?>
        
    <?php if( have_rows('box_list') ): ?>
        <ul class="positions-list">
        <?php while( have_rows('box_list') ): the_row();
            // vars  ?>
            
          <div class="position-item">



  <?php if( get_sub_field('title')): ?><!-- if under__the -->
     <h3 class="position-name"><?php the_sub_field('title'); ?></h3>
  <?php endif; ?>

  <?php if( get_sub_field('location')): ?><!-- if under__the -->
     <div class="location"><?php the_sub_field('location'); ?></div>
  <?php endif; ?>
  
  
          
    <?php if( have_rows('application') ): ?>

        <?php while( have_rows('application') ): the_row();
            // vars ?>


            <div class="position-period">


            <?php if( get_sub_field('application__')): ?><!-- if under__the -->
              <h4><?php the_sub_field('application__'); ?></h4>
            <?php endif; ?>
            
              <?php if( get_sub_field('data')): ?><!-- if under__the -->
                <span class="date"><?php the_sub_field('data'); ?></span>
              <?php endif; ?>
 

            </div>


           <a class="see-detail see-detail_open" data-info="<?php echo $rt++; ?>" href="javascript:;">See details</a>        
     

              
      
          <?php endwhile; ?>
         
      <?php endif; ?>  
          
          
                    </div>

          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
 
        
      </div>
    </div>
  </div>
</section>
