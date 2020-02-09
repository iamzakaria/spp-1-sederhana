<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


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
			<label for="nisn">nisn :</label>
	    	<input type="text" name="nisn" class="form-control" id="nisn">
			</li>
			<li>
			<label for="nis">nis :</label>
	    <input type="text" name="nis" class="form-control" id="nis">
			</li>
			<li>
			<label for="nama">nama :</label>
	    <input type="text" name="nama" class="form-control" id="nama">
			</li>
			<li>
			<label for="id_kelas">id_kelas :</label>
	    <input type="text" name="id_kelas" class="form-control" id="id_kelas">
			</li>
			<li>
			<label for="alamat">alamat :</label>
	    <input type="text" name="alamat" class="form-control" id="alamat">
			</li>
			<li>
			<label for="no_telp">no_telp :</label>
	    <input type="text" name="no_telp" class="form-control" id="no_telp">
			</li>
			<li>
			<label for="id_spp">id_spp :</label>
	    <input type="text" name="id_spp" class="form-control" id="id_spp">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>