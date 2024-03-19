<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="user_name" placeholder="user_name"><br></br>
    <input type="email" name="user_email" placeholder="user_email"><br></br>
    <input type="password" name="user_password" placeholder="user_password"><br></br>
    <input type="password" name="confirm_password" placeholder="confirm_password" required minlength="8" maxlength="12"><br></br>
    <input type="tel" name="user_phone" placeholder="user_phone" required minlength="10" maxlength="10"><br></br>
    <button  type=""name="submit">submit</button>
    </form>
    <?php
    include 'conn.php';
    if(isset($_POST['submit'])){
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $password=$_POST['user_password'];
    $cpassword=$_POST['confirm_password'];
    $tel=$_POST['user_phone'];
    $encryptedpass=md5($password);
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
    $insert="SELECT*FROM user WHERE user_email='$email'";
    $binquery=$conn->query($insert);
    $count=mysqli_num_rows($binquery);
    if($count>0){
        echo"<script>
    alert('email already exist')
    </script>";
    }
    else{
    $insert="INSERT INTO user (user_name,user_email,user_phone,user_password) VALUES('$name','$email','$tel','$encryptedpass')";
    $sql=$conn->query($insert);
    if($sql=== TRUE){
        echo"<script>
        alert('account created')
        </script>";

    }else{
        echo"<script>
        alert('account  not created')
        </script>";

    }
    }
    }
    ?>
    
</body>
</html>
<?php

?>