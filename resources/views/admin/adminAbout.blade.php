<!DOCTYPE html>
<html lang="en">

<head>
  <title>AHEW LTD. - Admin AboutUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS Include -->
@include('inc.css')
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
      @include('inc.header')
        <!-- -->


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto">
           
             <!-- CSS Include -->
              @include('inc.adminmenu');
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
        
      </div> -->
    </div>
    <!-- END services -->

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
      <h2 style="text-align:left;">Company's Team Information</h2>      {{ Auth::user()->name }}


        <div class="row table-responsive">
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Message</th>
      <th scope="col">FaceBook</th>
      <th scope="col">Twitter</th>
      <th scope="col">LinkedIn</th>
      <th scope="col">photo</th>
      <th scope="col">Status</th>
      <th scope="col"><a href=""  class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAdd">Add</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($team_info as $teams)
    <tr>
      
      <td>{{ $teams->id }}</td>
      <td>{{ $teams->member_name }}</td>
      <td>{{ $teams->member_title }}</td>
      <td>{{ $teams->messages }}</td>
      <td>{{ $teams->fb_link }}</td>
      <td>{{ $teams->twitter_link }}</td>
      <td>{{ $teams->linkedin_link }}</td>
      <td><img style="width:100px;height:100px;" src="/storage/team_img/{{ $teams->member_img }}"></td>
      <td>
      <form method="post" action="/updateStatus_team/{{$teams->id}}">
        @csrf
        @if($teams->status == 1)
        <button class="btn btn-success btn-block btn-lg rounded-0" type="submit" name="state" value= "0">Active</button>
        @else
        <button class="btn btn-danger btn-block btn-lg rounded-0" type="submit" name="state" value= "1">In-Active</button>
        @endif
        </form>
      </td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit_team{{ $teams->id }}">Edit</a><a href="/deleteTeamInfo/{{$teams->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
     
    </tr>
    @endforeach
    
           </tbody>
          </table>
               
        </div>
      </div>
    </div>
    <div class="">
      <div class="container">
      <h2 style="text-align:left;">Company's Manpower Information</h2>

        <div class="row table-responsive">
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Designtion</th>
      <th scope="col">Quantity</th>
      <th scope="col"><a href=""  class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAdd_mnpower">Add</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mnList as $manpower)
    <tr>
      
      <td>{{ $manpower->id }}</td>
      <td>{{ $manpower->designation }}</td>
      <td>{{ $manpower->quantity }}</td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit_manpower{{ $manpower->id }}">Edit</a><a href="/deleteManpowerInfo/{{$manpower->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
     
    </tr>
    @endforeach
    
           </tbody>
          </table>
               
        </div>
      </div>
    </div>
    <div class="">
      <div class="container">
      <h2 style="text-align:left;">Company's Equipment Information</h2>

        <div class="row table-responsive">
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tools Name</th>
      <th scope="col">Quantity</th>
      <th scope="col"><a href=""  class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAdd_equipList">Add</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($eqList as $equipment)
    <tr>
      
      <td>{{ $equipment->id }}</td>
      <td>{{ $equipment->equip_name }}</td>
      <td>{{ $equipment->quantity }}</td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit_eqpList{{ $equipment->id }}">Edit</a><a href="/deleteEquipmentInfo/{{$equipment->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
     
    </tr>
    @endforeach
    
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
        <h4 class="modal-title w-100 font-weight-bold">Add Company's Team Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addTeamInfo" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="team_name" placeholder="Member Name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="team_title" placeholder="Member Title*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="team_fb" placeholder="FaceBook Link*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="team_twitter" placeholder="Twitter Link*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="team_linkedin" placeholder="LinkedIn Link*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea type="text" class="form-control"  name="team_messages" placeholder="Member Messages*" cols="30" rows="7" required> </textarea>
                  </div>
                 
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="team_img" name="team_img" />
                    </div>
                </div>
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="team_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>

@foreach($team_info as $tinfo)
<div class="modal fade" id="modalEdit_team{{ $tinfo->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
      <form action="/editTeamInfo/{{ $tinfo->id }}" method="POST" enctype="multipart/form-data">
      @csrf
           <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="teamEdit_name" placeholder="Member Name*" value="{{ $tinfo->member_name }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="teamEdit_title" placeholder="Member Title*" value="{{ $tinfo->member_title }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="teamEdit_fb" placeholder="FaceBook Link*" value="{{ $tinfo->fb_link }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="teamEdit_twitter" placeholder="Twitter Link*" value="{{ $tinfo->twitter_link }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="teamEdit_linkedin" placeholder="LinkedIn Link*" value="{{ $tinfo->linkedin_link }}" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea type="text" class="form-control"  name="teamEdit_messages" placeholder="Member Messages*" cols="30" rows="7" required>{{ $tinfo->messages }} </textarea>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="team_img" name="team_img" />
                    </div>
                </div>
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="teamEdit_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
<!-- END OF  Modal For ADD, EDIT, DELETE -->

<div class="modal fade" id="modalAdd_mnpower" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Manpower Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addManpowerInfo" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="mn_designation" placeholder="Designation*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="mn_quantity" placeholder="Quanity*" required>
                  </div>
                </div>
                
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="mnpower_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
 @foreach($mnList as $manpower)
 <div class="modal fade" id="modalEdit_manpower{{ $manpower->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Manpower Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/editManpowerInfo/{{ $manpower->id }}" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="mnEdit_designation" placeholder="Designation*" value="{{ $manpower->designation }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="mnEdit_quantity" placeholder="Quanity*" value="{{ $manpower->quantity }}" required>
                  </div>
                </div>
                
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="mnpowerEdit_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
 @endforeach

 <div class="modal fade" id="modalAdd_equipList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Equipment Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addEquipmentInfo" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="eq_name" placeholder="Name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="eq_quantity" placeholder="Quanity*" required>
                  </div>
                </div>
                
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="eqp_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
 @foreach($eqList as $eqpList)
 <div class="modal fade" id="modalEdit_eqpList{{ $eqpList->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Equipment Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/editEquipmentInfo/{{ $eqpList->id }}" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="eEdit_equipName" placeholder="Name*" value="{{ $eqpList->equip_name }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="number" class="form-control" name="eEdit_quantity" placeholder="Quanity*" value="{{ $eqpList->quantity }}" required>
                  </div>
                </div>
                
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="eqpEdit_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
 @endforeach
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