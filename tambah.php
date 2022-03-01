<?php 
//koneksi
require "functions.php";

//cek apakah tombil submit sudah di tekan
if(isset($_POST["submit"])){
	//cek apakah data berhasil ditambahkan
	if( tambah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script> 
			";

	}else{
		echo "
			<script>
				alert('data gagal ditambahkan!');
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
	<ul>
		<li>
			<label for="nip">NIM :</label>
			<input type="text" name="nip" id="nip" required>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required>
		</li>
		<li>
			<label for="email">email :</label>
			<input type="text" name="email" id="email" required>
		</li>
		<li>
			<label for="jurusan">jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required>
		</li>
		<li>
			<label for="gambar">gambar :</label>
			<input type="text" name="gambar" id="gambar" required>
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>
	</ul>

</form>
</body>
</html>