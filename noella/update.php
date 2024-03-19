<?php
include('connect.php');
if(isset($GET['u'])){
$uid=$GET['id'];
$sql="SELECT * FROM pro WHERE id='$uid'";
$run=mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($run)){
    ?>
<form action="" method="get">
    <table border="1">
<tr>
    <td><input type="text" name="id"  value="<?php echo $row['id']?>"></td>
</tr><br><br>
<tr>
    <td><input type="text" name="username" value="<?php echo $row['username']?>"></td>
</tr><br><br>
<tr>
    <td><input type="text" name="password" value="<?php echo $row['password']?>"></td>
</tr><br><br>
<tr>
    <td><input type="text" name="age" value="<?php echo $row['age']?>"></td>
</tr><br><br>
<tr>
    <td><input type="submit" name="update"></td>
</tr>
</form>
<?php
}}?>
</table>