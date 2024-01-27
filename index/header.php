<?php 

if(isset($_SESSION['username'])){
  header("location:../view_user/user-index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../bootstrap/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet"> <!--load all styles icons-->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/Style.css" rel="stylesheet">
    <title>Ifix Home</title>
</head>
<body>