<?php
 echo "
 <div id='cssmenu' style='z-index: 100'>
 <ul>
    <li><a href='/silutel'>Home</a></li>
    <li class='active has-sub'><a href='#'>View</a>
       <ul>
          <li class='has-sub'><a href='#'>Inventori</a>
             <ul>
                <li><a href='/silutel/inventori/lihat'>Lihat</a></li>
                <li><a href='/silutel/inventori/ganti'>Ganti</a></li>
                <li><a href='/silutel/inventori/beli'>Beli</a></li>
                <li><a href='/silutel/inventori/beli/lihat-pembelian'>Lihat Pembelian</a></li>
             </ul>
          </li>
          <li class='has-sub'><a href='#'>Laundry</a>
             <ul>
                <li><a href='/silutel/laundry/lihat'>Lihat</a></li>
             </ul>
          </li>
          <li class='has-sub'><a href='#'>Booking</a>
             <ul>
                <li><a href='/silutel/booking/lihat'>Lihat</a></li>
             </ul>
          </li>
       </ul>
    </li>
    <li><a href='/silutel/profile'>Profile / Logout</a></li>
 </ul>
 </div>
 ";

 ?>
