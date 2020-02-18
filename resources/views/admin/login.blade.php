<!DOCTYPE html>
<html lang="en">

<head>
    <title>AHEW LTD. - Admin AboutUS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Include -->
    @include('inc.css')
    <!-- -->
    <style>
        previous demo Best jQuery codelab bootstrap login form style : demo 28 Login Form E-mail Address Password Forgot Password? Don't have an account yet? sign up
HTML (Icon Fonts Used : Fontawesome & CSS Framwork: Bootstrap) 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 <div class="form-bg"><div class="container"><div class="row"><div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6"><form class="form-horizontal"><div class="form-icon"><i class="fa fa-user-tie"></i></div><h3 class="title">Login Form</h3><div class="form-group"><label>E-mail Address</label><input class="form-control user"type="email"placeholder="Email"></div><div class="form-group"><label>Password</label><input class="form-control password"type="password"placeholder="password"></div><span class="forgot-password"><a href="#">Forgot Password?</a></span><button class="btn signin">Login</button><span class="signup">Don't have an account yet? <a href="">sign up</a></span>
</form></div></div></div></div>CSS (Fonts required: Quicksand.) 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49 50 51 52 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 76 77 78 79 80 81 82 83 84 85 86 87 88 89 90 .form-horizontal {
            background: linear-gradient(50deg, rgba(0, 0, 0, 0.05) 49%, rgba(0, 0, 0, 0.08) 50%);
            font-family: 'Quicksand', sans-serif;
            width: 100%;
            padding: 30px 15px 25px;
            border-radius: 30px 0 30px 0;
            box-shadow: 4px 4px 0 #fff, 6px 6px 0 #e7e7e7, -4px -4px 0 #fff, -6px -6px 0 #e7e7e7;
        }

        .form-horizontal .form-icon {
            color: #fff;
            background: linear-gradient(45deg, #00a8ff 49%, #0097e6 50%);
            font-size: 55px;
            text-align: center;
            line-height: 80px;
            height: 80px;
            width: 80px;
            margin: 0 auto 15px;
            border-radius: 25px;
        }

        .form-horizontal .title {
            color: #333;
            font-size: 30px;
            font-weight: 700;
            text-transform: capitalize;
            text-align: center;
            margin: 0 0 30px 0;
        }

        .form-horizontal .form-group {
            margin: 0 0 15px;
        }

        .form-horizontal label {
            font-size: 15px;
        }

        .form-horizontal .form-control {
            color: #0097e6;
            background-color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            letter-spacing: 1px;
            height: 40px;
            padding: 2px 15px 2px 15px;
            box-shadow: 0 0 5px -3px #333;
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .form-horizontal .form-control:focus {
            box-shadow: 0 0 5px -1px #0097e6;
            border: none;
        }

        .form-horizontal .form-control::placeholder {
            color: rgba(0, 0, 0, 0.3);
            font-size: 14px;
        }

        .form-horizontal .forgot-password {
            display: inline-block;
            width: calc(100% - 105px);
        }

        .form-horizontal .forgot-password a {
            color: #333;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .form-horizontal .forgot-password a:hover {
            color: #0097e6;
        }

        .form-horizontal .btn {
            color: #fff;
            background-color: #0097e6;
            font-size: 20px;
            width: 100px;
            padding: 5px 20px;
            margin: 0 0 15px 0;
            border-radius: 1px;
            border: none;
            border-radius: 20px;
            display: inline-block;
            transition: all 0.3s;
        }

        .form-horizontal .btn:hover {
            background-color: #000;
            box-shadow: 2px 2px 5px #333;
        }

        .form-horizontal .signup {
            color: #606060;
            font-size: 14px;
            text-align: center;
            display: block;
        }

        .form-horizontal .signup a {
            color: 0097e6;
            font-weight: 600;
            text-transform: capitalize;
            transition: all 0.3s;
        }

        .form-horizontal .signup a:hover {
            color: #000;
        }

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
            @include('inc.header')
            <!-- -->



            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mr-auto">

                            <!-- CSS Include -->
                            <!-- @include('inc.menu') -->
                            <!-- -->

                        </div>

                    </div>
                </div>

            </div>

        </div>


        <div class="site-section bg-light">


                <div class="form-bg" >
                    <div class="container justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-offset-6 col-md-6 col-sm-offset-3 col-sm-6">
                                <form class="form-horizontal" action="/loginsuccess" method="post">
                                 @csrf
                                    <div class="form-icon"><i class="fa fa-user-tie"></i></div>
                                    <h3 class="title">Login Form</h3>
                                    <div class="form-group">
                                        <label>E-mail Address</label>
                                        <input class="form-control user" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control password" type="password" name="password" placeholder="password">
                                    </div>
                                    <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                                    <button type="LoginSubmit" name="lgin" class="btn signin">Login</button>
                                    <!-- <span class="signup">Don't have an account yet? <a href="">sign up</a></span> -->
                                </form>
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
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15" /></svg></div>
    <!-- CSS Include -->
    @include('inc.js')
    <!-- -->

    @include('sweetalert::alert')
    </div>
</body>

</html>
