<?php 
/**
* Template Name: Virtual Workshops*
* Template Post Type: product, page, post, Shop Page , Shop, shop
*/
get_header(); 
?>

<?php if ( wp_is_mobile() ) { ?>
<div class="mobile-experience-filter-nav">
    <button class="close"><img src="<?= get_template_directory_uri(); ?>/img/team/close-img.svg" alt=""></button>
    <div class="mobile-experience-filter-wrap">
        <nav class="experience-filter-nav">
            <h2 class="experience-filter-title">Filter by</h2>
            <ul>
                <li class="active"><a href="#">All courses <span>(50)</span></a></li>
                <li><a href="#">Online <span>(50)</span></a></li>
                <li><a href="#">On-site <span>(50)</span></a></li>
            </ul>
        </nav>
        <nav class="experience-event-nav">
            <h3 class="experience-event-title">Event type</h3>
            <ul>
                <li><a href="/product-category/bodywork/">Breathwork <span>(12)</span></a></li>
                <li><a href="#">Tantra <span>(50)</span></a></li>
                <li><a href="#">Bodywork <span>(50)</span></a></li>
                <li><a href="#">Cacao ceremonies <span>(50)</span></a></li>
            </ul>
        </nav>
        <nav class="experience-lang-nav">
            <h3 class="experience-lang-title">language</h3>
            <ul>
                <li><a href="#">English <span>(1)</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<?php } ?>
 
<?php if ( have_rows( 'trainings_pages' ) ): ?>
	<?php while ( have_rows( 'trainings_pages' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'section_1' ) : ?>
		

<section class="workshops__1" style="background: url('<?= get_template_directory_uri(); ?>/img/experience/v-workshops-bg.webp') no-repeat top/cover">
    <div class="container">
        <div class="row">
             <?php if( get_sub_field('title')): ?><!-- if under__the -->         
                <h1 class="title"><?php the_sub_field( 'title' ); ?></h1>
              <?php endif; ?>
              <?php if( get_sub_field('content')): ?><!-- if under__the -->  
                <div class="workshops__1-description">
                    <p><?php the_sub_field( 'content' ); ?></p>
                </div>
              <?php endif; ?>
        </div>
    </div>
</section>

			
			
		<?php elseif ( get_row_layout() == 'section_2' ) : ?>
		
		
		

<section class="workshops__2 experience-wrap">
    <div class="container">
        <div class="row">
          
    
			<?php if ( have_rows( 'filter__repeater' ) ) : ?>
            <div class="experience-nav">
                <div class="experience-nav-wrap">
				<?php while ( have_rows( 'filter__repeater' ) ) : the_row(); ?>
				

          <nav class="experience-filter-nav">
            
             <?php if( get_sub_field('title')): ?><!-- if under__the -->
                <h2 class="experience-filter-title"><?php the_sub_field( 'title' ); ?></h2>
             <?php endif; ?>
             
          
          <?php $filter_by = get_sub_field( 'filter_by' ); ?>
					
					<?php if ( $filter_by ) : ?>
					
						<?php $get_terms_args = array(
							'taxonomy' => 'product_cat',
							'hide_empty' => 0,
							'include' => $filter_by,
						); ?>
						<?php $terms = get_terms( $get_terms_args ); ?>             
             
              <ul>
						
						<?php if ( $terms ) : ?>
						
							<?php foreach ( $terms as $term ) : ?>
							
							         <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?>  <span>(<?php echo esc_html( $term->count ); ?>)</span></a></li>
							
							<?php endforeach; ?>
							
						<?php endif; ?>
						
              </ul>
              
					<?php endif; ?>

          </nav>

					
					
				<?php endwhile; ?>

                </div>
            </div>
    
			<?php endif; ?>
           

			
            
     <div class="experience-content">
               
 <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="experience-content-title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
        
                <div class="experience-list">
                
		 <?php $cat = get_sub_field( 'cat' ); ?>
    
     <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'product', // Post type category BLOG
            'posts_per_page' => 5, // echo show three post 
         
					'taxonomy' => 'product_cat',
					'hide_empty' => 0,
					'include' => $cat,
         
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                
                  <div class="experience-item v-workshops">
                       <div class="box__content">

                              <div class="left-side">
                                  <div class="category-list">
                                      <a class="element tantra" href="#">Tantra</a>
                                      <a class="calen" href="#">Nov 11</a>
                                      <a href="#" class="event-time">7pm CET</a>
                                      <a class="video" href="#">Zoom meeting in English</a>
                                  </div>
                                  <h3 class="item-title"><?php echo get_the_title();  ?></h3>
                                  <div class="item-excerpt">Bring back the power to create inner strength and joy.</div>
                                  <div class="author-info">
                                      <img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt="" class="author-photo">
                                      <span class="author-name">Marjolein Van Ommeren</span>
                                  </div>
                              </div>
                             <div class="right-side">
                                 <a href="#" class="download" download="#">Download App</a>
                                 <a href="<?php echo get_the_permalink(); ?>" class="bundle">See details</a>
                             </div>
                      </div>
                  </div>
                
           <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>

                </div>
          </div>
          
          
          
          

        </div>
    </div>
</section>
		
	
			
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>

<section class="workshops__1" style="background: url('<?= get_template_directory_uri(); ?>/img/experience/v-workshops-bg.webp') no-repeat top/cover">
    <div class="container">
        <div class="row">
           
            <h1 class="title"><?php the_title(); ?></h1>

        </div>
    </div>
</section>

<?php endif; ?>



<?php 
get_footer();