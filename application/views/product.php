<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"/>

    <link rel="stylesheet" href="<?= base_url()?>public/admin/css/product.css">
</head>
<body>
    <!-- header -->
   <div class="" style="background:#D3D3D3">
        <div class="container-fluid">
        <div class="onHeader ">
            <div class="title">
                <h2>Wellcome to HONDA Cars</h2>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
   </div>
    <header class="header ">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url()?>public/admin/img/car/logo.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo02" style="height:100%">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="layout">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#AllProduct">All Product</a>
                            </li>
                            <!-- <li class="nav-item dropdown show">
                                <a class=" nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Product
                                </a>
                            <div class="dropdown-menu mydropdown animated fadeInUp" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="product">All Cars</a>
                                    <a class="dropdown-item" href="#">Top Cars</a>
                                    <a class="dropdown-item" href="#">New Cars</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#topCar">Top Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#newCars">News Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#accessories">Service</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
    </header>
    
    <!-- all product -->
    <div class="page">
        <div class="container">
            <p>Home/product</p>
        </div>
    </div>
    <div class="Title my-3">
        <h1>All Product</h1>
    </div>
    <section class="allProduct" id="AllProduct" >
        <div class="container">
            <!-- pagination -->
           <div style="">
                <nav aria-label="Page navigation example" >
                    <ul class="pagination">
                    </ul>
                </nav>
           </div>
            <div class="row" id="allCar">
                <div class="col-3">
                    <div class="card cardContent">
                        <img src="<?= base_url()?>public/admin/img/car/xe-1.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent">
                        <img src="<?= base_url()?>public/admin/img/car/xe-1.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent mt-3">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent mt-3">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent mt-3">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent mt-3">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent mt-3">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card cardContent mt-3">
                        <img src="<?= base_url()?>public/admin/img/car/xe-3.png" alt="">
                        <div class="card-body cardBody">
                            <!-- name car -->
                            <h3 class=""><a href="#">black cars</a></h3>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                            <!-- code and price -->
                            <div class="code_price">
                                <p>code: 111</p>
                                <p>price: $190</p>
                            </div>
                            <div class=" button">
                                <button class="btn btn-primary">View more</button>
                                <button class="btn btn-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- unknow -->
    <section class="unknown">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-2 left">
                    <img src="<?= base_url()?>public/admin/img/car/unkown.png" alt="">
                </div>
                <div class="col-10 right">
                    <div class="text">
                        <h3>Our products are friendly to every family </h3>
                        <p>HONDA Safe and durable</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- top cars -->
    <section id="topCar">
        <div class="container">
            <div class="Title my-3">
                <h1>Top Cars</h1>
            </div>
            <!-- owlcarousel -->
            <div class="owl-carousel owl-theme" id="topCars">
                <div class="item" >
                    <div class="row rowItem">
                        <div class="col-5 left">
                            <img src="<?= base_url()?>public/admin/img/car/topCar1.jpg" alt="">
                        </div>
                        <div class="col-7 right">
                            <div class="contentCar">
                                <span>30.12.2018</span>
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nisi consequatur doloribus reiciendis quam tempore.</p>
                                <p>
                                    <a href="#">
                                        <span>Detail </span>
                                        <span><i class="fa fa-angle-double-right"></i></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" >
                     <div class="row rowItem" >
                        <div class="col-5 left">
                            <img src="<?= base_url()?>public/admin/img/car/topCar2.jpg" alt="">
                        </div>
                        <div class="col-7 right">
                            <div class="contentCar">
                                    <span>30.12.2018</span>
                                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nisi consequatur doloribus reiciendis quam tempore.</p>
                                    <p>
                                        <a href="#">
                                            <span>Detail </span>
                                            <span><i class="fa fa-angle-double-right"></i></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="item">
                     <div class="row rowItem">
                        <div class="col-5 left">
                            <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                        </div>
                        <div class="col-7 right">
                            <div class="contentCar">
                                    <span>30.12.2018</span>
                                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nisi consequatur doloribus reiciendis quam tempore.</p>
                                    <p>
                                        <a href="#">
                                            <span>Detail </span>
                                            <span><i class="fa fa-angle-double-right"></i></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

        <!-- new car -->
        <section id="newCars">
            <div class="container">
                <div class="Title my-3">
                    <h1>New Cars</h1>
                </div>
                <div class="row">
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 img">
                        <div class="card cardContent">
                            <div class="imghover">
                                <img src="<?= base_url()?>public/admin/img/car/topCar3.jpg" alt="">
                            </div>
                            <div class="card-body cardBody">
                                <p>HONDA JAZZ</p>
                                <div class="codePrice">
                                    <p>code: 111</p>
                                    <p>price: $999</p>
                                </div>
                            </div>
                            <div class="viewMore">
                                <div class="text">
                                    <p>HONDA JAZZ</p>
                                    <button class="btn btn-outline-warning">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- accessoriess -->
        <section id="accessories">
            <div class=" contentFluid">
                <div class="Title my-3">
                    <h1>Service</h1>
                    <p>We provide the best service to customers</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                    <img src="<?= base_url()?>public/admin/img/car/icon1.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service1.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Kiểm ta trước khi giao xe</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                <img src="<?= base_url()?>public/admin/img/car/icon2.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service2.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Bảo hành sản phẩm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                <img src="<?= base_url()?>public/admin/img/car/icon.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service3.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Dịch vụ bảo dưỡng miễn phí</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                    <img src="<?= base_url()?>public/admin/img/car/icon3.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service4.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Tư vấn sử dụng</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                <img src="<?= base_url()?>public/admin/img/car/icon4.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service5.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>FAQ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left ">
                                <img src="<?= base_url()?>public/admin/img/car/icon5.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service6.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Kĩ thuật công nghệ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                <img src="<?= base_url()?>public/admin/img/car/icon6.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service7.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Đào tạo kĩ thuật viên</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pr-0">
                            <div class="row sericeItem">
                                <div class="col-3 left">
                                <img src="<?= base_url()?>public/admin/img/car/icon7.png" alt="">
                                    <img src="<?= base_url()?>public/admin/img/car/service8.png" alt="">
                                </div>
                                <div class="col-9 right">
                                    <p>Đăng kí bảo dưỡng online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- end -->

    <section>
			<div class="end">
				<div class="text-white" style="font-size:25px; font-weight:100">
					<span>@Code by me</span>
				</div>
				<ul>
					<li>
						<img src="<?= base_url() ?>public/admin/img/car/footer-logo-6.jpg">
					</li>
					<li>
						<img src="<?= base_url() ?>public/admin/img/car/footer-logo-7.png">
					</li>
					<li>
						<img src="<?= base_url() ?>public/admin/img/car/footer-logo-8.jpg">
					</li>
				</ul>
			</div>
	</section>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<script src="<?= base_url()?>public/admin/js/product.js"></script>

