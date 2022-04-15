@extends('welcome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="/css/transaksi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <form action="/insert/{{$namagudang}}/{{$unitgudang}}/{{$tahun}}/{{$harga}}">
        <h1 class="h1-trans">Transaksi</h1>
        <label class="a">Nama</label><br>
        <input class="box1-trans" type="text" value="{{session('nama')}}" disabled><br>
        <label class="a">Jenis Gudang</label><br>
        <input class="box1-trans" type="text" value="{{$namagudang}}"disabled><br>
        <label class="a">Unit Gudang</label><br>
        <input class="box1-trans" type="text" value="{{$unitgudang}}"disabled><br>
        <label class="a">Tanggal Mulai Sewa</label><br>
        <input class="box1-trans" type="date" name="mulai_sewa" id="datePicker"><br>
        <label class="a">Lama Sewa</label><br>
        <input class="box1-trans" type="text"value="{{$tahun}} Tahun"disabled><br>
        <br>
        <label class="a">Metode Pembayaran</label><br>
        <select class="box2"  name ="metode" SIZE="1" style="width: 540px">
            <option value="Transfer Bank BCA -0878060898">Transfer Bank BCA -0878060898</option>
            <option value="Transfer Bank Mandiri - 0907896076412">Transfer Bank Mandiri - 0907896076412</option>
            <option value="Transfer Bank BRI - 009078960764345">Transfer Bank BRI - 009078960764345</option>
            <option value="Transfer Bank Mega - 0197617622243">Transfer Bank Mega - 0197617622243</option>
          </select>
        <br>
        <label class="a">Total</label><br>
        <input class="box1-trans" value="{{$harga}}"disabled><br>

        <a href="/Dashboard"><button type="button" class="btn9">Batal</button></a>
        <a ><button type="submit" class="btn9">Lanjutkan</button></a>

    </form>
</body>

<script>
    document.getElementById('datePicker').valueAsDate = new Date();
</script>
</html>
