<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package innercamp
 */

get_header(); ?>

<!--single.php-->

    
    
 <?php if( is_product() ){  ?>
        <?php if(0){ ?>  
<!--   data-menuscroll-->
   
  <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				the_content(); 

			endwhile;

// the_content(); ?>


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

       <?php } ?>  
    

 
    
<section class="workshop__1" data-menuscroll
<?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl12">
        <h2 class="title"> <?php the_title(); ?></h2>
        
        <p>Learn to keep your energies in check and well-balanced to feel harmony, ease, and bliss within.</p>

          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Join now</a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>

       
       
        
      </div>
    </div>
  </div>
</section>

   
    <div class="left__menu__scroll">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl3">
            <div class="box__">
             
          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Join now</a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>
             

              <ul>
                <li class="active"><a href="javascript:;">Course basics</a></li>
                <li><a href="javascript:;">Accreditations</a></li>
                <li><a href="javascript:;">Benefits</a></li>
                <li><a href="javascript:;">About the course</a></li>
                <li><a href="javascript:;">The Program</a></li>
                <li><a href="javascript:;">Facilitators</a></li>
                <li><a href="javascript:;">Certification</a></li>
                <li><a href="javascript:;">Optional retreat</a></li>
                <li><a href="javascript:;">Live sessions</a></li>
                <li><a href="javascript:;">Book a free call</a></li>
                <li><a href="javascript:;">Testimonials</a></li>
                <li><a href="javascript:;">Why we are loved</a></li>
                <li><a href="javascript:;">Book now</a></li>
                <li><a href="javascript:;">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<section class="workshop__2">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
      
             <?php $product = wc_get_product( $post->ID ); // Works for any product type ?>
       
       <span class="notice">Join the InnerCamp Community to get access to this virtual workshop.</span>
        <div class="card">
          <div class="card-body">
            <div class="img">
              <!-- <img src="<?= get_template_directory_uri(); ?>/img/workshop/man-and-woman.jpg" alt="">-->
            </div>
            <div class="description"><a class="bundle" href="#"><?= $product->get_price_html(); ?></a>
              <ul class="info-list">
                <li class="info-item info-data">Dec 19, 2022</li>
                <li class="info-item info-time">
                  <div class="text-item">7:00 pm &mdash; 8:30 pm CET<span>*Amsterdam / Paris time zone</span></div>
                </li>
                <li class="info-item check-time">Check my local time here</li>
                <li class="info-item virtual-workshop">virtual workshop</li>
              </ul>
            </div>
          </div>
          <div class="card-footer">This workshop <strong>will be recorded</strong> and you will <strong>get access</strong> to
                                        the recording in case you miss it.
          </div>
        </div>
      </div>
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/workshop/about-workshop.jpg" alt=""></div>
        <div class="text">
          <h2 class="title">About this Workshop</h2>
          <p>
            These apparent opposite energies have real effects on our lives. When feminine enegry is
            dominant you may feel unsupported, unconfident and fragile. When there&rsquo;s more masculine
            energy running through your body you may be more inclined to anger, frustration and fatigue.
          </p>
          <p>
            Having a healthy balance of masculine and feminine energies can help you pursue what you want
            yet remain sensitive and gentle, be cold-headed yet emotional, be nurturing yet independent.
            When everything is in equal proportions it improves energy flow and creates conditions for a
            positive shift in life.
          </p>
        </div>
      </div>
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <h2 class="title">This workshop is facilitated by</h2>
        <div class="teacher">
          <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/workshop/workshop-is-faciliared.jpg" alt=""></div>
          <div class="text">
            <h3 class="heading">Marjolein Van Ommeren</h3>
            <ul class="skills">
              <li>Method teacher</li>
              <li>Sacred Womb Awakening Practitioner</li>
              <li>Shamanic Healing Practitioner</li>
            </ul>
            <p>
              Marjolein is an InnerCamp Tantra teacher and a Sacred Womb Awakening and Shamanic Healing
              Practitioner. She strongly believes that we are all healers. Her mission is to help
              people restore balance in their lives by reconnecting them to their inner light and to
              help people raise their vibration. Womb/Hara Awakening are ancient, self-empowering
              practices which are returning into the awareness of the Western world, helping people to
              reconnect to their true purpose and aligning their lives.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="workshop__3">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <div class="iphone-banner"></div><img class="iphone-13" src="<?= get_template_directory_uri(); ?>/img/workshop/iPhone 13.png" alt="">
        <div class="join-now-wrapper">
          <div class="join-now">
            <h3 class="heading">Join the InnerCamp Community to get access to this virtual workshop.</h3>

          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Join now</a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>
          
          </div>
          <div class="join-now-arrow"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <div class="trial">
          <h2 class="heading"><span><strong>Try for</strong> free for 7 days</span></h2>
          <div class="trial-box">
            <div class="text">
              <p>Then <strong>$29.99</strong>/month</p>
              <p><strong>OR</strong></p>
              <p>$299 per year.</p>
            </div>
            
          <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
              <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
              <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
              <input type="hidden" name="action" value="addcart_prod">

                <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" >Join now</a>
              <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
          </form>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="workshop__4">
  <div class="container"></div>
</section>
<section class="workshop__5">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l6 xl6">
        <h2 class="title">Upgrade your life</h2>
        <div class="bot__"><a class="bord-bundle" href="javascript:;">less than $1/day</a></div>
      </div>
    </div>
  </div>
  <video playsinline="" autoplay="" muted="" loop="" preload="none">
    <source src="https://innercamp.mettevo.com/wp-content/uploads/2023/02/video-app-online-video-cutter.com_.mp4" type="video/mp4">
  </video>
</section>
<section class="workshop__6">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <h2 class="title">How to prepare for the session:</h2>
        <div class="list-and-photo">
          <ul class="list">
            <li class="list-item">It is best not to eat a big meal before the session.</li>
            <li class="list-item">Set up a quiet space where you will be undisturbed for the session.</li>
            <li class="list-item">
              Make sure that you have access to a yoga mat, cushions, bolsters, blankets, a blindfold
              (optional) and tissues.
            </li>
            <li class="list-item">
              Join the session on time to not miss the instructions of the techniques we will be
              using.
            </li>
            <li class="list-item">
              You will need a good internet connection and a good speaker or headphones because we
              will play music.
            </li>
            <li class="list-item">Bring a notebook / journal and a pen, crayons, markers, etc.</li>
            <li class="list-item">You can also bring a drink of cacao, herbal tea or water.</li>
          </ul>
          <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/workshop/woman.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="workshop__7">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <h2 class="title">Got questions?</h2>
        <p>Schedule a <strong>free</strong> consultation call with one of our experts.</p><a class="bundle" href="#">Schedule now</a>
      </div>
    </div>
  </div>
</section>
<section class="workshop__8">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <h3 class="heading">
          By purchasing this service, I agree with the Terms of this website and the next
          indications:
        </h3>
        <ul class="agreement-list">
          <li class="agreement-item">
            <div class="agreement-text">
              Breathwork and other techniques we use can result in intense physical
              and emotional release. Therefore, it is not advised for persons with epilepsy, detached
              retina, glaucoma, uncontrolled high blood pressure, cardiovascular diseases (including
              prior
              heart attack), mental disorders (manic disorder, bipolar disorder, schizophrenia,
              obsessive
              compulsive disorder (OCD), paranoia, psychotic episodes, depersonalization, etc.),
              strokes,
              TIA&acute;s, seizures or other brain/neurological conditions, a history of aneurysms in the
              immediate family, use of prescription blood thinners, hospitalized for any psychiatric
              condition or emotional crisis within the past 10 years, osteoporosis or physical
              injuries
              that are not fully healed, acute somatic and viral diseases, chronic obstructive
              pulmonary
              disease (COPD-II and COPD-III), chronic diseases with symptoms of decompensation or
              terminal
              illness, individual intolerance of oxygen insufficiency, cancer and Low Impulse Control.
            </div>
          </li>
          <li class="agreement-item">
            <div class="agreement-text">
              Pregnant women are advised against practicing Breathwork and some of
              our techniques without first consulting and getting approval from their primary care
              physician.
            </div>
          </li>
          <li class="agreement-item">
            <div class="agreement-text">
              Persons with asthma should bring their inhaler and consult with their
              primary care physician and the facilitator.
            </div>
          </li>
          <li class="agreement-item">
            <div class="agreement-text">
              This work is deeply experiential. It may involve intense and
              energetic emotional release. This workshop is not advised for persons who are under the
              influence of alcohol or drugs.
            </div>
          </li>
        </ul>
      </div>
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <h2 class="title">Frequently asked questions</h2>
        <div class="dropdown">
          <button class="drop-button" type="button">Do I need to turn my camera on?</button>
          <p class="drop-text">
            We help you create a company culture of support, listening, and awareness that helps your
            employees &ndash; and your business &ndash; thrive. Through breathwork, bodywork, meditation and mindset
            coaching tools, we go to the employees&rsquo; core to build the rock solid foundation they will
            need to succeed mentally, spiritually, and professionally. Set in secluded and inspirational
            locations, our bespoke retreats are a holiday with deep purpose and long-lasting beneficial
            effects.
          </p>
        </div>
        <div class="dropdown">
          <button class="drop-button" type="button">How can I access the workshop?</button>
          <p class="drop-text">
            We help you create a company culture of support, listening, and awareness that helps your
            employees &ndash; and your business &ndash; thrive. Through breathwork, bodywork, meditation and mindset
            coaching tools, we go to the employees&rsquo; core to build the rock solid foundation they will
            need to succeed mentally, spiritually, and professionally. Set in secluded and inspirational
            locations, our bespoke retreats are a holiday with deep purpose and long-lasting beneficial
            effects.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

     <?php if(0){ ?>  
    <section class="blog-single__1">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l9 xl9">
            <p class="sub">Product</p>
            <h1 class="title"><?php echo the_title(); ?></h1>
            <div class="box__"><img src="<?= get_template_directory_uri(); ?>/img/brand-logo-white.svg" alt="#"><span class="data"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-single__2">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l12 xl12">
          
            <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                <input type="hidden" name="action" value="addcart_prod">

                  <a data-add="<?php echo get_the_ID(); ?>" class="bundle" name="add" >Add to cart</a>
                <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
            </form>


 
		<?php
                          
                          if(0){ 
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
                          
                          }
		?>
          </div>
        </div>
      </div>
    </section>
 
       <?php } ?>
   
  <?php }else{ ?> 
    

    <section class="blog-single__1">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l9 xl9">
            <p class="sub">BLOG</p>
            <h1 class="title"><?php echo the_title(); ?></h1>
            <div class="box__"><img src="<?= get_template_directory_uri(); ?>/img/brand-logo-white.svg" alt="#"><span class="data"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></span></div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="blog-single__2">
      <div class="container">
        <div class="row">     
          <div class="col m12 s12 l7 xl8">
          
      <?php    
  			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				the_content(); 

			endwhile;   ?>
           
          <?php // the_content(); ?>
            
            
            <div class="box__soseal">
              <h3>Share on</h3>
              <div class="soseal">
                <li><a href="https://twitter.com/share?url=https%3A%2F%2Finnercamp.com%2Fis-breathwork-dangerous%2F&amp;text=Is%20breathwork%20dangerous%3F%20-%20InnerCamp"> 
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M34 16C34 16 33.3 18.1 32 19.4C33.6 29.4 22.6 36.7 14 31C16.2 31.1 18.4 30.4 20 29C15 27.5 12.5 21.6 15 17C17.2 19.6 20.6 21.1 24 21C23.1 16.8 28 14.4 31 17.2C32.1 17.2 34 16 34 16Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                    </svg></a></li>
                <li><a href="https://www.facebook.com/innercamp/">
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                      <path d="M30 14H27C25.6739 14 24.4021 14.5268 23.4645 15.4645C22.5268 16.4021 22 17.6739 22 19V22H19V26H22V34H26V26H29L30 22H26V19C26 18.7348 26.1054 18.4804 26.2929 18.2929C26.4804 18.1054 26.7348 18 27 18H30V14Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
              </div>
            </div>
            <hr>
            <h3>References</h3>
      <ul class="list">          
<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>

        <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>

        </li>

<?php }
wp_reset_postdata(); ?>
           
    </ul>   
 
          </div>
          <div class="col m12 s12 l5 xl4">
            <div class="soseal">
              <li><a href="https://twitter.com/share?url=https%3A%2F%2Finnercamp.com%2Fis-breathwork-dangerous%2F&amp;text=Is%20breathwork%20dangerous%3F%20-%20InnerCamp"> 
                  <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34 16C34 16 33.3 18.1 32 19.4C33.6 29.4 22.6 36.7 14 31C16.2 31.1 18.4 30.4 20 29C15 27.5 12.5 21.6 15 17C17.2 19.6 20.6 21.1 24 21C23.1 16.8 28 14.4 31 17.2C32.1 17.2 34 16 34 16Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                  </svg></a></li>
              <li><a href="https://www.facebook.com/innercamp/">
                  <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="23" stroke="#424F44" stroke-width="2"></circle>
                    <path d="M30 14H27C25.6739 14 24.4021 14.5268 23.4645 15.4645C22.5268 16.4021 22 17.6739 22 19V22H19V26H22V34H26V26H29L30 22H26V19C26 18.7348 26.1054 18.4804 26.2929 18.2929C26.4804 18.1054 26.7348 18 27 18H30V14Z" stroke="#424F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg></a></li>
            </div>
            <h3>Related posts</h3>
            
            <div class="list__post">
  <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'post', // Post type category BLOG
            'posts_per_page' => 3, // echo show three post 
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>

              <li>
                <div class="box__img">
                
              <?php if(get_the_post_thumbnail_url()){ ?>
           
              <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'prevblog' ); ?>" alt=''>

            <?php }else{ ?>
      
                <img src="<?= get_template_directory_uri(); ?>/img/blog__img_2.png" alt="#">
      
               <?php }  ?>
               
                </div>
                <div class="content"><a class="title__" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
              </li>
        

<?php           }
            } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>

            </div>
            
            <a class="bundle" href="/category/all/">See all posts</a>
          </div>
        </div>
        <span class="post__back-to-top">
            <img src="<?= get_template_directory_uri();?>/img/back-to-top.svg" alt="">    
        <span>
      </div>
    </section>
    
  <?php } ?> 

<?php if(0){ ?>
<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				the_content(); 

			endwhile;

// the_content(); ?>


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'innercamp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

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
