<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>


<title>Registration System</title>
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
    <title>Document</title>
</head>
<body>
    <div class="center">
        <h1>SignUP</h1>
        <form method="POST" name="form1" enctype="multipart/form-data" >


            <div class="txt_field">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>


            <div class="txt_field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="text" name="fname" required>
                <label>First Name</label>
            </div>

            <div class="txt_field">
                <input type="text" name="lname" required>
                <label>Last Name</label>
            </div>

            <div class="txt_field">
                <input type="password"name="pass" required>
                <label>Password</label>
            </div>

          
            
            <input type="submit" name="submit1" value="Register">
            <div class="signup_link">If already member !
                <a href="login.php">Login</a>
            </div>

            <div class="alert alert-success" id="success" style="display: none">
            <strong>Success!</strong> Account Registration Successfully.
            </div>

            <div class="alert alert-danger"  id="fail" style="display: none">
            <strong>Danger!</strong> Username is Already Exist.
            </div>

            
</div>

            <?php
            if(isset($_POST["submit1"]))
            {
                $count=0; 
                $res=mysqli_query($conn,"select * from registration_quiz where username='$_POST[username]'")or die(mysqli_error($conn));
                $count=mysqli_num_rows($res);

                if($count>0)
                {
                    ?>
                    <script type="text/javascript">
                        document.getElementById("success").style.display="none";
                      document.getElementById("fail").style.display="block";
                    </script>
                    <?php
                }
                else{
                    mysqli_query($conn,"insert into  registration_quiz values (NULL,'$_POST[email]','$_POST[username]','$_POST[fname]','$_POST[lname]','$_POST[pass]')") or die(mysqli_error($conn));

                    
                    ?>
                    <script type="text/javascript">
                      document.getElementById("success").style.display="block";
                      document.getElementById("fail").style.display="none";
                    </script>
                    <?php
                }
            }
            
            
            ?>
        </form>
    </div>
</body>
</html>