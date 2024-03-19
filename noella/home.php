  <?php   
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
   <tr>
    <th>ID</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
    <th>AGE</th>
    <th colspan="2">ACTION</th>
   </tr>
   <?php
   include('connect.php');
   $sql="select* from pro";
   $run=mysqli_query($conn,$sql);

   while($row= mysqli_fetch_array($run)){
    ?>
  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['password']?></td>
    <td><?php echo $row['age']?></td>
    <td><a href="update.php?u=<?php echo $row['id']?>">UPDATE</a></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>">DELETE</a></td>

  </tr>


<?php
   }?>
   
 

    </table>
</body>
</html>