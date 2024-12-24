<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Pemesanan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-md fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#" style="color: orange">Pesona <span class="fw-bold" style="color: blue">Bogor</span></a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav nav-pills ms-auto">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php" style="color: orange">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="Pemesanan/pemesanan.php" style="color: orange">Pemesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="color: orange">Destinasi</a></li>

            <li class="nav-item"><a class="nav-link" href="#" style="color: orange">Contact</a></li>
			<li class="nav-item"><a class="nav-link" href="../Daftar/daftar.php" style="color: orange">Daftar Pemesanan</a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>
	
<?php
include '../../Library/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<main class="flex-shrink-0 mt-5 py-5">
  <div class="container">
    <form method="post" action="lib/proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Detail Pemesanan Paket Wisata #<?=$detail[0]?>
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <div id="nama_pemesan"><?=$detail[1]?></div>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <div id="hp_pemesan"><?=$detail[2]?></div>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <div id="waktu_wisata"><?=$detail[3]?></div>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <div id="hari_wisata"><?=$detail[4]?></div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" <?=($detail[5]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_inap">
			Penginapan (Rp. 1.000.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" <?=($detail[6]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_transport">
			Transportasi (Rp. 1.200.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" <?=($detail[7]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_makan">
			Service/ Makan (Rp. 500.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	   <div id="jumlah_peserta"><?=$detail[5]?></div>
	 </div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <div id="total">Rp. <?=number_format($detail[9],0,',','.')?></div>
	</div>
	<div class="mb-3">
	  <label for="created_at" class="form-label">Waktu Pemesanan</label>
	  <div id="created_at"><?=$detail[11]?></div>
	</div>
  </div>
  <div class="card-footer d-print-none">
    <a href="../Pemesanan/pemesanan.php" class="btn btn-primary">Buat Pesanan Baru</a>
	<a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
  </div>
</div>
<?php } ?>

	
</body>
</html>