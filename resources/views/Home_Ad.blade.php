<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Website bán Lego</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color:  #9c5a5a;
        }
        .header {
            text-align: center;
            padding: 20px;
            width:800px;
            height:400px;
            margin-bottom: 5px; /* Khoảng cách 5px giữa header và content */
            /*margin-left:330px;*/
        }
        .logo {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius: 50%;
            margin-right: 20px;

        }
        .cart {
            display: inline-block;
            margin-right: 10px;
            justify-content: center;

        }
        .links {
            display: inline-block;
            margin-right: 20px;
            justify-content: center;
            text-color:black;
        }
        .search {
            display: inline-block;
            margin-right: 10px;
            justify-content: center;
        }
        .login {
            display: inline-block;
            margin-left: 10px;
            justify-content: center;
        }
        .logout {
            display: inline-block;
            justify-content: center;
            margin-right: 10px;

        }
        .content {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 5px; /* Khoảng cách 5px giữa header và content */
        }
        .cart-item {
            display: inline-block;

            margin: 20px;
            border: none;
            padding: 10px;
            justify-content: center;
        }
        .category-image {
            display: flex;
            justify-content: center;
        }
        #cart-icon {
            color: black; /* Đặt màu đen cho biểu tượng */
        }
    </style>
</head>
<body style="  background-color:  #9c5a5a;">
<div class="header" style=" justify-content: center;" >
    <div class="category-image" style="margin-left:480px;margin-bottom:10px" >
        <div class="logo"> <img src="public/GD/images/logo.jpg" style="width:60px;height:60px;" alt="Cart"></div>
        <div class="cart">
            <a href="" >
                <i class="fa fa-shopping-cart" id="cart-icon"></i></a>
        </div>
        <div class="links">
           <a href="#">Ordered product</a></div>
           <div class="links"> <a href="#" style="text-color:black">Suport</a></div>
           <div class="links"><a href="#" style="text-color:black">Games</a></div>
            <div class="links"><a href="#" style="text-color:black">Legolife</a></div>


        <div class="search">
            <input type="text" placeholder="Search">
        </div>
        <div><button>Search</button></div>
        <div class="login">
            <a href=""><i class="fas fa-user-alt"></i>
            </a>
            <p>Login</p>
        </div>
        <div class="logout" style="margin-left:10px">

            <a href=""><i class="fa-solid fa-user-tie" ></i></a>
            <p>Logout</p>
        </div>
    </div>
    <div> <img src="public/GD/images/legobg3.png" style="width:80%;height:80%; justify-content: center;margin-left:330px" alt=""/></div>
</div>
<h2 style="text-align:center;">Themes</h2>
<div class="content" style="margin-top:30px">
    <div class="cart-item">
        <img src="public/GD/images/1.jpg" style="width:200px;heigh:200px" >
        <p>LEGO Disney</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/2.jpg" style="width:200px;heigh:200px">
        <p>LEGO Star Wars</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/3.jpg" style="width:200px;heigh:200px">
        <p>LEGO Architecture</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/4.jpg" style="width:200px;heigh:200px">
        <p>LEGO Marvel</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/5.jpg" style="width:200px;heigh:200px">
        <p>LEGO Technic</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/6.jpg" style="width:200px;heigh:200px">
        <p>LEGO Creator</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/7.jpg" style="width:200px;heigh:200px">
        <p>Dreamzzz</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/8.jpg" style="width:200px;heigh:200px">
        <p>Lego city</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/9.jpg" style="width:200px;heigh:200px">
        <p>Lego city super pack</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/10.jpg" style="width:200px;heigh:200px">
        <p>Lego toy story</p>
    </div>
    <h2 style="text-align:center;">New sets</h2>
    <div class="cart-item">
        <img src="public/GD/images/ns1.jpg" style="width:200px;heigh:200px">
        <p>LEGO The Globe</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/ns2.jpg" style="width:200px;heigh:200px">
        <p>Grand Piano</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/ns3.jpg" style="width:200px;heigh:200px">
        <p> Fender Stratocaster</p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/ns4.jpg" style="width:200px;heigh:200px">
        <p>Lego Ninjago/p>
    </div>
    <div class="cart-item">
        <img src="public/GD/images/ns5.jpg" style="width:200px;heigh:200px">
        <p>Lego frozen II</p>
    </div>
</div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="public/css/ionicons.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<bodyy>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">

            </div>
        </div>
    </div>
</section>
<footer class="footer-03">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">LEGO STAR WARS</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block">Milenium</a></li>
                            <li><a href="#" class="py-1 d-block">Death Star</a></li>
                            <li><a href="#" class="py-1 d-block">X-wing Starfighter</a></li>
                            <li><a href="#" class="py-1 d-block">Imperial Star Destroyer</a></li>
                            <li><a href="#" class="py-1 d-block">Utimate Collector's Series Millenium Falcon</a></li>
                            <li><a href="#" class="py-1 d-block">AT-AT Walker</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">LEGO CITY</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block">Police Station</a></li>
                            <li><a href="#" class="py-1 d-block">Fire Station</a></li>
                            <li><a href="#" class="py-1 d-block">Passenger Train</a></li>
                            <li><a href="#" class="py-1 d-block">Cargo Train</a></li>
                            <li><a href="#" class="py-1 d-block">Artctic Mobile Exploration Base</a></li>
                            <li><a href="#" class="py-1 d-block">Downtown Fire Brigade</a></li>
                            <li><a href="#" class="py-1 d-block">Deep Space Rocket and Launch Control</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">LEGO TECHNIC</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block">Bugatti Chiron </a></li>
                            <li><a href="#" class="py-1 d-block">Posche 911 GT3RS</a></li>
                            <li><a href="#" class="py-1 d-block">Liebherr R 9800 Excavator</a></li>
                            <li><a href="#" class="py-1 d-block">Land Rover Defender</a></li>
                            <li><a href="#" class="py-1 d-block">Mercedes-Benz Arocs 3245</a></li>
                            <li><a href="#" class="py-1 d-block">Volvo Concept Wheel Loaderr ZEUX</a></li>
                            <li><a href="#" class="py-1 d-block">Bucket Wheel Excavator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-11 mb-md-0 mb-4">
                        <h2 class="footer-heading">Follow Us</h2>
                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><span class="ion-logo-linkedin"></span></a></li>
                        </ul>
                        <h2 class="footer-heading mt-5">Subscribe Us</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3 rounded-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-4 border-top">
            <div class="col-md-6 col-lg-8">

                <p class="copyright">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            </div>
            <div class="col-md-6 col-lg-4 text-md-right">
                <p class="mb-0 list-unstyled">
                    <a class="mr-md-3" href="#">Terms &amp; Conditions</a>
                    <a class="mr-md-3" href="#">Privacy</a>
                </p>
            </div>
        </div>
    </div>
</footer>



<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/main.js"></script>
</bodyy>
</html>
