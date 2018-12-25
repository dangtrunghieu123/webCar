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

    <link rel="stylesheet" href="<?= base_url()?>public/admin/css/layout.css">
    
</head>
<body>
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
							<a class="nav-link" href="#home">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#new">News & Event</a>
						</li>
						<li class="nav-item dropdown show">
                            <a class=" nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Product
                            </a>
                           <div class="dropdown-menu mydropdown animated fadeInUp" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="product">All Cars</a>
                                <a class="dropdown-item" href="#">Top Cars</a>
                                <a class="dropdown-item" href="#">New Cars</a>
                            </div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#contactUs">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">login/logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	<!-- slider -->
	<!-- <section>
		<div class="owl-carousel owl-theme myOwl1">
			<div class="item img">
				<img src="<?= base_url()?>public/admin/img/car/banner-3.jpg">
			</div>
			<div class="item img">
				<img src="http://www.st8.vn/data/news/1185/2.jpg">
			</div>
			<div class="item img">
				<img src="<?= base_url()?>public/admin/img/car/banner-4.jpg">
			</div>

		</div>
	</section> -->
	<section style="">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active img">
					<img class="d-block w-100" src="<?= base_url()?>public/admin/img/car/banner-3.jpg" alt="First slide">
				</div>
				<div class="carousel-item img">
					<img class="d-block w-100" src="http://www.st8.vn/data/news/1185/2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item img">
					<img class="d-block w-100" src="<?= base_url()?>public/admin/img/car/banner-4.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	
	<!-- introduce -->
	
	<section class="intro" id="about">
		<div class="container">
			<div class="mt-5 Title">
				<h1>Introduce</h1>
			</div>
			<div class="row">
				<div class="col-lg-6 introImg mt-3">
					<div class="img">
						<img src="<?= base_url()?>public/admin/img/car/intro-3.jpg" alt="">
						<div class="button">
							<button class=" btn-primary">View More</button>
						</div>
						<div class="unknow">
							<i class="fa fa-arrows p-2"></i>
						</div>
					</div>
					<div class="introContent">
						<h3>Car buying and selling service </h3>
						<p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis doloribus animi, laudantium 
							odit minima recusandae at quo facilis. Consequatur, saepe.</p>
							
					</div>
				</div>
				<div class="col-lg-6 introImg mt-3">
					<div class="img">
						<img src="<?= base_url()?>public/admin/img/car/intro-4.jpg" alt="">
						<div class="button">
							<button class=" btn-primary">View More</button>
						</div>
						<div class="unknow">
							<i class="fa fa-arrows p-2"></i>
						</div>
					</div>
					<div class="introContent">
						<h3>Modern equipments </h3>
						<p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis doloribus animi, laudantium 
							odit minima recusandae at quo facilis. Consequatur, saepe.</p>	
					</div>
				</div>
				<div class="col-lg-6 introImg mt-3">
					<div class="img">
						<img src="https://s3.amazonaws.com/atlautomotivewebsite/wp-content/uploads/2018/03/04173559/honda-civic-banner-7.jpg" alt="">
						<div class="button">
							<button class=" btn-primary">View More</button>
						</div>
						<div class="unknow">
							<i class="fa fa-arrows p-2"></i>
						</div>
					</div>
					<div class="introContent">
						<h3>Super level </h3>
						<p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis doloribus animi, laudantium 
							odit minima recusandae at quo facilis. Consequatur, saepe.</p>
					</div>
				</div>
				<div class="col-lg-6 introImg mt-3">
					<div class="img">
						<img src="https://di-uploads-pod5.dealerinspire.com/newenglandhonda/uploads/2017/12/2018-Honda-Civic-Sedan-Daytime-Running-Lamps-.jpg" alt="">
						<div class="button">
							<button class=" btn-primary">View More</button>
						</div>
						<div class="unknow">
							<i class="fa fa-arrows p-2"></i>
						</div>
					</div>
					<div class="introContent">
						<h3>Delicate to every detail </h3>
						<p class="my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis doloribus animi, laudantium 
							odit minima recusandae at quo facilis. Consequatur, saepe.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- product -->
	<section class="product">
		<div class="my-5 Title">
			<h1> New Products</h1>
		</div>
		<div class="proContent">
			<div class="container">
				<div class="owl-carousel owl-theme myOwl1">
					<div class="item owlItem" style="border:1px solid green">
						<div class="card cardImg">
							<img src="<?= base_url()?>public/admin/img/car/xe-3-hover.png">
							<div class="card-body  text-center">
								<h2 class="card-title text-success">
									Cars Sedans
									<span class="badge badge-success badge-pill">12</span>
								</h2>
								<div class="d-flex justify-content-around">
									<div class="product-left">
										<p>$410,000</p>
										<p>Starting</p>
									</div>
									<div>
										<p>$410,000</p>
										<p>Starting</p>
									</div>	
								</div>
								<button class="btn btn-success">View more</button>
								<button class="btn btn-outline-success">Buy</button>
							</div>
						</div>
					</div>
					<div class="item owlItem" style="border:1px solid blue">
						<div class="card cardImg">
							<img src="<?= base_url()?>public/admin/img/car/xe-2-hover.png">
							<div class="card-body  text-center">
							<h2 class="card-title text-primary">
									Cars Sedans
									<span class="badge badge-primary badge-pill">12</span>
								</h2>
								<div class="d-flex justify-content-around">
									<div class="product-left">
										<p>$410,000</p>
										<p>Starting</p>
									</div>
									<div>
										<p>$410,000</p>
										<p>Starting</p>
									</div>	
								</div>
								<button class="btn btn-success">View more</button>
								<button class="btn btn-outline-success">Buy</button>
							</div>
						</div>
					</div>
					<div class="item owlItem" style="border:1px solid black">
						<div class="card cardImg">
							<img src="<?= base_url()?>public/admin/img/car/xe-1-hover.png">
							<div class="card-body  text-center">
							<h2 class="card-title text-dark ">
									Cars Sedans
									<span class="badge badge-dark badge-pill">12</span>
								</h2>
								<div class="d-flex justify-content-around">
									<div class="product-left">
										<p>$410,000</p>
										<p>Starting</p>
									</div>
									<div>
										<p>$410,000</p>
										<p>Starting</p>
									</div>	
								</div>
								<button class="btn btn-success">View more</button>
								<button class="btn btn-outline-success">Buy</button>
							</div>
						</div>
					</div>
					<div class="item owlItem" style="border:1px solid red">
						<div class="card cardImg">
							<img src="<?= base_url()?>public/admin/img/car/xe-2.png">
							<div class="card-body  text-center">
							<h2 class="card-title text-danger">
									Cars Sedans
									<span class="badge badge-danger badge-pill">12</span>
								</h2>
								<div class="d-flex justify-content-around">
									<div class="product-left">
										<p>$410,000</p>
										<p>Starting</p>
									</div>
									<div>
										<p>$410,000</p>
										<p>Starting</p>
									</div>	
								</div>
								<button class="btn btn-success">View more</button>
								<button class="btn btn-outline-success">Buy</button>
							</div>
						</div>
					</div>
					<div class="item owlItem" style="border:1px solid blueviolet">
						<div class="card cardImg">
							<img src="<?= base_url()?>public/admin/img/car/xe-3.png">
							<div class="card-body  text-center">
							<h2 class="card-title " style="color:blueviolet">
									Cars Sedans
									<span class="badge badge-primary badge-pill">12</span>
								</h2>
								<div class="d-flex justify-content-around">
									<div class="product-left">
										<p>$410,000</p>
										<p>Starting</p>
									</div>
									<div>
										<p>$410,000</p>
										<p>Starting</p>
									</div>	
								</div>
								<button class="btn btn-success">View more</button>
								<button class="btn btn-outline-success">Buy</button>
							</div>
						</div>
					</div>
					<div class="item owlItem" style="border:1px solid orange">
						<div class="card cardImg">
							<img src="<?= base_url()?>public/admin/img/car/xe-4.png">
							<div class="card-body text-center">
								<h2 class="card-title text-warning">
									Cars Sedans
									<span class="badge badge-warning badge-pill">12</span>
								</h2>
								<div class="d-flex justify-content-around">
									<div class="product-left">
										<p>$410,000</p>
										<p>Starting</p>
									</div>
									<div>
										<p>$410,000</p>
										<p>Starting</p>
									</div>	
								</div>
								<button class="btn btn-success">View more</button>
								<button class="btn btn-outline-success">Buy</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view_more">
				<button>
					<a href="product">View all cars</a>
				</button>
			</div>
		</div>
		
	</section>

	<!-- background -->
	<section class="background">
		<div class="bgContent">
			<div class="infoCompany">
			<div class="container ">
				<div class="row ">
					<div class="col-lg-3">
						<h1 class="text-warning">929 </h1>
						<span class=""> 929 City car was bought, accounted for 49% of total sales</span>
					</div>
					<div class="col-lg-3">
						<h1 class="text-warning">341</h1>
						<span class="">341 Jazz car was bought, accounted for 18% of total sales</span>
					</div>
					<div class="col-lg-3">
						<h1 class="text-warning"> 1.914 </h1>
						<span>1.914 Honda car was bought, up 169% over the same period last year</span>
					</div>
					<div class="col-lg-3">
						<h1 class="text-warning">7 </h1>
						<span>7 kind of car popular ,beautiful and luxurious</span>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<!-- event and news -->
	<section id="new">
		<div class="my-5 Title">
			<h1>News and Event</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mt-4">
					<div class="row EN">
						<div class="col-lg-4 left">
							<img src="https://cdn.partcatalog.com/media/wysiwyg/tesla-model-3/tesla-model-3-banner.jpg" class="img-fluid">
						</div>
						<div class="col-lg-8 right">
							<h3>
								<a href="#">Sedans cars</a>
							</h3>
							<span>Sales 5%</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, harum.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4">
					<div class="row EN">
						<div class="col-lg-4 left">
							<img src="https://cdn.partcatalog.com/media/wysiwyg/tesla-model-3/tesla-model-3-banner.jpg" class="img-fluid">
						</div>
						<div class="col-lg-8 right">
							<h3><a href="#">Sedans cars</a></h3>
							<span>Sales 5%</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, harum.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4">
					<div class="row EN">
						<div class="col-lg-4 left">
							<img src="https://cdn.partcatalog.com/media/wysiwyg/tesla-model-3/tesla-model-3-banner.jpg" class="img-fluid">
						</div>
						<div class="col-lg-8 right">
							<h3><a href="#">Sedans cars</a></h3>
							<span>Sales 5%</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, harum.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4">
					<div class="row EN">
						<div class="col-lg-4 left">
							<img src="https://cdn.partcatalog.com/media/wysiwyg/tesla-model-3/tesla-model-3-banner.jpg" class="img-fluid">
						</div>
						<div class="col-lg-8 right">
							<h3><a href="#">Sedans cars</a></h3>
							<span>Sales 5%</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, harum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- contact for us -->
	<section class="contact" id="contactUs">
		<div class="my-5 Title">
			<h1>Contact for us</h1>
		</div>
		<div class="container">
			<div class="FormContact" >
				<div class="left">
					<img src="https://di-uploads-pod4.dealerinspire.com/montanahondadealers/uploads/2017/09/Accordion-Image-2018-Honda-Civic-Hatchback-EX-L.png" class="img-fluid">
				</div>
				<div class=" right" >
				
					<!-- <div class="form">
						<div class="TitleForm">
							<h3>Form contact</h3>
						</div>
						<form>
						
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" placeholder="your name" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" placeholder="your email" class="form-control">
							</div>
							<div class="form-group">
								<label>Phone</label>
								<input type="text" placeholder="your phone numer" class="form-control">
							</div>
							<div class="form-group">
								<label for="Message"></label>
								<textarea name="" id="" cols="30" rows="5" placeholder="your message" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div> -->

					<form class="FormLogin">
						<div class="" style="display:flex;justify-content:space-between">
							<div class="UserName ">
								<input type="text" name="UserName" class="user general">
								<label for="" id="l1" class="lb">Name</label>
							</div>
							<div class="PhoneNumber ">
								<input type="text" name="PhoneNumber" class="phone general">
								<label for="" id="l4" class="lb">Phone</label>
							</div>
						</div>
						<div class="PassWord">
							<input type="email" name="PassWord" class="email general">
							<label for="" id="l2" class="lb">Email</label>
						</div>
						<div class="message">
							<!-- <input type="password" name="PassWord" class="pass"> -->
							<textarea name="message" id="" cols="30" rows="4" class="message general"></textarea>
							<label for="" id="l3" class="lb">Message</label>
						</div>
						<div class="text-center pt-4">
							<button type="button" class="btn btn-outline-success" onclick="Submit();">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 left">
					<div class="img">
						<img src="https://www.westernwashingtonhondadealers.com/images/logo-dealer.png">
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nisi, ipsum culpa porro
						 distinctio nulla eligendi suscipit amet quo nihil.</p>
					<div class="social">
						<div class="bg-primary">
							<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
						<div class="bg-danger">
							<a href="#"><i class="fa fa-github"></i></a>
						</div>
						<div class="bg-success">
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="bg-warning">
							<a href="#"><i class="fa fa-skype"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 center">
					<h1 class=" text-center">Our service</h1>
					<ul>
						<li>Lorem ipsum dolor sit amet consectetur.</li>
						<li>Lorem ipsum dolor sit amet consectetur.</li>
						<li>Lorem ipsum dolor sit amet consectetur.</li>
						<li>Lorem ipsum dolor sit amet consectetur.</li>
					</ul>
				</div>
				<div class="col-lg-4 right">
					<h1 class=" text-center">Contact</h1>
					<div class="row item">
						<div class="col-1 text-success"><i class="fa fa-phone"></i></div>
						<div class="col-10">0363000784</div>
					</div>
					<div class="row item">
						<div class="col-1 text-danger"><i class="fa fa-envelope"></i></div>
						<div class="col-10">lethu210398@gmail.com</div>
					</div>
					<div class="row item">
						<div class="col-1 text-warning"><i class="fa fa-map-marker"></i></div>
						<div class="col-10">97 Man Thien Hiep Phu Dictric 9 HCM City</div>
					</div>
				</div>
			</div>
		
		</div>
	</footer>
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
	<script src="<?= base_url()?>public/admin/js/layout.js"></script>
</body>
</html>

