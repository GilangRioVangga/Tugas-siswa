<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>FORMULIR PENDAFTARAN</h1>
		<h3>DAFTARLAH SEBELUM TERLAMBAT</h3>
	</div>
	<br/>
    <CENTER>
    <h2>jANGAN MASUKAN ID YANG SUDAH DI PAKAI SISWA LAIN</h2>
    <h2>UNTUK LIST ID BISA DILIHAT DI FORM PENDAFTAR</h2>
    <form action="proses-pendaftaran.php" method="POST">
</CENTER>

        <fieldset>
        <p>
            <label for="id">ID: </label>
            <input type="number" name="ID" placeholder="ID" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
        <label for="kelas">Kelas: </label>
            <input type="text" name="kelas" placeholder="Kelas" />
        </p>
        <p>
        <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" placeholder="Jurusan" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>