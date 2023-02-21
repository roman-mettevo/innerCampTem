<?php 
/**
* Template Name: Onsite retreats*
*/
get_header(); 
?>




<?php if ( have_rows( 'trainings_pages' ) ): ?>
	<?php while ( have_rows( 'trainings_pages' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'section_1' ) : ?>
		

<section class="retreats__1" style="background: url('<?= get_template_directory_uri(); ?>/img/experience/retreats-bg.webp') no-repeat top/cover">
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


<section class="retreats__2 experience-wrap">
    <div class="container">
        <div class="row">
           

           
            <?php if ( have_rows( 'filter__repeater' ) ) : ?>
                 
                  <div class="experience-nav">
                      <div class="experience-nav-wrap">
              <?php while ( have_rows( 'filter__repeater' ) ) : the_row(); ?>


                <nav class="experience-filter-nav">

          <?php if(get_row_index() == '1'){ ?>

                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h2 class="experience-filter-title"><?php the_sub_field( 'title' ); ?></h2>
                 <?php endif; ?>

             <?php }else if(get_row_index() == '2'){  ?>
             
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                   <h3 class="experience-event-title"><?php the_sub_field( 'title' ); ?></h3>
                 <?php endif; ?>

             <?php }else if(get_row_index() == '3'){  ?>
             
                <?php if( get_sub_field('title')): ?><!-- if under__the -->
                   <h3 class="experience-lang-title"><?php the_sub_field( 'title' ); ?></h3>
                 <?php endif; ?>

             <?php }  ?>
             
                
                
                

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

                             <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?> <span>(<?php echo esc_html( $term->count ); ?>)</span></a></li>

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
                             
 <?php    if ( isset( $_GET['number'] ) ) {
              $pagesnamber = (int) $_GET['number'];
          }else{
               $pagesnamber = 1;                   
          }   
                      
                        
       $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : $pagesnamber;    
                      
             $args = array(
                  'order' => 'DESC', // order filter  last post
                  'post_type'  => 'product', // Post type category BLOG
                  'posts_per_page' => 5, // echo show three post 

                'taxonomy' => 'product_cat',
                'hide_empty' => 0,
               
                     'product_cat' => $cat->slug,
//                'cat' => $tocat,
//                        'product_cat' => $term->slag,
//               'category__in' => $cat;
//               'category__in' => array( $cat), 
                            'paged'         => $paged,
               
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => $cat,
                            'operator' => 'IN'
                        )
                    )

              );
              // The Query
              $the_query = new WP_Query( $args );

              // The Loop
              if ( $the_query->have_posts() ) {

                  while ( $the_query->have_posts() ) {
                      $the_query->the_post(); ?>
                   
                    <div class="experience-item retreats">

                        
              <?php if(get_the_post_thumbnail_url()){ ?>
           
                   <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'workshop' ); ?>" alt=''>

              <?php }else{ ?>

                   <img src="<?= get_template_directory_uri(); ?>/img/experience/expirience-item-img.png" alt="">

               <?php }  ?>
                        
                        <div class="category-list-mobile">
                            <a class="element tantra" href="#">Tantra</a>
                        </div>
                        <div class="box__content">
                            <div class="left-side">
                              <h3 class="item-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title();  ?></a></h3>
                                <div class="category-list">
                                    <a class="element tantra" href="#">Tantra</a>
                                    <a class="calen" href="#">June 2023</a>
                                </div>
                                <div class="event-content">
                                    <div class="col">
                                        <div class="date">Nov 11, 2022 to Sep 15, 2023</div>
                                        <div class="lang">English</div>
                                        <div class="location">Malaga, Spain</div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="training-price"><span>Price from: </span> <span><?= $product->get_price_html(); ?></span></div>
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
        
            <div class="row">
              <div class="col m12 s12 l10 offset-l2 xl10 offset-lx2">
               
            <div class="pagination__"> 

                   <?php $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'format' => '?number=%#%',
                        'current' => $paged,
//          'mid_size' => 1, 

                        'total' => $the_query->max_num_pages,
                        'prev_text'    => __('«'),
                        'next_text'    => __('»'), 
      //                  'type' => 'list'
                    ) );  ?>

 
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