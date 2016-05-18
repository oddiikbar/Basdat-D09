<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Silu Hotel | Lihat Pembelian</title>
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
  require '../../../req/menubar.php';
   ?>
  <div class="account">
    <div class="">

    </div>
  </div>
  <div class="container">
    <div class="row">
    </div>

    <div>
      <div class='row' id='tableHeader'>
        <h1>Rincian Pembelian Inventori</h1>
      </div>
      <div class='row'>
        <div class='two columns'>
          <h6>Nomor Nota</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>XYZ999</h6>
        </div>
        <div class='four columns' id ='notaNomor'>
          <br></br>
        </div>
        <div class='two columns'>
          <h6>Total :</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>654.000</h6>
        </div>
      </div>
      <div class='row'>
        <div class='two columns'>
          <h6>Waktu :</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>05/05/2016 08:05</h6>
        </div>
        <div class='four columns' id ='notaNomor'>
          <br></br>
        </div>
        <div class='two columns'>
          <h6>Staf :</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>Po</h6>
        </div>
      </div>
      <div class='row'>
        <div class='two columns'>
          <h6>Supplier :</h6>
        </div>
        <div class='two columns' id ='notaNomor'>
          <h6>Good life</h6>
        </div>
      </div>
    </div>
    <div class="row" style="overflow-x: scroll">
      <table class="u-full-width">
        <thead>
          <tr><th>Nama Inventori</th><th>Merk</th><th>Harga</th><th>Jumlah</th><th>Total</th>
        </thead>
        <tbody>
          <tr><td>Pasta Gigi</td><td>ABC</td><td>19.000</td><td>9</td><td>171.000</td></tr>
          <tr><td>Pasta Gigi</td><td>DEF</td><td>21.000</td><td>11</td><td>231.000</td></tr>
          <tr><td>Shampoo</td><td>GHI</td><td>12.000</td><td>21</td><td>252.000</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
