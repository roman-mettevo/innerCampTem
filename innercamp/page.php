<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innercamp
 */

get_header();
?>


<?php if(is_product_category()){ ?>

<!-- // page.php -->

<div class="mobile-experience-filter-nav">
    <button class="close"><img src="<?= get_template_directory_uri(); ?>/img/team/close-img.svg" alt=""></button>
    <div class="mobile-experience-filter-wrap">
                    <nav class="experience-filter-nav">
                        <h2 class="experience-filter-title">Filter by www</h2>
                        <ul>
                            <li><a href="#">All courses <span>(40)</span></a></li>
                            <li><a href="/product-category/online/">Online <span>(146)</span></a></li>
                            <li><a href="/product-category/onsite/">On-site <span>(2)</span></a></li>
                        </ul>
                    </nav>
                    <nav class="experience-event-nav">
                        <h3 class="experience-event-title">Event Type</h3>
                        <ul>
                            <li><a href="/product-category/breathwork/">Breathwork <span>(81)</span></a></li>
                            <li><a href="/product-category/tantra/">Tantra <span>(86)</span></a></li>
                            <li><a href="/product-category/bodywork/">Bodywork <span>(12)</span></a></li>
                            <li><a href="/product-category/cacao/">Cacao ceremonies <span>(8)</span></a></li>
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


<section class="workshops__1" style="background: url('<?php 
                   $catID = $cat->term_id;
             $current_cat = get_queried_object($catID);                                
                 $thumbnail_id = get_term_meta( $current_cat->term_id, 'thumbnail_id', true ); ?>
                  <?php if($thumbnail_id){ ?><?php echo $image_url = wp_get_attachment_url( $thumbnail_id ); ?>
                    <?php }else{ ?>
                  <?= get_template_directory_uri(); ?>/img/experience/v-workshops-bg.webp<?php } ?>') no-repeat top/cover">
    <div class="container">
        <div class="row">
            <h1 class="title"><?php 
                   // var_dump($current_cat);
             if($current_cat->name == 'All'){
              echo 'InnerCamp';
             }else{
              echo $current_cat->name;
             } ?></h1>

            <?php if($current_cat->description){  ?> 
            <div class="workshops__1-description">
                <p><?php echo $current_cat->description; ?></p>
            </div>
            <?php }  ?> 
        </div>
    </div>
</section>


<section class="workshops__2 experience-wrap">
    <div class="container">
        <div class="row">
            <div class="experience-nav">
                <div class="experience-nav-wrap">
                    <nav class="experience-filter-nav">
                        <h2 class="experience-filter-title">Filter by</h2>
                        
                        
                        <?php 
                      
                                
                    // since wordpress 4.5.0
$args = array(
    'taxonomy'   => "product_cat",

// 'fields' => 'ids',
 'include' => array( 142, 146 ),
  
);
$product_categories = get_terms($args);  
                      
                  //  print_r($product_categories);  
                      ?>
                       
<!--   term_id   -->
                        <ul>
                          <?php	foreach( $product_categories as $subcategory ) { ?>
                              <li><a href="/product-category/online/">Online <span>(146)</span></a></li>
                          <?php	} ?>
                        </ul>
                    </nav>
                    <nav class="experience-event-nav">
                        <h3 class="experience-event-title">Event Type</h3>
                        <ul>
                            <li><a href="/product-category/breathwork/">Breathwork <span>(81)</span></a></li>
                            <li><a href="/product-category/tantra/">Tantra <span>(86)</span></a></li>
                            <li><a href="/product-category/bodywork/">Bodywork <span>(12)</span></a></li>
                            <li><a href="/product-category/cacao/">Cacao ceremonies <span>(8)</span></a></li>
                        </ul>
                    </nav>
                    <nav class="experience-lang-nav">
                        <h3 class="experience-lang-title">Language</h3>
                        <ul>
                            <li><a href="#">English <span>(4)</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="experience-content">
                <h2 class="experience-content-title"><?php echo $current_cat->name; ?></h2>
                <div class="experience-list">
                 
     <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'product', // Post type category BLOG
            'posts_per_page' => 5, // echo show three post 
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
                                  <h3 class="item-title"><?php echo get_the_title(); ?></h3>
                                  <div class="item-excerpt">Bring back the power to create inner strength and joy.</div>
                                  <div class="author-info">
                                      <img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt="" class="author-photo">
                                      <span class="author-name">Marjolein Van Ommeren</span>
                                  </div>
                              </div>
                             <div class="right-side">
                                 
               <?php while (have_rows('fotter_social_network', 'option')) : the_row();  ?>
             
								<?php if (get_row_layout() == 'ios_1') : ?>
										<a target="_blank" class="download" href="<?php the_sub_field('ios'); ?>">Download App</a>
								<?php endif; ?>             

             <?php endwhile; ?>
                                 
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

<?php }else{ ?>
<?php the_content(); ?>
<?php }  ?>



<?php if (is_shop()) { ?>

      <!-- // page.php -->
      <!-- Workshops -->
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
           
             <?php // var_dump($cat);
                      
//                      if ($cat) {
//    if (!is_array($cat)) {
//      $tocat = array($cat);
//  }
//}
 ?>

           <?php  
                      
               if ( isset( $_GET['number'] ) ) {
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

                        <div class="experience-item v-workshops">
                             <div class="box__content">

                                    <div class="left-side">
                                        <div class="category-list">
                                            <a class="element tantra" href="#">Tantra</a>
                                            <a class="calen" href="#">Nov 11</a>
                                            <a href="#" class="event-time">7pm CET</a>
                                            <a class="video" href="#">Zoom meeting in English</a>
                                        </div>
                                        <h3 class="item-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title();  ?></a></h3>
                                        <div class="item-excerpt">Bring back the power to create inner strength and joy.</div>
                                        <div class="author-info">
                                            <img src="<?= get_template_directory_uri(); ?>/img/testimonials/user.png" alt="" class="author-photo">
                                            <span class="author-name">Marjolein Van Ommeren</span>
                                        </div>
                                    </div>
                                   <div class="right-side">
                                      <?php while (have_rows('fotter_social_network', 'option')) : the_row(); ?>

                                        <?php if (get_row_layout() == 'ios_1') : ?>
                                          <a target="_blank" class="download" href="<?php the_sub_field('ios'); ?>">Download App</a>
                                        <?php endif; ?>

                                      <?php endwhile; ?>

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
    'mid_size' => 1, 

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

                  <h1 class="title"><?php echo the_title(); ?></h1>
                  
                  <?php if(0){ ?>

                  <div class="workshops__1-description">
                      <p>Discover our virtual and on-site workshops guided by leading practitioners from around the world.</p>
                  </div>
                  
                  <?php } ?>
                  
              </div>
          </div>
      </section>

      <?php endif; ?>


<?php }  ?>




<?php if(0){ ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
}
//get_sidebar();
get_footer();
