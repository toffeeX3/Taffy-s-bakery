<?php

$site_name = get_Settings_value('_site_name');
$site_description = get_Settings_value('_site_description');
$location = get_Settings_value('_location');
$instagram = get_Settings_value('_instagram');
$tumblr = get_Settings_value('_tumblr');
$youtube = get_Settings_value('_youtube');
$whatsapp = get_Settings_value('_whatsapp');

$package = get_Packages('');
$product = get_Products('');
$ad = get_Ad('');
$review = get_Review('');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$site_name}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="{{$whatsapp}}" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a class="text-white px-3" href="{{$tumblr}}" target="_blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                        <a class="text-white px-3" href="{{$instagram}}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="{{$youtube}}" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Taffy</span>'s</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#gallery" class="nav-item nav-link">Gallery</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Taffy</span>'s</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="#product" class="nav-item nav-link">Products</a>
                        <a href="https://wa.me//6281290220374?text=Hello!%20I%20would%20like%20to%20order" target="_blank" class="nav-item nav-link">Order</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../img/carousel1 (2).jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Fresh & Made with love</h4>
                            <h1 class="display-3 text-white mb-md-4">Traditional Recepies</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">All kinds of sweets</h4>
                            <h1 class="display-3 text-white mb-md-4">Guaranteed to make you happy</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel3.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Quality guaranteed</h4>
                            <h1 class="display-3 text-white mb-md-4">Made from fresh ingredients</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
            
            <svg width="2184" height="92" viewBox="0 0 2184 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="727" height="55" fill="#F195B2"/>
                <rect x="727" width="729" height="55" fill="#F195B2"/>
                <rect x="727" width="729" height="55" fill="#F195B2"/>
                <circle cx="45.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="45.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="772.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="772.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="136.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="136.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="863.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="863.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="863.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="863.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="227.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="227.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="954.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="954.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="954.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="954.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="318.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="318.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="1045.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1045.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="1045.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1045.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <ellipse cx="410" cy="45.5" rx="46" ry="45.5" fill="#DE647B"/>
                <ellipse cx="410" cy="45.5" rx="46" ry="45.5" fill="#F195B2"/>
                <ellipse cx="1137" cy="45.5" rx="46" ry="45.5" fill="#DE647B"/>
                <ellipse cx="1137" cy="45.5" rx="46" ry="45.5" fill="#F195B2"/>
                <ellipse cx="1137" cy="45.5" rx="46" ry="45.5" fill="#DE647B"/>
                <ellipse cx="1137" cy="45.5" rx="46" ry="45.5" fill="#F195B2"/>
                <path d="M547 46.864C547 71.993 527.199 92 501.867 92C476.535 92 456 71.629 456 46.5C456 21.371 476.535 1 501.867 1C527.199 1 547 21.735 547 46.864Z" fill="#DE647B"/>
                <path d="M547 46.864C547 71.993 527.199 92 501.867 92C476.535 92 456 71.629 456 46.5C456 21.371 476.535 1 501.867 1C527.199 1 547 21.735 547 46.864Z" fill="#F195B2"/>
                <path d="M1274 46.864C1274 71.993 1254.2 92 1228.87 92C1203.54 92 1183 71.629 1183 46.5C1183 21.371 1203.54 1 1228.87 1C1254.2 1 1274 21.735 1274 46.864Z" fill="#DE647B"/>
                <path d="M1274 46.864C1274 71.993 1254.2 92 1228.87 92C1203.54 92 1183 71.629 1183 46.5C1183 21.371 1203.54 1 1228.87 1C1254.2 1 1274 21.735 1274 46.864Z" fill="#F195B2"/>
                <path d="M1274 46.864C1274 71.993 1254.2 92 1228.87 92C1203.54 92 1183 71.629 1183 46.5C1183 21.371 1203.54 1 1228.87 1C1254.2 1 1274 21.735 1274 46.864Z" fill="#DE647B"/>
                <path d="M1274 46.864C1274 71.993 1254.2 92 1228.87 92C1203.54 92 1183 71.629 1183 46.5C1183 21.371 1203.54 1 1228.87 1C1254.2 1 1274 21.735 1274 46.864Z" fill="#F195B2"/>
                <ellipse cx="592" cy="45.5" rx="45" ry="45.5" fill="#DE647B"/>
                <ellipse cx="592" cy="45.5" rx="45" ry="45.5" fill="#F195B2"/>
                <circle cx="1319.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1319.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="1319.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1319.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <path d="M727 45.864C727 70.993 707.416 91 682.363 91C657.31 91 637 70.629 637 45.5C637 20.371 657.31 0 682.363 0C707.416 0 727 20.735 727 45.864Z" fill="#DE647B"/>
                <path d="M727 45.864C727 70.993 707.416 91 682.363 91C657.31 91 637 70.629 637 45.5C637 20.371 657.31 0 682.363 0C707.416 0 727 20.735 727 45.864Z" fill="#F195B2"/>
                <path d="M1456 45.864C1456 70.993 1436.2 91 1410.87 91C1385.54 91 1365 70.629 1365 45.5C1365 20.371 1385.54 0 1410.87 0C1436.2 0 1456 20.735 1456 45.864Z" fill="#DE647B"/>
                <path d="M1456 45.864C1456 70.993 1436.2 91 1410.87 91C1385.54 91 1365 70.629 1365 45.5C1365 20.371 1385.54 0 1410.87 0C1436.2 0 1456 20.735 1456 45.864Z" fill="#F195B2"/>
                <path d="M1456 45.864C1456 70.993 1436.2 91 1410.87 91C1385.54 91 1365 70.629 1365 45.5C1365 20.371 1385.54 0 1410.87 0C1436.2 0 1456 20.735 1456 45.864Z" fill="#DE647B"/>
                <path d="M1456 45.864C1456 70.993 1436.2 91 1410.87 91C1385.54 91 1365 70.629 1365 45.5C1365 20.371 1385.54 0 1410.87 0C1436.2 0 1456 20.735 1456 45.864Z" fill="#F195B2"/>
                <rect x="1456" width="728" height="55" fill="#F195B2"/>
                <circle cx="1501.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1501.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="1592.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1592.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="1683.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1683.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <circle cx="1774.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="1774.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <ellipse cx="1866" cy="45.5" rx="46" ry="45.5" fill="#DE647B"/>
                <ellipse cx="1866" cy="45.5" rx="46" ry="45.5" fill="#F195B2"/>
                <path d="M2003 46.864C2003 71.993 1983.2 92 1957.87 92C1932.54 92 1912 71.629 1912 46.5C1912 21.371 1932.54 1 1957.87 1C1983.2 1 2003 21.735 2003 46.864Z" fill="#DE647B"/>
                <path d="M2003 46.864C2003 71.993 1983.2 92 1957.87 92C1932.54 92 1912 71.629 1912 46.5C1912 21.371 1932.54 1 1957.87 1C1983.2 1 2003 21.735 2003 46.864Z" fill="#F195B2"/>
                <circle cx="2048.5" cy="45.5" r="45.5" fill="#DE647B"/>
                <circle cx="2048.5" cy="45.5" r="45.5" fill="#F195B2"/>
                <path d="M2184 45.864C2184 70.993 2164.42 91 2139.36 91C2114.31 91 2094 70.629 2094 45.5C2094 20.371 2114.31 0 2139.36 0C2164.42 0 2184 20.735 2184 45.864Z" fill="#DE647B"/>
                <path d="M2184 45.864C2184 70.993 2164.42 91 2139.36 91C2114.31 91 2094 70.629 2094 45.5C2094 20.371 2114.31 0 2139.36 0C2164.42 0 2184 20.735 2184 45.864Z" fill="#F195B2"/>
                </svg>
                
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <section id="about">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">All about our little shop</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">We are a small home buisness that provides tasty love-filled sweets!</h5>
                    <p>{{$site_description}}  </p>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>What makes our Bakery unique is that we cater to YOU! Customer satisfaction is our number one priority.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Allergy Friendly</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Adjusts to your needs</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Delivery to your house</h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- About End -->

    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
    @foreach($ad as $item)
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{Storage::url($item->thumbnail)}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">${{$item->price}}</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">{{$item->name}}</h3>
                    <p class="text-white mb-4">{{$item->desc}}</p>
                    <a href="{{$item->link}}" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Gallery Start -->
    <section id="gallery">
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">We make sure our customers are satisfied</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/1.png" alt="" height="350" width="500">
                    <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/2.png" alt="" height="350" width="500">
                    <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/3.png" alt="" height="350" width="500">
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/4.png" alt="" height="350" width="500">
                    <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/5.png" alt="" height="350" width="500">
                    <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/6.png" alt="" height="350" width="500"">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Gallery End -->


    <!-- Products Start -->
    <section id="product">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Come order our tasty homemade sweets!</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                    <?php
                    $i=1;
                    ?>
                    @foreach($product as $item)
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">${{$item->price}}</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="{{Storage::url($item->thumbnail)}}" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">{{$item->name}}</h5>
                            <a href="{{$item->link}}" target="_blank" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    <!-- Products End -->

    
    <!-- Pacakges Start -->
    
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Or order a package for a special event</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <?php
                        $i=1;
                        ?>
                        @foreach($package as $item)
                            <div class="service-item">
                                <div class="service-img mx-auto">
                                    <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{Storage::url($item->thumbnail)}}" style="object-fit: cover;">
                                </div>
                                <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                    <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">{{$item->name}}</h5>
                                    <p>{!! strip_tags ($item->desc) !!}</p>
                                    <a href="{{$item->link}}" target="_blank" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                                </div>
                            </div>
                        @php
                            $i++;
                        @endphp   
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Pacakges End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">What Our Customers Say About Our Famous Ice Cream</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <?php
                            $i=1;
                        ?>
                        @foreach($review as $item)
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">{!! strip_tags ($item->review) !!}</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{Storage::url($item->thumbnail)}}" alt="">
                            <h5 class="font-weight-bold m-0">{{$item->name}}</h5>
                            <span>{{$item->profession}}</span>
                        </div>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

     <!-- Contact Start -->
     <section id="contact">
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Taffy's</span> Bakery</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">Alamanda 2, Bekasi</p>
                            <p class="mb-0">+62 812 9022 0374</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 6AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>