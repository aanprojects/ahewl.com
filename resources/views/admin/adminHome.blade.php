<!DOCTYPE html>
<html lang="en">

<head>
  <title>AHEW LTD. - Admin Home</title>
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
              @include('inc.adminmenu');
             <!-- -->

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    

    <div class="site-section services-1-wrap">
    
    </div>
    <!-- END services -->

   
    <!-- END block-2 -->


    <div class="">
      <div class="container">
        <div class="row">
          <h2>Intro Section Details</h2>
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image Titile</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col"><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAddImg">Add</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($img_info as $images)
    <tr>
      
      <td>{{ $images->id }}</td>
      <td>{{ $images->img_title }}</td>
      <td><img style="width:100px;height:100px;" src="/storage/img_name/{{ $images->img_name }}"></td>
      <td>
      <form method="post" action="/updateStatus_Images/{{$images->id}}">
        @csrf
        @if($images->status == 1)
        <button class="btn btn-success btn-block btn-lg rounded-0" type="submit" name="state" value= "0">Active</button>
        @else
        <button class="btn btn-danger btn-block btn-lg rounded-0" type="submit" name="state" value= "1">In-Active</button>
        @endif
        </form>
      </td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEditImage_{{ $images->id }}">Edit</a><a href="/deleteImagesInfo/{{$images->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
   </tr>
    @endforeach
    
           </tbody>
          </table>
               
        </div>

  <div class="row">
          <h2>New & Update Section</h2>
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">News Titile</th>
      <th scope="col">Image</th>
      <th scope="col">News Link</th>
      <th scope="col">Status</th>
      <th scope="col"><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAdd_news">Add</a></th>
    </tr>
  </thead>
  <tbody>

    @foreach( $news_info as $news )
    <tr>
      <td> {{  $news->id }} </td>
      <td>{{  $news->news_title }}</td>
      <td>{{  $news->news_link }}</td>
      <td><img style="width:100px;height:100px;" src="/storage/news_image/{{ $news->news_img }}"></td>
      <td>
      <form method="post" action="/updateNews/{{$news->id}}">
        @csrf
        @if($news->status == 1)
        <button class="btn btn-success btn-block btn-lg rounded-0" type="submit" name="state" value= "0">Active</button>
        @else
        <button class="btn btn-danger btn-block btn-lg rounded-0" type="submit" name="state" value= "1">In-Active</button>
        @endif
        </form>

      </td>
      
      <td> <a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit_News{{ $news->id }}">Edit</a><a href="/deleteNewsInfo/{{$news->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
      </tr>
      @endforeach
   
           </tbody>
          </table>
        </div>

 <div class="row">
          <h2>Site Owner's Information</h2>
   <table class="table table-hover table-dark" id="owners_info">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col"><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAdd">Add</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($owner_info ?? '' as $owners)
    <tr>
      
      <td>{{ $owners->id }}</td>
      <td>{{ $owners->name }}</td>
      <td>{{ $owners->address }}</td>
      <td>{{ $owners->cellno }}</td>
      <td>{{ $owners->email }}</td>
      <td>{{ $owners->job_description1 }}</td>
      <td>
      <form method="post" action="/updateStatus_owner/{{$owners->id}}">
        @csrf
        @if($owners->status == 1)
        <button class="btn btn-success btn-block btn-lg rounded-0" type="submit" name="state" value= "0">Active</button>
        @else
        <button class="btn btn-danger btn-block btn-lg rounded-0" type="submit" name="state" value= "1">In-Active</button>
        @endif
        </form>
      </td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0 modalEdit" data-toggle="modal" data-target="#modalEdit_owner_{{ $owners->id }}">Edit</a><a href="/deleteOwnerInfo/{{$owners->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
     
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
          <h2>Your Projects Details</h2>
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col"><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalAddProjectDetails">Add</a></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($projectDetails_info as $PDetails)
    <tr>
      
      <td>{{ $PDetails->id }}</td>
      <td>{{ $PDetails->work_category }}</td>
      <td>{{ $PDetails->work_title }}</td>
      <td>{{ $PDetails->work_description }}</td>
      <td><img style="width:100px;height:100px;" src="/storage/project_img/{{ $PDetails->work_img }}"></td>
      <td>
      <form method="post" action="/updateStatus_PDetails/{{$PDetails->id}}">
        @csrf
        @if($PDetails->status == 1)
        <button class="btn btn-success btn-block btn-lg rounded-0" type="submit" name="state" value= "0">Active</button>
        @else
        <button class="btn btn-danger btn-block btn-lg rounded-0" type="submit" name="state" value= "1">In-Active</button>
        @endif
        </form>
      </td>
      <td><a href="" class="btn btn-primary btn-block btn-lg rounded-0" data-toggle="modal" data-target="#modalEdit_PDetails_{{$PDetails->id}}">Edit</a><a href="/deleteProjectDetailsInfo/{{$PDetails->id}}" class="btn btn-primary btn-block btn-lg rounded-0">Delete</a></td>
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
        <h4 class="modal-title w-100 font-weight-bold">Add Site Owner's Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addOwnerInfo" method="POST">
           @csrf
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
                    <textarea type="text" class="form-control"  name="o_description1" placeholder="Owner's Description*" cols="30" rows="7" required> </textarea>
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
<!-- Modal for News and Update -->
<div class="modal fade" id="modalAdd_news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add News Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addNewsInfo" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="news_title" placeholder="News Titile*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="news_link" placeholder="News Link*" required>
                  </div>
                </div>

                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="news_image" name="news_image" />
                    </div>
                  
                </div>            
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="news_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal for News and Update -->
@foreach( $news_info as $news_edit )
<div class="modal fade" id="modalEdit_News{{ $news_edit->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit News Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/editNewsInfo/{{ $news_edit->id }}" method="POST" enctype="multipart/form-data"  >
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="newsEdit_title" placeholder="News Titile*" value="{{ $news_edit->news_title }}" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="newsEdit_link" placeholder="News Link*" value="{{ $news_edit->news_link }}" required>
                  </div>
                </div>

                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="news_image" name="news_image" />
                    </div>
                  
                </div>            
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="news_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
<!-- Modal For ADD, EDIT, DELETE  for Images-->

<div class="modal fade" id="modalAddImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Intro Section Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addImageInfo" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="img_name" name="img_name" />
                    </div>
                  
                </div>

                

                <div class="row">
                  <div class="col-md-12">
                    <textarea type="text" class="form-control"  name="img_title" placeholder="Image Description*" cols="30" rows="7" required> </textarea>
                  </div>
                 
                </div>
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="images_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
@foreach ($img_info as $images_edit)
<div class="modal fade" id="modalEditImage_{{ $images_edit->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Intro Section Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
     
           <form action="/editImageInfo/{{ $images_edit->id }} " method="POST" enctype="multipart/form-data">
           @csrf
           <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="img_name" name="img_name" />
                    </div>
                  
                </div>

                

                <div class="row">
                  <div class="col-md-12">
                    <textarea type="text" class="form-control"  name="edit_img_title" placeholder="Image Description*" cols="30" rows="7" required>{{ $images_edit->img_title }} </textarea>
                  </div>
                 
                </div>
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="edit_images_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
      
    </div>
  </div>
</div>
@endforeach
@foreach ($owner_info  as $edit_owners)
<div class="modal fade" id="modalEdit_owner_{{ $edit_owners->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
           <form action="/editOwersInfo/{{ $edit_owners->id }}" method="POST">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="o_name" name="o_name" value="{{ $edit_owners->name }}" placeholder="Owner's Name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="o_address" name="o_address" value="{{ $edit_owners->address }}" placeholder="Owner's Address*" required>
                  </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="o_cellno" name="o_cellno" value="{{ $edit_owners->cellno }}" placeholder="Owner's Phone number" maxlength="11" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="o_email" name="o_email" value="{{ $edit_owners->email }}" placeholder="Owner's email*" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                  <textarea type="text" class="form-control"  name="o_description1" placeholder="Owner's Description*" cols="30" rows="7" required>{{ $edit_owners->job_description1 }} </textarea>
                  </div>
                 
                </div>
                
             
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-6 align-self-end">
                    <input type="submit" name="edit_ownerinfo_submit" class="btn btn-primary btn-block btn-lg rounded-0 ownerEdit_submit" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
<!-- END OF  Modal For ADD, EDIT, DELETE -->

<!-- Modal For ADD, EDIT, DELETE  For Your Project Details-->

<div class="modal fade" id="modalAddProjectDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Project's Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/addProjectDetailsInfo" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="category" name="category" placeholder="Project Category*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Project Title*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea type="text" class="form-control"  id="description" name="description" placeholder="Project Description*" cols="30" rows="7" required> </textarea>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="project_img" name="project_img" />
                    </div>
                </div>
         </div>
      <div class="modal-footer d-flex justify-content-center">
                <div class="col-md-6 align-self-end">
                    <input type="submit" name="details_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
                  </div>
      </div>
      </form>
    </div>
  </div>
</div>

@foreach ($projectDetails_info as $PDetails_edit)
<div class="modal fade" id="modalEdit_PDetails_{{$PDetails_edit->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Project's Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
           <form action="/editProjectDetailsInfo/{{$PDetails_edit->id}}" method="POST" enctype="multipart/form-data">
           @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="category" Value="{{$PDetails_edit->work_category}}" placeholder="Project Category*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="title" Value="{{$PDetails_edit->work_title}}" placeholder="Project Title*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea type="text" class="form-control"  name="description"  placeholder="Project Description*" cols="30" rows="7" required>{{$PDetails_edit->work_description}}</textarea>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                  <input type="file" class="form-control" id="project_img" name="project_img" value="{{$PDetails_edit->work_img}}" />
                    </div>
                </div>
         </div>
      <div class="modal-footer d-flex justify-content-center">
                <div class="col-md-6 align-self-end">
                    <input type="submit" name="edit_details_submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Submit Information">
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
<script>
$(document).ready(function(){
  $(document).on('click','.modalEdit', function() {
    var $td= $(this).closest('tr').children('td');
    var id= $td.eq(0).text();
    var company= $td.eq(1).text();
    var address= $td.eq(2).text();
    var mobile= $td.eq(3).text();
    var email= $td.eq(4).text();
    var description= $td.eq(5).text();


   //console.log(dataString);
  //  var id = id;
  //  var c_name = $('#o_name').val(company);
  //  var c_address = $('#o_address').val(address);
  //  var c_cellno = $('#o_cellno').val(mobile);
  //  var c_email = $('#o_email').val(email);
  //  var c_description = $('#o_description1').val(description);
  //  var rejectgrant = $(document).find('input[name="o_name"]').val();
  //  var dataString = 'id='+id + '&company_name='+ c_name + '&company_address='+ c_address + '&mobile='+ c_cellno + '&email='+ c_email + '&description='+ c_description;
  //  console.log(c_cellno);
  // $(document).one('click','.ownerEdit_submit', function() { 
  //  // var x = 
  //  console.log(rejectgrant);
  // });
});
});

</script>
</html>