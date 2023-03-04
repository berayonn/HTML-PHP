<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>72210477</title>
</head>
<body>
    <?php
        echo "<h2>Dokumen Sudah Diterima</h2>";
        echo "Nama Anda = " . $_GET["nama"]."<br>";
        echo "Tanggal Lahir = " . $_GET["tanggal"]."<br>";
        echo "Alamat Asal = " . $_GET["alamat"]."<br>";
        echo "Nomor Telepon = " . $_GET["tlp"]."<br>";
        echo "NIK = " . $_GET["pass"]."<br>";
        echo "Prodi Anda = " . $_GET["prodi"]."<br>";
        echo "Jenis Kelamin = " . $_GET["gender"]."<br>";
        echo "Bahasa : <br>";
        if (isset($_GET["bhs"]) && is_array($_GET["bhs"]))
            foreach($_GET["bhs"] as $bahasa){
             echo "- $bahasa<br>";
            }
        else
            echo "Bahasa Tidak Terdeteksi<br>";

        echo "Skill : <br>";
        if (isset($_GET["skl"]) && is_array($_GET["skl"]))
            foreach($_GET["skl"] as $skill){
                echo "- $skill<br>";
            }
        else
            echo "Ga Pernah Sekolah Ya?<br>";
        echo "IPK : " . $_GET["ipk"]."<br>";
        echo "Warna Favorit : " . $_GET["warna"]."<br>";
        echo "Foto Diri : " . $_GET["foto"]."<br>";
        echo "Gaji yang Diharapkan : " . $_GET["gaji"]."<br>";
        echo "Harapan : " . $_GET["txt"]."<br>";
    ?>

</body>
</html>