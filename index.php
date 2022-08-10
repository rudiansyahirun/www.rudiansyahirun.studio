<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<table border="1">
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
    $db = new PDO('mysql:host=localhost;dbname=rumah_reza', 'root', 'RudiSQLoioi1!');
    $query = $db->query("SELECT * FROM data_material");
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
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
