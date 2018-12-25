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
                                <a class="nav-link" href="#">All Product</a>
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
                                <a class="nav-link" href="#">Top Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#contactUs">News Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Accessories</a>
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

    <section class="mt-5">
        <div class="Title mb-3">
            <h1>All Product</h1>
        </div>
        <div class="container">
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
                                <button class="btn btn-outline-primary">View more</button>
                                <button class="btn btn-outline-dark"><i class="fa fa-cart-plus"></i></button>
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
                                <button class="btn btn--primary">View more</button>
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
                                <button class="btn btn-outline-primary">View more</button>
                                <button class="btn btn-outline-dark"><i class="fa fa-cart-plus"></i></button>
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
                                <button class="btn btn-outline-primary">View more</button>
                                <button class="btn btn-outline-dark"><i class="fa fa-cart-plus"></i></button>
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
                                <button class="btn btn-outline-primary">View more</button>
                                <button class="btn btn-outline-dark"><i class="fa fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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