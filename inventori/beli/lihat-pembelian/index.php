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
      <h1>Lihat Pembelian</h1>
    </div>
    <div class="row">
        <div class="three columns">
          <label for="sortInput">Urut berdasarkan: </label>
          <select class="u-full-width" id="sortInput">
            <option value="Option 1">Nama</option>
            <option value="Option 2">Nomor Nota</option>
            <option value="Option 3">Supplier</option>
            <option value="Option 4">Staf</option>
          </select>
        </div>
        <div class="four columns">
          <br></br>
        </div>
        <div class = "three columns">
    			<div class="caritanggal">
      				<input type="date" class="u-full-width" id="date" placeholder="Enter date" style="height:38px; padding:5px 10px">
    			</div>
    		</div>
    		<div class = "two columns">
    			<button type="search" class="button">Search</button>
    		</div>
    </div>
    <div class="row" style="overflow-x: scroll">
      <table class="u-full-width">
        <thead>
          <tr><th>Nomor Nota</th><th>Waktu</th><th>Supplier</th><th>Staf</th><th>Rincian</th>
        </thead>
        <tbody>
          <tr><td>ABC123</td><td>05/05/2016 11:32</td><td>Winnie</td><td>Jono</td><td><a href='/silutel/inventori/beli/lihat-pembelian/rincian.php'>RINCIAN</a></td></tr>
          <tr><td>ADC124</td><td>05/05/2016 10:45</td><td>Dipsy</td><td>Joni</td><td><a href='/silutel/inventori/beli/lihat-pembelian/rincian.php'>RINCIAN</a></td></tr>
          <tr><td>AFG125</td><td>05/05/2016 11:32</td><td>Winnie</td><td>Joni</td><td><a href='/silutel/inventori/beli/lihat-pembelian/rincian.php'>RINCIAN</a></td></tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
