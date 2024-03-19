<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<input type="text" name="username" placeholder="username"><br><br>
<input type="text" name="password" placeholder="password"><br><br>
<input type="submit" name="login" value="login">
    </form>
    <?php
    include('connect.php');
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $login="SELECT * FROM pro WHERE usernsme='$username' AND password='$password'";
        $run=mysqli_query($conn,$login);
        $row=mysqli_fetch_array($run);
    if(is_array($row)){
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
       echo" <script>
       window.alert('user logged in');
       window.location.href='login.php';
       </script>";
    }else{
        echo"
        <script>
        window.alert('user not log');
        window.location.href='login.php';
        </script>";
    }
    }
    
    ?>
</body>
</html>