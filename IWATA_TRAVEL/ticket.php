<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IWATA-TRAVEL.COM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/iwata.css" rel="stylesheet">

  </head>

  <body>
    <!--header-->
    <div class="container">
      <div class="header">
        <img src="img/bg_head.gif" width="100%" style=" border-radius: 7px 7px 0 0;">
      </div>
    </div>
    <!--end header-->

<!-- Navigation -->
    <div class="container">
      <div class="menu" style="border-bottom: 8px solid #f4436d; background-color: black;">
          <ul><left>
            <li><a href="index.php">HOME&nbsp; </a></li>
            <li><a href="tour.php"> &nbsp;TOUR&nbsp; </a></li>
            <li><a href="ticket.php"> &nbsp;TICKET&nbsp; </a></li>
            <li><a href="hotel.php"> &nbsp;HOTEL&nbsp; </a></li>
            <li><a href="package.php"> &nbsp;PACKAGE&nbsp; </a></li>
            <li><a href="aboutus.php"> &nbsp;ABOUT US</a></li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li>
            <form class="form-inline my-1 my-sm-0-0">
              <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
            </form></li>
        </left></ul>
      </div>
    </div>
    
<!-- Page Content -->
    <div class="container">
    <div class="content">
      <!-- sidebar-->
      <div class="sidebar" style="min-height: 790px;">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-9">
            <h5>CONTACT US</h5>
          </div>
          <div class="col-md-1">
            
          </div>
        </div>

        <div class="row">
          <div class="col-sm-1">
            
          </div>
          <div class="col-sm-auto">
            <br>
        <ul class="menu-wrap">
          <li>> JABODETABEK
              <ul class="submenu-wrap">
                  <li><a href="jakarta.php">JAKARTA</a></li>
                  <li><a href="tangerang.php">TANGERANG</a></li>
              </ul>
          </li>
          <li>> JAWA
              <ul class="submenu-wrap">
                  <li><a href="jawabarat.php">JAWA BARAT</a></li>
              </ul>
          </li>
          <li>> SUMATERA
              <ul class="submenu-wrap">
                  <li><a href="lampung.php">LAMPUNG</a></li>
                  <li><a href="bangka.php">BANGKA BELITUNG</a></li>
              </ul>
          </li>
          <li>> KALIMANTAN
              <ul class="submenu-wrap">
                  <li><a href="bontang.php">BONTANG</a></li>
              </ul>
          </li>
        </ul>
        </div>
      </div>
  </div>
      <!--end sidebar-->
  

      <!-- main -->
      <div class="main" style="min-height: 790px;">        
        <div class="mainhome">
          <p style="font-family: times new roman; font-size: 16px;">Home > Ticket</p>
         


        <hr>
        <p style="text-align: center; font-family: ravie; font-size:  120%">Ticket Pesawat!!</p>
        <hr>

        <center>
           	<img src="img/pesawat-Garuda.jpg" width="200px" height="111px" style="border-radius: 5px;">
        	<img src="img/PanduandanTipsLengkapBagiyangBaruPertamaKaliNaikPesawat.jpg" width="200px" style="border-radius: 5px;">
        </center>

        <br>

        <form class="bg-lightdark" action="proses_simpan.php" method="post" name="pesawat" id="tiket" style="margin:5px; auto 0;padding:0;width:auto; border-radius: 5px; background-color: lightgray;">
			<table width="600" border="0" align="center" cellpadding="0" cellspacing="10">
				<div class="f-center" style="text-align: center;"><h1>Penginputan Data Pesawat</h1></div>
				<hr>
				<!--<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Nomor Reservasi</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><input class="form-control" type="text" name="nomor_reservasi"></td>
				</tr>-->
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Nama Pemesan</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><input class="form-control" type="text" name="nama_pemesan" required="Nama Harus Diisi"></td>
				</tr>
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Email</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><input class="form-control" type="Email" name="email_pemesan" required="Email Harus Diisi"></td>
				</tr>
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Umur</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><input class="form-control" type="date" name="nama_pemesan" required="Nama Harus Diisi"></td>
				</tr>
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Dari</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><select class="form-control" name="dari" id="dari" required="Dari Harus dipilih">
				        <option value="Jakarta">Jakarta</option>
				        <option value="Semarang">Semarang</option>
				        <option value="Surabaya">Surabaya</option>
				        <option value="Medan">Medan</option>
				        <option value="Pontianak">Pontianak</option>
				        <option value="Makasar">Makasar</option>
				        <option value="Denpasar">Denpasar</option>
				      </select></td>
				</tr>
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Tujuan</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><select class="form-control" name="tujuan" id="tujuan" required="Tujuan Harus dipilih">
				        <option value="Jakarta">Jakarta</option>
				        <option value="Semarang">Semarang</option>
				        <option value="Surabaya">Surabaya</option>
				        <option value="Medan">Medan</option>
				        <option value="Pontianak">Pontianak</option>
				        <option value="Makasar">Makasar</option>
				        <option value="Denpasar">Denpasar</option>
				      </select></td>
				</tr>
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Jumlah</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">:</td>
				      <td><select class="form-control" name="jumlah" id="jumlah" required="Jumlah Harus dipilih">
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
				        <option value="5">5</option>
				        <option value="6">6</option>
				        <option value="7">7</option>
				        <option value="8">8</option>
				        <option value="9">9</option>
				      </select></td>
				</tr>
				<tr>
				      <td class="td-title" style="margin-bottom:10px;padding-bottom:10px;">Jenis Tiket</td>
				      <td style="margin-bottom:10px;padding-bottom:10px;"></td>
				      <td style="margin-bottom:10px;padding-bottom:10px;">
				        <p>
				          <label>
				            <input type="radio" name="jenis_tiket" value="reguler" id="jenis_tiket">Reguler</label>
				          <br>
				          <label>
				            <input type="radio" name="jenis_tiket" value="promosi" id="jenis_tiket">Promosi</label>
				          <br>
				        </p>
				      </td>
				</tr>
				</table>
				<div class="submit" style="text-align:center;">
				<input class="btn btn-primary" type="submit" name="button" id="button" value="SIMPAN">
				<input class="btn btn-danger" type="reset" name="button2" id="button2" value="RESET">
				</div>
			<br>
		</form>



      </div>
    </div>
      <!-- end main-->

    </div>
    </div>
    <!-- /.container -->

   <!-- Footer -->
      <div class="container">
        <div class="footer">
          <img src="img/bg_foot.gif" width="100%" style=" border-radius: 0 0 7px 7px;">
        </div>
      </div>
      <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

