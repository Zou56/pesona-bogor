<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Pemesanan</title>
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
            <li class="nav-item"><a class="nav-link" aria-current="page" href="../../index.php" style="color: orange">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="../Pemesanan/pemesanan.php" style="color: orange">Pemesanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="color: orange">Destinasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="color: orange">Contact</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Daftar Pemesanan</a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>
	
<?php
include '../../Library/koneksi.php';

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>
<h1 class="mt-5 py-4 text-center">Daftar Pemesanan</h1>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td><?=$detail['total_tagihan']?></td>
      <td><a href="../Invoice/invoice.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Detail</a>
       <a href="">Edit</a> 
       <a href="../../Library/hapus.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>


	
</body>
</html>
