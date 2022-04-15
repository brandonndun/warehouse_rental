@extends('welcome')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="css/code.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    {{-- <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <div class="logo">
            <img src ="images/warehouse.png" width="40 px">
        </div>

        <nav class="navbar">

            <a href="#home">Sewa Gudang</a>
            <a href="#products">Riwayat Penyewaan</a>
            <a href="#featured">Tentang Kami</a>
            <a href="#review">Hubungi Kami</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    </header> --}}

    <div class="background">
    <div class="container">
    <h1>Keranjang</h1>
    <div class="cart">
        <div class="products">
            <div class="product">
                <img src="images/gudang.png.jpg ">
                <div class="product-info">
                    <h3 class="product-name">Gudang Kecil</h3>
                    <h4 class="product-price">Rp.800,000</h4>
                    <!-- <h5 class="product-offer">DISCOUNT 10%</h5> -->
                    <div class="product-quantity">
                        <p>Minggu <input type="number" min="0" max="3" value="0"  name="">
                        <p>Bulan <span class="input2"><input type="number" min="0" max="11" value="0"  name=""></span>
                        <p>Tahun <span class="input3"><input type="number" min="0" max="5" value="0"  name=""></span>
                    </div>
                    <p class="product-remove">
                        <i class="fas fa-trash-alt"></i>
                        <span class="remove">Hapus</span>
                    </p>
                </div>
            </div>
            <div class="product">
                <img src="images/gudang_normal1.png">
                <div class="product-info">
                    <h3 class="product-name">Gudang Normal</h3>
                    <h4 class="product-price">Rp.1,000,000</h4>
                    <!-- <h5 class="product-offer">SOLD</h5> -->
                    <div class="product-quantity">
                        <p>Minggu <input type="number" min="0" max="3" value="0"  name="">
                        <p>Bulan <span class="input2"><input type="number" min="0" max="11" value="0"  name=""></span>
                        <p>Tahun <span class="input3"><input type="number" min="0" max="5" value="0"  name=""></span>
                    </div>
                    <p class="product-remove">
                        <i class="fas fa-trash-alt"></i>
                        <span class="remove">Hapus</span>
                    </p>
                </div>
            </div>
            <div class="product">
                <img src="images/gudang_besar1.png">
                <div class="product-info">
                    <h3 class="product-name">Gudang Besar</h3>
                    <h4 class="product-price">Rp.5,000,000</h4>
                    <!-- <h5 class="product-offer">SOLD OUT</h5> -->
                    <div class="product-quantity">
                        <p>Minggu <input type="number" min="0" max="3" value="0"  name="">
                        <p>Bulan <span class="input2"><input type="number" min="0" max="11" value="0"  name=""></span>
                        <p>Tahun <span class="input3"><input type="number" min="0" max="5" value="0"  name=""></span>
                    </div>
                    <p class="product-remove">
                        <i class="fas fa-trash-alt"></i>
                        <span class="remove">Hapus</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="cart-total">
        <p>
            <span>Total Harga :</span>
            <span>Rp 6,800,000</span>
        </p>
        <p>
            <span>Jenis Gudang :</span>
            <span>1</span>
        </p>
        <a href="/Konfirmasi">Proses Cek Out</a>


    </div>
</body>
</html>
