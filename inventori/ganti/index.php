<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Silu Hotel | Ganti Inventori</title>
  <meta name="description" content="ganti inventori pada sistem SILUTEL">
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
    <div class="row">
      <h1>Ganti Inventori</h1>
    </div>
    <div class="row">
      <div class="two columns">
        <h6>Nama Inventori</h6>
      </div>
      <div class="one-third column">
        <select class="u-full-width">
						<option>Handuk</option>
						<option>Sprei</option>
						<option>Selimut</option>
				</select>
      </div>
    </div>
    <div class="row">
      <div class="two columns">
        <h6>Merk</h6>
      </div>
      <div class="one-third column">
        <select class="u-full-width">
						<option>ABC</option>
						<option>DEF</option>
						<option>GHI</option>
				</select>
      </div>
    </div>
    <div class="row">
      <div class="two columns">
        <h6>Jumlah</h6>
      </div>
      <div class="one-third column">
        <input type="number" class="u-full-width" id="jumlah">
      </div>
    </div>
    <div class="row">
      <div class="two columns">
        <h6>Alasan</h6>
      </div>
      <div class="one-third column">
        <textarea class="u-full-width" rows="10" cols="100"></textarea>
      </div>
      <div class="two columns">
        <input class="button-primary" type="submit" id="buttonsimpan" value="Save">
      </div>
    </div>
  </div>
</body>
</html>
