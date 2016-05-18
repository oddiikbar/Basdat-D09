<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Silu Hotel | Profile</title>
  <meta name="description" content="menampilkan daftar pembelian yang ada pada sistem SILUTEL">
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
  require '../req/menubar.php';
   ?>
  <div class="container">
    <div class="row">
    </div>

    <div>
      <div class='row' id='tableHeader'>
        <h1>PROFILE</h1>
      </div>
      <div class='row'>
        <div class='two columns'>
          <h6>Nama</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>Budi</h6>
        </div>
      </div>
      <div class='row'>
        <div class='two columns'>
          <h6>Email</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>budi@gmail.com</h6>
        </div>
      </div>
      <div class='row'>
        <div class='two columns'>
          <h6>Role</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>Manager</h6>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
