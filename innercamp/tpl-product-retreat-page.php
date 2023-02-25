<?php
/**
 * Template Name: -- PRODUCT -- 2.2  Retreat Page*
 * Template Post Type: product, page, post
 */
get_header(); 
$product = wc_get_product( $post->ID );
$product_id = $post->ID;
?>


    <section class="tantra-retreat__1" data-menuscroll>
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl12">
                    <h2 class="title">Tantra Retreat</h2>
                    <ul class="short-info-list">
                        <li class="short-info-item name-item">Tantra</li>
                        <li class="short-info-item calendar-item">Jan 10, 2023 - Nov 28, 2023</li>
                        <li class="short-info-item check-item">Málaga, Spain</li>
                    </ul>
                    <p class="description">
                        A sacred journey back to your heart to unlock your limitless potential. Discover Tantra in safe
                        and fun way, unleash your spiritual potential with Tantra, Breathwork and Bodywork.
                    </p><a class="bundle" href="#">Book now</a>
                </div>
            </div>
        </div>
    </section>
    
<div class="left__menu__scroll" data-scroll>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l3 xl3">
              <div class="box__">
                <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">
                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                </form>         
              <ul>
                <?php if ( have_rows( 'retreat_pages' ) ): 
                  while ( have_rows( 'retreat_pages' ) ) : the_row();
                    if( get_row_layout() == 'section_2' ){  
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif; 
                    }  elseif( get_row_layout() == 'section_3' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_4' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_5' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_7' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_8' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_10' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_11' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } ?>
                  <?php endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <section class="tantra-retreat__2">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="retreat-product-card">
                        <div class="img">
                            <img src="<?= get_template_directory_uri(); ?>/img/retreat/product-img.jpg" alt="">
                        </div>
                        <div class="retreat-product-card-body">
                            <a href="#" class="bundle">Start my journey</a>
                            <ul class="icon-and-text-list">
                                <li class="icon-and-text-item icon-and-text-date">
                                    Dec 14, 2023 - Dec 17, 2023
                                </li>
                                <li class="icon-and-text-item icon-and-text-address">
                                    Málaga, Spain
                                </li>
                            </ul>
                            <span class="status">
                                onsite
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__3">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/workshop/about-workshop.jpg" alt="" /></div>
                    <div class="text">
                        <h2 class="title">About the retreat</h2>
                        <p>
                            Live your life fully and fearlessly through mind, body and senses. This somatic experience
                            is designed to restore your sacred connection with your true self and invigorate your whole
                            being.
                        </p>
                        <p>
                            Embodying your emotions will help you expand your consciousness, become more present, heal
                            past traumas and reinvent yourself. This retreat will open up your heart to many blessings
                            based on the physiology of emotions, energy work, breathing techniques, and active
                            meditation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__4">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <h2 class="title">The retreat will help you:</h2>
                    <div class="tahuma-recovery">
                        <ul class="tahuma-recovery-list">
                            <li class="tahuma-recovery-item">
                                Discharge unresolved energy from your body.
                            </li>
                            <li class="tahuma-recovery-item">
                                Process deeply stored emotions.
                            </li>
                            <li class="tahuma-recovery-item">Embrace the awakened body and emotional awareness.</li>
                            <li class="tahuma-recovery-item">Become more grounded and stable.
                            </li>
                            <li class="tahuma-recovery-item">Learn effective techniques for emotional regulation.</li>
                            <li class="tahuma-recovery-item">Live in the flow.</li>
                            <li class="tahuma-recovery-item">Cultivate presence.</li>
                        </ul>
                        <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/retreat/retreat-will-help-you.jpg" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__5">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="section-header">
                        <h2 class="title">The Program</h2>
                        <div class="faciliated-by"><span>Facilitated by</span>
                            <ul class="faciliated-users-list">
                                <li class="faciliated-users-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/faciliated-by-1.jpg"
                                        alt="" /></li>
                                <li class="faciliated-users-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/faciliated-by-2.jpg"
                                        alt="" /></li>
                                <li class="faciliated-users-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/faciliated-by-3.jpg"
                                        alt="" /></li>
                                <li class="faciliated-users-item"><img src="<?= get_template_directory_uri(); ?>/img/bodywork-1/faciliated-by-4.jpg"
                                        alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="schedule-grid">
                        <div class="schedule-grid-item">
                            <div class="schedule-header">
                                <img src="<?= get_template_directory_uri(); ?>/img/retreat/schedule-grid-header-1.jpg" alt="">
                            </div>
                            <div class="schedule-body">
                                <h3 class="heading">Saturday</h3>
                                <ul class="schedule-list">
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">15:00</div>
                                        <div class="schedule-text">Check-in</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">17:00</div>
                                        <div class="schedule-text">Opening ceremony
                                            (dome Shala)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">18:00</div>
                                        <div class="schedule-text">Tantric breathwork (dome Shala) or Active meditation
                                            and Healing Breathwork (Shala 2)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">19:30</div>
                                        <div class="schedule-text">Dinner</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">21:00</div>
                                        <div class="schedule-text">Party</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="schedule-grid-item">
                            <div class="schedule-header">
                                <img src="<?= get_template_directory_uri(); ?>/img/retreat/schedule-grid-header-2.jpg" alt="">
                            </div>
                            <div class="schedule-body">
                                <h3 class="heading">Saturday</h3>
                                <ul class="schedule-list">
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">08:00</div>
                                        <div class="schedule-text">
                                            Active meditation (dome Shala) or Breathwork (Shala 2)
                                        </div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">09:30</div>
                                        <div class="schedule-text">Breakfast</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">10:30</div>
                                        <div class="schedule-text">Connect with your energy (dome Shala) or Meditation
                                            (Shala 3)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">11:30</div>
                                        <div class="schedule-text">Bodywork (dome Shala) or Integrating the unconscious
                                            through polarity processing (Shala 2)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">12:30</div>
                                        <div class="schedule-text">Healing breathwork session (dome Shala) or Circle to
                                            activate the voice (Shala 2)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">13:30</div>
                                        <div class="schedule-text">Lunch</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">15:30</div>
                                        <div class="schedule-text">Active meditation (dome Shala) or Conscious Sharing +
                                            Tunnel of Love (Shala 3)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">17:00</div>
                                        <div class="schedule-text">Connected breathwork (dome Shala) or Shamanic journey
                                            (Shala 3)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">19:30</div>
                                        <div class="schedule-text">Dinner</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">21:00</div>
                                        <div class="schedule-text">Tantric massage (dome Shala) or Party (Shala 3)</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="schedule-grid-item">
                            <div class="schedule-header">
                                <img src="<?= get_template_directory_uri(); ?>/img/retreat/schedule-grid-header-3.jpg" alt="">
                            </div>
                            <div class="schedule-body">
                                <h3 class="heading">Monday</h3>
                                <ul class="schedule-list">
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">08:00</div>
                                        <div class="schedule-text">
                                            Breathwork to heal the inner child (dome Shala) or Karunesh Heart Chakra
                                            meditation (Shala 2)
                                        </div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">09:00</div>
                                        <div class="schedule-text">Breakfast</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">11:00</div>
                                        <div class="schedule-text">Chakra breathing (dome Shala) or Tantric breathwork
                                            (Shala 3)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">12:30</div>
                                        <div class="schedule-text">Sharing Circle (dome Shala) or Body healing ceremony
                                            (Shala 2)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">13:30</div>
                                        <div class="schedule-text">Lunch</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">16:00</div>
                                        <div class="schedule-text">Cacao + Breathwork for Ancestral Healing (dome Shala)
                                        </div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">18:30</div>
                                        <div class="schedule-text">Ecstatic Dance (dome Shala)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">19:30</div>
                                        <div class="schedule-text">Dinner</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">21:30</div>
                                        <div class="schedule-text">Party (dome Shala)</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="schedule-grid-item">
                            <div class="schedule-header">
                                <img src="<?= get_template_directory_uri(); ?>/img/retreat/schedule-grid-header-4.jpg" alt="">
                            </div>
                            <div class="schedule-body">
                                <h3 class="heading">Tuesday</h3>
                                <ul class="schedule-list">
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">07:30</div>
                                        <div class="schedule-text">Breathwork for Warriors (dome Shala) or Ritual to
                                            protect your Energy (Shala 2)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">09:00</div>
                                        <div class="schedule-text">Closing ceremony (dome Shala)</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">09:30</div>
                                        <div class="schedule-text">Breakfast</div>
                                    </li>
                                    <li class="schedule-list-item">
                                        <div class="schedule-time">11:00</div>
                                        <div class="schedule-text">Checkout</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__6">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="cacao-ceremony">
                        <div class="cacao-text">
                            <p>
                                The Cacao Ceremony will be
                                facilitated by our long-time friends
                                <strong>Los Cosmiqueros.</strong>
                            </p>
                        </div>
                        <div class="img">
                            <img src="<?= get_template_directory_uri(); ?>/img/retreat/cacao.jpg" alt="">
                        </div>
                    </div>
                    <div class="arrow-gap"></div>
                    <div class="yogi-tea">
                        <div class="img">
                            <img src="<?= get_template_directory_uri(); ?>/img/retreat/yogi-tea.jpg" alt="">
                        </div>
                        <div class="yogi-text">
                            <p>
                                Take a moment to pause and enchant your senses with <strong>YogiTea.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__7">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <h2 class="title">The retreat is facilitated by</h2>
                    <div class="coach-blocks">
                        <div class="chach-item">
                            <div class="img">
                                <img src="<?= get_template_directory_uri(); ?>/img/retreat/alexis.jpg" alt="">
                            </div>
                            <div class="coach-text-box">
                                <h3 class="name">Alexis Alcalá</h3>
                                <ul class="about-labels">
                                    <li class="about-label">InnerCamp founder</li>
                                    <li class="about-label">Holistic coach</li>
                                    <li class="about-label">Breathwork master</li>
                                    <li class="about-label">Tantra teacher</li>
                                </ul>
                                <div class="about-text">
                                    Certified executive and personal coach, breathwork master and tantra teacher who
                                    intuitively uncovers peoples’ potential so that they feel empowered to unleash
                                    that
                                    power into their lives and the world. Alexis’ work revolves around people
                                    coaching
                                    in different spheres of life. He has worked with different companies across
                                    Europe,
                                    Africa and Asia as a trainer, mentor, manager and coach. He is someone whose
                                    life
                                    graph took an astounding turnaround when he changed his own life with the method
                                    he
                                    created.
                                </div>
                            </div>
                        </div>
                        <div class="chach-item">
                            <div class="img">
                                <img src="<?= get_template_directory_uri(); ?>/img/retreat/marjolein.jpg" alt="">
                            </div>
                            <div class="coach-text-box">
                                <h3 class="name">Marjolein Van Ommeren</h3>
                                <ul class="about-labels">
                                    <li class="about-label">Method teacher</li>
                                    <li class="about-label">Sacred Womb Awakening Practitioner</li>
                                    <li class="about-label">Shamanic Healing Practitioner</li>
                                </ul>
                                <div class="about-text">
                                    Marjolein is an InnerCamp Tantra teacher and a Sacred Womb Awakening and Shamanic
                                    Healing Practitioner. She strongly believes that we are all healers. Her mission is
                                    to help people restore balance in their lives by reconnecting them to their inner
                                    light and to help people raise their vibration. Womb/Hara Awakening are ancient,
                                    self-empowering practices which are returning into the awareness of the Western
                                    world, helping people to reconnect to their true purpose and aligning their lives.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__8">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="text-column">
                        <h2 class="title">Venue </h2>
                        <h3 class="text-after-heading">
                            (Santillan Yoga and Wellness Center)
                        </h3>
                        <div class="dotted-text-block">
                            <p>Authentic Andalusian farmhouse with gardens overlooking the sea. A farm of 50,000 sq,
                                meters,
                                it is located in the peace of the Spanish countryside, and yet is conveniently only 20
                                minutes from Malaga airport.</p>
                            <p>You can immerse yourself in the silence of nature in its lovely gardens and surrounding
                                hills
                                or enjoy stargazing under the dark night sky gathering around the bonfire.</p>
                            <p>Centro Santillan was mentioned in The Times as one of Europe’s best yoga and wellness
                                centers.</p>
                            <p>The property features a newly built, beautiful state-of-the-art, and fully equipped yoga
                                studio.</p>
                        </div>
                        <address class="address-box">
                            Suryalila Retreat Centre Cortijo La Fabrica, Pago del Pajarete 11650 Villamartin (Cadiz)
                            Spain
                        </address>
                    </div>
                    <div class="img-column">
                        <div class="images">
                            <img src="<?= get_template_directory_uri(); ?>/img/retreat/venue-1.jpg" alt="">
                            <img src="<?= get_template_directory_uri(); ?>/img/retreat/venue-2.jpg" alt="">
                        </div>
                        <div class="img-column-track"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__9">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div id="maps-slider" class="photo-and-map-slider splide">
                        <div class="splide__track">
                            <div class="arrows">
                                <a class="left_a previous-button" href="javascript:;">
                                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z"
                                            fill="#B9B9B9"></path>
                                    </svg>
                                </a>
                                <a class="right_a next-button" href="javascript:;">
                                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z"
                                            fill="#B68742"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="splide__list">
                                <div class="photo-and-map-slide splide__slide">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.9665395333914!2d30.52243375505082!3d50.441723910417636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ceff6225e3d7%3A0xe5ac3f7002b64b6!2sBelgium%20Anno%201445!5e0!3m2!1suk!2sus!4v1675422531320!5m2!1suk!2sus"
                                        width="347" height="190" style="border:0;border-radius:34px;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                                <div class="photo-and-map-slide splide__slide"></div>
                                <div class="photo-and-map-slide splide__slide"></div>
                                <div class="photo-and-map-slide splide__slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__10">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <h2 class="title">Got questions?</h2>
                    <p>Schedule a <strong>free</strong> consultation call with one of our experts.</p>
                    <a class="bundle" href="#">Schedule now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__11">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="innercamp-retreat">
                        <div class="innercamp-retreat-header">
                            <h2 class="title">InnerCamp Retreat</h2>
                            <span class="retreat-date">Jun 24, 2023 - Jun 27, 2023</span>
                        </div>
                        <div class="innercamp-retreat-body">
                            <h3 class="body-title">Choose Type of Accommodation</h3>
                            <ul class="retreat-room-list">
                                <li class="retreat-room-item">
                                    <ul class="retreat-room-bads">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5358_3244)">
                                                    <path
                                                        d="M0.686849 13.4801H19.292V12.5455C19.292 12.3194 19.2562 12.1093 19.1927 11.9212C19.1243 11.721 19.0234 11.5429 18.8981 11.3888C18.8216 11.2948 18.7354 11.2087 18.6426 11.1327C18.5482 11.0546 18.4473 10.9866 18.3415 10.9286C18.0566 10.8525 17.7734 10.7805 17.4919 10.7124C17.2087 10.6444 16.9238 10.5803 16.6374 10.5203C16.6243 10.5183 16.6146 10.5163 16.6016 10.5123C16.4567 10.4823 16.3184 10.4543 16.1865 10.4283C16.0547 10.4022 15.9147 10.3762 15.7682 10.3482H15.765C14.7689 10.1921 13.776 10.072 12.7848 9.99199C11.792 9.91195 10.804 9.87192 9.82259 9.86992C9.23991 9.86992 8.65885 9.88193 8.0778 9.90995C7.5 9.93796 6.91895 9.97799 6.33789 10.034H6.33464C5.79102 10.0961 5.24902 10.1741 4.7054 10.2642C4.16341 10.3542 3.61979 10.4603 3.07292 10.5783L3.0127 10.5964C3.0013 10.6004 2.98991 10.6024 2.98014 10.6024C2.97038 10.6044 2.96061 10.6044 2.95085 10.6044C2.69531 10.6604 2.43327 10.7224 2.16309 10.7885C1.90104 10.8525 1.639 10.9206 1.37858 10.9906C1.31348 11.0346 1.25163 11.0847 1.19303 11.1367C1.13444 11.1907 1.07747 11.2487 1.02702 11.3108C0.917969 11.4449 0.831706 11.599 0.773112 11.7711C0.717773 11.9332 0.686849 12.1133 0.686849 12.3094V13.4801ZM2.3112 0H17.4463C17.6432 0 17.832 0.0480288 18.0046 0.136082C18.1836 0.228137 18.3447 0.362217 18.4798 0.526316C18.6149 0.692415 18.724 0.890534 18.7972 1.11067C18.8688 1.32279 18.9079 1.55493 18.9079 1.79708V10.3402C18.9909 10.4002 19.0723 10.4663 19.1471 10.5383C19.2318 10.6184 19.3115 10.7024 19.3848 10.7925C19.5736 11.0246 19.7266 11.2948 19.8291 11.599C19.9268 11.8851 19.9805 12.2033 19.9805 12.5475V13.7663C19.9854 13.7863 19.9902 13.8063 19.9935 13.8263V13.8303C19.9967 13.8563 19.9984 13.8803 19.9984 13.9043C19.9984 13.9304 19.9967 13.9564 19.9919 13.9824C19.9886 14.0024 19.9837 14.0224 19.9788 14.0424V19.5777C19.9788 19.6938 19.9398 19.7999 19.8779 19.8759C19.8161 19.952 19.7298 20 19.6354 20H18.9274C18.8477 20 18.7744 19.966 18.7158 19.9099C18.6572 19.8539 18.6133 19.7739 18.5954 19.6818C18.4652 19.2215 18.3333 18.8573 18.1917 18.5731C18.0518 18.293 17.902 18.0929 17.7295 17.9508C17.5553 17.8087 17.347 17.7186 17.0947 17.6646C16.8376 17.6086 16.5381 17.5906 16.1816 17.5926L3.19987 17.6126H3.19336C2.93783 17.6066 2.72786 17.6466 2.55208 17.7306C2.37793 17.8147 2.23633 17.9408 2.11914 18.1029C1.9873 18.283 1.87663 18.5131 1.77572 18.7813C1.67318 19.0554 1.5804 19.3676 1.48763 19.7098C1.46484 19.7979 1.41927 19.8679 1.3623 19.9179C1.30859 19.966 1.24349 19.994 1.17676 19.998C1.17188 20 1.16699 20 1.16211 20H0.343424C0.249023 20 0.16276 19.952 0.100911 19.8759C0.0390625 19.7999 0 19.6938 0 19.5777V12.3114C0 11.9972 0.0488281 11.709 0.136719 11.4489C0.23112 11.1727 0.369466 10.9266 0.541992 10.7144C0.59082 10.6544 0.644531 10.5944 0.701497 10.5383C0.750326 10.4903 0.799154 10.4443 0.851237 10.4022V1.77907C0.851237 1.53692 0.890299 1.30678 0.961914 1.09866C1.03678 0.880528 1.14583 0.684411 1.28092 0.520312C1.41602 0.356214 1.57715 0.226136 1.75456 0.136082C1.92708 0.0480288 2.11426 0 2.3112 0ZM17.4463 0.844507H2.3112C2.2054 0.844507 2.10449 0.870522 2.01172 0.91655C1.91569 0.964579 1.83105 1.03462 1.75944 1.12067C1.68945 1.20472 1.63249 1.30879 1.59342 1.42085C1.55762 1.53092 1.53809 1.65099 1.53809 1.77907V9.996C1.58691 9.97599 1.63574 9.95998 1.6862 9.94397C1.76595 9.91795 1.8457 9.89594 1.92546 9.87993C2.03613 9.85591 2.15658 9.8299 2.28678 9.80188C2.38444 9.78187 2.48861 9.75986 2.59603 9.73984V7.64258C2.59603 7.3264 2.64811 7.02421 2.74089 6.74805C2.83854 6.45988 2.98014 6.20172 3.15592 5.98559C3.33171 5.76946 3.54167 5.59536 3.77604 5.47529C4.00065 5.36122 4.24642 5.29718 4.50358 5.29718H7.72949C7.98665 5.29718 8.23242 5.36122 8.45703 5.47529C8.69141 5.59536 8.90137 5.76946 9.07715 5.98559C9.25293 6.20172 9.39453 6.45988 9.49219 6.74805C9.58496 7.02421 9.63704 7.3264 9.63704 7.64258V8.98139C9.75098 8.97939 9.86491 8.97939 9.98047 8.97939V7.64258C9.98047 7.3264 10.0326 7.02421 10.1253 6.74805C10.223 6.45988 10.3646 6.20172 10.5404 5.98559C10.7161 5.76946 10.9261 5.59536 11.1605 5.47529C11.3851 5.36122 11.6309 5.29718 11.888 5.29718H15.1139C15.3711 5.29718 15.6169 5.36122 15.8415 5.47529C16.0758 5.59536 16.2858 5.76946 16.4616 5.98559C16.6374 6.20172 16.779 6.45988 16.8766 6.74805C16.9694 7.02421 17.0215 7.3264 17.0215 7.64258V9.71183C17.1436 9.73384 17.2738 9.75986 17.4137 9.78787C17.5684 9.81789 17.7165 9.84791 17.8597 9.87793C17.9329 9.89394 18.0078 9.91195 18.0827 9.93396C18.1299 9.94797 18.1755 9.96198 18.2194 9.97799V1.79708C18.2194 1.669 18.1982 1.54693 18.1608 1.43486C18.1217 1.31879 18.0632 1.21473 17.9915 1.12467C17.9199 1.03662 17.8337 0.964579 17.7409 0.91655C17.6497 0.870522 17.5505 0.844507 17.4463 0.844507ZM7.03288 9.11747C7.36003 9.08745 7.6888 9.06144 8.02246 9.04142C8.33008 9.02141 8.64095 9.0074 8.95182 8.9974V7.64258C8.95182 7.44046 8.91927 7.24635 8.85905 7.07024C8.7972 6.88613 8.70605 6.72203 8.59212 6.58195C8.47982 6.44387 8.34473 6.3318 8.19499 6.25375C8.05176 6.17971 7.89388 6.13968 7.72949 6.13968H4.50358C4.33919 6.13968 4.18131 6.17971 4.03809 6.25375C3.88835 6.3298 3.75488 6.44186 3.64095 6.58195C3.52865 6.72003 3.4375 6.88613 3.37402 7.07024C3.3138 7.24635 3.28125 7.44046 3.28125 7.64258V9.60576C3.54492 9.55773 3.81185 9.51371 4.08529 9.46968C4.37988 9.42365 4.67285 9.38163 4.96257 9.3416C5.07487 9.32559 5.19531 9.30758 5.32064 9.29157C5.43783 9.27557 5.5599 9.26156 5.6901 9.24555C5.91146 9.21953 6.13119 9.19552 6.34766 9.1735C6.57064 9.15549 6.7985 9.13548 7.03288 9.11747ZM10.6673 8.98539C10.8643 8.98939 11.0612 8.9954 11.2581 9.0034C11.4762 9.01141 11.6943 9.02341 11.9108 9.03542H11.9124C12.2689 9.05143 12.6172 9.07144 12.9557 9.09546C13.2943 9.11947 13.6247 9.14949 13.9404 9.18351C14.3994 9.23354 14.8438 9.29358 15.2653 9.36362C15.6429 9.42766 16.001 9.4997 16.3363 9.57975V7.64258C16.3363 7.44046 16.3037 7.24635 16.2435 7.07024C16.1816 6.88613 16.0905 6.72203 15.9766 6.58195C15.8643 6.44387 15.7292 6.3318 15.5794 6.25375C15.4362 6.17971 15.2783 6.13968 15.1139 6.13968H11.8896C11.7253 6.13968 11.5674 6.17971 11.4242 6.25375C11.2744 6.3298 11.141 6.44186 11.027 6.58195C10.9147 6.72003 10.8236 6.88613 10.7601 7.07024C10.6999 7.24635 10.6673 7.44046 10.6673 7.64258V8.98539ZM19.2936 14.3266H0.686849V19.1555H0.919596C1.01074 18.8393 1.10514 18.5451 1.21094 18.283C1.32487 18.0028 1.45345 17.7547 1.6097 17.5405C1.79525 17.2844 2.01335 17.0863 2.27539 16.9542C2.53743 16.8241 2.84342 16.7581 3.21126 16.7681L16.1816 16.748C16.5999 16.748 16.958 16.7721 17.2705 16.8461C17.5879 16.9202 17.8613 17.0462 18.1071 17.2463C18.335 17.4325 18.5303 17.6786 18.7061 18.0008C18.8737 18.309 19.0234 18.6872 19.1667 19.1535H19.2904V14.3266H19.2936Z"
                                                        fill="#B68742" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5358_3244">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </li>
                                    </ul>
                                    <h4 class="room-name">Single room</h4>
                                    <div class="room-availability">
                                        <span class="available">Available</span>
                                    </div>
                                    <div class="room-price">
                                        1200€ price per person
                                    </div>
                                </li>
                                <li class="retreat-room-item">
                                    <ul class="retreat-room-bads">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5358_3244)">
                                                    <path
                                                        d="M0.686849 13.4801H19.292V12.5455C19.292 12.3194 19.2562 12.1093 19.1927 11.9212C19.1243 11.721 19.0234 11.5429 18.8981 11.3888C18.8216 11.2948 18.7354 11.2087 18.6426 11.1327C18.5482 11.0546 18.4473 10.9866 18.3415 10.9286C18.0566 10.8525 17.7734 10.7805 17.4919 10.7124C17.2087 10.6444 16.9238 10.5803 16.6374 10.5203C16.6243 10.5183 16.6146 10.5163 16.6016 10.5123C16.4567 10.4823 16.3184 10.4543 16.1865 10.4283C16.0547 10.4022 15.9147 10.3762 15.7682 10.3482H15.765C14.7689 10.1921 13.776 10.072 12.7848 9.99199C11.792 9.91195 10.804 9.87192 9.82259 9.86992C9.23991 9.86992 8.65885 9.88193 8.0778 9.90995C7.5 9.93796 6.91895 9.97799 6.33789 10.034H6.33464C5.79102 10.0961 5.24902 10.1741 4.7054 10.2642C4.16341 10.3542 3.61979 10.4603 3.07292 10.5783L3.0127 10.5964C3.0013 10.6004 2.98991 10.6024 2.98014 10.6024C2.97038 10.6044 2.96061 10.6044 2.95085 10.6044C2.69531 10.6604 2.43327 10.7224 2.16309 10.7885C1.90104 10.8525 1.639 10.9206 1.37858 10.9906C1.31348 11.0346 1.25163 11.0847 1.19303 11.1367C1.13444 11.1907 1.07747 11.2487 1.02702 11.3108C0.917969 11.4449 0.831706 11.599 0.773112 11.7711C0.717773 11.9332 0.686849 12.1133 0.686849 12.3094V13.4801ZM2.3112 0H17.4463C17.6432 0 17.832 0.0480288 18.0046 0.136082C18.1836 0.228137 18.3447 0.362217 18.4798 0.526316C18.6149 0.692415 18.724 0.890534 18.7972 1.11067C18.8688 1.32279 18.9079 1.55493 18.9079 1.79708V10.3402C18.9909 10.4002 19.0723 10.4663 19.1471 10.5383C19.2318 10.6184 19.3115 10.7024 19.3848 10.7925C19.5736 11.0246 19.7266 11.2948 19.8291 11.599C19.9268 11.8851 19.9805 12.2033 19.9805 12.5475V13.7663C19.9854 13.7863 19.9902 13.8063 19.9935 13.8263V13.8303C19.9967 13.8563 19.9984 13.8803 19.9984 13.9043C19.9984 13.9304 19.9967 13.9564 19.9919 13.9824C19.9886 14.0024 19.9837 14.0224 19.9788 14.0424V19.5777C19.9788 19.6938 19.9398 19.7999 19.8779 19.8759C19.8161 19.952 19.7298 20 19.6354 20H18.9274C18.8477 20 18.7744 19.966 18.7158 19.9099C18.6572 19.8539 18.6133 19.7739 18.5954 19.6818C18.4652 19.2215 18.3333 18.8573 18.1917 18.5731C18.0518 18.293 17.902 18.0929 17.7295 17.9508C17.5553 17.8087 17.347 17.7186 17.0947 17.6646C16.8376 17.6086 16.5381 17.5906 16.1816 17.5926L3.19987 17.6126H3.19336C2.93783 17.6066 2.72786 17.6466 2.55208 17.7306C2.37793 17.8147 2.23633 17.9408 2.11914 18.1029C1.9873 18.283 1.87663 18.5131 1.77572 18.7813C1.67318 19.0554 1.5804 19.3676 1.48763 19.7098C1.46484 19.7979 1.41927 19.8679 1.3623 19.9179C1.30859 19.966 1.24349 19.994 1.17676 19.998C1.17188 20 1.16699 20 1.16211 20H0.343424C0.249023 20 0.16276 19.952 0.100911 19.8759C0.0390625 19.7999 0 19.6938 0 19.5777V12.3114C0 11.9972 0.0488281 11.709 0.136719 11.4489C0.23112 11.1727 0.369466 10.9266 0.541992 10.7144C0.59082 10.6544 0.644531 10.5944 0.701497 10.5383C0.750326 10.4903 0.799154 10.4443 0.851237 10.4022V1.77907C0.851237 1.53692 0.890299 1.30678 0.961914 1.09866C1.03678 0.880528 1.14583 0.684411 1.28092 0.520312C1.41602 0.356214 1.57715 0.226136 1.75456 0.136082C1.92708 0.0480288 2.11426 0 2.3112 0ZM17.4463 0.844507H2.3112C2.2054 0.844507 2.10449 0.870522 2.01172 0.91655C1.91569 0.964579 1.83105 1.03462 1.75944 1.12067C1.68945 1.20472 1.63249 1.30879 1.59342 1.42085C1.55762 1.53092 1.53809 1.65099 1.53809 1.77907V9.996C1.58691 9.97599 1.63574 9.95998 1.6862 9.94397C1.76595 9.91795 1.8457 9.89594 1.92546 9.87993C2.03613 9.85591 2.15658 9.8299 2.28678 9.80188C2.38444 9.78187 2.48861 9.75986 2.59603 9.73984V7.64258C2.59603 7.3264 2.64811 7.02421 2.74089 6.74805C2.83854 6.45988 2.98014 6.20172 3.15592 5.98559C3.33171 5.76946 3.54167 5.59536 3.77604 5.47529C4.00065 5.36122 4.24642 5.29718 4.50358 5.29718H7.72949C7.98665 5.29718 8.23242 5.36122 8.45703 5.47529C8.69141 5.59536 8.90137 5.76946 9.07715 5.98559C9.25293 6.20172 9.39453 6.45988 9.49219 6.74805C9.58496 7.02421 9.63704 7.3264 9.63704 7.64258V8.98139C9.75098 8.97939 9.86491 8.97939 9.98047 8.97939V7.64258C9.98047 7.3264 10.0326 7.02421 10.1253 6.74805C10.223 6.45988 10.3646 6.20172 10.5404 5.98559C10.7161 5.76946 10.9261 5.59536 11.1605 5.47529C11.3851 5.36122 11.6309 5.29718 11.888 5.29718H15.1139C15.3711 5.29718 15.6169 5.36122 15.8415 5.47529C16.0758 5.59536 16.2858 5.76946 16.4616 5.98559C16.6374 6.20172 16.779 6.45988 16.8766 6.74805C16.9694 7.02421 17.0215 7.3264 17.0215 7.64258V9.71183C17.1436 9.73384 17.2738 9.75986 17.4137 9.78787C17.5684 9.81789 17.7165 9.84791 17.8597 9.87793C17.9329 9.89394 18.0078 9.91195 18.0827 9.93396C18.1299 9.94797 18.1755 9.96198 18.2194 9.97799V1.79708C18.2194 1.669 18.1982 1.54693 18.1608 1.43486C18.1217 1.31879 18.0632 1.21473 17.9915 1.12467C17.9199 1.03662 17.8337 0.964579 17.7409 0.91655C17.6497 0.870522 17.5505 0.844507 17.4463 0.844507ZM7.03288 9.11747C7.36003 9.08745 7.6888 9.06144 8.02246 9.04142C8.33008 9.02141 8.64095 9.0074 8.95182 8.9974V7.64258C8.95182 7.44046 8.91927 7.24635 8.85905 7.07024C8.7972 6.88613 8.70605 6.72203 8.59212 6.58195C8.47982 6.44387 8.34473 6.3318 8.19499 6.25375C8.05176 6.17971 7.89388 6.13968 7.72949 6.13968H4.50358C4.33919 6.13968 4.18131 6.17971 4.03809 6.25375C3.88835 6.3298 3.75488 6.44186 3.64095 6.58195C3.52865 6.72003 3.4375 6.88613 3.37402 7.07024C3.3138 7.24635 3.28125 7.44046 3.28125 7.64258V9.60576C3.54492 9.55773 3.81185 9.51371 4.08529 9.46968C4.37988 9.42365 4.67285 9.38163 4.96257 9.3416C5.07487 9.32559 5.19531 9.30758 5.32064 9.29157C5.43783 9.27557 5.5599 9.26156 5.6901 9.24555C5.91146 9.21953 6.13119 9.19552 6.34766 9.1735C6.57064 9.15549 6.7985 9.13548 7.03288 9.11747ZM10.6673 8.98539C10.8643 8.98939 11.0612 8.9954 11.2581 9.0034C11.4762 9.01141 11.6943 9.02341 11.9108 9.03542H11.9124C12.2689 9.05143 12.6172 9.07144 12.9557 9.09546C13.2943 9.11947 13.6247 9.14949 13.9404 9.18351C14.3994 9.23354 14.8438 9.29358 15.2653 9.36362C15.6429 9.42766 16.001 9.4997 16.3363 9.57975V7.64258C16.3363 7.44046 16.3037 7.24635 16.2435 7.07024C16.1816 6.88613 16.0905 6.72203 15.9766 6.58195C15.8643 6.44387 15.7292 6.3318 15.5794 6.25375C15.4362 6.17971 15.2783 6.13968 15.1139 6.13968H11.8896C11.7253 6.13968 11.5674 6.17971 11.4242 6.25375C11.2744 6.3298 11.141 6.44186 11.027 6.58195C10.9147 6.72003 10.8236 6.88613 10.7601 7.07024C10.6999 7.24635 10.6673 7.44046 10.6673 7.64258V8.98539ZM19.2936 14.3266H0.686849V19.1555H0.919596C1.01074 18.8393 1.10514 18.5451 1.21094 18.283C1.32487 18.0028 1.45345 17.7547 1.6097 17.5405C1.79525 17.2844 2.01335 17.0863 2.27539 16.9542C2.53743 16.8241 2.84342 16.7581 3.21126 16.7681L16.1816 16.748C16.5999 16.748 16.958 16.7721 17.2705 16.8461C17.5879 16.9202 17.8613 17.0462 18.1071 17.2463C18.335 17.4325 18.5303 17.6786 18.7061 18.0008C18.8737 18.309 19.0234 18.6872 19.1667 19.1535H19.2904V14.3266H19.2936Z"
                                                        fill="#B68742" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5358_3244">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5358_3244)">
                                                    <path
                                                        d="M0.686849 13.4801H19.292V12.5455C19.292 12.3194 19.2562 12.1093 19.1927 11.9212C19.1243 11.721 19.0234 11.5429 18.8981 11.3888C18.8216 11.2948 18.7354 11.2087 18.6426 11.1327C18.5482 11.0546 18.4473 10.9866 18.3415 10.9286C18.0566 10.8525 17.7734 10.7805 17.4919 10.7124C17.2087 10.6444 16.9238 10.5803 16.6374 10.5203C16.6243 10.5183 16.6146 10.5163 16.6016 10.5123C16.4567 10.4823 16.3184 10.4543 16.1865 10.4283C16.0547 10.4022 15.9147 10.3762 15.7682 10.3482H15.765C14.7689 10.1921 13.776 10.072 12.7848 9.99199C11.792 9.91195 10.804 9.87192 9.82259 9.86992C9.23991 9.86992 8.65885 9.88193 8.0778 9.90995C7.5 9.93796 6.91895 9.97799 6.33789 10.034H6.33464C5.79102 10.0961 5.24902 10.1741 4.7054 10.2642C4.16341 10.3542 3.61979 10.4603 3.07292 10.5783L3.0127 10.5964C3.0013 10.6004 2.98991 10.6024 2.98014 10.6024C2.97038 10.6044 2.96061 10.6044 2.95085 10.6044C2.69531 10.6604 2.43327 10.7224 2.16309 10.7885C1.90104 10.8525 1.639 10.9206 1.37858 10.9906C1.31348 11.0346 1.25163 11.0847 1.19303 11.1367C1.13444 11.1907 1.07747 11.2487 1.02702 11.3108C0.917969 11.4449 0.831706 11.599 0.773112 11.7711C0.717773 11.9332 0.686849 12.1133 0.686849 12.3094V13.4801ZM2.3112 0H17.4463C17.6432 0 17.832 0.0480288 18.0046 0.136082C18.1836 0.228137 18.3447 0.362217 18.4798 0.526316C18.6149 0.692415 18.724 0.890534 18.7972 1.11067C18.8688 1.32279 18.9079 1.55493 18.9079 1.79708V10.3402C18.9909 10.4002 19.0723 10.4663 19.1471 10.5383C19.2318 10.6184 19.3115 10.7024 19.3848 10.7925C19.5736 11.0246 19.7266 11.2948 19.8291 11.599C19.9268 11.8851 19.9805 12.2033 19.9805 12.5475V13.7663C19.9854 13.7863 19.9902 13.8063 19.9935 13.8263V13.8303C19.9967 13.8563 19.9984 13.8803 19.9984 13.9043C19.9984 13.9304 19.9967 13.9564 19.9919 13.9824C19.9886 14.0024 19.9837 14.0224 19.9788 14.0424V19.5777C19.9788 19.6938 19.9398 19.7999 19.8779 19.8759C19.8161 19.952 19.7298 20 19.6354 20H18.9274C18.8477 20 18.7744 19.966 18.7158 19.9099C18.6572 19.8539 18.6133 19.7739 18.5954 19.6818C18.4652 19.2215 18.3333 18.8573 18.1917 18.5731C18.0518 18.293 17.902 18.0929 17.7295 17.9508C17.5553 17.8087 17.347 17.7186 17.0947 17.6646C16.8376 17.6086 16.5381 17.5906 16.1816 17.5926L3.19987 17.6126H3.19336C2.93783 17.6066 2.72786 17.6466 2.55208 17.7306C2.37793 17.8147 2.23633 17.9408 2.11914 18.1029C1.9873 18.283 1.87663 18.5131 1.77572 18.7813C1.67318 19.0554 1.5804 19.3676 1.48763 19.7098C1.46484 19.7979 1.41927 19.8679 1.3623 19.9179C1.30859 19.966 1.24349 19.994 1.17676 19.998C1.17188 20 1.16699 20 1.16211 20H0.343424C0.249023 20 0.16276 19.952 0.100911 19.8759C0.0390625 19.7999 0 19.6938 0 19.5777V12.3114C0 11.9972 0.0488281 11.709 0.136719 11.4489C0.23112 11.1727 0.369466 10.9266 0.541992 10.7144C0.59082 10.6544 0.644531 10.5944 0.701497 10.5383C0.750326 10.4903 0.799154 10.4443 0.851237 10.4022V1.77907C0.851237 1.53692 0.890299 1.30678 0.961914 1.09866C1.03678 0.880528 1.14583 0.684411 1.28092 0.520312C1.41602 0.356214 1.57715 0.226136 1.75456 0.136082C1.92708 0.0480288 2.11426 0 2.3112 0ZM17.4463 0.844507H2.3112C2.2054 0.844507 2.10449 0.870522 2.01172 0.91655C1.91569 0.964579 1.83105 1.03462 1.75944 1.12067C1.68945 1.20472 1.63249 1.30879 1.59342 1.42085C1.55762 1.53092 1.53809 1.65099 1.53809 1.77907V9.996C1.58691 9.97599 1.63574 9.95998 1.6862 9.94397C1.76595 9.91795 1.8457 9.89594 1.92546 9.87993C2.03613 9.85591 2.15658 9.8299 2.28678 9.80188C2.38444 9.78187 2.48861 9.75986 2.59603 9.73984V7.64258C2.59603 7.3264 2.64811 7.02421 2.74089 6.74805C2.83854 6.45988 2.98014 6.20172 3.15592 5.98559C3.33171 5.76946 3.54167 5.59536 3.77604 5.47529C4.00065 5.36122 4.24642 5.29718 4.50358 5.29718H7.72949C7.98665 5.29718 8.23242 5.36122 8.45703 5.47529C8.69141 5.59536 8.90137 5.76946 9.07715 5.98559C9.25293 6.20172 9.39453 6.45988 9.49219 6.74805C9.58496 7.02421 9.63704 7.3264 9.63704 7.64258V8.98139C9.75098 8.97939 9.86491 8.97939 9.98047 8.97939V7.64258C9.98047 7.3264 10.0326 7.02421 10.1253 6.74805C10.223 6.45988 10.3646 6.20172 10.5404 5.98559C10.7161 5.76946 10.9261 5.59536 11.1605 5.47529C11.3851 5.36122 11.6309 5.29718 11.888 5.29718H15.1139C15.3711 5.29718 15.6169 5.36122 15.8415 5.47529C16.0758 5.59536 16.2858 5.76946 16.4616 5.98559C16.6374 6.20172 16.779 6.45988 16.8766 6.74805C16.9694 7.02421 17.0215 7.3264 17.0215 7.64258V9.71183C17.1436 9.73384 17.2738 9.75986 17.4137 9.78787C17.5684 9.81789 17.7165 9.84791 17.8597 9.87793C17.9329 9.89394 18.0078 9.91195 18.0827 9.93396C18.1299 9.94797 18.1755 9.96198 18.2194 9.97799V1.79708C18.2194 1.669 18.1982 1.54693 18.1608 1.43486C18.1217 1.31879 18.0632 1.21473 17.9915 1.12467C17.9199 1.03662 17.8337 0.964579 17.7409 0.91655C17.6497 0.870522 17.5505 0.844507 17.4463 0.844507ZM7.03288 9.11747C7.36003 9.08745 7.6888 9.06144 8.02246 9.04142C8.33008 9.02141 8.64095 9.0074 8.95182 8.9974V7.64258C8.95182 7.44046 8.91927 7.24635 8.85905 7.07024C8.7972 6.88613 8.70605 6.72203 8.59212 6.58195C8.47982 6.44387 8.34473 6.3318 8.19499 6.25375C8.05176 6.17971 7.89388 6.13968 7.72949 6.13968H4.50358C4.33919 6.13968 4.18131 6.17971 4.03809 6.25375C3.88835 6.3298 3.75488 6.44186 3.64095 6.58195C3.52865 6.72003 3.4375 6.88613 3.37402 7.07024C3.3138 7.24635 3.28125 7.44046 3.28125 7.64258V9.60576C3.54492 9.55773 3.81185 9.51371 4.08529 9.46968C4.37988 9.42365 4.67285 9.38163 4.96257 9.3416C5.07487 9.32559 5.19531 9.30758 5.32064 9.29157C5.43783 9.27557 5.5599 9.26156 5.6901 9.24555C5.91146 9.21953 6.13119 9.19552 6.34766 9.1735C6.57064 9.15549 6.7985 9.13548 7.03288 9.11747ZM10.6673 8.98539C10.8643 8.98939 11.0612 8.9954 11.2581 9.0034C11.4762 9.01141 11.6943 9.02341 11.9108 9.03542H11.9124C12.2689 9.05143 12.6172 9.07144 12.9557 9.09546C13.2943 9.11947 13.6247 9.14949 13.9404 9.18351C14.3994 9.23354 14.8438 9.29358 15.2653 9.36362C15.6429 9.42766 16.001 9.4997 16.3363 9.57975V7.64258C16.3363 7.44046 16.3037 7.24635 16.2435 7.07024C16.1816 6.88613 16.0905 6.72203 15.9766 6.58195C15.8643 6.44387 15.7292 6.3318 15.5794 6.25375C15.4362 6.17971 15.2783 6.13968 15.1139 6.13968H11.8896C11.7253 6.13968 11.5674 6.17971 11.4242 6.25375C11.2744 6.3298 11.141 6.44186 11.027 6.58195C10.9147 6.72003 10.8236 6.88613 10.7601 7.07024C10.6999 7.24635 10.6673 7.44046 10.6673 7.64258V8.98539ZM19.2936 14.3266H0.686849V19.1555H0.919596C1.01074 18.8393 1.10514 18.5451 1.21094 18.283C1.32487 18.0028 1.45345 17.7547 1.6097 17.5405C1.79525 17.2844 2.01335 17.0863 2.27539 16.9542C2.53743 16.8241 2.84342 16.7581 3.21126 16.7681L16.1816 16.748C16.5999 16.748 16.958 16.7721 17.2705 16.8461C17.5879 16.9202 17.8613 17.0462 18.1071 17.2463C18.335 17.4325 18.5303 17.6786 18.7061 18.0008C18.8737 18.309 19.0234 18.6872 19.1667 19.1535H19.2904V14.3266H19.2936Z"
                                                        fill="#B68742" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5358_3244">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h4 class="room-name">Shared double room</h4>
                                    <div class="room-availability">
                                        <span class="available">Available</span>
                                    </div>
                                    <div class="room-price">
                                        800€ price per person
                                    </div>
                                </li>
                                <li class="retreat-room-item active">
                                    <ul class="retreat-room-bads">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5358_3244)">
                                                    <path
                                                        d="M0.686849 13.4801H19.292V12.5455C19.292 12.3194 19.2562 12.1093 19.1927 11.9212C19.1243 11.721 19.0234 11.5429 18.8981 11.3888C18.8216 11.2948 18.7354 11.2087 18.6426 11.1327C18.5482 11.0546 18.4473 10.9866 18.3415 10.9286C18.0566 10.8525 17.7734 10.7805 17.4919 10.7124C17.2087 10.6444 16.9238 10.5803 16.6374 10.5203C16.6243 10.5183 16.6146 10.5163 16.6016 10.5123C16.4567 10.4823 16.3184 10.4543 16.1865 10.4283C16.0547 10.4022 15.9147 10.3762 15.7682 10.3482H15.765C14.7689 10.1921 13.776 10.072 12.7848 9.99199C11.792 9.91195 10.804 9.87192 9.82259 9.86992C9.23991 9.86992 8.65885 9.88193 8.0778 9.90995C7.5 9.93796 6.91895 9.97799 6.33789 10.034H6.33464C5.79102 10.0961 5.24902 10.1741 4.7054 10.2642C4.16341 10.3542 3.61979 10.4603 3.07292 10.5783L3.0127 10.5964C3.0013 10.6004 2.98991 10.6024 2.98014 10.6024C2.97038 10.6044 2.96061 10.6044 2.95085 10.6044C2.69531 10.6604 2.43327 10.7224 2.16309 10.7885C1.90104 10.8525 1.639 10.9206 1.37858 10.9906C1.31348 11.0346 1.25163 11.0847 1.19303 11.1367C1.13444 11.1907 1.07747 11.2487 1.02702 11.3108C0.917969 11.4449 0.831706 11.599 0.773112 11.7711C0.717773 11.9332 0.686849 12.1133 0.686849 12.3094V13.4801ZM2.3112 0H17.4463C17.6432 0 17.832 0.0480288 18.0046 0.136082C18.1836 0.228137 18.3447 0.362217 18.4798 0.526316C18.6149 0.692415 18.724 0.890534 18.7972 1.11067C18.8688 1.32279 18.9079 1.55493 18.9079 1.79708V10.3402C18.9909 10.4002 19.0723 10.4663 19.1471 10.5383C19.2318 10.6184 19.3115 10.7024 19.3848 10.7925C19.5736 11.0246 19.7266 11.2948 19.8291 11.599C19.9268 11.8851 19.9805 12.2033 19.9805 12.5475V13.7663C19.9854 13.7863 19.9902 13.8063 19.9935 13.8263V13.8303C19.9967 13.8563 19.9984 13.8803 19.9984 13.9043C19.9984 13.9304 19.9967 13.9564 19.9919 13.9824C19.9886 14.0024 19.9837 14.0224 19.9788 14.0424V19.5777C19.9788 19.6938 19.9398 19.7999 19.8779 19.8759C19.8161 19.952 19.7298 20 19.6354 20H18.9274C18.8477 20 18.7744 19.966 18.7158 19.9099C18.6572 19.8539 18.6133 19.7739 18.5954 19.6818C18.4652 19.2215 18.3333 18.8573 18.1917 18.5731C18.0518 18.293 17.902 18.0929 17.7295 17.9508C17.5553 17.8087 17.347 17.7186 17.0947 17.6646C16.8376 17.6086 16.5381 17.5906 16.1816 17.5926L3.19987 17.6126H3.19336C2.93783 17.6066 2.72786 17.6466 2.55208 17.7306C2.37793 17.8147 2.23633 17.9408 2.11914 18.1029C1.9873 18.283 1.87663 18.5131 1.77572 18.7813C1.67318 19.0554 1.5804 19.3676 1.48763 19.7098C1.46484 19.7979 1.41927 19.8679 1.3623 19.9179C1.30859 19.966 1.24349 19.994 1.17676 19.998C1.17188 20 1.16699 20 1.16211 20H0.343424C0.249023 20 0.16276 19.952 0.100911 19.8759C0.0390625 19.7999 0 19.6938 0 19.5777V12.3114C0 11.9972 0.0488281 11.709 0.136719 11.4489C0.23112 11.1727 0.369466 10.9266 0.541992 10.7144C0.59082 10.6544 0.644531 10.5944 0.701497 10.5383C0.750326 10.4903 0.799154 10.4443 0.851237 10.4022V1.77907C0.851237 1.53692 0.890299 1.30678 0.961914 1.09866C1.03678 0.880528 1.14583 0.684411 1.28092 0.520312C1.41602 0.356214 1.57715 0.226136 1.75456 0.136082C1.92708 0.0480288 2.11426 0 2.3112 0ZM17.4463 0.844507H2.3112C2.2054 0.844507 2.10449 0.870522 2.01172 0.91655C1.91569 0.964579 1.83105 1.03462 1.75944 1.12067C1.68945 1.20472 1.63249 1.30879 1.59342 1.42085C1.55762 1.53092 1.53809 1.65099 1.53809 1.77907V9.996C1.58691 9.97599 1.63574 9.95998 1.6862 9.94397C1.76595 9.91795 1.8457 9.89594 1.92546 9.87993C2.03613 9.85591 2.15658 9.8299 2.28678 9.80188C2.38444 9.78187 2.48861 9.75986 2.59603 9.73984V7.64258C2.59603 7.3264 2.64811 7.02421 2.74089 6.74805C2.83854 6.45988 2.98014 6.20172 3.15592 5.98559C3.33171 5.76946 3.54167 5.59536 3.77604 5.47529C4.00065 5.36122 4.24642 5.29718 4.50358 5.29718H7.72949C7.98665 5.29718 8.23242 5.36122 8.45703 5.47529C8.69141 5.59536 8.90137 5.76946 9.07715 5.98559C9.25293 6.20172 9.39453 6.45988 9.49219 6.74805C9.58496 7.02421 9.63704 7.3264 9.63704 7.64258V8.98139C9.75098 8.97939 9.86491 8.97939 9.98047 8.97939V7.64258C9.98047 7.3264 10.0326 7.02421 10.1253 6.74805C10.223 6.45988 10.3646 6.20172 10.5404 5.98559C10.7161 5.76946 10.9261 5.59536 11.1605 5.47529C11.3851 5.36122 11.6309 5.29718 11.888 5.29718H15.1139C15.3711 5.29718 15.6169 5.36122 15.8415 5.47529C16.0758 5.59536 16.2858 5.76946 16.4616 5.98559C16.6374 6.20172 16.779 6.45988 16.8766 6.74805C16.9694 7.02421 17.0215 7.3264 17.0215 7.64258V9.71183C17.1436 9.73384 17.2738 9.75986 17.4137 9.78787C17.5684 9.81789 17.7165 9.84791 17.8597 9.87793C17.9329 9.89394 18.0078 9.91195 18.0827 9.93396C18.1299 9.94797 18.1755 9.96198 18.2194 9.97799V1.79708C18.2194 1.669 18.1982 1.54693 18.1608 1.43486C18.1217 1.31879 18.0632 1.21473 17.9915 1.12467C17.9199 1.03662 17.8337 0.964579 17.7409 0.91655C17.6497 0.870522 17.5505 0.844507 17.4463 0.844507ZM7.03288 9.11747C7.36003 9.08745 7.6888 9.06144 8.02246 9.04142C8.33008 9.02141 8.64095 9.0074 8.95182 8.9974V7.64258C8.95182 7.44046 8.91927 7.24635 8.85905 7.07024C8.7972 6.88613 8.70605 6.72203 8.59212 6.58195C8.47982 6.44387 8.34473 6.3318 8.19499 6.25375C8.05176 6.17971 7.89388 6.13968 7.72949 6.13968H4.50358C4.33919 6.13968 4.18131 6.17971 4.03809 6.25375C3.88835 6.3298 3.75488 6.44186 3.64095 6.58195C3.52865 6.72003 3.4375 6.88613 3.37402 7.07024C3.3138 7.24635 3.28125 7.44046 3.28125 7.64258V9.60576C3.54492 9.55773 3.81185 9.51371 4.08529 9.46968C4.37988 9.42365 4.67285 9.38163 4.96257 9.3416C5.07487 9.32559 5.19531 9.30758 5.32064 9.29157C5.43783 9.27557 5.5599 9.26156 5.6901 9.24555C5.91146 9.21953 6.13119 9.19552 6.34766 9.1735C6.57064 9.15549 6.7985 9.13548 7.03288 9.11747ZM10.6673 8.98539C10.8643 8.98939 11.0612 8.9954 11.2581 9.0034C11.4762 9.01141 11.6943 9.02341 11.9108 9.03542H11.9124C12.2689 9.05143 12.6172 9.07144 12.9557 9.09546C13.2943 9.11947 13.6247 9.14949 13.9404 9.18351C14.3994 9.23354 14.8438 9.29358 15.2653 9.36362C15.6429 9.42766 16.001 9.4997 16.3363 9.57975V7.64258C16.3363 7.44046 16.3037 7.24635 16.2435 7.07024C16.1816 6.88613 16.0905 6.72203 15.9766 6.58195C15.8643 6.44387 15.7292 6.3318 15.5794 6.25375C15.4362 6.17971 15.2783 6.13968 15.1139 6.13968H11.8896C11.7253 6.13968 11.5674 6.17971 11.4242 6.25375C11.2744 6.3298 11.141 6.44186 11.027 6.58195C10.9147 6.72003 10.8236 6.88613 10.7601 7.07024C10.6999 7.24635 10.6673 7.44046 10.6673 7.64258V8.98539ZM19.2936 14.3266H0.686849V19.1555H0.919596C1.01074 18.8393 1.10514 18.5451 1.21094 18.283C1.32487 18.0028 1.45345 17.7547 1.6097 17.5405C1.79525 17.2844 2.01335 17.0863 2.27539 16.9542C2.53743 16.8241 2.84342 16.7581 3.21126 16.7681L16.1816 16.748C16.5999 16.748 16.958 16.7721 17.2705 16.8461C17.5879 16.9202 17.8613 17.0462 18.1071 17.2463C18.335 17.4325 18.5303 17.6786 18.7061 18.0008C18.8737 18.309 19.0234 18.6872 19.1667 19.1535H19.2904V14.3266H19.2936Z"
                                                        fill="#B68742" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5358_3244">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5358_3244)">
                                                    <path
                                                        d="M0.686849 13.4801H19.292V12.5455C19.292 12.3194 19.2562 12.1093 19.1927 11.9212C19.1243 11.721 19.0234 11.5429 18.8981 11.3888C18.8216 11.2948 18.7354 11.2087 18.6426 11.1327C18.5482 11.0546 18.4473 10.9866 18.3415 10.9286C18.0566 10.8525 17.7734 10.7805 17.4919 10.7124C17.2087 10.6444 16.9238 10.5803 16.6374 10.5203C16.6243 10.5183 16.6146 10.5163 16.6016 10.5123C16.4567 10.4823 16.3184 10.4543 16.1865 10.4283C16.0547 10.4022 15.9147 10.3762 15.7682 10.3482H15.765C14.7689 10.1921 13.776 10.072 12.7848 9.99199C11.792 9.91195 10.804 9.87192 9.82259 9.86992C9.23991 9.86992 8.65885 9.88193 8.0778 9.90995C7.5 9.93796 6.91895 9.97799 6.33789 10.034H6.33464C5.79102 10.0961 5.24902 10.1741 4.7054 10.2642C4.16341 10.3542 3.61979 10.4603 3.07292 10.5783L3.0127 10.5964C3.0013 10.6004 2.98991 10.6024 2.98014 10.6024C2.97038 10.6044 2.96061 10.6044 2.95085 10.6044C2.69531 10.6604 2.43327 10.7224 2.16309 10.7885C1.90104 10.8525 1.639 10.9206 1.37858 10.9906C1.31348 11.0346 1.25163 11.0847 1.19303 11.1367C1.13444 11.1907 1.07747 11.2487 1.02702 11.3108C0.917969 11.4449 0.831706 11.599 0.773112 11.7711C0.717773 11.9332 0.686849 12.1133 0.686849 12.3094V13.4801ZM2.3112 0H17.4463C17.6432 0 17.832 0.0480288 18.0046 0.136082C18.1836 0.228137 18.3447 0.362217 18.4798 0.526316C18.6149 0.692415 18.724 0.890534 18.7972 1.11067C18.8688 1.32279 18.9079 1.55493 18.9079 1.79708V10.3402C18.9909 10.4002 19.0723 10.4663 19.1471 10.5383C19.2318 10.6184 19.3115 10.7024 19.3848 10.7925C19.5736 11.0246 19.7266 11.2948 19.8291 11.599C19.9268 11.8851 19.9805 12.2033 19.9805 12.5475V13.7663C19.9854 13.7863 19.9902 13.8063 19.9935 13.8263V13.8303C19.9967 13.8563 19.9984 13.8803 19.9984 13.9043C19.9984 13.9304 19.9967 13.9564 19.9919 13.9824C19.9886 14.0024 19.9837 14.0224 19.9788 14.0424V19.5777C19.9788 19.6938 19.9398 19.7999 19.8779 19.8759C19.8161 19.952 19.7298 20 19.6354 20H18.9274C18.8477 20 18.7744 19.966 18.7158 19.9099C18.6572 19.8539 18.6133 19.7739 18.5954 19.6818C18.4652 19.2215 18.3333 18.8573 18.1917 18.5731C18.0518 18.293 17.902 18.0929 17.7295 17.9508C17.5553 17.8087 17.347 17.7186 17.0947 17.6646C16.8376 17.6086 16.5381 17.5906 16.1816 17.5926L3.19987 17.6126H3.19336C2.93783 17.6066 2.72786 17.6466 2.55208 17.7306C2.37793 17.8147 2.23633 17.9408 2.11914 18.1029C1.9873 18.283 1.87663 18.5131 1.77572 18.7813C1.67318 19.0554 1.5804 19.3676 1.48763 19.7098C1.46484 19.7979 1.41927 19.8679 1.3623 19.9179C1.30859 19.966 1.24349 19.994 1.17676 19.998C1.17188 20 1.16699 20 1.16211 20H0.343424C0.249023 20 0.16276 19.952 0.100911 19.8759C0.0390625 19.7999 0 19.6938 0 19.5777V12.3114C0 11.9972 0.0488281 11.709 0.136719 11.4489C0.23112 11.1727 0.369466 10.9266 0.541992 10.7144C0.59082 10.6544 0.644531 10.5944 0.701497 10.5383C0.750326 10.4903 0.799154 10.4443 0.851237 10.4022V1.77907C0.851237 1.53692 0.890299 1.30678 0.961914 1.09866C1.03678 0.880528 1.14583 0.684411 1.28092 0.520312C1.41602 0.356214 1.57715 0.226136 1.75456 0.136082C1.92708 0.0480288 2.11426 0 2.3112 0ZM17.4463 0.844507H2.3112C2.2054 0.844507 2.10449 0.870522 2.01172 0.91655C1.91569 0.964579 1.83105 1.03462 1.75944 1.12067C1.68945 1.20472 1.63249 1.30879 1.59342 1.42085C1.55762 1.53092 1.53809 1.65099 1.53809 1.77907V9.996C1.58691 9.97599 1.63574 9.95998 1.6862 9.94397C1.76595 9.91795 1.8457 9.89594 1.92546 9.87993C2.03613 9.85591 2.15658 9.8299 2.28678 9.80188C2.38444 9.78187 2.48861 9.75986 2.59603 9.73984V7.64258C2.59603 7.3264 2.64811 7.02421 2.74089 6.74805C2.83854 6.45988 2.98014 6.20172 3.15592 5.98559C3.33171 5.76946 3.54167 5.59536 3.77604 5.47529C4.00065 5.36122 4.24642 5.29718 4.50358 5.29718H7.72949C7.98665 5.29718 8.23242 5.36122 8.45703 5.47529C8.69141 5.59536 8.90137 5.76946 9.07715 5.98559C9.25293 6.20172 9.39453 6.45988 9.49219 6.74805C9.58496 7.02421 9.63704 7.3264 9.63704 7.64258V8.98139C9.75098 8.97939 9.86491 8.97939 9.98047 8.97939V7.64258C9.98047 7.3264 10.0326 7.02421 10.1253 6.74805C10.223 6.45988 10.3646 6.20172 10.5404 5.98559C10.7161 5.76946 10.9261 5.59536 11.1605 5.47529C11.3851 5.36122 11.6309 5.29718 11.888 5.29718H15.1139C15.3711 5.29718 15.6169 5.36122 15.8415 5.47529C16.0758 5.59536 16.2858 5.76946 16.4616 5.98559C16.6374 6.20172 16.779 6.45988 16.8766 6.74805C16.9694 7.02421 17.0215 7.3264 17.0215 7.64258V9.71183C17.1436 9.73384 17.2738 9.75986 17.4137 9.78787C17.5684 9.81789 17.7165 9.84791 17.8597 9.87793C17.9329 9.89394 18.0078 9.91195 18.0827 9.93396C18.1299 9.94797 18.1755 9.96198 18.2194 9.97799V1.79708C18.2194 1.669 18.1982 1.54693 18.1608 1.43486C18.1217 1.31879 18.0632 1.21473 17.9915 1.12467C17.9199 1.03662 17.8337 0.964579 17.7409 0.91655C17.6497 0.870522 17.5505 0.844507 17.4463 0.844507ZM7.03288 9.11747C7.36003 9.08745 7.6888 9.06144 8.02246 9.04142C8.33008 9.02141 8.64095 9.0074 8.95182 8.9974V7.64258C8.95182 7.44046 8.91927 7.24635 8.85905 7.07024C8.7972 6.88613 8.70605 6.72203 8.59212 6.58195C8.47982 6.44387 8.34473 6.3318 8.19499 6.25375C8.05176 6.17971 7.89388 6.13968 7.72949 6.13968H4.50358C4.33919 6.13968 4.18131 6.17971 4.03809 6.25375C3.88835 6.3298 3.75488 6.44186 3.64095 6.58195C3.52865 6.72003 3.4375 6.88613 3.37402 7.07024C3.3138 7.24635 3.28125 7.44046 3.28125 7.64258V9.60576C3.54492 9.55773 3.81185 9.51371 4.08529 9.46968C4.37988 9.42365 4.67285 9.38163 4.96257 9.3416C5.07487 9.32559 5.19531 9.30758 5.32064 9.29157C5.43783 9.27557 5.5599 9.26156 5.6901 9.24555C5.91146 9.21953 6.13119 9.19552 6.34766 9.1735C6.57064 9.15549 6.7985 9.13548 7.03288 9.11747ZM10.6673 8.98539C10.8643 8.98939 11.0612 8.9954 11.2581 9.0034C11.4762 9.01141 11.6943 9.02341 11.9108 9.03542H11.9124C12.2689 9.05143 12.6172 9.07144 12.9557 9.09546C13.2943 9.11947 13.6247 9.14949 13.9404 9.18351C14.3994 9.23354 14.8438 9.29358 15.2653 9.36362C15.6429 9.42766 16.001 9.4997 16.3363 9.57975V7.64258C16.3363 7.44046 16.3037 7.24635 16.2435 7.07024C16.1816 6.88613 16.0905 6.72203 15.9766 6.58195C15.8643 6.44387 15.7292 6.3318 15.5794 6.25375C15.4362 6.17971 15.2783 6.13968 15.1139 6.13968H11.8896C11.7253 6.13968 11.5674 6.17971 11.4242 6.25375C11.2744 6.3298 11.141 6.44186 11.027 6.58195C10.9147 6.72003 10.8236 6.88613 10.7601 7.07024C10.6999 7.24635 10.6673 7.44046 10.6673 7.64258V8.98539ZM19.2936 14.3266H0.686849V19.1555H0.919596C1.01074 18.8393 1.10514 18.5451 1.21094 18.283C1.32487 18.0028 1.45345 17.7547 1.6097 17.5405C1.79525 17.2844 2.01335 17.0863 2.27539 16.9542C2.53743 16.8241 2.84342 16.7581 3.21126 16.7681L16.1816 16.748C16.5999 16.748 16.958 16.7721 17.2705 16.8461C17.5879 16.9202 17.8613 17.0462 18.1071 17.2463C18.335 17.4325 18.5303 17.6786 18.7061 18.0008C18.8737 18.309 19.0234 18.6872 19.1667 19.1535H19.2904V14.3266H19.2936Z"
                                                        fill="#B68742" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5358_3244">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5358_3244)">
                                                    <path
                                                        d="M0.686849 13.4801H19.292V12.5455C19.292 12.3194 19.2562 12.1093 19.1927 11.9212C19.1243 11.721 19.0234 11.5429 18.8981 11.3888C18.8216 11.2948 18.7354 11.2087 18.6426 11.1327C18.5482 11.0546 18.4473 10.9866 18.3415 10.9286C18.0566 10.8525 17.7734 10.7805 17.4919 10.7124C17.2087 10.6444 16.9238 10.5803 16.6374 10.5203C16.6243 10.5183 16.6146 10.5163 16.6016 10.5123C16.4567 10.4823 16.3184 10.4543 16.1865 10.4283C16.0547 10.4022 15.9147 10.3762 15.7682 10.3482H15.765C14.7689 10.1921 13.776 10.072 12.7848 9.99199C11.792 9.91195 10.804 9.87192 9.82259 9.86992C9.23991 9.86992 8.65885 9.88193 8.0778 9.90995C7.5 9.93796 6.91895 9.97799 6.33789 10.034H6.33464C5.79102 10.0961 5.24902 10.1741 4.7054 10.2642C4.16341 10.3542 3.61979 10.4603 3.07292 10.5783L3.0127 10.5964C3.0013 10.6004 2.98991 10.6024 2.98014 10.6024C2.97038 10.6044 2.96061 10.6044 2.95085 10.6044C2.69531 10.6604 2.43327 10.7224 2.16309 10.7885C1.90104 10.8525 1.639 10.9206 1.37858 10.9906C1.31348 11.0346 1.25163 11.0847 1.19303 11.1367C1.13444 11.1907 1.07747 11.2487 1.02702 11.3108C0.917969 11.4449 0.831706 11.599 0.773112 11.7711C0.717773 11.9332 0.686849 12.1133 0.686849 12.3094V13.4801ZM2.3112 0H17.4463C17.6432 0 17.832 0.0480288 18.0046 0.136082C18.1836 0.228137 18.3447 0.362217 18.4798 0.526316C18.6149 0.692415 18.724 0.890534 18.7972 1.11067C18.8688 1.32279 18.9079 1.55493 18.9079 1.79708V10.3402C18.9909 10.4002 19.0723 10.4663 19.1471 10.5383C19.2318 10.6184 19.3115 10.7024 19.3848 10.7925C19.5736 11.0246 19.7266 11.2948 19.8291 11.599C19.9268 11.8851 19.9805 12.2033 19.9805 12.5475V13.7663C19.9854 13.7863 19.9902 13.8063 19.9935 13.8263V13.8303C19.9967 13.8563 19.9984 13.8803 19.9984 13.9043C19.9984 13.9304 19.9967 13.9564 19.9919 13.9824C19.9886 14.0024 19.9837 14.0224 19.9788 14.0424V19.5777C19.9788 19.6938 19.9398 19.7999 19.8779 19.8759C19.8161 19.952 19.7298 20 19.6354 20H18.9274C18.8477 20 18.7744 19.966 18.7158 19.9099C18.6572 19.8539 18.6133 19.7739 18.5954 19.6818C18.4652 19.2215 18.3333 18.8573 18.1917 18.5731C18.0518 18.293 17.902 18.0929 17.7295 17.9508C17.5553 17.8087 17.347 17.7186 17.0947 17.6646C16.8376 17.6086 16.5381 17.5906 16.1816 17.5926L3.19987 17.6126H3.19336C2.93783 17.6066 2.72786 17.6466 2.55208 17.7306C2.37793 17.8147 2.23633 17.9408 2.11914 18.1029C1.9873 18.283 1.87663 18.5131 1.77572 18.7813C1.67318 19.0554 1.5804 19.3676 1.48763 19.7098C1.46484 19.7979 1.41927 19.8679 1.3623 19.9179C1.30859 19.966 1.24349 19.994 1.17676 19.998C1.17188 20 1.16699 20 1.16211 20H0.343424C0.249023 20 0.16276 19.952 0.100911 19.8759C0.0390625 19.7999 0 19.6938 0 19.5777V12.3114C0 11.9972 0.0488281 11.709 0.136719 11.4489C0.23112 11.1727 0.369466 10.9266 0.541992 10.7144C0.59082 10.6544 0.644531 10.5944 0.701497 10.5383C0.750326 10.4903 0.799154 10.4443 0.851237 10.4022V1.77907C0.851237 1.53692 0.890299 1.30678 0.961914 1.09866C1.03678 0.880528 1.14583 0.684411 1.28092 0.520312C1.41602 0.356214 1.57715 0.226136 1.75456 0.136082C1.92708 0.0480288 2.11426 0 2.3112 0ZM17.4463 0.844507H2.3112C2.2054 0.844507 2.10449 0.870522 2.01172 0.91655C1.91569 0.964579 1.83105 1.03462 1.75944 1.12067C1.68945 1.20472 1.63249 1.30879 1.59342 1.42085C1.55762 1.53092 1.53809 1.65099 1.53809 1.77907V9.996C1.58691 9.97599 1.63574 9.95998 1.6862 9.94397C1.76595 9.91795 1.8457 9.89594 1.92546 9.87993C2.03613 9.85591 2.15658 9.8299 2.28678 9.80188C2.38444 9.78187 2.48861 9.75986 2.59603 9.73984V7.64258C2.59603 7.3264 2.64811 7.02421 2.74089 6.74805C2.83854 6.45988 2.98014 6.20172 3.15592 5.98559C3.33171 5.76946 3.54167 5.59536 3.77604 5.47529C4.00065 5.36122 4.24642 5.29718 4.50358 5.29718H7.72949C7.98665 5.29718 8.23242 5.36122 8.45703 5.47529C8.69141 5.59536 8.90137 5.76946 9.07715 5.98559C9.25293 6.20172 9.39453 6.45988 9.49219 6.74805C9.58496 7.02421 9.63704 7.3264 9.63704 7.64258V8.98139C9.75098 8.97939 9.86491 8.97939 9.98047 8.97939V7.64258C9.98047 7.3264 10.0326 7.02421 10.1253 6.74805C10.223 6.45988 10.3646 6.20172 10.5404 5.98559C10.7161 5.76946 10.9261 5.59536 11.1605 5.47529C11.3851 5.36122 11.6309 5.29718 11.888 5.29718H15.1139C15.3711 5.29718 15.6169 5.36122 15.8415 5.47529C16.0758 5.59536 16.2858 5.76946 16.4616 5.98559C16.6374 6.20172 16.779 6.45988 16.8766 6.74805C16.9694 7.02421 17.0215 7.3264 17.0215 7.64258V9.71183C17.1436 9.73384 17.2738 9.75986 17.4137 9.78787C17.5684 9.81789 17.7165 9.84791 17.8597 9.87793C17.9329 9.89394 18.0078 9.91195 18.0827 9.93396C18.1299 9.94797 18.1755 9.96198 18.2194 9.97799V1.79708C18.2194 1.669 18.1982 1.54693 18.1608 1.43486C18.1217 1.31879 18.0632 1.21473 17.9915 1.12467C17.9199 1.03662 17.8337 0.964579 17.7409 0.91655C17.6497 0.870522 17.5505 0.844507 17.4463 0.844507ZM7.03288 9.11747C7.36003 9.08745 7.6888 9.06144 8.02246 9.04142C8.33008 9.02141 8.64095 9.0074 8.95182 8.9974V7.64258C8.95182 7.44046 8.91927 7.24635 8.85905 7.07024C8.7972 6.88613 8.70605 6.72203 8.59212 6.58195C8.47982 6.44387 8.34473 6.3318 8.19499 6.25375C8.05176 6.17971 7.89388 6.13968 7.72949 6.13968H4.50358C4.33919 6.13968 4.18131 6.17971 4.03809 6.25375C3.88835 6.3298 3.75488 6.44186 3.64095 6.58195C3.52865 6.72003 3.4375 6.88613 3.37402 7.07024C3.3138 7.24635 3.28125 7.44046 3.28125 7.64258V9.60576C3.54492 9.55773 3.81185 9.51371 4.08529 9.46968C4.37988 9.42365 4.67285 9.38163 4.96257 9.3416C5.07487 9.32559 5.19531 9.30758 5.32064 9.29157C5.43783 9.27557 5.5599 9.26156 5.6901 9.24555C5.91146 9.21953 6.13119 9.19552 6.34766 9.1735C6.57064 9.15549 6.7985 9.13548 7.03288 9.11747ZM10.6673 8.98539C10.8643 8.98939 11.0612 8.9954 11.2581 9.0034C11.4762 9.01141 11.6943 9.02341 11.9108 9.03542H11.9124C12.2689 9.05143 12.6172 9.07144 12.9557 9.09546C13.2943 9.11947 13.6247 9.14949 13.9404 9.18351C14.3994 9.23354 14.8438 9.29358 15.2653 9.36362C15.6429 9.42766 16.001 9.4997 16.3363 9.57975V7.64258C16.3363 7.44046 16.3037 7.24635 16.2435 7.07024C16.1816 6.88613 16.0905 6.72203 15.9766 6.58195C15.8643 6.44387 15.7292 6.3318 15.5794 6.25375C15.4362 6.17971 15.2783 6.13968 15.1139 6.13968H11.8896C11.7253 6.13968 11.5674 6.17971 11.4242 6.25375C11.2744 6.3298 11.141 6.44186 11.027 6.58195C10.9147 6.72003 10.8236 6.88613 10.7601 7.07024C10.6999 7.24635 10.6673 7.44046 10.6673 7.64258V8.98539ZM19.2936 14.3266H0.686849V19.1555H0.919596C1.01074 18.8393 1.10514 18.5451 1.21094 18.283C1.32487 18.0028 1.45345 17.7547 1.6097 17.5405C1.79525 17.2844 2.01335 17.0863 2.27539 16.9542C2.53743 16.8241 2.84342 16.7581 3.21126 16.7681L16.1816 16.748C16.5999 16.748 16.958 16.7721 17.2705 16.8461C17.5879 16.9202 17.8613 17.0462 18.1071 17.2463C18.335 17.4325 18.5303 17.6786 18.7061 18.0008C18.8737 18.309 19.0234 18.6872 19.1667 19.1535H19.2904V14.3266H19.2936Z"
                                                        fill="#B68742" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5358_3244">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </li>
                                    </ul>
                                    <h4 class="room-name">Shared glamping</h4>
                                    <div class="room-availability">
                                        <span class="available">Available</span>
                                    </div>
                                    <div class="room-price">
                                        600€ price per person
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a class="bundle" href="#">
                            Proceed to checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tantra-retreat__12">
        <div class="container">
            <div class="row">
                <div class="col m12 s12 l12 xl9 offset-xl3">
                    <div class="included-and-notincluded">
                        <div class="included">
                            <h3 class="heading">Included:</h3>
                            <ul class="included-list">
                                <li class="included-item">Accommodation.</li>
                                <li class="included-item">All activities mentioned in the program.</li>
                                <li class="included-item">Plant-based meals & snacks.</li>
                                <li class="included-item">YogiTea & non-alcoholic beverages.</li>
                                <li class="included-item">Goodie bag.</li>
                            </ul>
                        </div>
                        <div class="notincluded">
                            <h3 class="heading">Not included:</h3>
                            <ul class="notincluded-list">
                                <li class="notincluded-item">Flight tickets.</li>
                                <li class="notincluded-item">Transfers (available upon request).</li>
                            </ul>
                        </div>
                    </div>
                    <div class="included-footer">

                        In our retreats, we don't promote any nudity or sexual activities. We don't belong to any
                        sect
                        or follow any religion, and we welcome all beliefs and points of view. We foster diversity,
                        we
                        admire nature, trust each other and go through this journey with an open mind.

                    </div>
                </div>
            </div>
        </div>
    </section>



