<!-- Block 2 -->
<?php if(0){ ?>
<section class="testimonial__2">
    <div class="container">
        <div class="row">
            <ul class="top-list">
              <?php 
                if( have_rows('testimonial_2_achievements') ):
                  while( have_rows('testimonial_2_achievements') ) : the_row();

                    $number = get_sub_field('testimonial_2_number');
                    $description = get_sub_field('testimonial_2_achievement_description');
                    
                    if(!empty($number) && !empty($description)) { ?>
                      <li>
                        <span class="number"><?php echo $number; ?></span>
                        <div class="list-description"><?php echo $description; ?></div>
                      </li>
                    <?php }
                  endwhile;
                endif;
              ?>
            </ul>
        </div>
        <!--    Slider training -->
        <?php 
        $top = get_field("testimonial_2_top_slider");
        $top_sup = $top['top_slider_testimonial_2_sup_title'];
        $top_title = $top["top_slider_testimonial_2_title"];
        $top_list = $top["top_slider_testimonial_2_list"];
        
        $bottom = get_field("testimonial_2_bottom_slider");
        $bottom_sup = $bottom['bottom_slider_testimonial_2_sup_title'];
        $bottom_title = $bottom["bottom_slider_testimonial_2_title"];
        $bottom_list = $bottom["bottom_slider_testimonial_2_list"];

        if($top): ?>
          <div class="row">
            <div class="col m12 s12 l9 xl9">
              <?php 
              if(!empty($top_sup)) { ?>
                <p class="sub"><?php echo $top_sup; ?></p>
              <?php }

              if(!empty($top_title)) {?>
                <h2 class="title"><?php echo $top_title; ?></h2>
              <?php }
              ?>
                
                
            </div>
            <div class="col m12 s12 l3 xl3 trainings-arrow-nav">
                <div class="arrows"><a class="left_a previous-button" href="javascript:;">
                    <svg width="45" height="16" viewBox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                    </svg></a><a class="right_a next-button" href="javascript:;">
                    <svg width="45" height="16" viewBox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                    </svg></a></div>
            </div>
        </div>
    </div>
    <div class="testimonial__2-top-slider">
      <div class="splide" aria-roledescription="carousel" id="training-slider">
        <div class="splide__track">
          <ul class="splide__list">
            <?php 
              foreach ($top_list as $item) { 
                $item_text = $item["top_slidet_testimonial2_text_item"]; 
                $item_img = $item["top_slider_testimonial_2_photo"];
                $item_name = $item["top_slider_testimonial_2_name"];
                $item_tag = $item["top_slider_testimonial_2_tag"];               
                ?>
                <li class="splide__slide">
                  <div class="training-testimony-item">
                    <div class="block__">
                      <?php 
                        if(!empty($item_text)) {
                          echo $item_text;
                        }
                      ?>
                    </div>
                    <div class="user">
                      <div class="images">
                        <?php
                          if(!empty($item_img)) {
                            
                            ?>
                            <img src="<?php echo $item_img['url']; ?>" alt="<?php echo $item_img['alt']; ?>">
                          <?php }
                        ?>                                        
                      </div>
                      <div class="info">
                        <?php 
                          if(!empty($item_name)) { ?>
                            <h4 class="name"><?php echo $item_name; ?></h4>
                          <?php }
                        ?>                                       
                        <div class="tag">
                          <?php 
                            if(!empty($item_tag)) { ?>
                              <a class="tags" href="<?php echo $item_tag['url']; ?>"><?php echo $item_tag['title']; ?></a>
                            <?php }
                          ?>                                            
                        </div>
                      </div>
                    </div>
                    </div>
                  </li>
                <?php }
              ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endif;

    if($bottom): ?>
    <!--    Slider retreats & session -->
    <div class="container second-slider">
      <div class="row">
        <div class="col m12 s12 l9 xl9">
          <?php 
            if(!empty($bottom_sup)) { ?>
              <p class="sub"><?php echo $bottom_sup ?></p>
            <?php }

            if(!empty($bottom_title)) { ?>
              <h2 class="title"><?php echo $bottom_title; ?></h2>
            <?php }
          ?>      
        </div>
          <div class="col m12 s12 l3 xl3 retreats-arrow-nav">
            <div class="arrows">
              <a class="left_a previous-button" href="javascript:;">
                <svg width="45" height="16" viewBox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
                </svg>
              </a>
              <a class="right_a next-button" href="javascript:;">
                <svg width="45" height="16" viewBox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="testimonial__2-bottom-slider">
      <div class="splide" aria-roledescription="carousel" id="retreats-slider">
        <div class="splide__track">
          <ul class="splide__list">
            <?php 
              foreach ($bottom_list as $key) {
                $key_text = $key["bottom_slidet_testimonial2_text_item"]; 
                $key_img = $key["bottom_slider_testimonial_2_photo"];
                $key_name = $key["bottom_slider_testimonial_2_name"];
                $key_tag = $key["bottom_slider_testimonial_2_tag"]; ?> 
                <li class="splide__slide">
                  <div class="retreats-testimony-item">
                    <div class="block__">
                      <?php 
                        if(!empty($key_text)) {
                          echo $key_text;
                        }
                      ?>
                    </div>
                    <div class="user">
                      <div class="images">
                        <?php 
                          if(!empty($key_img)) {?>
                            <img src="<?php echo $key_img['url']; ?>" alt="<?php echo $key_img['alt']; ?>">
                          <?php }
                        ?>
                      </div>
                      <div class="info">
                        <?php 
                          if(!empty($key_name)) { ?>
                            <h4 class="name"><?php echo $key_name; ?></h4>
                          <?php }
                        ?>
                        <div class="tag">
                          <?php 
                            if(!empty($key_tag)) { ?>
                              <a class="tags" href="<?php echo $key_tag['url']; ?>"><?php echo $key_tag['title']; ?></a>
                            <?php }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php }
            ?>
          </ul>
        </div>
      </div>
    </div>
  <?php endif;
?>  
</section>


<?php } ?>


