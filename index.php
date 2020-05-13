<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "viewport" content = "width=device-width, initial-scale = 1">
        <title>Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "styles/styles.css">
    </head>
    
    <body>
        <div id = "top">
            <div class="frontLogo">
            <a href = "index.php" class="logo">
                <img src="images/housegym.png" alt="webLogo">
                
            </a>  
                <ul class="account">
                    <li><a href="#login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                </ul>
           </div>
    
            
        </div>
        
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        
                    </ul>
                        <button class = "navbar-toggle" data-toggle= "collapse" data-target = "#search">
                
                            <span class = "sr-only">Toggle Search</span>
                            <i class = "fa fa-search"></i>
                
                        </button>
                   
                </div>
        </nav>
    
    </body>
    
    
</html>