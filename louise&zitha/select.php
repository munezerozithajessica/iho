<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    
    <input type="email" name="user_email" placeholder="user_email"><br></br>
    <input type="password" name="user_password" placeholder="user_password"><br></br>
    <input type="password" name="confirm_password" placeholder="confirm_password" required minlength="8" maxlength="12"><br></br>
    <button  type=""name="submit">LOGIN</button>
    </form>
    <?php
    include 'conn.php';
    if(isset($_POST['submit'])){
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];
    $cpassword=$_POST['confirm_password'];
    if($password!= $cpassword){
    echo"<script>
    alert('password doesn't match')
    </script>";
    }
    else{
    echo"<script>
    alert('password match')
    </script>";
    }
    $insert="SELECT*FROM user WHERE 
    }
    ?>
    
</body>
</html>
<?php

?>