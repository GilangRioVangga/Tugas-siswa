<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>LIST DATA SISWA YANG SUDAH MENDAFTAR</h1>
		<h3>DAFTARLAH SEBELUM TERLAMBAT</h3>
	</div>
	<br/>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);

        while($siswa2 = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa2['id']."</td>";
            echo "<td>".$siswa2['nama']."</td>";
            echo "<td>".$siswa2['kelas']."</td>";
            echo "<td>".$siswa2['jurusan']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa2['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa2['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>