<?php 
error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = " ";
	$database = "universitas";
	$conn=mysqli_connect($host, $user, $pass, $database);
	if (isset($_POST['KIRIM'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jenis_kelamin = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fakkultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		$password = $_POST['password'];
		if (strlen($nama)==35) {
				if (strlen($nama)<10) {
					if (strlen($password)==10) {
						$qry = mysqli_query($conn, "INSERT INTO 'db_mahasiswa'('nama','nim', 'kelas','jk'
							,'hobi', 'fakultas', 'alamat','password')  
									VALUES  ('nama','nim', 'kelas','jk'
							,'hobi', 'fakultas', 'alamat','password')");
						
						echo "Regristrasi Berhasil";
					}else{
						echo "Regristrasi Gagal";
					}
			}else{
				echo "Regristrasi Gagal";
			}
			}else{
				echo "Regristrasi Gagal";
			}
	
	}		
?>