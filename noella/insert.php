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
<input type="password" name="password" placeholder="password"><br><br>
<input type="text" name="age" placeholder="age"><br><br>
<input type="submit" name="insert" value="Signup">
    </form>
    <?php
    include('connect.php');
    if(isset($_POST['insert'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $age=$_POST['age'];
        $insert="INSERT INTO pro VALUES('','$username','$password','$age')";
        $run=mysqli_query($conn,$insert);
    if($run){
       echo" <script>
       window.alert('user inserted');
       window.location.href='login.php';
       </script>";
    }else{
        echo"
        <script>
        window.alert('user inserted');
        window.location.href='login.php';
        </script>";
    }
    }
    
    ?>
</body>
</html>