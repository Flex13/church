<?php
ob_start();
session_start();
if (isset($_SESSION['id'])) {
  unset($_SESSION['Guest']);
  include_once('ajax/config/db.php');
  include_once('ajax/config/functions.php');
  unset($_SESSION['Guest']);
  $start_time = microtime(TRUE);
  $pageName = basename($_SERVER['PHP_SELF']);
  $ip = getRealIpUser();

  $userID = $_SESSION['id'];
} else if (isset($_SESSION['Guest'])) {
  $_SESSION['Guest'] = 'Guest';
  include_once('ajax/config/db.php');
  include_once('ajax/config/functions.php');
  unset($_SESSION['id']);
  $start_time = microtime(TRUE);
  $pageName = basename($_SERVER['PHP_SELF']);
  $ip = getRealIpUser();
  $userID = $_SESSION['Guest'];
} else {
  include_once('ajax/config/db.php');
  include_once('ajax/config/functions.php');
  $start_time = microtime(TRUE);
  $pageName = basename($_SERVER['PHP_SELF']);
  $ip = getRealIpUser();
  $_SESSION['Guest'] = 'Guest';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>HPS AFM VAAL</title>

  <meta name="description" content="We exist to bring men and women to live the tangible reality of the promises that God made in His Word, the Bible." />
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Church, AFM, Vaal, Vaal Branch AFM ">
  <meta name="robots" content="index, follow">

  <meta name="copyright" content="Digital&Analytica">
  <meta name="language" content="EN">
  <meta name="author" content="Sibanye Bukani">
  <meta name="creationdate" content="1 August 2020">
  <meta name="distribution" content="global">
  <meta name="rating" content="general">

  <meta property="business:contact_data:locality" content="Vanderbijpark">
  <meta property="business:contact_data:region" content="Vaal">
  <meta property="business:contact_data:country_name" content="South Africa">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="HPS AFM VAAL">
  <meta property="og:url" content="https://hpsaafmvaal.com">
  <meta property="og:title" content="HPS AFM VAAL">
  <meta property="og:description" content="We exist to bring men and women to live the tangible reality of the promises that God made in His Word, the Bible.">
  <meta property="og:image" content="assets/img/churchLogo2.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://hpsaafmvaal.com">
  <meta property="twitter:title" content="HPS AFM VAAL">
  <meta property="twitter:description" content="We exist to bring men and women to live the tangible reality of the promises that God made in His Word, the Bible.">
  <meta property="twitter:image" content="assets/img/churchLogo2.png">

  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons/favicon-16x16.png">
  <link rel="manifest" href="assets/img/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  

  <!--Slick-->
  <script src="assets/js/jquery.js" type="text/javascript" language="javascript"></script>
  <script src="assets/js/sweetAlert.js" type="text/javascript" language="javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



</head>

<body>