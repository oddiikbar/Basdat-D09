<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Silu Hotel | Daftar Laundry</title>
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
  <div class="account">
    <div class="">

    </div>
  </div>
  <div class="container">
    <div class="row">
      <h1>Laundry</h1>
    </div>
    <div class="row">
        <div class="three columns">
          <label for="sortInput">Urut berdasarkan: </label>
          <select class="u-full-width" id="sortInput">
            <option value="Option 1">Nama</option>
            <option value="Option 2">Merk</option>
            <option value="Option 3">Staf</option>
            <option value="Option 4">Waktu</option>
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
          <tr><th>Nama</th><th>Merk</th><th>Staf</th><th>Waktu</th><th>Jumlah</th><th>Harga</th><th>Total</th><th>Tanggal Ambil</th></tr>
        </thead>
        <tbody>
          <tr><td>Handuk</td><td>Terry ABC</td><td>Winnie</td><td>05/05/2016 11:32</td><td>15</td><td>5000</td><td>75000</td><td>06/05/2016 12:34</td></tr>
          <tr><td>Handuk</td><td>Terry ABC</td><td>Dipsy</td><td>05/05/2016 10:45</td><td>10</td><td>5000</td><td>50000</td><td>06/05/2016 12:34</td></tr>
          <tr><td>Handuk</td><td>Terry ABC</td><td>Winnie</td><td>05/05/2016 11:32</td><td>15</td><td>5000</td><td>75000</td><td>06/05/2016 12:34</td></tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
