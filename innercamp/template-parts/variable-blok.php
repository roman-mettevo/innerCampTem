<?php


$product_id_param = $args['param1'];
$product = wc_get_product($args['param1']);

$is_variable = false;
if ($product->is_type('variable')) {
  $is_variable = true;
}

if ($is_variable) {
  $variations = $product->get_available_variations();
  $variations_id = wp_list_pluck($variations, 'variation_id');
  $arr_first = $arr_second = $arr_variations = [];

  $i = 0;
  $number = 1;
  $temp_description = '';
  foreach ($variations as $item) {
    $arr_variations[$i]['number'] = $number;
    $arr_variations[$i]['id'] = $item['variation_id'];
    $arr_variations[$i]['name'] = $item['attributes']['attribute_level'];
    $arr_variations[$i]['description'] = $item['variation_description'];
    $arr_variations[$i]['display_price'] = $item['display_price'];
    $arr_variations[$i]['regular_price'] = $item['display_regular_price'];
    $temp_description = $item['variation_description'];
    $i++;
    $number++;
  }

// Новий масив, де ключами будуть значення з поля "description"
  $arr_variations_items = array();
  foreach ($arr_variations as $item) {
    $description = $item["description"];
//  unset($item["description"]);
    $arr_variations_items[$description][] = $item;
  }
  $content_for_variation = [];
  if (have_rows('content_for_variation')) :
    while (have_rows('content_for_variation')) : the_row();
      $content_for_variation[] .= get_sub_field('content');
    endwhile;
  endif;
}
?>


<!--  <pre>--><?php //var_dump($variations_id); ?><!--</pre>-->
<section data-product-id="<?php echo $product_id_param ?>" class="breathwork-levels-one-two__12">

  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl9 offset-xl3">
        <article class="book-training" id="book-now">
          <h2 class="title">Book your training</h2>
          <div class="book-training-wrap">
            <?php
            $i = 0;
            if ($is_variable) {
              foreach ($arr_variations_items as $index => $item) { ?>
                <div class="<?php echo ($i == 0) ? 'left-small-block' : 'middle-small-block' ?>">
                  <h3><?php echo $index ?></h3>
                  <div class="top-row">
                    <?php echo $content_for_variation[$i]; ?>
                    <!--                    <ul class="training-list">-->
                    <!--                      <li>150 hours, 2 months</li>-->
                    <!--                      <li>6 weekly sessions</li>-->
                    <!--                      <li>40+ videos</li>-->
                    <!--                      <li>Members Hub</li>-->
                    <!--                    </ul>-->
                  </div>
                  <div class="choose-price">
                    <?php
                    $j = 0;
                    $current_variation_id = '';
                    foreach ($item as $el) {
                      if ($j === 1) {
                        $current_variation_id = $el['id'];
                      }
                      ?>
                      <div onclick="changeSelectValue(<?php echo $el['number'] ?>)"
                           class="price-item <?php echo ($j === 1 && $i === 0) ? 'active' : '' ?>">
                        <span
                            data-price-variation="<?php echo $el['regular_price'] ?>"
                            class="price"><?php echo $el['regular_price'] ?>&euro;</span>
                        <span class="price-type"><?php echo str_replace("1+2", "", $el['name']) ?></span>
                      </div>
                      <?php
                      $j++;
                    } ?>
                  </div>
                  <span
                      data-add="<?php echo $current_variation_id ?>"
                      class="add__ bundle add-custom-js"
                  ><?php echo __('Enroll now'); ?></span>
                </div>
                <?php
                $i++;
              }
            } else { ?>
              <div class="left-small-block">
                <h3><?php echo get_the_title() ?></h3>
                <div class="top-row">
                  <?php
                  if (have_rows('content_for_variation')) :
                    while (have_rows('content_for_variation')) : the_row();
                      echo get_sub_field('content');
                    endwhile;
                  endif; ?>
                </div>
                <div class="choose-price">
                  <?php $current_variation_id = ''; ?>
                  <div class="price-item">
                    <span class="price"><?php echo $product->get_price(); ?>&euro;</span>
                    <span
                        class="price-type"><?php echo $product->get_price(); ?><?php the_field('short_description'); ?></span>
                  </div>
                </div>
                <span
                    data-add=""
                    class="add__ bundle add-custom-js"
                ><?php echo __('Enroll now'); ?></span>
              </div>
              <?php

            }

            ?>
            <div class="hidden-block">
              <?php
              /**
               * Hook: woocommerce_single_product_summary.
               *
               * @hooked woocommerce_template_single_price - 10
               * @hooked woocommerce_template_single_add_to_cart - 30
               * @hooked WC_Structured_Data::generate_product_data() - 60
               */
              do_action('woocommerce_single_product_summary');
              ?>
            </div>

            <div class="right-small-block"
                 style="background: url(<?php echo get_template_directory_uri(); ?>/img/breathwork-teacher/book-now.png) no-repeat top/cover;">
              <div class="top-block">
                <h3>Join the InnerCamp Retreat</h3>
                <div class="calen">Jun 24, 2023 - Jun 27, 2023</div>
                <div class="add-feature">
                  <p>Upgrade your experience with a retreat</p>
                </div>
              </div>
              <div class="upgrade">Upgrade +</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<div class="modal-wrap">
  <div class="shadow"></div>
  <div class="modal-upgrade-block">
    <button class="upgrade-close"><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/x-circle.svg"
                                       alt=""></button>
    <div class="upgrade-top-row">
      <h2 class="title">Upgrade your experience with a retreat?</h2>
      <div class="calen">June 2023</div>
    </div>
    <div class="modal-upgrade-content">
      <div class="left-side">
        <h3 class="block-title">Choose Date</h3>
        <div class="choose-calen">Jun 24, 2023 - Jun 27, 2023</div>
      </div>
      <div class="right-side">
        <h3 class="block-title">Choose Type of Accommodation</h3>
        <ul class="apartments-list">
          <li data-elem="0" class="apartment-item ">
            <ul class="img-list">
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
            </ul>
            <h3>Single room</h3>
            <div class="apartment-item-bottom-row">
              <div class="actual">Available</div>
              <div class="price">1200&euro;</div>
            </div>
          </li>
          <li data-elem="1" class="apartment-item">
            <ul class="img-list">
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
            </ul>
            <h3>Shared double room</h3>
            <div class="apartment-item-bottom-row">
              <div class="actual">Available</div>
              <div class="price">800&euro;</div>
            </div>
          </li>
          <li data-elem="2" class="apartment-item">
            <ul class="img-list">
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
              <li><img src="<?= get_template_directory_uri(); ?>/img/breathwork-teacher/bed-icon.svg" alt=""></li>
            </ul>
            <h3>Shared glamping</h3>
            <div class="apartment-item-bottom-row">
              <div class="actual">Available</div>
              <div class="price">600&euro;</div>
            </div>
          </li>
        </ul>
        <div class="modal-bottom-row">
          <span class="bundle add-custom-js">Yes, upgrade with a Retreat</span>
          <span class="disclaimer clear-add-option-js">No, thanks</span>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
    .breathwork-levels-one-two__2 .box__bottom p a {
        letter-spacing: 0.005em;
        text-decoration-line: underline;
        color: #B68742;
        font: 700 20px/33px var(--ob);
    }

    .hidden-block {
        /*position: absolute;*/
        /*z-index: -100;*/
        /*height: 1px;*/
        /*width: 1px;*/
        /*left: -10000px;*/
    }

    .apartment-item_active {
        box-shadow: 6px 5px 8px 2px #424f44;
    }

    .price-type {
        text-align: center;
    }
