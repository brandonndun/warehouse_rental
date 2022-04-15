@extends('welcome')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/transaksi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <form action="/update">
        <h1 class="h1-trans">Profile</h1>
        <label class="a">Email</label><br>
        <input class="box1-trans" type="text" value="{{session('user')}}" disabled><br>
        <label class="a">Nama</label><br>
        <input class="box1-trans" type="text" value="{{session('nama')}}"disabled><br>
        <label class="a">Kata Sandi Lama</label><br>
        <input class="box1-trans" name="passlama" type="password" value=""><br>
        <label class="a">Kata Sandi Baru</label><br>
        <input class="box1-trans" name="passbaru" type="password"value=""><br>
        <label class="a">Konfirmasi Kata Sandi Baru</label><br>
        <input class="box1-trans" name="passkonfirmasi" type="password" value=""><br>

        <!-- <a href="/Dashboard"><button type="button" class="btn9">Batal</button></a> -->
        <a ><button type="submit" class="btn9">Ubah Kata Sandi</button></a>

    </form>
    @if ($errors->any())
				<div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{$errors->first()}}</strong>
				</div>

     @endif
     <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
