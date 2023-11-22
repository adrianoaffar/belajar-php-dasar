<?php 
$mahasiswa = [
    ["Adriano Affar", "2022051074110", "Sistem Informasi", "adriano.affar28@gmail.com"],["Angelica", "2022051074004", "Sistem Informasi", "angelica@gmail.com"],
    ["Paulus", "202203201211", "Sistem Informasi", "Paulusreyaan@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>


<?php foreach ($mahasiswa as $mhs) :?>
<ul>
    <li>Nama    :<?=  $mhs[0]; ?></li>
    <li>NIM     :<?=  $mhs[1]; ?></li>
    <li>Jurusan :<?=  $mhs[2]; ?></li>
    <li>Email   :<?=  $mhs[3]; ?></li>
</ul>
<?php endforeach;?>


</body>
</html>