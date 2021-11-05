<?php
session_start();

   include("config.php");
   include("functions.php");


   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {

        //Saving to database
        $user_id = random_num(15);
        $query = "insert into users (user_id,user_name,password) Values ('$user_id','$user_name','$password')";

        mysqli_query($connect, $query);
        header("Location: login.php");
        die;
      }else
      {

    echo "Please enter some valid information";
      }
   }
?>

<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> SignUp</title>
<style> 
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: lightblue;
}
button { 
       background-color: red; 
       width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        background-color: lightblue;
    } 
</style> 
</head>  
<body>  
    <center> <h1> Signup now</h1> </center> 
    <center>
        <img src="toppng.com-cool-avatar-transparent-image-cool-boy-avatar-353x400.png" width="200" height="150" alt="Avatar" class="avatar">
    </center>
    <form action="" method="post">
        <div class="container"> 
            <label>Username : </label> 
            <input id="text" type="text" placeholder="Enter Username" name="user_name" required>
            <label>Password : </label> 
            <input id="text" type="password" placeholder="Enter Password" name="password" required>
            <button type="submit" value="signup">Register</button> 
            <input type="checkbox" checked="checked"> Remember me 
        <br>
       Have an Account? <a href="login.php">Login here</a> 
        </div> 
    </form>   
</body>   
</html>

 
