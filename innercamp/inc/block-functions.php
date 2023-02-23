<?php
/**
 * Acf Register Block Type
 */
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types()
{

  // Home page
  acf_register_block_type(
    array(
      'name' => 'Home section 1',
      'title' => __('Home section 1'),
      'render_template' => 'ACF/home-page/home_1.php',
      'icon' => 'block-default',
      'keywords' => array('home-1'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 2',
      'title' => __('Home section 2'),
      'render_template' => 'ACF/home-page/home_2.php',
      'icon' => 'block-default',
      'keywords' => array('home-2'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 3',
      'title' => __('Home section 3'),
      'render_template' => 'ACF/home-page/home_3.php',
      'icon' => 'block-default',
      'keywords' => array('home-3'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'Home section 4',
      'title' => __('Home section 4'),
      'render_template' => 'ACF/home-page/home_4.php',
      'icon' => 'block-default',
      'keywords' => array('home-4'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 5',
      'title' => __('Home section 5'),
      'render_template' => 'ACF/home-page/home_5.php',
      'icon' => 'block-default',
      'keywords' => array('home-5'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 6',
      'title' => __('Home section 6'),
      'render_template' => 'ACF/home-page/home_6.php',
      'icon' => 'block-default',
      'keywords' => array('home-6'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 7',
      'title' => __('Home section 7'),
      'render_template' => 'ACF/home-page/home_7.php',
      'icon' => 'block-default',
      'keywords' => array('home-7'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 8',
      'title' => __('Home section 8'),
      'render_template' => 'ACF/home-page/home_8.php',
      'icon' => 'block-default',
      'keywords' => array('home-8'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Home section 9',
      'title' => __('Home section 9'),
      'render_template' => 'ACF/home-page/home_9.php',
      'icon' => 'block-default',
      'keywords' => array('home-9'),
    )
  );

  // FAQ page
  acf_register_block_type(
    array(
      'name' => 'FAQ section 1',
      'title' => __('FAQ section 1'),
      'render_template' => 'ACF/faq-page/faq_1.php',
      'icon' => 'block-default',
      'keywords' => array('faq-1'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'FAQ section 2',
      'title' => __('FAQ section 2'),
      'render_template' => 'ACF/faq-page/faq_2.php',
      'icon' => 'block-default',
      'keywords' => array('faq-2'),
    )
  );

  // About page
  acf_register_block_type(
    array(
      'name' => 'About section 1',
      'title' => __('About section 1'),
      'render_template' => 'ACF/about-us-page/about_1.php',
      'icon' => 'block-default',
      'keywords' => array('about-1'),
    )
  );

  // Testimonials page
  acf_register_block_type(
    array(
      'name' => 'Testimonial section 1',
      'title' => __('Testimonial section 1'),
      'render_template' => 'ACF/testimonials-page/testimonial_1.php',
      'icon' => 'block-default',
      'keywords' => array('testimonial-1'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Testimonial section 2',
      'title' => __('Testimonial section 2'),
      'render_template' => 'ACF/testimonials-page/testimonial_2.php',
      'icon' => 'block-default',
      'keywords' => array('testimonial-2'),
    )
  );

  acf_register_block_type(
    array(
      'name' => 'Testimonial section 3',
      'title' => __('Testimonial section 3'),
      'render_template' => 'ACF/testimonials-page/testimonial_3.php',
      'icon' => 'block-default',
      'keywords' => array('testimonial-3'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'Testimonial section 4',
      'title' => __('Testimonial section 4'),
      'render_template' => 'ACF/testimonials-page/testimonial_4.php',
      'icon' => 'block-default',
      'keywords' => array('testimonial-4'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'Testimonial section 5',
      'title' => __('Testimonial section 5'),
      'render_template' => 'ACF/testimonials-page/testimonial_5.php',
      'icon' => 'block-default',
      'keywords' => array('testimonial-5'),
    )
  );


  //  Team
  acf_register_block_type(
    array(
      'name' => 'Team section 1',
      'title' => __('Team section 1'),
      'render_template' => 'ACF/team/team_1.php',
      'icon' => 'block-default',
      'keywords' => array('Team-1'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'Team section 2',
      'title' => __('Team section 2'),
      'render_template' => 'ACF/team/team_2.php',
      'icon' => 'block-default',
      'keywords' => array('Team-2'),
    )
  );
  //APP SECTIONS
  acf_register_block_type(
    array(
      'name' => 'App section 1',
      'title' => __('App section 1'),
      'render_template' => 'ACF/app-page/app_1.php',
      'icon' => 'block-default',
      'keywords' => array('App-1'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'App section 2',
      'title' => __('App section 2'),
      'render_template' => 'ACF/app-page/app_2.php',
      'icon' => 'block-default',
      'keywords' => array('App-2'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'App section 3',
      'title' => __('App section 3'),
      'render_template' => 'ACF/app-page/app_3.php',
      'icon' => 'block-default',
      'keywords' => array('App-3'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'App section 4',
      'title' => __('App section 4'),
      'render_template' => 'ACF/app-page/app_4.php',
      'icon' => 'block-default',
      'keywords' => array('App-4'),
    )
  );
  acf_register_block_type(
    array(
      'name' => 'App section 5',
      'title' => __('App section 5'),
      'render_template' => 'ACF/app-page/app_5.php',
      'icon' => 'block-default',
      'keywords' => array('App-5'),
    )
  );

  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Common block',
      'title' => __('Common block'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/common_block.php',
      'icon' => 'block-default',
      'keywords' => array('Common block'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview', // Important!
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/common_block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Block With Anchors',
      'title' => __('Block With Anchors'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/block_with_anchors.php',
      'icon' => 'block-default',
      'keywords' => array('Block With Anchors'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/block_with_anchors.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Intermediate Unit',
      'title' => __('Intermediate Unit'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/intermediate_unit.php',
      'icon' => 'block-default',
      'keywords' => array('Intermediate Unit'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/intermediate_unit.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Text List Image',
      'title' => __('Text List Image'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/text_list_image_block.php',
      'icon' => 'block-default',
      'keywords' => array('Text List Image'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/text_list_image_block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Intermediate Unit Background Image',
      'title' => __('Intermediate Unit Background Image'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/intermediate_unit_background_image.php',
      'icon' => 'block-default',
      'keywords' => array('Intermediate Unit Background Image'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/intermediate_unit_background_image.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Training Block',
      'title' => __('Training Block'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/training_block.php',
      'icon' => 'block-default',
      'keywords' => array('Training Block'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/training_block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Image With Text Template 1',
      'title' => __('Image With Text Template 1'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/image_with_text_template_1.php',
      'icon' => 'block-default',
      'keywords' => array('Image With Text Template 1'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/image_with_text_template_1.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Intermediate Unit Template 2',
      'title' => __('Intermediate Unit Template 2'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/intermediate_unit_template_2.php',
      'icon' => 'block-default',
      'keywords' => array('Intermediate Unit Template 2'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/intermediate_unit_template_2.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Samples Block',
      'title' => __('Samples Block'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/samples_block.php',
      'icon' => 'block-default',
      'keywords' => array('Samples Block'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/samples_block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Retreat Block',
      'title' => __('Retreat Block'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/retreat_block.php',
      'icon' => 'block-default',
      'keywords' => array('Retreat Block'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/retreat_block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'List With Image',
      'title' => __('List With Image'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/list-with-image.php',
      'icon' => 'block-default',
      'keywords' => array('List With Image'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/list-with-image.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Content Grid Block',
      'title' => __('Content Grid Block'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/content-grid-block.php',
      'icon' => 'block-default',
      'keywords' => array('Content Grid Block'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/content-grid-block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Intermediate Unit Template 3',
      'title' => __('Intermediate Unit Template 3'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/intermediate_unit_template_3.php',
      'icon' => 'block-default',
      'keywords' => array('Intermediate Unit Template 3'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/intermediate_unit_template_3.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Common Block Template 2',
      'title' => __('Common Block Template 2'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/common_block_template_2.php',
      'icon' => 'block-default',
      'keywords' => array('Common Block Template 2'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/common_block_template_2.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Text Image With Icons',
      'title' => __('Text Image With Icons'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/text_image_with_icons.php',
      'icon' => 'block-default',
      'keywords' => array('Text Image With Icons'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/text_image_with_icons.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Slider Block',
      'title' => __('Slider Block'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/slider_block.php',
      'icon' => 'block-default',
      'keywords' => array('Slider Block'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/slider_block.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  acf_register_block_type(
    array(
      'supports' => array( 'anchor' => true ),
      'name' => 'Feedback Form',
      'title' => __('Feedback Form'),
      'render_callback' => 'block_render',
      'render_template' => 'ACF/other-block/feedback_form.php',
      'icon' => 'block-default',
      'keywords' => array('Feedback Form'),
      'example' => array(
        'attributes' => array(
          'mode' => 'preview',
          'data' => array(
            'image' => '<img src="' . get_template_directory_uri() . '/ACF/other-block/feedback_form.jpg" style="width:100%;display: block; margin: 0 auto;">'
          ),
        ),
      ),
    )
  );
  
  acf_register_block_type(
    array(
      'name' => 'Find your coach',
      'title' => __('Find your coach'),
      'render_template' => 'ACF/find-your-coach/find-your-coach_1.php',
      'icon' => 'block-default',
      'keywords' => array('Find your coach'),
    )
  );
  
}

/**
 * Callback block render,
 * return preview image
 */
function block_render($block, $content = '', $is_preview = false)
{
  /**
   * Back-end preview
   */
  if ($is_preview && !empty($block['data'])) {
    echo $block['data']['image'];
    return;
  } else {
    if ($block) :
      $template = $block['render_template'];
      $template = str_replace('.php', '', $template);
      get_template_part('/' . $template);
    endif;
  }
}

