<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h3>EDIT DATA MAHASISWA</h3>
    <br>
    <a href="/mahasiswa"> Kembali</a>
	<br/>
	<br/>
 
    @foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $m->id }}"> <br/>
        Nim <input type="number" name="nim" required="required" value="{{ $m->nim }}"> <br/>
		Nama <input type="text" name="nama" required="required" value="{{ $m->nama }}"> <br/>
        Alamat <textarea name="alamat" required="required">{{ $m->alamat }}</textarea> <br/>
		Jenis Kelamin 
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required="required"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required="required"> Perempuan
        <br/>
		Tanggal Lahir <input type="date" name="tanggal_lahir" required="required" value="{{ $m->tanggal_lahir }}"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>
    @endforeach
</body>
</html>