<?=$this->extend("frontend/base")?>



    <section class="m-hide">
      <div class="sub-banner" style="background: url(<?php echo base_url('public/dmgt/images/sub-banner.jpg');?>);">
        <div class="container d-flex align-items-center justify-content-center h-100">
          <h2>
            Deck & Hull
          </h2>
        </div>
      </div>
    </section>
    <section class="breadcrumb-wrapper m-hide">
      <nav aria-label="breadcrumb">
        <ol class="container breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </section>
    <section class="container">
      <div class="mobile-filter">
        <div class="mobile-filter-sort" id="mobile-filter-sort">
          Sort By :
          <button class="filter-sorter">Relvence</button>
          <button class="filter-sorter">Price - Low To High</button>
          <button class="filter-sorter">Price - High - Low</button>
        </div>
        <div class="">
          <a href="#" class="mobile-filter-filter">
            Filter
          </a>
        </div>
      </div>
      <div class="mobile-filter-content">

        <div class="filter-content_header">
          <span class="material-icons mobile-filter-content_close">
            cancel
          </span>
        </div>

        <div class="filter-wrapper">
          <a class="mt-4 multiCollapse d-flex justify-content-between align-items-center " data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">
            <h6>Categories</h6>
          </a>
          <div class="multi-collapse collapse show" id="multiCollapseExample1" style="">
            <div class="card card-body border-0">
              <div class="collapse-list">
                <button class="btn category-active">
                  category 1
                </button>
                <button class="btn">
                  category 2
                </button>
                <button class="btn">
                  category 3
                </button>
                <button class="btn">
                  category 4
                </button>
                <button class="btn">
                  category 5
                </button>
              </div>
            </div>
          </div>
          <hr class="black">

          <a class="multiCollapse d-flex justify-content-between align-items-center" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="true" aria-controls="multiCollapseExample2">
            <h6>Brand</h6>
          </a>
          <div class="multi-collapse collapse show" id="multiCollapseExample2" style="">
            <div class="card card-body border-0">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-1.0">
                <label class="form-check-label" for="brand-1.0">
                  Brand 1
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-2.0">
                <label class="form-check-label" for="brand-2.0">
                  Brand 2
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-3.0">
                <label class="form-check-label" for="brand-3.0">
                  Brand 3
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-4.0">
                <label class="form-check-label" for="brand-4.0">
                  Brand 4
                </label>
              </div>
            </div>
          </div>
          <hr class="black">

          <a class="multiCollapse d-flex justify-content-between align-items-center" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="true" aria-controls="multiCollapseExample3">
            <h6>Price Range</h6>
          </a>
          <div class="multi-collapse collapse show" id="multiCollapseExample3" style="">
            <div class="card card-body border-0 pl-3">
              <div class="filter">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <label class="filter__label">
                    <input type="text" class="filter__input-2">
                  </label>  
                  -
                  <label class="filter__label">
                    <input type="text" class="filter__input-2">
                  </label>
                </div>
                <div id="sliderPrice-2" class="sliderPrice filter__slider-price" data-min="20" data-max="100-" data-step="1"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="web-filter-sort" id="web-filter-sort">
        Sort By :
        <button class="filter-sorter">Relvence</button>
        <button class="filter-sorter">Price - Low To High</button>
        <button class="filter-sorter">Price - High - Low</button>
      </div>
      <div class="row">
        <div class="col-md-3 md-hide filter-wrapper">
          <a class="mt-4 multiCollapse d-flex justify-content-between align-items-center " data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">
            <h6>Categories</h6>
          </a>
          <div class="multi-collapse collapse show" id="multiCollapseExample1" style="">
            <div class="card card-body border-0">
              <div class="collapse-list">
                <button class="btn category-active">
                  category 1
                </button>
                <button class="btn">
                  category 2
                </button>
                <button class="btn">
                  category 3
                </button>
                <button class="btn">
                  category 4
                </button>
                <button class="btn">
                  category 5
                </button>
              </div>
            </div>
          </div>
          <hr class="black">

          <a class="multiCollapse d-flex justify-content-between align-items-center" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="true" aria-controls="multiCollapseExample2">
            <h6>Brand</h6>
          </a>
          <div class="multi-collapse collapse show" id="multiCollapseExample2" style="">
            <div class="card card-body border-0">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-1">
                <label class="form-check-label" for="brand-1">
                  Brand 1
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-2">
                <label class="form-check-label" for="brand-2">
                  Brand 2
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-3">
                <label class="form-check-label" for="brand-3">
                  Brand 3
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="brand-4">
                <label class="form-check-label" for="brand-4">
                  Brand 4
                </label>
              </div>
            </div>
          </div>

          <hr class="black">

          <a class="multiCollapse d-flex justify-content-between align-items-center" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="true" aria-controls="multiCollapseExample3">
            <h6>Price Range</h6>
          </a>
          <div class="multi-collapse collapse show" id="multiCollapseExample3" style="">
            <div class="card card-body border-0">
              <div class="filter">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <label class="filter__label">
                    <input type="text" class="filter__input">
                  </label>  
                  -
                  <label class="filter__label">
                    <input type="text" class="filter__input">
                  </label>
                </div>
                <div id="sliderPrice" class="filter__slider-price" data-min="20" data-max="100-" data-step="1"></div>
              </div>
            </div>
          </div>  
        </div>
        <div class="col-lg-12 col-xl-9">
          <ul class="categories-slider sec-padding clearence-sale_slider product-listing">
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
        </div>
      </div>
      <section class="shop-brand primary-padding_bottom primary-padding_top">
        <h3 class="text-center">Explore Popular Categories</h3>
        <p class="text-center mb-4">Our Entire Product Range</p>
        <ul class="shop-brand_slider sec-padding">
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
      </section>
    </section>    

  
  <?=$this->section("script_content")?>
     <!-- price range start -->
  
     <script>
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
              slidesToShow: 2,
            }
          },
        ]
      });
    </script>

    <!-- price range start -->
     
      <script>
        const slider = document.getElementById('sliderPrice');
        const rangeMin = parseInt(slider.dataset.min);
        const rangeMax = parseInt(slider.dataset.max);
        const step = parseInt(slider.dataset.step);
        const filterInputs = document.querySelectorAll('input.filter__input');

        noUiSlider.create(slider, {
            start: [rangeMin, rangeMax],
            connect: true,
            step: step,
            range: {
                'min': rangeMin,
                'max': rangeMax
            },
          
            // make numbers whole
            format: {
              to: value => value,
              from: value => value
            }
        });

        // bind inputs with noUiSlider 
        slider.noUiSlider.on('update', (values, handle) => { 
          filterInputs[handle].value = values[handle]; 
        });

        filterInputs.forEach((input, indexInput) => { 
          input.addEventListener('change', () => {
            slider.noUiSlider.setHandle(indexInput, input.value);
          })
        });
      </script>
      <script>
        const slider = document.getElementById('sliderPrice-2');
        const rangeMin = parseInt(slider.dataset.min);
        const rangeMax = parseInt(slider.dataset.max);
        const step = parseInt(slider.dataset.step);
        const filterInputs = document.querySelectorAll('input.filter__input-2');

        noUiSlider.create(slider, {
            start: [rangeMin, rangeMax],
            connect: true,
            step: step,
            range: {
                'min': rangeMin,
                'max': rangeMax
            },
          
            // make numbers whole
            format: {
              to: value => value,
              from: value => value
            }
        });

        // bind inputs with noUiSlider 
        slider.noUiSlider.on('update', (values, handle) => { 
          filterInputs[handle].value = values[handle]; 
        });

        filterInputs.forEach((input, indexInput) => { 
          input.addEventListener('change', () => {
            slider.noUiSlider.setHandle(indexInput, input.value);
          })
        });
      </script>
    <!-- price range end -->

    <!-- filter section start -->
    <script>
      $('.mobile-filter-filter').click(function() {
          $('.mobile-filter-content').addClass("mobile-filter-content-active");
      });
      $('.mobile-filter-content_close').click(function() {
          $('.mobile-filter-content').removeClass("mobile-filter-content-active");
      });    
    </script>
    <!-- filter section start -->

    <?=$this->endSection()?>
 <?=$this->endSection()?>

