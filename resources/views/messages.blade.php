<!DOCTYPE html>
<html lang="en">

<head>
  <title>AHEWL &mdash; Assets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
<!-- CSS Include -->
@include('inc.css');
<!-- -->


<style>
.certs{
    padding: 35px 50px;
    margin: 0 20px 30px;
    border-radius: 0 70px 0 70px;
    border: 5px solid red;
    border-left: none;
    border-right: none;
    text-align: center;
}
.testimonial{
    padding: 35px 50px;
    margin: 0 20px 30px;
    border-radius: 0 70px 0 70px;
    border: 5px solid #ffc33c;
    border-left: none;
    border-right: none;
    text-align: center;
}
.testimonial .pic{
    display: inline-block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 20px;
    overflow: hidden;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .title{
    display: block;
    margin: 0 0 7px 0;
    font-size: 20px;
    font-weight: 600;
    color: #ffc33c;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.testimonial .post{
    display: block;
    font-size: 15px;
    color: #fff;
    text-transform: capitalize;
    margin-bottom: 20px;
}
.testimonial .description{
    font-size: 16px;
    color: #fff;
    line-height: 30px;
}
.owl-theme .owl-controls{ margin-top: 0; }
.owl-theme .owl-controls .owl-page span{
    background: #fff;
    opacity: 0.8;
    transition: all 0.3s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span{ background: #ffc33c; }
</style>
  



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
           
             <!-- CSS Include -->
              @include('inc.menu');
             <!-- -->

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>We Are <strong>Leading</strong> Industry of Engineering</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <span class="d-block"></span>
              <h1>Experts and High Quality Works</h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->
    

   
    <!-- END services -->

   
    <!-- END block-2 -->


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 mb-5 text-left">
            <h3 class="section-subtitle">Messages From Executives</h3>
            <h2 class="section-title text-black mb-4">From the Diary of <strong>Executives</strong> </h2>
          </div>
        </div>
        <div>
        <div class="col-md-12" style="text-align:center;">
                <div id="testimonial-slider" class="owl-carousel">
                @foreach($testomonial as $testomony)

                    <div class="testimonial">
                        <div class="pic">
                            <img src="/storage/team_img/{{ $testomony->member_img }}">
                        </div>
                        <h3 class="title">{{ $testomony->member_name }}</h3>
                        <span class="post text-black">{{ $testomony->member_title }}</span>
                        <h4 class="description justify-content-center text-black">{{ $testomony->messages }}</h4>
                        <hr>
                        <!-- <h5 class="text-black" style="text-align:right"> Singnature</h5> -->

                    </div>
                    @endforeach
                    <!-- <div class="testimonial">
                        <div class="pic">
                            <img src="images/person_1.jpg">
                        </div>
                        <h3 class="title">Person 2</h3>
                        <span class="post">Board Member</span>
                        <p class="description text-black">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad asperiores at atque culpa dolores eaque fugiat hic illo ipsam ipsum minima modi necessitatibus nemo officia, omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                        </p>
                    </div> -->
                </div>
            </div>
</div>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 mb-5 text-left">
            <h3 class="section-subtitle">Our Achievmets</h3>
            <h2 class="section-title text-black mb-4">From World Class <strong>Company</strong></h2>
          </div>
        </div>
        <div class="col-lg-12 certs" style="text-align:center;">
        <img  src="images/kobuta_cert.jpg" style="width:750px;height:800px;" alt="Image" class="img-fluid x">
        </div>
        

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
@include('inc.js');
<!-- -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 
@include('sweetalert::alert')
 
 
</body>
<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1000,1],
            itemsDesktopSmall:[979,1],
            itemsTablet:[768,1],
            pagination:true,
            transitionStyle:"backSlide",
            autoPlay:true
        });
    });
 </script>
</html>