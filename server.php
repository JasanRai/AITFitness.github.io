
<?php
 session_start();

    $Firstname = "";
    $Lastname = "";
    $Email = "";
    $errors = array();
    $username ="epiz_26046417";
    $password = "LQtEtsJlO8n7Yf";
    $server = "sql308.epizy.com";
    

//CONNECT TO DATABASE
    $db = /* "epiz_26046417_AITFitness"; */mysqli_connect('localhost', 'root', '', 'authentication');


    if(isset($_POST['register']))
    {
        $Firstname = mysqli_real_escape_string($db, $_POST['Firstname']);
        $Lastname = mysqli_real_escape_string($db, $_POST['Lastname']);
        $Email = mysqli_real_escape_string($db, $_POST['Email']);
        $Password = mysqli_real_escape_string($db, $_POST['Password']);
        $CPassword = mysqli_real_escape_string($db, $_POST['CPassword']);

        if(empty($Firstname))
        {
            array_push($errors, "First Name is required");

        }
         if(empty($Lastname))
        {
            array_push($errors, "Last Name is required");
        }
         if(empty($Password))
        {
            array_push($errors, "Password is required");
        }
         if(empty($Email))
        {
            array_push($errors, "Email is required");
        }
        if($Password != $CPassword)
        {
            array_push($errors, "Both passwords do not match");
        }

        if(count($errors) == 0)
        {
            // $Password = md5($Password); // encrypt password before storing
            $Password = password_hash($Password, PASSWORD_DEFAULT);
            // $sql = "INSERT INTO users(Firstname, Lastname, Email, Password)
            //         VALUES('$Firstname', '$Lastname', '$Email', '$Password')";
            $sql = "INSERT INTO users (Firstname,Lastname, Password, Email) VALUES ('".$Firstname."',  '".$Lastname."', '".$Password."', '".$Email."')";
            mysqli_query($db, $sql);

            header('Location:/Php/AW-Project/login.php');
        }

    }

    if(isset($_POST['login']))
    {
          $Email = mysqli_real_escape_string($db, $_POST['Email']);
          $Password = mysqli_real_escape_string($db, $_POST['Password']);
      
         if(empty($Email))
        {
            array_push($errors, "Email is required");
        }
         if(empty($Password))
        {
            array_push($errors, "Password is required");
        }
     

        if(count($errors) == 0)
        {
          
           /*  $Password = md5($Password);
            $query = "SELECT * FROM users WHERE Email ='$Email' AND Password ='$Password'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) == 1)
            {
             header("Location:/Php/AW-Project/index.php");
            }
            else
            {
                array_push($errors, "wrong username/password combination");
            } */
            $sql = "SELECT * FROM users WHERE Email ='" .$Email."' LIMIT 1";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_array($result);
                if(password_verify($Password, $row["Password"])) {
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["fullname"] = $row["username"];
                        
                  header("Location:/Php/AW-Project/index.php");

                }
                if(!password_verify($Password, $row["Password"])) { 
                 
                    $_SESSION["email_err"] = "Your email is wrong.";
                    $_SESSION["password_err"] = "Your password is wrong.";  
                  header ("Location:/Php/AW-Project/login.php");
                  
                  }
        }
    }
}
    
    /* if(isset($_GET['logout']))
    {
        session_destroy();
            unset($_SESSION['username']);
            header('location:login.php');
        }*/


?>