<?php 
include("header.php");
/* include("server.php"); */



?>
       <div class = "row justify-content-center align-items-center ">
         <form action="/Php/AW-Project/login.php" method="post" class= "loginForm">
                 <h3>Login</h3>
          <?php include ('errors.php'); ?>
            
            
            <div class="form-group">
                 <input type="email" class="col-form-label form-control-sm col-md-11"
                        placeholder = "Enter Email address" id="inputEmail" aria-describedby="emailHelp" name="Email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            
            <div class="form-group">
                <input type="password" class="col-form-label form-control-sm col-md-11" placeholder = "Enter Password" id="inputPassword" name="Password">
            </div>
           
            
            <button type="submit" name="login" class="btn btn-dark">Login</button>
        </form>
       </div>
<?php include("footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
   
