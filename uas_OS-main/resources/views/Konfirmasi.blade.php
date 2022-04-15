
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="css/konfirmasi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>



    <form action="action">
        <h1>Konfirmasi</h1>
        <label class="a">Nama</label><br>
        <input class="box1" type="text" placeholder="Nama Anda"><br>
        <label class="a">Jenis Gudang</label><br>
        <input class="box1" type="text" placeholder="Gudang Yang Anda Pilih"><br>
        <label class="a">Nomor Gudang</label><br>
        <input class="box1" type="text" placeholder="Nomor Gudang"><br>
        <label class="a">Durasi Waktu</label><br>
        <input class="box1" type="text" placeholder="Waktu Yang Dipilih"><br>
        <label class="a">Metode Pembayaran</label><br>
        <input class="box1" type="text" placeholder="Metode Pembayaran Yang Dipilih"><br>
        <label class="a">Total</label><br>
        <input class="box1" type="text" placeholder="Total Pembayaran"><br>

        <a href="/Dashboard"><button type="button" class="btn9">Batal</button></a>
        <a href="/Invoice"><button type="button" class="btn9">Lanjutkan</button></a>


    </form>
</body>

<script>
    document.getElementById('datePicker').valueAsDate = new Date();
</script>
</html>
