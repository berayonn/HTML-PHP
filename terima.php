<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima</title>
</head>
<body>
    <?php
        echo "<h2>Dokumen Sudah Diterima</h2>";
        echo "Nama Anda = " . $_GET["nama"]."<br>";
        echo "Prodi Anda = " . $_GET["prodi"]."<br>";
        echo "Jenis Kelamin = " . $_GET["gender"]."<br>";
        echo "Bahasa : <br>";
        if (isset($_GET["bhs"]) && is_array($_GET["bhs"]))
            foreach($_GET["bhs"] as $bahasa){
             echo "- $bahasa<br>";
            }
        else
            echo "Bahasa Tarzan?<br>";

        //$bahasa = array("Indonesia", "Inggris", "Jepang", "Mandarin", "Jawa");
       
        //echo "<h3>Diakses Satu Persatu</h3>";
        //echo $bahasa[0]."<br>";
        //echo $bahasa[1]."<br>";
        //echo $bahasa[2]."<br>";
        //echo $bahasa[3]."<br>";
        //echo $bahasa[4]."<br>";

        //foreach($bahasa as $bhs){
        //    echo $bhs."<br>";
        //}
    ?>
</body>
</html>