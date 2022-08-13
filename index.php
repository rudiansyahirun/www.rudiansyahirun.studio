<?php
$mysqli = new mysqli("127.0.0.1","root","1234","rumah_reza");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_erro>
  exit();
}

$sql = "SELECT * from data_material";
$results = $mysqli -> query($sql);

// Associative array
//$row = $results -> fetch_assoc();
//printf ("%s (%s)\n", $row["nama_bahan"], $row["harga_bahan"]);

// Free result set
//$results -> free_result();

//$mysqli -> close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table_style.css">
    <title>Document</title>
</head>
<body>
<!--    simple table for
            Tanggal,
            Nama Bahan,
            Harga Bahan,
            Jumlah Bahan,
            Harga,
            Foto Nota,
            Nama Toko
        from db 'rumah_reza' and table 'data_material'
-->
<table id="table_material">
    <tr>
        <th>Tanggal</th>
        <th>Nama Bahan</th>
        <th>Harga Bahan</th>
        <th>Jumlah Bahan</th>
        <th>Harga</th>
        <th>Foto Nota</th>
        <th>Nama Toko</th>
    </tr>
    
    <?php

    while ($row = mysqli_fetch_array($results)) {
      echo "<tr>";
      echo "<td>" . $row['tanggal'] . "</td>";
      echo "<td>" . $row['nama_bahan'] . "</td>";
      echo "<td>" . $row['harga_bahan'] . "</td>";
      echo "<td>" . $row['jumlah_bahan'] . "</td>";
      echo "<td>" . $row['harga'] . "</td>";
      echo "<td><img src='" . $row['foto_nota'] . "'></td>";
      echo "<td>" . $row['nama_toko'] . "</td>";
      echo "</tr>";
    }
    
    ?>

</table>

</body>
</html>
