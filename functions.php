<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_spp");


function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$nisn = htmlspecialchars($data["nisn"]);
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$id_spp = htmlspecialchars($data["id_spp"]);

	$query = "INSERT INTO siswa
				VALUES
			  ('', '$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nisn = htmlspecialchars($data["nisn"]);
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$id_kelas = htmlspecialchars($data["id_kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$id_spp = htmlspecialchars($data["id_spp"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	$query = "UPDATE siswa SET
				nisn = '$nisn',
				nis = '$nis',
				nama = '$nama',
				id_kelas = '$id_kelas',
				alamat = '$alamat',
				no_telp = '$no_telp',
				id_spp = '$id_spp',
				gambar = '$gambar'
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}















?>