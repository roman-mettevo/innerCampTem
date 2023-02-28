<?php
/**
 * Template Name: Affiliate Page* 
 */
get_header(); ?>

<section class="profile-affiliate__1">
  <div class="container">
    <div class="row">
      <div class="col m12 s12 l12 xl2">
            <div class="menu__">
              <ul> 
                <li> <a class="order" href="/my-account/orders/">Orders</a></li>
                <li> <a class="profile" href="/my-account/edit-account/">Profile</a></li>
                <li> <a class="affilate" href="/affiliate/">Affilate</a></li>
              </ul>
            </div>
      </div>
      <div class="col m12 s12 l12 xl10">
      

      
       <?php echo do_shortcode("[affiliate_area_stats]"); ?>
       
        <h2 class="title">Affiliate</h2>
        <div class="stats-wrapper splide" id="profile-affiliate-stats">
          <div class="stats splide__track">
            <div class="splide__list">
              <div class="splide__slide stats-item"><span class="stats-icon"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/dollar-icon.svg" alt=""></span>
                <div class="stats-price">0,00 &euro; &bull; 0 </div>
                <div class="stats-name">Gross Commussion</div>
              </div>
              <div class="splide__slide stats-item"><span class="stats-icon"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/stonks-icon.svg" alt=""></span>
                <div class="stats-price">0,00 &euro;</div>
                <div class="stats-name">Sales</div>
              </div>
              <div class="splide__slide stats-item"><span class="stats-icon"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/dislike-icon.svg" alt=""></span>
                <div class="stats-price">0,00 &euro; &bull; 0 </div>
                <div class="stats-name">Refunds</div>
              </div>
              <div class="splide__slide stats-item"><span class="stats-icon"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/touch-icon.svg" alt=""></span>
                <div class="stats-price">1</div>
                <div class="stats-name">Visitors</div>
              </div>
              <div class="splide__slide stats-item"><span class="stats-icon"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/get-percent-icon.svg" alt=""></span>
                <div class="stats-price">0,00 &euro; &bull; 0</div>
                <div class="stats-name">Net Commission</div>
              </div>
              <div class="splide__slide stats-item"><span class="stats-icon"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/handshake-icon.svg" alt=""></span>
                <div class="stats-price">0,00 % &bull; 0 </div>
                <div class="stats-name">Conversion</div>
              </div>
            </div>
          </div>
        </div>
        <div class="affiliate-content-nav"><span class="affiliate-content-nav-tab active" data-affiliate-tab="affiliate-referrals">Referrals</span><span class="affiliate-content-nav-tab" data-affiliate-tab="affiliate-products">Products</span><span class="affiliate-content-nav-tab" data-affiliate-tab="affiliate-payout-history">
            Payout
            History</span></div>
        <div class="affiliate-content">
          <div class="referrals affiliate-content-item active" id="affiliate-referrals">
            <h5 class="content-heading">Referrals</h5>
            <div class="affiliate-table">
              <div class="affiliate-table-header referrals-table-row">
                <div class="affiliate-table-number">#</div>
                <div class="affiliate-table-name">Name</div>
                <div class="affiliate-table-date">Date</div>
                <div class="affiliate-table-commission">Commission</div>
                <div class="affiliate-table-status">Status</div>
              </div>
              <div class="referrals-table-body">
                <div class="referrals-table-row">
                  <div class="affiliate-table-number">1</div>
                  <div class="affiliate-table-name">
                    <div class="photo"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/user.svg" alt=""></div>
                    <div class="name-wrapper">
                      <div class="name">Maria Ana1</div><span class="id">ID 10061</span>
                    </div>
                  </div>
                  <div class="affiliate-table-date">Feb 1, 2022</div>
                  <div class="affiliate-table-commission">1,00 &euro;</div>
                  <div class="affiliate-table-status">Active1</div>
                </div>
                <div class="referrals-table-row">
                  <div class="affiliate-table-number">2</div>
                  <div class="affiliate-table-name">
                    <div class="photo"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/test.jpg" alt=""></div>
                    <div class="name-wrapper">
                      <div class="name">Maria Ana2</div><span class="id">ID 10062</span>
                    </div>
                  </div>
                  <div class="affiliate-table-date">Feb 2, 20221</div>
                  <div class="affiliate-table-commission">2,00 &euro;</div>
                  <div class="affiliate-table-status">Active2</div>
                </div>
                <div class="referrals-table-row">
                  <div class="affiliate-table-number">3</div>
                  <div class="affiliate-table-name">
                    <div class="photo"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/user.svg" alt=""></div>
                    <div class="name-wrapper">
                      <div class="name">Maria Ana3</div><span class="id">ID 10063</span>
                    </div>
                  </div>
                  <div class="affiliate-table-date">Feb 3, 20222</div>
                  <div class="affiliate-table-commission">3,00 &euro;</div>
                  <div class="affiliate-table-status">Active3</div>
                </div>
              </div>
              <div class="affiliate-table-pagination">
                <button class="affiliate-table-seemore see-more-button" type="button">
                  See
                  more
                </button>
                <div class="pagination-arrows">
                  <button class="affiliate-table-arrow affiliate-table-prev-arrow" type="button">
                    <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 1.75L1.25 6.25L5.75 10.75" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>                                        1-3 of 50
                  <button class="affiliate-table-arrow affiliate-table-next-arrow" type="button">
                    <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.25 10.75L5.75 6.25L1.25 1.75" stroke="#B68742" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="products affiliate-content-item" id="affiliate-products">
            <h5 class="content-heading">Products</h5>
            <div class="affiliate-table">
              <div class="affiliate-table-header products-table-row">
                <div class="affiliate-table-number">#</div>
                <div class="affiliate-table-product">Product</div>
                <div class="affiliate-table-sales">Sales</div>
              </div>
              <div class="products-table-body">
                <div class="products-table-row">
                  <div class="affiliate-table-number">1</div>
                  <div class="affiliate-table-product">
                    <div class="photo"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/user.svg" alt=""></div>
                    <div class="name-wrapper">
                      <div class="name">Tantric Breathwork</div><span class="quantity">Quantity: 1</span>
                    </div>
                  </div>
                  <div class="affiliate-table-sales">0,00 &euro;</div>
                </div>
                <div class="products-table-row">
                  <div class="affiliate-table-number">1</div>
                  <div class="affiliate-table-product">
                    <div class="photo"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/user.svg" alt=""></div>
                    <div class="name-wrapper">
                      <div class="name">Tantric Breathwork</div><span class="quantity">Quantity: 1</span>
                    </div>
                  </div>
                  <div class="affiliate-table-sales">0,00 &euro;</div>
                </div>
                <div class="products-table-row">
                  <div class="affiliate-table-number">1</div>
                  <div class="affiliate-table-product">
                    <div class="photo"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/user.svg" alt=""></div>
                    <div class="name-wrapper">
                      <div class="name">Tantric Breathwork</div><span class="quantity">Quantity: 1</span>
                    </div>
                  </div>
                  <div class="affiliate-table-sales">0,00 &euro;</div>
                </div>
              </div>
              <div class="affiliate-table-pagination">
                <button class="affiliate-table-seemore see-more-button" type="button">
                  See
                  more
                </button>
                <div class="pagination-arrows">
                  <button class="affiliate-table-arrow affiliate-table-prev-arrow" type="button">
                    <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 1.75L1.25 6.25L5.75 10.75" stroke="#ADADAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>                                        1-3 of 50
                  <button class="affiliate-table-arrow affiliate-table-next-arrow" type="button">
                    <svg width="7" height="12" viewbox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.25 10.75L5.75 6.25L1.25 1.75" stroke="#B68742" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="payout-history affiliate-content-item" id="affiliate-payout-history">
            <h5 class="content-heading">Payout History</h5>
            <div class="affiliate-table">
              <div class="affiliate-table-header payout-table-row">
                <div class="affiliate-table-number">#</div>
                <div class="affiliate-table-date">Date</div>
                <div class="affiliate-table-amount">Amount</div>
                <div class="affiliate-table-method">Method</div>
                <div class="affiliate-table-notes">Notes</div>
              </div>
              <div class="payout-table-body">
                <p class="no-payouts-to-show">No payouts to show</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="profile-affiliate__modal">
  <div class="close"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/close.svg" alt=""></div>
  <div class="modal-name-row">
    <div class="img"><img src="<?= get_template_directory_uri(); ?>/img/affiliate/user.svg" alt=""></div>
    <div class="name-wrapper">
      <div class="name">Maria Ana</div>
      <div class="id">ID 10061</div>
    </div>
  </div>
  <div class="modal-options-row">
    <div class="commission">
      <div class="commission-name">Commission</div>
      <div class="commission-date">Feb 2, 2022</div>
    </div>
    <div class="price">0,00 &euro;</div>
    <div class="active">Active</div>
  </div>
</div>

  <?php if (!is_user_logged_in()){ ?>
      <script>
          location.href = '/';
      </script>
  <?php } ?>

<?php
get_footer();