<section class="reviews__2">
  <div class="container">
    <div class="row about-trainings-row">
      <div class="col m12 s12 l12 xl12">
        <div class="review-header-wrapper">
          <div class="review-header">
            <p class="sub">TESTIMONIALS</p>
            <h2 class="title">About trainings</h2>
          </div>
          <div class="arrows"><a class="left_a previous-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
              </svg></a><a class="right_a next-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
              </svg></a></div>
        </div>
        <div class="splide-wrapper">
          <div class="splide about-training-slider" id="about-training-slider">
            <div class="splide__track">
              <div class="splide__list">
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    I have to admit that I did not expect it to be so life changing. It was a
                    beautiful healing journey for myself and at the same time I have learned so
                    many things that I can use when working with people. I found the whole
                    breathwork program very informative, the team very responsive to any
                    questions that I had and the online sessions were powerful.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">Veatriki Kalopetridou</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    This course has changed my life. I have become much more creative and I have
                    learned how to become more vulnerable. I have learned so much about myself,
                    about my goals, and about the universe.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">Dorje Wulf</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    The entire program is structured intelligently, you can always ask all your
                    questions, have outstanding support. It really increases your confidence as
                    a facilitator because you get all the techniques and practice that you need.
                    I can fully recommend this program to anyone looking to become a successful
                    and heart-centered breathwork practitioner.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">Femke van Gurp</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    It gave me deeper insights in the womb awakening aspect
                    of my work as a tantra coach and I attracted more clients specifically
                    asking for this. Marjolein is an amazing and warm-hearted teacher.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    My heart is so incredibly filled with gratitude, love,
                    and joy. I was not only allowed to meet beautiful and lovely souls with whom
                    I went on this very intimate journey, I was also able to shed another skin,
                    and tear down this wall that has built itself up inside myself over time.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    I am so grateful I did the Cacao facilitator training.
                    The depth, the opening of the ceremonies to call on all the ancestors and
                    the medicine wheel&mldr;wow, so powerful. I am looking forward to give my own
                    ceremonies with so much bliss and healing vibes.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    InnerCamp is such a blessing. This is the most time and
                    effort I have ever put into myself and personal growth. I regret nothing. I
                    am healing.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    It was an amazing course! The breathwork sessions every
                    week helped me dive deeper into my own processes and I was surprise how well
                    breathwork works online! It&acute;s a very well sorted out program that gave me a
                    perfect preparation to feel empowered and at ease to facilitate sessions
                    myself.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    I have found my tribe! Thank you Alexis for being such a
                    wonderful inspiring guiding light, for bringing us all together, and for
                    creating these phenomenal opportunities for yet more growth and empowerment.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    Big thank you for being such warm souls! Thank you Alexis
                    for putting together this course. It has given me a skill for life and some
                    experience that has helped me to find solutions and abilities to make my
                    work much more valuable!
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    Big thank you for being such warm souls! Thank you Alexis
                    for putting together this course. It has given me a skill for life and some
                    experience that has helped me to find solutions and abilities to make my
                    work much more valuable!
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="see-more-wrapper">
            <button class="see-more-button" type="button">See more</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row about-retreats-row">
      <div class="col m12 s12 l12 xl12">
        <div class="review-header-wrapper">
          <div class="review-header">
            <p class="sub">TESTIMONIALS</p>
            <h2 class="title">About retreats &amp; sessions</h2>
          </div>
          <div class="arrows"><a class="left_a previous-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928936L0.292892 7.2929ZM45 7L1 7L1 9L45 9L45 7Z" fill="#B9B9B9"></path>
              </svg></a><a class="right_a next-button" href="javascript:;">
              <svg width="45" height="16" viewbox="0 0 45 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.7071 8.7071C45.0976 8.31658 45.0976 7.68341 44.7071 7.29289L38.3431 0.928929C37.9526 0.538404 37.3195 0.538405 36.9289 0.928929C36.5384 1.31945 36.5384 1.95262 36.9289 2.34314L42.5858 8L36.9289 13.6569C36.5384 14.0474 36.5384 14.6805 36.9289 15.0711C37.3195 15.4616 37.9526 15.4616 38.3431 15.0711L44.7071 8.7071ZM8.74228e-08 9L44 9L44 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#B68742"></path>
              </svg></a></div>
        </div>
        <div class="splide-wrapper">
          <div class="splide about-retreats-slider" id="about-retreats-slider">
            <div class="splide__track">
              <div class="splide__list">
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    I have to admit that I did not expect it to be so life changing. It was a
                    beautiful healing journey for myself and at the same time I have learned so
                    many things that I can use when working with people. I found the whole
                    breathwork program very informative, the team very responsive to any
                    questions that I had and the online sessions were powerful.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">Veatriki Kalopetridou</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    This course has changed my life. I have become much more creative and I have
                    learned how to become more vulnerable. I have learned so much about myself,
                    about my goals, and about the universe.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">Dorje Wulf</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    The entire program is structured intelligently, you can always ask all your
                    questions, have outstanding support. It really increases your confidence as
                    a facilitator because you get all the techniques and practice that you need.
                    I can fully recommend this program to anyone looking to become a successful
                    and heart-centered breathwork practitioner.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">Femke van Gurp</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    It gave me deeper insights in the womb awakening aspect
                    of my work as a tantra coach and I attracted more clients specifically
                    asking for this. Marjolein is an amazing and warm-hearted teacher.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    My heart is so incredibly filled with gratitude, love,
                    and joy. I was not only allowed to meet beautiful and lovely souls with whom
                    I went on this very intimate journey, I was also able to shed another skin,
                    and tear down this wall that has built itself up inside myself over time.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    I am so grateful I did the Cacao facilitator training.
                    The depth, the opening of the ceremonies to call on all the ancestors and
                    the medicine wheel&mldr;wow, so powerful. I am looking forward to give my own
                    ceremonies with so much bliss and healing vibes.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    InnerCamp is such a blessing. This is the most time and
                    effort I have ever put into myself and personal growth. I regret nothing. I
                    am healing.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    It was an amazing course! The breathwork sessions every
                    week helped me dive deeper into my own processes and I was surprise how well
                    breathwork works online! It&acute;s a very well sorted out program that gave me a
                    perfect preparation to feel empowered and at ease to facilitate sessions
                    myself.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    I have found my tribe! Thank you Alexis for being such a
                    wonderful inspiring guiding light, for bringing us all together, and for
                    creating these phenomenal opportunities for yet more growth and empowerment.
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    Big thank you for being such warm souls! Thank you Alexis
                    for putting together this course. It has given me a skill for life and some
                    experience that has helped me to find solutions and abilities to make my
                    work much more valuable!
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
                <div class="splide__slide text-rewiev-splide">
                  <p class="review-text">
                    Big thank you for being such warm souls! Thank you Alexis
                    for putting together this course. It has given me a skill for life and some
                    experience that has helped me to find solutions and abilities to make my
                    work much more valuable!
                  </p>
                  <div class="author-review">
                    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/testimonials_n/user.jpg" alt=""></div>
                    <div class="about-author">
                      <div class="author-name">JEN D</div><span class="author-mark">Breathwork Teacher Training</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="see-more-wrapper">
            <button class="see-more-button" type="button">See more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
