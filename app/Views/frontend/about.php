<?=$this->extend("frontend/base")?>

<?=$this->section("content")?>

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
    <h2>About Content</h2>
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

