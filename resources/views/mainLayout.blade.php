<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield("title")</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JoeBLog main styles -->
	<link rel="stylesheet" href="assets/css/joeblog.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.svg" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">                     
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create_posts">Create Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all_posts">All Posts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/gaming_posts">Gaming</a>
                            <a class="dropdown-item" href="/movies_posts">Movies</a>
                            <a class="dropdown-item" href="/politics_posts">Politics</a>
                        </div>
                    </li>

                </ul>
         
                </div>
                <nav class="navbar">
                    
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link mx-2"href="/login">Login</a>
                    </li>
                    </ul>
                </nav>
            </div>

        </div>
    </nav>
    <!-- End Of Page Second Navigation -->
    
   <!-- Varius Page content will laod here  -->
   @yield("CenterContent");

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/logo.svg" alt="" class="logo">
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <div class="socials">
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-facebook pr-1"></i> 123,345</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-twitter pr-1"></i> 321,534</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-pinterest-alt pr-1"></i> 543,312</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-instagram pr-1"></i> 123,023</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-youtube pr-1"></i> 231,043</a>
                    </div>
                </div>  
            </div>
            <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>document.write(new Date().getFullYear())</script>, JoeBlog Created By <a href="https://www.devcrud.com" class="text-muted font-weight-bold" target="_blank">DevCrud.</a>  All rights reserved </p> 
        </div>      
    </footer>
    <!-- End of Page Footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="assets/js/joeblog.js"></script>

</body>
</html>
f