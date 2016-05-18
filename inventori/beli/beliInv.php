<?php
//Future development
// <form><input list='Supplier'> <datalist id='Suppliers'>
// <option value='a'>
// <option value='b'>
// <option value='c'>
// <option value='d'>
// <option value='e'>
// </datalist></form></td>
function getFormInventori() {
	$time="05/05/2016 08:05";
	$nomorNota="XYZ999";
	$total="2,650,000";
	$currentStaf="Po";
  $headerInventori="
  <div>
		<div class='row' id='tableHeader'>
			<h1>Rincian Pembelian Inventori</h1>
		</div>
		<div class='row'>
			<div class='two columns'>
				<h6>Nomor Nota</h6>
			</div>
			<div class='two columns' id ='notaNomor'>
				<h6>$nomorNota</h6>
			</div>
			<div class='four columns' id ='notaNomor'>
				<br></br>
			</div>
			<div class='two columns'>
				<h6>Total :</h6>
			</div>
			<div class='two columns' id ='notaNomor'>
				<h6>$total</h6>
			</div>
		</div>
		<div class='row'>
			<div class='two columns'>
				<h6>Waktu :</h6>
			</div>
			<div class='two columns' id ='notaNomor'>
				<h6>$time</h6>
			</div>
			<div class='four columns' id ='notaNomor'>
				<br></br>
			</div>
			<div class='two columns'>
				<h6>Staf :</h6>
			</div>
			<div class='two columns' id ='notaNomor'>
				<h6>$currentStaf</h6>
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
  ";
  $tableInventori="

  <div class='row' id='tableInventori'>
		<table class='u-full-width' style='overflow-x: scroll'>
			<tr>
				<th>Nama Inventori</th>
				<th>Merk</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total</th>
			</tr>
			<tr>
				<td>Pasta Gigi</td>
				<td>ABC</td>
				<td class='price'>10,000</td>
				<td class='quantity'>50</td>
				<td class='subtotal'>500,000</td>
			</tr>
			<tr>
				<td>Pasta Gigi</td>
				<td>DEF</td>
				<td class='price'>8,000</td>
				<td class='quantity'>50</td>
				<td class ='subtotal'>40,000</td>
			</tr>
			<tr>
				<td>Shampoo</td>
				<td>GHI</td>
				<td class='price'>20,000</td>
				<td class='quantity'>50</td>
				<td class='subtotal'>1,000,000</td>
			</tr
			<tr>
				<td>Shampoo</td>
				<td>IJK</td>
				<td class='price'>15,000</td>
				<td class='quantity'>50</td>
				<td class='subtotal'>750,000</td>
			</tr>
		</table>
	</div>";
  echo $headerInventori.$tableInventori;
}


?>
