<?php 
//koneksi
require "functions.php";
//ambill data url
$id=$_GET["id"];
//query data mahasisnya
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];


//cek apakah tombil submit sudah di tekan
if(isset($_POST["submit"])){
	//cek apakah data berhasil ubah
	if( ubah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script> 
			";

	}else{
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script> 
			";
	}
	//cek data berhasil dijalankan atau tidak
	// if(mysqli_affected_rows($conn) > 0){
	// 	echo "berhasil";
	// }else{
	// 	echo "gagal";
	// 	echo "<br>";
	// 	echo mysqli_error($conn);
	// }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
<h1>Tambah data mahasiswa</h1>
<form action="" method="post">
	<input type="hidden" name="id" value="<?= $mhs["id"];?>">
	<ul>
		<li>
			<label for="nip">NIM :</label>
			<input type="text" name="nim" id="nip" required value="<?= $mhs["nim"];?>">
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
		</li>
		<li>
			<label for="email">email :</label>
			<input type="text" name="email" id="email" required value="<?= $mhs["email"];?>">
		</li>
		<li>
			<label for="jurusan">jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
		</li>
		<li>
			<label for="gambar">gambar :</label>
			<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"];?>">
		</li>
		<li>
			<button type="submit" name="submit">Ubah Data</button>
		</li>
	</ul>
</form>
</body>
</html>