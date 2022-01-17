<?php
include "connection.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>

<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <div class="center">
        <h1>Online Quiz System</h1>
        <h2>Login</h2>
        <form method="POST" name="form2" enctype="multipart/form-data" >

            <div class="txt_field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="password"name="pass" required>
                <label>Password</label>
            </div>
            
            <input type="submit" name="login" value="Login">
            <div class="signup_link">If already member !
                <a href="register.php">Login</a>

                <div class="alert alert-danger"  id="fail" style="display: none">
            <strong>Does Not Match</strong> Username or Password is Invalid.
            </div>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST["login"]))
    {
        $count=0;
        $res=mysqli_query($conn,"select * from registration_quiz where username='$_POST[username]' && password='$_POST[pass]'");

        $count=mysqli_num_rows($res);
        if($count==0)
        {
             ?>
            <script type="text/javascript">
           
          document.getElementById("fail").style.display="block";
        </script>
        <?php

        }
        else{
            ?>
             <script type="text/javascript">
                 window.location="demo.php";
                 </script>
                 <?php

        }
    
    }
    
    ?>
</body>
</html>