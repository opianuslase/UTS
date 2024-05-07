<!DOCTYPE html>
<html>
<head>
    <title>Input Data Piala Asia U-23 Qatar Group B</title>
</head>
<body>
    <h2>Input Data Piala Asia U-23 Qatar Group B</h2>
    <form method="post" action="simpan_data.php">
        <label for="nama_negara">Nama Negara:</label>
        <select name="nama_negara" id="nama_negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br><br>
        <label for="jumlah_pertandingan">Jumlah Pertandingan:</label>
        <input type="text" name="jumlah_pertandingan" id="jumlah_pertandingan"><br><br>
        <label for="jumlah_menang">Jumlah Menang:</label>
        <input type="text" name="jumlah_menang" id="jumlah_menang"><br><br>
        <label for="jumlah_seri">Jumlah Seri:</label>
        <input type="text" name="jumlah_seri" id="jumlah_seri"><br><br>
        <label for="jumlah_kalah">Jumlah Kalah:</label>
        <input type="text" name="jumlah_kalah" id="jumlah_kalah"><br><br>
        <label for="jumlah_poin">Jumlah Poin:</label>
        <input type="text" name="jumlah_poin" id="jumlah_poin"><br><br>
        <label for="nama_operator">Nama Operator:</label>
        <input type="text" name="nama_operator" id="nama_operator"><br><br>
        <label for="nim_mahasiswa">NIM Mahasiswa:</label>
        <input type="text" name="nim_mahasiswa" id="nim_mahasiswa"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>