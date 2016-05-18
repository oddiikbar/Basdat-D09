<?php
  require "beliInv.php";
 ?>
<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Silu Hotel | Beli Inventori</title>
  <meta name="description" content="menampilkan daftar laundry yang ada pada sistem SILUTEL">
  <meta name="author" content="D09">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/silutel/css/normalize.css">
  <link rel="stylesheet" href="/silutel/css/skeleton.css">
  <link rel="stylesheet" href="/silutel/css/menu-styles.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="/silutel/images/favicon.png">

  <!-- JS
  Menubar -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="/silutel/js/menu-script.js"></script>

</head>
<body>
  <?php
  require '../../req/menubar.php';
   ?>
   <div class="container">
     <?php
        getFormInventori()
      ?>
   </div>
</body>
</html>
<!--
