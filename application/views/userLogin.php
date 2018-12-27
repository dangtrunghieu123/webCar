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
   
    <link rel="stylesheet" href="<?= base_url()?>public/admin/css/userLogin.css">
</head>
<body>
    
   <section class="background">
        <div id="particles-js">
            <div class="myForm">    
                <div class="card">
                    <div class="btnLR">
                        <button class="btn btn-primary login">Login</button>
                        <button class="btn btn-success reg">Registration</button>
                    </div>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="FormLogin">
                            <div class="" style="display:flex;justify-content:space-between">
                                <div class="UserName ">
                                    <input type="text" name="UserName" class="user general">
                                    <label for="" id="l1" class="lb">Account</label>
                                </div>
                                <div class="PhoneNumber ">
                                    <input type="text" name="PhoneNumber" class="phone general">
                                    <label for="" id="l4" class="lb">Phone</label>
                                </div>
                            </div>
                            <div class="PassWord">
                                <input type="email" name="PassWord" class="email general">
                                <label for="" id="l2" class="lb">PassWord</label>
                            </div>
                            <div class="Email">
                                <input type="email" name="PassWord" class="email general">
                                <label for="" id="l2" class="lb">Email</label>
                            </div>
                            
                            <div class="text-center pt-4 loginSubmit">
                                <button type="button" class="" onclick="Submit();">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    
    <script src="<?= base_url()?>public/admin/js/particles.js"></script>
    <script src="<?= base_url()?>public/admin/js/app.js"></script>
	<script src="<?= base_url()?>public/admin/js/userLogin.js"></script>
</body>
</html>