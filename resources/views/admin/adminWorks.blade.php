<!DOCTYPE html>
<html lang="en">

<head>
  <title>AHEW LTD. - Admin Projects</title>
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
    
  <!--   <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>We Are <strong>Leading</strong> Industry of Engineers</h1>
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

    </div> -->
    <!-- END slider -->
    

    <div class="site-section services-1-wrap">
     <!--  <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-5">
              <h3 class="section-subtitle">What We Do</h3>
              <h2 class="section-title mb-4 text-black">We Are <strong>Leading Industry</strong> of Engineering. We Love What We Do</h2>
          </div>
        </div>
        
      </div> 
      
      END services -->
    </div>
     

   <!--  <div class="site-section">
      <div class="block-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="images/about_1.jpg" alt="Image " class="img-fluid img-overlap">
            </div>
            <div class="col-lg-5 ml-auto">
              <h3 class="section-subtitle">Why Choose Us</h3>
              <h2 class="section-title mb-4">More than <strong>50 year experience</strong> in industry</h2>
              <p>Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima nostrum perspiciatis error consequatur sit nulla.</p>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Expert in Builings</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Modern Design</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center">
                  <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Leading In Floor Planning</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>



              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>  -->
    <!-- END block-2 -->


    <div class="">
      <div class="container">
      <div class="row">
          <h2>Company's Information</h2>
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Description</th>
      <th scope="col">Logo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($company_info as $c_info)
    <tr>
      <td>{{ $c_info-> id }}</td>
      <td>{{ $c_info-> c_name }}</td>
      <td>{{ $c_info-> c_description }}</td>
      <td><img style="width:100px;height:100px;" src="/storage/c_logo/{{ $c_info->c_logo }}"></td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAdd">Add</a><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit">Edit</a><a href="/deleteCompanyInfo/{{$c_info->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
     
    </tr>
  @endforeach
    
           </tbody>
          </table>
               
        </div>
      </div>
    </div>

    <div class="">
      <div class="container">
      <div class="row">
          <h2>Project's Information</h2>
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Project Name</th>
      <th scope="col">Conract Ref. No.</th>
      <th scope="col">Date of Contract</th>
      <th scope="col">Name of Work</th>
      <th scope="col">Contract Value</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>xxx</td>
      <td>xxxx</td>
      <td>xxxxx</td>
      <td>xxxxx</td>
      <td>xxxx</td>
      <td>xxxxx</td>
      <td>xxxxx</td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAddProject">Add</a><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit">Edit</a><a href="/deleteCompanyInfo/{{$c_info->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
     
    </tr>
  
    
           </tbody>
          </table>
               
        </div>
      </div>
    </div>

<!-- Modal For ADD, EDIT, DELETE -->

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Company Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addCompanyInfo"  method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="c_name" placeholder="Company Name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="c_description" placeholder="Company  Description*" required>
                  </div>
                  
                </div>

            
                <div class="col-md-12">
                  <input type="file" class="form-control" id="c_image" name="c_image" />
                    </div>
               
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="company_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!--  -->
<div class="modal fade" id="modalAddProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Project Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addProjectInfo"  method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                  <select class="form-control">
                  @foreach($company_info as $ddown)
                      <option value="{{ $ddown->id }}">{{ $ddown->c_name }}</option>
                      @endforeach
                    </select>                   
                    </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="p_name" placeholder="Project Name*" required>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="p_ref" placeholder="Ref. No*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="date" class="form-control" name="p_doc" placeholder="Date of Contract*" required>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="p_nameOfWork" placeholder="Name Of Work*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="p_contractValue" placeholder="Contract Value*" required>
                  </div>
                  
                </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="company_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Site Owner's Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="#">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="o_name" placeholder="Owner's Name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="o_address" placeholder="Owner's Address*" required>
                  </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="o_cellno" placeholder="Owner's Phone number" maxlength="11" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="o_email" placeholder="Owner's email*" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <textarea name="" class="form-control" id="" name="0_description1" placeholder="Owner's Description*" cols="30" rows="7" required></textarea>
                  </div>
                 
                </div>
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="owner_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- END OF  Modal For ADD, EDIT, DELETE -->


    <!-- <div class="site-section block-3">
      <div class="container">
        
        <div class="mb-5">
          <h3 class="section-subtitle">Our Projects</h3>
          <h2 class="section-title mb-4">Explore Our <strong>Recent Projects</strong></h2>
        </div>

        <div class="projects-carousel-wrap">
          <div class="owl-carousel owl-slide-3">
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category">Factory</span>
                  <h2 class="project-item-title">
                    Building Refinery 
                  </h2>
                </a>
              </div>
              <img src="images/works_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category">Factory</span>
                  <h2 class="project-item-title">
                    Building Refinery 
                  </h2>
                </a>
              </div>
              <img src="images/works_2.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category">Factory</span>
                  <h2 class="project-item-title">
                    Building Refinery 
                  </h2>
                </a>
              </div>
              <img src="images/works_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="project-item">
              <div class="project-item-contents">
                <a href="#">
                  <span class="project-item-category">Factory</span>
                  <h2 class="project-item-title">
                    Building Refinery 
                  </h2>
                </a>
              </div>
              <img src="images/works_4.jpg" alt="Image" class="img-fluid">
            </div>


          </div>
        </div>

      </div>
    </div> -->

    

   <!--  <div class="site-section testimonial-wrap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 mb-5 text-center">
            <h3 class="section-subtitle">Testimonial</h3>
            <h2 class="section-title text-black mb-4">What People Says</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="testimonial">
              <img src="images/person_3_sq.jpg" alt="">
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
              </blockquote>
              <p class="client-name">Matt Keygen</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="testimonial">
              <img src="images/person_4_sq.jpg" alt="">
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
              </blockquote>
              <p class="client-name">Matt Keygen</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

   

   <!--  <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 mb-5 text-left">
            <h3 class="section-subtitle">Blog</h3>
            <h2 class="section-title text-black mb-4">News &amp; Updates</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="blog-entry-contents">
                <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="blog-entry-contents">
                <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="blog-entry-contents">
                <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="py-5 bg-primary block-4">
      <div class="container">
        <div class="row align-items-center">
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
        </div>
      </div>
    </div> -->

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