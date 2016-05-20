<?php
//  session_start();
//  if(!isset($_SESSION["userlogin"])){
//    header("Location: ../../");
//  }
?>
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
          <form method="post">
          <label for="sortInput">Urut berdasarkan: </label>
          <select class="u-full-width" name="sortInput">
            <option value="Invoice">Invoice</option>
            <option value="Tanggal Datang">Tanggal Datang</option>
            <option value="Tanggal Pergi">Tanggal Pergi</option>
          </select>
          <select class="u-full-width" name="sortiran">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
          </select>
          <input type="submit" name="submit" value="Urutkan" />
          </form>
          <?php 
            $selected_val="";
            $selected_urut="";
            if(isset($_POST['submit'])){
              $selected_val = $_POST['sortInput'];  // Storing Selected Value In Variable
              $selected_urut = $_POST['sortiran'];
            }  
          ?>
        </div>
        <div class="four columns">
          <br></br>
        </div>
        <div class = "three columns">
    			<div class="caritanggal">
      				<input type="date" method="post" ="u-full-width" id="date" placeholder="Enter date" style="height:38px; padding:5px 10px">
    			</div>
    		</div>
    		<div class = "two columns">
    			<input type="search" name="search" class="button" value="Search">
          <?php 
            if(isset($_POST['search'])){
              $selected_date = $_POST['date'];  // Storing Selected Value In Variable
              echo $selected_date;
            }  
          ?>
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
                <?php
                  $conn = Connectpgdb();
                  function Connectpgdb()
                  { 

                    $host        = "host=127.0.0.1";
                    $port        = "port=5432";
                    $dbname      = "dbname=Silutel";
                    $credentials = "user=postgres password=f1k121";

                    $db = pg_connect( "$host $port $dbname $credentials"  );
                    if(!$db){
                      echo "Error : Unable to open database";
                    } else {
                      $atur = "SET search_path TO Silutel";
                      pg_query($db,$atur);
                      return $db;
                    }
                  }

                  $urut = "SELECT * FROM invoice ";

                  if($selected_val="Invoice" && $selected_urut=="asc"){
                    $urut = "SELECT * FROM invoice ORDER BY nomorinvoice ASC";
                  }
                  else if($selected_val="Tanggal Datang" && $selected_urut=="asc"){
                    $urut = "SELECT * FROM invoice ORDER BY tanggaldatang ASC";
                  }
                  else if($selected_val="Tanggal Pergi" && $selected_urut=="asc"){
                    $urut = "SELECT * FROM invoice ORDER BY tanggalpergi ASC";
                  }
                  else if($selected_val="Invoice" && $selected_urut=="desc"){
                    $urut = "SELECT * FROM invoice ORDER BY nomorinvoice DESC";
                  }
                  else if($selected_val="Tanggal Datang" && $selected_urut=="desc"){
                    $urut = "SELECT * FROM invoice ORDER BY tanggaldatang DESC";
                  }
                  else if($selected_val="Tanggal Pergi" && $selected_urut=="desc"){
                    $urut = "SELECT * FROM invoice ORDER BY tanggalpergi DESC";
                  }

                  $results = pg_query($conn,$urut);
                  if(pg_num_rows($results)>0){
                    while($row = pg_fetch_assoc($results)){
                      $idnya = $row["idtamu"];
                      $querynama = "SELECT nama FROM tamu WHERE id = '$idnya'";
                      $namatamu = pg_query($conn,$querynama);
                      while($row2 = pg_fetch_assoc($namatamu)){
                        echo "<tr><td>".$row["nomorinvoice"]."</td><td>".$row["tanggaldatang"]."</td><td>".$row["tanggalpergi"]."</td><td>".
                        $row["jumlah"]."</td><td>".$row["discount"]."</td><td>".$row["total"]."</td><td>".$row2["nama"]."</td></tr>";
                      }
                    }
                  }
                  pg_close($conn);
        ?>
        		</tbody>
    		</table>
      </div>
    </div>
	</body>
</html>
