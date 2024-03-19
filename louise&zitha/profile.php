<?php
session_start();
include("conn.php");
$email=$_session['email'];
$select="SELECT * FROM user WHERE user";
$execute=$conn->query()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{ 
        margin-top:100px;
        width:300px;
        display: flex;
        margin:30px;
    }
</style>
<body>
    <center>
    <table>
        <tr>
        <th>NAMES</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>DATE</th>

        </tr>
    </table>
    </center>
    
</body>
</html>