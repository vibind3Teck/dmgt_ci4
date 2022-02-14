<?=$this->extend("frontend/base")?>

<?=$this->section("content")?>

    <div class="container">
      <section class="w-hide">
        <ul class="mobile-categories">
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
                Deck & Hull
              </h6>
            </a>
          </li>
        </ul>
        <div class="mobile-categories-title">
          popular-categories
        </div>
      </section>

      <section class="row banner-main">
        <div class="col-lg-8 pr-lg-1">
          <div class="slider-primary mt-2">
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-1.jpg');?>" alt="">
              </figure>
            </a>
             <a href="#">
                <figure>
                  <img src="<?php echo base_url('public/dmgt/images/slider-1.jpg');?>" alt="">
                </figure>
              </a> 
          </div>
        </div>
        <div class="col-lg-4 pl-1 m-hide">
          <div class="slider-secondary mt-2">
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-2.jpg');?>" alt="">
              </figure>
            </a>
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-2.jpg');?>" alt="">
              </figure>
            </a>
          </div>
          <div class="slider-secondary mt-1">
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-3.jpg');?>" alt="">
              </figure>
            </a>
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-3.jpg');?>" alt="">
              </figure>
            </a>
          </div>
        </div>
      </section>
      <section class="row banner-bottom mt-4">
        <ul class="col-lg-8 features">
          <li>
            <div class="material-icons mr-3">
              local_shipping
            </div>
            <div>
              <h5 class="mb-1">payment & delivery</h5>
              <p>free shipping orders above $200 </p>
            </div>
          </li>
          <li>
            <div class="material-icons mr-3">
              replay
            </div>
            <div>
              <h5 class="mb-1">payment & delivery</h5>
              <p>Return & refund</p>
            </div>
          </li>
          <li>
            <div class="material-icons mr-3">
              build_circle
            </div>
            <div>
              <h5 class="mb-1">Quality support</h5>
              <p>Alway onlne feedback 24*7</p>
            </div>
          </li>
        </ul>
        <div class="col-lg-4">
          <div class="features-slider">
            <div>
              We offers you a wide range of marine replacement products
            </div>
            <div>
              We offers you a wide range of marine replacement products
            </div>                                                              
          </div>
        </div>
      </section>
      <section class="popular-categories primary-padding">
        <h3 class="text-center">Explore Popular Categories</h3>
        <p class="text-center mb-4">Our Entire Product Range</p>
        <ul class="categories-slider sec-padding">

        <?php foreach ($category_data as $key=> $item): ?>
          <li class="card">
            <div class="p-2">
              <div class="img-section">
                <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
              </div>
              <h6>
               <?php echo ucfirst($key); ?>
              </h6>
              <ul class="product-spec">
                <?php foreach ($item as $product_name): ?>
                <li><a href="#"><?php echo ucfirst($product_name); ?></a></li>
                 <?php endforeach ?>
              </ul>
              <a href="#" class="more-btn">More Parts</a>
            </div>
          </li>
                
        <?php endforeach ?>


                          
      </section>
      <section>
        <div class="row live-sale-section primary-padding_bottom">
          <div class="col-md-9">
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/ad-1.jpg');?>" alt="">
            </a>
          </div>
          <div class="col-md-3">
            <div class="live-sale_title">
              <h2>Sale is live</h2>
            </div>
            <a href="#" class="m-hide">
              <img src="<?php echo base_url('public/dmgt/images/ad-2.jpg');?>" alt="">
            </a>
            <a href="#" class="w-hide">
              <img src="<?php echo base_url('public/dmgt/images/ad-2-mobile.jpg');?>" alt="">
            </a>
          </div>
        </div>
      </section>
      <section class="shop-brand primary-padding_bottom">
        <h3 class="text-center">Shop By Brand</h3>
        <p class="text-center mb-4">Our Entire Product Range</p>
        <ul class="shop-brand_slider sec-padding">

                <?php foreach ($brand_data as $item): ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['brand_name']; ?></option>
                  <li>
                    <a href="#">
                      <img src="<?php echo base_url('public/dmgt/images/brand-1.jpg');?>" alt="">
                    </a>
                  </li>
                <?php endforeach ?>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-1.jpg');?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-2.jpg');?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-3.jpg');?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-1.jpg');?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-2.jpg');?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-3.jpg');?>" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/brand-3.jpg');?>" alt="">
            </a>
          </li>
        </ul>
        <ul class="offer-slider">
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-3.jpg');?>" alt="">
              </figure>
            </a>
          </li>
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-2.jpg');?>" alt="">
              </figure>
            </a>
          </li>
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-3.jpg');?>" alt="">
              </figure>
            </a>
          </li>
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo base_url('public/dmgt/images/slider-2.jpg');?>" alt="">
              </figure>
            </a>
          </li>
        </ul>
      </section>
      <section>
        <h3 class="text-center">Clearence Sale</h3>
        <p class="text-center mb-4">Our Entire Product Range</p>
        <ul class="categories-slider sec-padding clearence-sale_slider">
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
          <li class="card">
            <a href="#">
              <div class="p-2">
                <h6>
                  Maneuvering & 
                  Stabilizing
                </h6>
                <div class="img-section">
                  <img src="<?php echo base_url('public/dmgt/images/product-1.png');?>" alt="">
                </div>
                <div class="price-tag">
                  $23.00 
                  <span>
                    $29.00
                  </span>                                                    
                </div>
                <div class="save">
                  save 33% 
                </div>
              </div>
            </a>
          </li>
        </ul>
      </section>
      <section class="blogs">
        <h3 class="text-center">Explore Popular Categories</h3>
        <p class="text-center mb-4">Our Entire Product Range</p>
        <ul class="blogs-slider sec-padding">
          <li>
            <figure>
              <img src="<?php echo base_url('public/dmgt/images/blog-1.jpg');?>" alt="">
            </figure>
            <span>
              May 27, 2020
            </span>
            <h5>
              Explore Popular Categories
            </h5>
            <a href="#" class="more-btn" tabindex="0">More Parts</a>
          </li>
          <li>
            <figure>
              <img src="<?php echo base_url('public/dmgt/images/blog-1.jpg');?>" alt="">
            </figure>
            <span>
              May 27, 2020
            </span>
            <h5>
              Explore Popular Categories
            </h5>
            <a href="#" class="more-btn" tabindex="0">More Parts</a>
          </li>
          <li>
            <figure>
              <img src="<?php echo base_url('public/dmgt/images/blog-1.jpg');?>" alt="">
            </figure>
            <span>
              May 27, 2020
            </span>
            <h5>
              Explore Popular Categories
            </h5>
            <a href="#" class="more-btn" tabindex="0">More Parts</a>
          </li>
          <li>
            <figure>
              <img src="<?php echo base_url('public/dmgt/images/blog-1.jpg');?>" alt="">
            </figure>
            <span>
              May 27, 2020
            </span>
            <h5>
              Explore Popular Categories
            </h5>
            <a href="#" class="more-btn" tabindex="0">More Parts</a>
          </li>
        </ul>
      </section>
    </div>

     <?=$this->section("script_content")?>

     
  <script type="text/javascript">
      $('.slider-primary').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
      });

      $('.slider-secondary').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
      });
      $('.features-slider').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
      });
      $('.mobile-categories').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: true,
        slidesToShow: 6,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 580,
            settings: {
              slidesToShow: 5,
            }
          },
        ]
      });
      $('.categories-slider').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 6,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 1600,
            settings: {
              slidesToShow: 5,
            }
          },
          {
            breakpoint: 1280,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 580,
            settings: {
              slidesToShow: 2,
            }
          },
        ]
      });
      $('.shop-brand_slider').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 6,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 1280,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
            }
          },
        ]
      });
      $('.offer-slider').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 1280,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
            }
          },
        ]
      });
      $('.blogs-slider').slick({
        dots: false,
        infinite: true,
        speed: 2000,
        arrows: false,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 1150,
            settings: {
              slidesToShow: 2,
            }
          },
        ]
      });
    </script>
    <?=$this->endSection()?>
    
<?=$this->endSection()?>