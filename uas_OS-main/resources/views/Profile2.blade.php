@extends('welcome')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Profile.css">
</head>
<body>
    <center>
        <div class="box shadow-lg p-3 mb-5 bg-white rounded">
            <img class="img" src="images/foto.png.jpg">
            <input type="file" name="" id="file" accept="image/*">
            <label for="file">Ganti Foto</label>
            <input type="text" name="" placeholder="Email">
            <input type="email" name="" placeholder="Nomor Telepon">
            <input type="text" name="" placeholder="Alamat">
            <input type="text" name="" placeholder="Kata Sandi Lama">
            <input type="text" name="" placeholder="Kata Sandi Baru">
            <button style="float: left;margin: 10px 0 0 18.2%;">Cancel</button>
            <button style="float: right;margin: 10px 18.2% 0 0;">Done</button>

        </div>
    </center>

</body>
</html>
