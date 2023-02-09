<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <br>
    <a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/mahasiswa/store" method="post">
		{{ csrf_field() }}
        Nim <input type="number" name="nim" required="required"><br>
		Nama <input type="text" name="nama" required="required"> <br/>
        Alamat <textarea name="alamat" required="required"></textarea> <br/>
		Jenis Kelamin 
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required="required"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required="required"> Perempuan <br>
		Tanggal Lahir <input type="date" name="tanggal_lahir" required="required"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>