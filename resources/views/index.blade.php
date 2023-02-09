<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h3>DATA MAHASISWA</h3>
    <br>
    <a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
	<br>
	<br/>
    <table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->nim}}</td>
			<td>{{ $m->nama }}</td>
			<td>{{ $m->alamat }}</td>
            <td>{{ $m->jenis_kelamin}}</td>
			<td>{{ $m->tanggal_lahir}}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $m->id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>