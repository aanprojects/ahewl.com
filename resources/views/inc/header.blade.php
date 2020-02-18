    <?php 

        $headerQuery = DB::select('SELECT * FROM tbl_owner');

    ?>

    <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="/">
              <img src="images/logo1.png" style="width:250px;" alt="Image" class="img-fluid"> 
                <!-- <h3 class="text-primary">Al Amin Hashemi Engineering Works LTD.</h3> -->
            </a>
          </div>
          <div class="col-lg-4 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-placeholder text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">{{ $headerQuery[0]->name}}</span>
                <span class="caption-text">{{ $headerQuery[0]->address}}</span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-call text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">{{ $headerQuery[0]->cellno}}</span>
                <span class="caption-text">Mobile</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-email text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">{{ $headerQuery[0]->email}}</span>
                <span class="caption-text">Chittagong</span>
              </div>
            </div>
          </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>