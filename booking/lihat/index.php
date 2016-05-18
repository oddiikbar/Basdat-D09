<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Silu Hotel | Daftar Booking</title>
    <meta name="description" content="menampilkan daftar booking yang ada pada SILUTEL">
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
        <h1>Booking</h1>
      </div>
      <div class="row">
        <div class="three columns">
          <label for="sortInput">Urut berdasarkan: </label>
          <select class="u-full-width" id="sortInput">
            <option value="Option 1">Invoice</option>
            <option value="Option 2">Tanggal Datang</option>
            <option value="Option 3">Tanggal Pergi</option>
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
         	 		<tr>
          			<th>Invoice</th>
          			<th>Tanggal Datang</th>
          			<th>Tanggal Pergi</th>
          			<th>Jumlah</th>
          			<th>Discount</th>
          			<th>Total</th>
          			<th>Nama Tamu</th>
        			</tr>
        		</thead>
        		<tbody>
          			<tr>
            			<td>ABC456</td>
            			<td>5/05/2016 20:14</td>
    					<td>08/05/2016 10:00</td>
    					<td>2</td>
    					<td>0</td>
    					<td>4,500,000</td>
    					<td>Anto</td>
          			</tr>
          			<tr>
            			<td>ABC789</td>
            			<td>05/05/2016 15:44</td>
    					<td>07/05/2016 10:00</td>
    					<td>1</td>
    					<td>0</td>
    					<td>1,800,000</td>
    					<td>Budi</td>
          			</tr>
          			<tr>
            			<td>ABC123</td>
            			<td>05/05/2016 13:24</td>
    					<td>09/05/2016 09:00</td>
    					<td>3</td>
    					<td>0</td>
    					<td>3,600,000</td>
    					<td>Chandra</td>
          			</tr>
        		</tbody>
    		</table>
      </div>

    </div>

	</body>
</html>
