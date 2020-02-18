<!DOCTYPE html>
<html lang="en">

<head>
  <title>AHEWL &mdash; Assets</title>
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
            <h3 class="section-subtitle">Our Assets</h3>
            <h2 class="section-title text-black mb-4">Manpower &amp; Equipment</h2>
          </div>
        </div>
        
        <div class="">
            <div class="container">
                <h2 style="text-align:center;">Manpower Information</h2>
              <div class="row">
         <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($mnList as $manpower)
          <tr>
            
            <td>{{ $manpower->id }}</td>
            <td>{{ $manpower->designation }}</td>
            <td>{{ $manpower->quantity }}</td>
            
          </tr>
          @endforeach
          
                 </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="">
            <div class="container">
            <h2 style="text-align:center;">Equipment Information</h2>
      
              <div class="row">
         <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($eqList as $eqipment)
          <tr>
            
            <td>{{ $eqipment->id }}</td>
            <td>{{ $eqipment->equip_name }}</td>
            <td>{{ $eqipment->quantity }}</td>
            
          </tr>
          @endforeach
          
                 </tbody>
                </table>
            </div>
        </div>
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
  
@include('sweetalert::alert')
</body>

</html>