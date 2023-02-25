<section class="careers__4">
  <div class="container">
    <div class="row">
     
     
  <?php if( get_field('sub_text')): ?><!-- if under__the -->
    <p class="sub"><?php the_field('sub_text'); ?></p>
  <?php endif; ?>

  <?php if( get_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_field('title'); ?></h2>
  <?php endif; ?>
      
      
      <div class="careers__4-wrap" id='form'>
        <div class="career-form-block">
         


         <?php if(0){ ?>
          <form class="career-form" action="">
            <div class="form-field">
              <label for="select-job">Job title:</label>
              <select id="select-job" name="select-job">
                <option value="" selected="" disabled="" hidden="">Choose job title</option>
                <option value="Psychology Intern">Psychology Intern</option>
                <option value="Sales Service Representative">Sales Service Representative</option>
                <option value="Customer Service Intern">Customer Service Intern</option>
                <option value="HR Intern">HR Intern</option>
                <option value="Future Openings">Future Openings</option>
              </select>
            </div>
            <div class="form-field">
              <label for="candidate-name">Full name:</label>
              <input id="candidate-name" type="text" name="candidate-name" placeholder="Your full name">
            </div>
            <div class="form-field">
              <label for="candidate-email">Email:</label>
              <input id="candidate-email" type="email" name="candidate-email" placeholder="contact@innercamp.com">
            </div>
            <div class="form-field">
              <label for="birthday">Date of birth:</label>
              <input id="birthday" type="date" name="birthday" placeholder="dd/mm/yyyy">
            </div>
            <div class="bottom-form-block">
              <div class="flex__gruap">
                <div class="form-field location-block">
                  <label for="candidate-location">Current location:</label>
                  <input id="candidate-location" type="text" name="candidate-location" placeholder="City &amp; Country">
                </div>
                <div class="form-field upload-block">
                  <label for="upload-cv">Upload your CV:</label>
                  <input id="upload-cv" type="file" name="upload-cv">
                </div>
              </div>
              <div class="form-field">
                <label for="candidate-message">Introduction message:</label>
                <textarea id="candidate-message" name="candidate-message" cols="30" rows="13" placeholder="Say something about yourself"></textarea>
              </div>
            </div>
            <div class="form-field flex">
              <input id="check-terms" type="checkbox" name="check-terms"><span>I accept the <a href="#">terms and conditions</a> of innercamp.com</span>
            </div>
            <div class="form-field submit-block">
              <button class="bundle" type="submit">Apply</button>
            </div>
          </form>
         <?php }else{ ?>
         
           <?php if( get_field('short_code')): ?><!-- if under__the -->
            <?php the_field('short_code'); ?>
          <?php endif; ?>
        
         <?php }?>
        </div>
        <div class="careers__4-img">

        
    <?php $image = get_field('image'); ?>

    <?php if( !empty( $image ) ): ?>
        <div class="careers__4-img"><img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>"></div>
    <?php endif; ?>   
    
    
     
      </div>
    </div>
    </div>
  </div>
</section>
