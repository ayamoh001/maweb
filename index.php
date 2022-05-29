<?php 
session_start();
include "./php/con_db.php";
include "./php/form.php";
include "./php/selectOrders.php";
include "./php/close.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--<meta http-equiv="refresh" content="30">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Portfolio and ordering website">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP,Bootstrap 5,PWA,Python,Python,Portfolio,Web design,Design order">
    <meta name="author" content="Mohamed Ayaou">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar" content="#151515" />
    <meta name="theme-color" content="#fff">
    <meta rel="apple-touch-icon" href="./imgs/my-icon.png">
    <link rel="manifest" href="manifest.json">
    <style>
      <?php include "./cdns/short-icon.css" ?>
      <?php include "./cdns/short-bs.css" ?>
    </style>
    <title>MA-WEB</title>

</head>

<body class="bg-warning">

<?php include "./Home_parts/header.php";?>
<?php include "./Home_parts/resume.php";?>
<?php include "./Home_parts/media.php";?>
<?php include "./Home_parts/ads.php";?>
<?php include "./Home_parts/portfolio.php";?>
<?php include "./Home_parts/contact.php";?>
<?php include "./Home_parts/show.php";?>
<?php include "./Home_parts/footer.php";?>

</body>
</html>

<script defer src="./js/bootstrap.bundle.min.js"></script>
<script defer src="./js/script.js"></script>
<script defer src="./app.js"></script>