</style>
<script>
  const listBlocks = document.querySelectorAll('.apartment-item');

  const clearAddOptionJs = document.querySelectorAll('.clear-add-option-js');
  clearAddOptionJs.forEach(function (item) {
    item.addEventListener('click', () => {
      changeRoom(-9)
      listBlocks.forEach(function (block) {
        if (block.classList.contains('apartment-item_active')) {
          block.classList.remove('apartment-item_active');
        }
      })
      let modalWrap = document.querySelectorAll('.modal-wrap')
      modalWrap.forEach(function (el) {
        if (el.classList.contains('active')) {
          el.classList.remove('active')
        }
      })
    });
  })

  const addCustomButton = document.querySelectorAll('.add-custom-js');
  addCustomButton.forEach(function (button) {
    button.addEventListener('click', () => {
      const addToCartButton = document.querySelector('.single_add_to_cart_button');
      addToCartButton.click();
    });
  })


  function removeActiveClassExceptOne(exceptBlock) {
    listBlocks.forEach((block) => {
      if (block !== exceptBlock) {
        block.classList.remove('apartment-item_active');
      }
    });
  }

  listBlocks.forEach((block) => {
    block.addEventListener('click', () => {
      let numberElem = block.getAttribute('data-elem');
      if (block.classList.contains('apartment-item_active')) {
        block.classList.remove('apartment-item_active');
      } else {
        removeActiveClassExceptOne(block);
        block.classList.add('apartment-item_active');
      }
      changeRoom(numberElem)

    });
  });

  function changeRoom(number) {
    const checkboxInput = document.querySelectorAll('input.tmcp-field[type=checkbox]');
    let event = new Event('change', { bubbles: true });
    let eventOff = new Event('change', { bubbles: false });
    if (number === -9) {
      checkboxInput.forEach(function (el, ind) {
        if (el.checked === true) {
          el.checked = false
          el.dispatchEvent(eventOff);
        }
      })
      return
    }
    let activeIndex = -1;
    checkboxInput.forEach(function (el, ind) {
      if (el.checked === true) {
        activeIndex = ind
        el.checked = false
      }
    })

    if (activeIndex !== number) {
      checkboxInput[number].checked = true;
      checkboxInput[number].dispatchEvent(event);
    } else {
      checkboxInput[number].checked = false;
      checkboxInput[number].dispatchEvent(eventOff);
      checkboxInput.forEach(function (el, ind) {
        if (el.checked === true) {
          el.checked = false
          el.dispatchEvent(eventOff);
        }
      })
    }

  }

  function changeSelectValue(index) {
    const variationSelect = document.querySelector('#level');
    variationSelect.selectedIndex = index;
    const event = new Event('change', { bubbles: true });
    variationSelect.dispatchEvent(event);
  }
</script>