<!-- <script>
    var listCars = [
        { name: 'black car', price: '$999', img: '<?= base_url()?>public/admin/img/car/xe-1.png' },
        { name: 'black car', price: '$990', img: '<?= base_url()?>public/admin/img/car/xe-2.png' },
        { name: 'blue car', price: '$989', img: '<?= base_url()?>public/admin/img/car/xe-3.png' },
        { name: 'black car', price: '$999', img: '<?= base_url()?>public/admin/img/car/xe-3-hover.png' },
        { name: 'red car', price: '$999', img: '<?= base_url()?>public/admin/img/car/xe-4.png' },
        { name: 'red car', price: '$999', img: '<?= base_url()?>public/admin/img/car/xe-4-hover.png' },
    ]
    console.log(listCars);
    var car = "";
    for (var i = 0; i < listCars.length; i++) {
        var carItem = listCars[i];
        car += `
            <div class="col-3">
                <div class="card">
                    <img src="${carItem.img}" height="400px">
                    <div class="card-body">
                        <h1 class="name">${carItem.name}</h1>
                        <p class="price">${carItem.price}</p>
                        <div class="d-flex">
                            <button class="btn-primary">View more</button>
                            <button class="btn-primary">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
    $('#allCar').html(car);
</script> -->


</body>
</html>