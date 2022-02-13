<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Darkwebtester | Login </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Ciao, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Benvenuto, qui puoi vedere le anteprime dei siti.</h1>
    <p>
       <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

    <p> 
        <a href="assets/img/portfolio/portfolio-1.jpg" class="btn btn-danger ml-3"> My website</a>
</p>

<p> 
        <a href="assets/img/portfolio/portfolio-2.jpg" class="btn btn-danger ml-3"> My Blog</a>
</p>

<p> 
        <a href="assets/img/portfolio/portfolio-3.jpg" class="btn btn-danger ml-3"> Mr_Emme website</a>
</p>

<p> 
        <a href="assets/img/portfolio/portfolio-4.jpg" class="btn btn-danger ml-3"> 0phinyx website</a>
</p>
<p> 
        <a href="assets/img/portfolio/portfolio-5.jpg" class="btn btn-danger ml-3"> Sweety website</a>
</p>
<p> 
        <a href="assets/img/portfolio/portfolio-6.jpg" class="btn btn-danger ml-3"> Darkwebtester</a>
</p>
</body>
</html>