<?php
include "koneksi.php";

$nim = $_POST["nim"];
$fakultas = $_POST["fakultas"];

$query = "select * from mahasiswa where nim='$nim' and fakultas='$fakultas'";
$result = mysqli_query($link, $query);

$banyakRecord = mysqli_num_rows($result);

if($banyakRecord > 0){
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];
    echo "
    <h2>Selamat siang $nama</h2>
    ";
}
else{
    echo "
    <script>
        alert('Login gagal!');
        window.location.href = 'login.php';
    </script>
    ";
}
?>
