<?php include ('server.php');


?>
<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "viewport" content = "width=device-width, initial-scale = 1">
        <title>Website</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
        <link rel = "stylesheet" href = "styles/styles.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <a class="navbar-brand" href="#">
                    <img src="images/housegym.png" alt="webLogo" class="img-thumbnail" style="height:50px; width:50px" />
                </a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="product_page.php">Product</a>

                    </li>

<!--
                    <li class="nav-item dropdown pl-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Product1</a>
                            <a class="dropdown-item" href="#">Product2</a>
                            <a class="dropdown-item" href="#">Product3</a>
                        </div>
                    </li>
-->
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <div method="POST" action="search.php" class="form-inline my-2 my-lg-0" id ="searchForm" >
                    <input id="search" name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" input="">
                    <button id="searchBtn" class="btn btn-outline-success my-2 my-sm-0" type="submit"
                    onclick="location.href='\search.php?search='+ document.getElementById('search').value">
                    Search
                    </button>
                 </div>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-3" >
                    <li class="nav-item "><a class="text-decoration-none nav-link" href="login.php">Login</a></li>
                    <li class="nav-item "><a class="text-decoration-none nav-link" href="register.php"> Register</a></li>
                    <li class="nav-item ">
                        <a class="text-decoration-none nav-link" href="cart.php">
                            <i class="fas fa-shopping-cart"> Cart</i>
                        </a>

                    </li>
                </ul>

            </div>
            </div>
        </nav>

    </body>
</html>
