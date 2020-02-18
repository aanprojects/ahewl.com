<!DOCTYPE html>
<html lang="en">

<head>
  <title>Engineers &mdash; Website Template by Colorlib</title>
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
    



    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>Our Projects</h1>
            <p class="text-white text-center">
              <a href="index.html">Home</a>
              <span class="mx-2">/</span>
              <span>Projects</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
            @foreach($show_projectDetails as $pdetails)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="project-item">
                        <div class="project-item-contents">
                            <a href="project-single.html">
                            <span class="project-item-category">{{ $pdetails->work_category }}</span>
                            <h2 class="project-item-title">
                            {{ $pdetails->work_title }}
                            </h2>
                            </a>
                        </div>
                        <img src="/storage/project_img/{{ $pdetails->work_img }}" alt="Image" class="img-fluid">
                    </div>
                  </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 mb-5 text-left">
        <h3 class="section-subtitle">We're Collaborating With Renowned National And International Companies</h3>
        <h2 class="section-title text-black mb-4">Current Projects</h2>
      </div>
</div>
    <div class="">
      <div class="container">
          @foreach($company as $p_info)
          <h2 style="text-align:left;">{{ $p_info->c_name }}</h2>
         
          <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Project Name</th>
                <th scope="col">Conract Ref. No.</th>
                <th scope="col">Date of Contract</th>
                <th scope="col">Name of Work</th>
                <th scope="col">Contract Value (BDT.)</th>
              </tr>
            </thead>
            <tbody>
              @foreach($project_info as $info)
              @if ($p_info->id == $info->fk_cid)
              <tr>
                <td>{{ $info->id }}</td>
                <td>{{ $info->p_name }}</td>
                <td>{{ $info->p_contract_ref }}</td>
                <td>{{ $info->p_dateofcontract }}</td>
                <td>{{ $info->p_nameofwork }}</td>
                <td>{{ number_format($info->p_contract_value, 2) }}</td>

              </tr>
              @endif
              @endforeach
                     </tbody>
                    </table>
   
          @endforeach
        
      </div>
    </div>   
  </div>
</div>  
            
            
    
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

</html>