<?php if(0){ ?>
<?php 
if (have_rows('retreat_pages')):   
  while (have_rows('retreat_pages')) : the_row();
    if (get_row_layout() == 'section_1') : ?>
      <section class="retreat__0" data-menuscroll <?php if(get_the_post_thumbnail_url()){ ?> style="background: url(<?= get_the_post_thumbnail_url(); ?>) no-repeat center/cover;" <?php } ?>>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l12 xl12">
              <h1 class="title"><?php the_sub_field('title'); ?></h1>
              <?php
              if (have_rows('box_list')) { ?>
                <div class="battoms__"><?php
                  while (have_rows('box_list')) : the_row(); ?>
                    <a class="tantra"><?php the_sub_field('main_category'); ?></a>
                    <a class="data"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></a>
                    <a class="loc"><?php the_field( 'location', $product_id ); ?></a>
                  <?php
                  endwhile; ?>
                </div>
                <?php
              } ?>
              <div class="content__">
                <?php 
                  if (get_sub_field('content')) :
                    the_sub_field('content'); 
                  endif;
                ?>
                <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                <input type="hidden" name="action" value="addcart_prod">
                  <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
                <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
              </form>  
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif;
    endwhile;
  endif ?>

<div class="left__menu__scroll" data-scroll>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l3 xl3">
              <div class="box__">
                <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">
                    <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Book now'); ?></a>
                  <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                </form>         
              <ul>
                <?php if ( have_rows( 'retreat_pages' ) ): 
                  while ( have_rows( 'retreat_pages' ) ) : the_row();
                    if( get_row_layout() == 'section_2' ){  
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif; 
                    }  elseif( get_row_layout() == 'section_3' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_4' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_5' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_7' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_8' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_10' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } elseif( get_row_layout() == 'section_11' ) {
                      if ( have_rows( 'navigation' ) ) : 
                        while ( have_rows( 'navigation' ) ) : the_row(); ?>
                          <li><a href="#<?php the_sub_field( 'navigation_id' ); ?>"><?php the_sub_field( 'navigation_item_title' ); ?></a></li>
                        <?php endwhile;
                      endif;
                    } ?>
                  <?php endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

      <section class="retreat__1">
        <div class="container">
          <div class="row"> 
            <?php 
              if (have_rows('retreat_pages')):   
                while (have_rows('retreat_pages')) : the_row(); ?>
                <?php if (get_row_layout() == 'section_2') : ?> 
                  <?php if ( have_rows( 'navigation' ) ) : ?>
                    <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="col m12 s12 l12 xl9 offset-xl3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3">
                  <?php endif; ?>
                    <div class="block__top">
                      <div class="box__img">
                      <?php $image = get_sub_field( 'image' ); ?>
                      <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                      <?php endif; ?>
                        <!-- <img src="img/retreat_string2.png" alt="#"> -->
                      </div>
                      
                      <div class="box__content">
                        <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                        <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                        <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                        <input type="hidden" name="action" value="addcart_prod">
                          <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Start my journey'); ?></a>
                        <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                      </form>                  
                        <hr>
                        <span class="data"><?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?></span>
                        <span class="loc"><?php the_field( 'location', $product_id ); ?></span>
                        <div class="status"><?php the_field( 'where', $product_id ); ?></div>
                      </div>
                    </div>
                  </div>
                <?php elseif(get_row_layout() == 'section_3') : ?>
                  <?php if ( have_rows( 'navigation' ) ) : ?>
                    <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php endif; ?>
                    <div class="twix2">
                      <div class="picture2">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                        <!-- <img src="img/retreat_fot22.png"> -->
                      </div>
                      <div class="blog2">
                        <h4 class="title"><?php the_sub_field( 'title' ); ?></h4>
                        <?php the_sub_field( 'content' ); ?>
                      </div>
                    </div>
                  </div>
                <?php elseif(get_row_layout() == 'section_4') : ?>
                  <?php if ( have_rows( 'navigation' ) ) : ?>
                    <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                    <?php endwhile; ?>
                    <?php else : ?>
                      <div class="col m12 s12 l12 xl9 offset-xl3">
                    <?php endif; ?>
                    <h4 class="title"><?php the_sub_field( 'title' ); ?></h4>
                    <div class="twix2">
                      <div class="blog3">
                        <?php the_sub_field( 'content' ); ?>
                      </div>
                      <div class="picture3">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) : ?>
                          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>                 
                      </div>
              </div>
            </div>
          <?php endif; ?>
          <?php endwhile;
        endif; 
        ?>
        </div>
      </div>
    </section>
    <?php 
      if (have_rows('retreat_pages')):   
        while (have_rows('retreat_pages')) : the_row(); ?>
          <?php if (get_row_layout() == 'section_5') : ?> 
            <?php if ( have_rows( 'navigation' ) ) : ?>
              <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                <section class="retreat__2 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
              <?php endwhile; ?>
              <?php else : ?>
                <section class="retreat__2">
            <?php endif; ?>
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l6 xl6 offset-xl3 offset-l3">
                    <?php 
                      if(get_sub_field('title')) { ?>
                        <h2 class="title"><?php the_sub_field('title') ?></h2>
                      <?php }
                    ?>
                  </div>
                  <div class="col m12 s12 l3 xl3">
                    <?php 
                    if(get_sub_field('label')) { ?>
                      <p><?php the_sub_field( 'label' ); ?></p>
                    <?php } ?>
                    <div class="box__img">
                      <?php
                      $featured_posts = get_sub_field('faciliated_imgs');
                      if( $featured_posts ): ?>
                        <ul>
                          <?php foreach( $featured_posts as $post ): 
                            setup_postdata($post); ?>
                            <li>
                              <?php if(get_the_post_thumbnail_url()){ ?> 
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="user_<?php echo get_row_index(); ?>"> <?php } ?>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              
                <?php if ( have_rows( 'program_schedule' ) ) : ?>
                  <?php while ( have_rows( 'program_schedule' ) ) : the_row(); ?>
                    <div class="row">
                      <?php if ( have_rows( 'first_item' ) ) : ?>
                        <?php while ( have_rows( 'first_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l4 xl3 offset-xl3">
                            <div class="box__">
                              <div class="picture3">
                                <?php $image = get_sub_field( 'first_item_image' ); ?>
                                <?php if( $image ) : ?>
                                  <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <?php 
                                  if(get_sub_field('first_day_title')) { ?>
                                    <div class="title__"><?php the_sub_field( 'first_day_title' ); ?></div>
                                  <?php }
                                ?>
                                <?php if ( have_rows( 'first_schedule' ) ) : ?>
                                  <ul class="reborn">
                                    <?php while ( have_rows( 'first_schedule' ) ) : the_row(); ?>
                                      <li> 
                                        <span class="data"><?php the_sub_field( 'first_item_time' ); ?></span>
                                        <p><?php the_sub_field( 'first_item_description' ); ?></p>
                                      </li>
                                    <?php endwhile; ?>
                                  </ul>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                      <?php if ( have_rows( 'second_item' ) ) : ?>
                        <?php while ( have_rows( 'second_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l8 xl6">
                            <div class="box__">
                              <div class="picture3">
                                <?php $second_image = get_sub_field( 'second_item_image' ); ?>
                                <?php if( $second_image ) : ?>
                                  <img src="<?php echo esc_url( $second_image['url'] ); ?>" alt="<?php echo esc_attr( $second_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <div class="title__"><?php the_sub_field( 'second_item_day_title' ); ?></div>
                                <?php if ( have_rows( 'second_item_schedule' ) ) : ?>
                                  <ul class="reborn">
                                    <?php while ( have_rows( 'second_item_schedule' ) ) : the_row(); ?>
                                      <li> 
                                        <span class="data"><?php the_sub_field( 'second_item_time' ); ?></span>
                                        <p><?php the_sub_field( 'second_item_description' ); ?></p>
                                      </li>
                                    <?php endwhile; ?>
                                  </ul>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                    <div class="row">
                      <?php if ( have_rows( 'third_item' ) ) : ?>
                        <?php while ( have_rows( 'third_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l6 xl6 offset-xl3">
                            <div class="box__">
                              <div class="picture3">
                                <?php $third_image = get_sub_field( 'third_item_image' ); ?>
                                <?php if( $third_image ) : ?>
                                  <img src="<?php echo esc_url( $third_image['url'] ); ?>" alt="<?php echo esc_attr( $third_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <?php 
                                if(get_sub_field('third_item_day_title')) { ?>
                                  <div class="title__"><?php the_sub_field( 'third_item_day_title' ); ?></div>
                                <?php } 
                                if ( have_rows( 'third_item_schedule' ) ) : ?>
                                  <ul class="reborn">
                                    <?php while ( have_rows( 'third_item_schedule' ) ) : the_row(); ?>
                                      <li>
                                        <span class="data"><?php the_sub_field( 'third_item_time' ); ?></span>
                                        <p><?php the_sub_field( 'third_item_description' ); ?>)</p>
                                      </li>
                                    <?php endwhile; ?>
                                  </ul>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                      <?php if ( have_rows( 'fourth_item' ) ) : ?>
                        <?php while ( have_rows( 'fourth_item' ) ) : the_row(); ?>
                          <div class="col m12 s12 l3 xl3">
                            <div class="box__">
                              <div class="picture3">
                                <?php $fourth_item_image = get_sub_field( 'fourth_item_image' ); ?>
                                <?php if ( $fourth_item_image ) : ?>
                                  <img src="<?php echo esc_url( $fourth_item_image['url'] ); ?>" alt="<?php echo esc_attr( $fourth_item_image['alt'] ); ?>" />
                                <?php endif; ?>
                              </div>
                              <div class="box__content">
                                <div class="title__"><?php the_sub_field( 'fourth_item_day_title' ); ?></div>
                                  <?php if ( have_rows( 'fourth_item_schedule' ) ) : ?>
                                    <ul class="reborn">
                                      <?php while ( have_rows( 'fourth_item_schedule' ) ) : the_row(); ?>
                                        <li>
                                          <span class="data"><?php the_sub_field( 'fourth_item_time' ); ?></span>
                                          <p><?php the_sub_field( 'fourth_item_description' ); ?></p>
                                        </li>
                                      <?php endwhile; ?>
                                    </ul>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </section>
          <?php elseif(get_row_layout() == 'section_6') : ?>
            <section class="retreat__3">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                    <div class="kacao">
                      <h4 class="title__"><?php the_sub_field( 'title' ); ?>T</span></h4>
                      <div class="box__">
                        <?php $top_image = get_sub_field( 'top_image' ); ?>
                        <?php if ( $top_image ) : ?>
                          <img src="<?php echo esc_url( $top_image['url'] ); ?>" alt="<?php echo esc_attr( $top_image['alt'] ); ?>" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="mix__">
                      <div class="tea__">
                        <?php $bottom_image = get_sub_field( 'bottom_image' ); ?>
                        <?php if ( $bottom_image ) : ?>
                          <img src="<?php echo esc_url( $bottom_image['url'] ); ?>" alt="<?php echo esc_attr( $bottom_image['alt'] ); ?>" />
                        <?php endif; ?>
                      </div>
                      <div class="box__">
                        <?php the_sub_field( 'text' ); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <?php endif; ?>
        <?php endwhile;
      endif; 
    ?>
    <section class="retreat__4">
      <div class="container">
        <div class="row">
          <?php if (have_rows('retreat_pages')):   
            while (have_rows('retreat_pages')) : the_row(); ?>
              <?php if (get_row_layout() == 'section_7') : ?> 
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                <?php endif; ?>

                  <?php 
                  if(get_sub_field('title')) { ?>
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                  <?php } ?>
                </div>
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <?php $facilitators = get_sub_field( 'facilitators' ); ?>
                  <?php if ( $facilitators ) : ?>
                    <?php foreach ( $facilitators as $post ) :  ?>
                      <?php setup_postdata( $post ); ?>
                      <div class="post__user">
                        <div class="img__">
                          <?php
                            if(get_the_post_thumbnail_url(get_the_ID())){ ?>
                              <img src="<?= get_the_post_thumbnail_url( get_the_ID() ); ?>" alt=''>
                            <?php } 
                          ?>
                        </div>
                      <div class="cont__">
                        <div class="title__"><?php the_title(); ?></div>
                        <ul>
                          <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                              foreach($posttags as $tag) {
                                echo '<li><p class="teg">' . $tag->name . '</p></li>'; 
                              }
                            }
                          ?>
                        </ul>
                        <?php the_content(); ?>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                </div>
              <?php elseif(get_row_layout() == 'section_8') : ?>
                <?php if ( have_rows( 'navigation' ) ) : ?>
                  <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                    <section class="col m12 s12 l9 xl9 offset-xl3 offset-l3 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
                  <?php endwhile; ?>
                  <?php else : ?>
                    <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                <?php endif; ?>
                  <div class="venue">
                    <div class="block__">
                      <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                      <p class="info"><?php the_sub_field( 'subfield_text' ); ?></p>
                      <div class="block__dashed">
                      <?php the_sub_field( 'content' ); ?>
                    </div>
                    <div class="box_widt">
                        <p><?php the_field( 'address', $product_id ); ?></p>
                    </div>
                  </div>
                  <div class="block__"> 
                    <div class="box__img">
                      <?php $top_image = get_sub_field( 'top_image' ); ?>
                      <?php if ( $top_image ) : ?>
                        <img src="<?php echo esc_url( $top_image['url'] ); ?>" alt="<?php echo esc_attr( $top_image['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="box__img">
                      <?php $bottom_image = get_sub_field( 'bottom_image' ); ?>
                      <?php if ( $bottom_image ) : ?>
                        <img src="<?php echo esc_url( $bottom_image['url'] ); ?>" alt="<?php echo esc_attr( $bottom_image['alt'] ); ?>" />
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php elseif(get_row_layout() == 'section_9') : ?>
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="retreat__map splide">
                    <div class="splide__track">
                        <?php if ( have_rows( 'image_and_map_slider' ) ) : ?>
                          <ul class="splide__list">
                            <?php while ( have_rows( 'image_and_map_slider' ) ) : the_row(); ?>
                            <li class="splide__slide">
                              <div class="box__">
                                <?php $slide_image = get_sub_field( 'slide_image' ); 
                                    if ( $slide_image ) : ?>
                                    <img src="<?php echo esc_url( $slide_image['url'] ); ?>" alt="<?php echo esc_attr( $slide_image['alt'] ); ?>" />
                                  <?php endif; ?>
                                <div class="map">
                                  <iframe src="<?php the_sub_field( 'coordinates' ); ?>" width="347" height="190" style="border:0;border-radius:34px;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                              </div>
                            </li>
                            <?php endwhile; ?>
                          </ul>
                        <?php endif; ?>
                    </div>
                  </div>
                  <div class="arrows"><a class="left_r previous-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                    </svg></a><a class="right_r next-button" href="javascript:;">
                    <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                    </svg></a>
                  </div>
                </div> 
            <?php endif; ?>
          <?php endwhile;
        endif; ?>
        </div>
      </div>
    </section>

    <?php if (have_rows('retreat_pages')):   
      while (have_rows('retreat_pages')) : the_row(); ?>
        <?php if (get_row_layout() == 'section_10') : ?> 
          <?php if ( have_rows( 'navigation' ) ) : ?>
            <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <section class="retreat__5 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
            <?php endwhile; ?>
            <?php else : ?>
              <section class="retreat__5">
          <?php endif; ?>

          
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="middle"> 
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                    <?php the_sub_field( 'content' ); ?>
                    <div class="battoms">
                      <a class="bundle" data-fancybox data-src="#modal-3"><?php the_sub_field( 'link_name' ); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php elseif(get_row_layout() == 'section_11') : ?> 
          <?php if ( have_rows( 'navigation' ) ) : ?>
            <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
              <section class="retreat__7 scroll__init" id="<?php the_sub_field( 'navigation_id' ); ?>">
            <?php endwhile; ?>
            <?php else : ?>
              <section class="retreat__7">
          <?php endif; ?>
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="remix">
                    <h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
                    <div class="whitebuttom">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_k.svg" alt="logo">
                      <?php the_field( 'start_datetime', $product_id ); ?> - <?php the_field( 'end_datetime', $product_id ); ?>
                    </div>
                    <img src="<?= get_template_directory_uri(); ?>/img/retreat_cxf.svg" alt="logo">
                    <h4><?php echo __('Choose Type of Accommodation'); ?></h4>
                    <div class="boxi">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                      <p><?php echo __('Single room'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field( 'single_room_price' ); ?></p>
                    </div>
                    <div class="boxi">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad.svg" alt="bad">
                      <p><?php echo __('Shared double room'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field( 'double_room_price' ); ?></p>
                    </div>
                    <div class="box2">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad2.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad2.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_bad2.svg" alt="bad">
                      <p><?php echo __('Shared glamping'); ?></p>
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_zce.svg" alt="bad">
                      <img src="<?= get_template_directory_uri(); ?>/img/retreat_ave.svg" alt="ava">
                      <p><?php the_sub_field( 'glamping_price' ); ?></p>
                    </div>
                    <div class="battoms">
                      <form id="form_add_<?php echo get_the_ID(); ?>" method='POST' action='javascript:void(null);'>
                        <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                        <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                        <input type="hidden" name="action" value="addcart_prod">
                          <a data-add="<?php echo get_the_ID(); ?>" class="add__ bundle" name="add" ><?php  echo __('Proceed to checkout'); ?></a>
                        <button hidden type="submit" name="add"  class="tt-btn-close" data-delete="<?php echo get_the_ID(); ?>">x</button>   
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 
          <?php elseif(get_row_layout() == 'section_12') : ?>  
            <section class="retreat__8">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l9 xl9 offset-xl3 offset-l3">
                  <div class="twix2">
                  <?php if ( have_rows( 'left_text_block' ) ) : ?>
                    <div class="block__">
                      <?php while ( have_rows( 'left_text_block' ) ) : the_row(); ?>
                      <h4 class="title"><?php the_sub_field( 'left_block_title' ); ?></h4>
                      <div class="blog3">
                        <?php the_sub_field( 'left_block_content' ); ?>
                      </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  <?php if ( have_rows( 'right_text_block' ) ) : ?>
                    <div class="block__">
                      <?php while ( have_rows( 'right_text_block' ) ) : the_row(); ?>
                        <h4 class="title"><?php the_sub_field( 'right_block_title' ); ?></h4>
                        <div class="blog38">
                          <?php the_sub_field( 'right_block_content' ); ?>
                        </div>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                  </div>
                  <?php the_sub_field( 'botttom_full_width_block' ); ?>                  
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>
      <?php endwhile;
    endif; ?>


    <!-- //// MODAL ////-->
    <div class="modal__style modal" id="modal-3" style="display: none;">
      <div class="content_modal">
          <!-- Calendly inline widget begin -->
          <div class="calendly-inline-widget" data-url="https://calendly.com/d/dpg-9q6-b4v/call-with-innercamp" style="min-width:550px;height:850px;"></div>
          <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
          <!-- Calendly inline widget end -->
      </div>
    </div>
<style>
  .retreat__0 {
    position: relative;
  }
  .retreat__0::after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background: linear-gradient(0deg, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
    top: 0;
    left: 0;
  }
</style>


<?php } ?>

<?php get_footer();
