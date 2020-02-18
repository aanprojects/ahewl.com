<!DOCTYPE html>
<html lang="en">

<head>
<title>AHEW LTD. - AboutUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS Include -->
@include('inc.css');
<!-- -->

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top bg-light">
        <!-- CSS Include -->
        @include('inc.header');
        <!-- -->
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
            @include('inc.menu');

          </div>
          
         
        </div>
      </div>

    </div>
    
    </div>
    



    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>About Us</h1>
            <p class="text-white text-center">
              <a href="index.html">Home</a>
              <span class="mx-2">/</span>
              <span>About</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
              <h3 class="section-subtitle">Our Team</h3>
              <h2 class="section-title text-black mb-4">We have a <strong>Good and Expert Team</strong></h2>
            </div>
          </div>
  
          <div class="row">
          <div class="owl-carousel owl-theme">
          @foreach ($team_info as $teams)
            <div class="col-lg-8">
              <div class="person">
                <figure>
                  <img  src="/storage/team_img/{{ $teams->member_img }}" style="width:400px;height:300px;" alt="Image" class="img-fluid x">
                  <div class="social">
                    <a href="http://{{ $teams->fb_link }}" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="http://{{ $teams->twitter_link }}" target="_blank"><span class="icon-twitter"></span></a>
                    <a href="http://{{ $teams->linkedin_link }}" target="_blank"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>{{ $teams->member_name }}</h3>
                  <span class="position">{{ $teams->member_title }}</span>
                </div>
              </div>
            </div>
            @endforeach
         
            </div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
              <h3 class="section-subtitle">We're Working With</h3>
              <h2 class="section-title text-black mb-4">We Achieved <strong>Trust</strong> From World Class <strong>Company</strong></h2>
            </div>
          </div>
          <div class="row">
          <div class="owl-carousel owl-theme">
          @foreach( $company_info as $cinfo)
          <div class="col-lg-8 col-md-6 mb-lg-0">
          <div class="person">
                <figure>
                <img style="width:400px;height:150px;" alt="Image"  class="img-fluid x" src="/storage/c_logo/{{ $cinfo->c_logo }}">
                </figure>
                <div class="person-contents">
                  <h3>{{ $cinfo->c_name }}</h3>
                  <span class="position">{{ $cinfo->c_description }}</span>
                </div>
              </div>
              </div>
              @endforeach
          </div>
          </div>
        </div>
      </div>
      <div class="site-section services-1-wrap">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-8">
              <h3 class="section-subtitle">What We Do</h3>
              <h2 class="section-title mb-4 text-black">We Are Leading Industry of <strong> Engineering,Construction and Piping </strong>project in Bangladesh. We Love What We Do</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">01</span>
              <div class="service-1-icon">
                <span class="flaticon-engineer"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Professional Team</h3>
                <p>We've A Great Pool of Engireers, Planners and Project Management Professionals</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">02</span>
              <div class="service-1-icon">
                <span class="flaticon-compass"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Great Ideas</h3>
                <p>We're The Best and Comprehensive Solution Providors In Bangladesh</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">03</span>
              <div class="service-1-icon">
                <span class="flaticon-oil-platform"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Quality Building</h3>
                <p>We Feel Proud for Our Services in Engineering, Construction and Heavy Steel Projects</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-1">
              <span class="number">04</span>
              <div class="service-1-icon">
                <span class="flaticon-crane"></span>
              </div>
              <div class="service-1-content">
                <h3 class="service-heading">Quality Works</h3>
                <p>We're Committed To Our Service and Always Maintain International Standard</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END services -->

    <div class="site-section">
      <div class="block-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="images/about_1.jpg" alt="Image " class="img-fluid img-overlap">
            </div>
            <div class="col-lg-5 ml-auto">
              <h3 class="section-subtitle">Why Choose Us</h3>
              <h2 class="section-title mb-4">More than <strong>22 years of experience</strong> in industry</h2>
              <p>We're committed to ensure high quality services to our valued clients. Our goal is to work towards fulfillment of quality assurance and period in efficient manner</p>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Expert in Engineering</h4>
                    <p class="text-white">Steel Structure, Gas Pipeline, Water Pipeline and Building Construction</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Modern Design</h4>
                    <p class="text-white">Compehensive Planning with Expert Project Planner</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center">
                  <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Leading In Building Construction</h4>
                    <p class="text-white">More than capable of handling heavy steel structure</p>
                  </div>
                </div>



              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END block-2 -->


    
    
    <div class="py-5 bg-primary block-4">
      <div class="container">
        <!-- <div class="row align-items-center">
          <div class="col-lg-6">
            <h3 class="text-white">Subscribe To Newsletter</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, reprehenderit!</p>
          </div>
          <div class="col-lg-6">
            <form action="#" class="form-subscribe d-flex">
              <input type="text" class="form-control form-control-lg">
              <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
            </form>
          </div>
        </div> -->
      </div>
    </div>

    <div class="footer">
       <!-- CSS Include -->
       @include('inc.footer');
      <!-- -->
      </div>

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>
<!-- CSS Include -->
@include('inc.js')
<!-- -->

@include('sweetalert::alert')
</body>
<script>
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  autoWidth:true,
  responsive: {
    0: {
      items: 4
    },
    600: {
      items: 4
    },
    1000: {
      items: 4
    }
  }
})

</script>
</html>