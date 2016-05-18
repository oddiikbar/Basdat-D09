<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Silu Hotel | Daftar Inventori</title>
  <meta name="description" content="menampilkan daftar inventori yang ada pada sistem SILUTEL">
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
      <h1>Inventori</h1>
    </div>
    <div class="row">
      <div class="three columns">
        <label for="sortInput">Urut berdasarkan: </label>
        <select class="u-full-width" id="sortInput">
          <option value="Option 1">Nama</option>
          <option value="Option 2">Merk</option>
        </select>
      </div>
    </div>
    <div class="row" style="overflow-x: scroll">
      <table class="u-full-width">
        <thead>
          <tr><th>Nama</th><th>Merk</th><th>Stok</th></tr>
        </thead>
        <tbody>
          <tr><td>Handuk</td><td>Terry ABC</td><td>300</td></tr>
          <tr><td>Pasta Gigi</td><td>Pepso ABC</td><td>250</td></tr>
          <tr><td>Sikat Gigi</td><td>Oral ABC</td><td>400</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
