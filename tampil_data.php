<!DOCTYPE html>
<html>
<head>
    <title>Data Poin Klasemen Piala Asia U-23 Qatar Group B</title>
</head>
<body>
    <h2>Data Poin Klasemen Piala Asia U-23 Qatar Group B</h2>
    <table border="1">
        <tr>
            <th>Nama Negara</th>
            <th>Jumlah Pertandingan</th>
            <th>Jumlah Menang</th>
            <th>Jumlah Seri</th>
            <th>Jumlah Kalah</th>
            <th>Jumlah Poin</th>
            <th>Nama Operator</th>
            <th>NIM Mahasiswa</th>
        </tr>
        <?php
        // Baca isi file db.html
        $file = fopen("db.html", "r");
        if ($file) {
            while (($line = fgets($file)) !== false) {
                // Tampilkan data ke dalam tabel
                echo $line;
            }
            fclose($file);
        } else {
            // Jika file tidak ditemukan atau tidak bisa dibuka
            echo "Gagal membaca file.";
        }
        ?>
    </table>
</body>
</html>