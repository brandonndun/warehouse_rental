@extends('welcome')
@extends('Footer')<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>


<!-- products section starts  -->
<h1 class="teks-dashboard">Dashboard<h1><br>
<section class="products" id="products">
    <div class="box-container">
    @foreach ($warehouse as $tampilan)
        <div class="box">
            <div class="ukuran">
            <a href="/DetailProduk2/{{$tampilan->UNIT_NO}}"><img src="images/{{$tampilan->UNIT_IMAGE}}" alt=""></a>
        </div>
            <div class="content">

                <h3>{{$tampilan->PSEWA_NAME}}</h3>
                <h4>{{$tampilan->UNIT_NO}}</h4>
                <div class="price">Rp{{number_format(($tampilan->PSEWA_PRICEYEAR),2,',','.')}}/Tahun</div>

                <a href="/DetailProduk2/{{$tampilan->UNIT_NO}}" class="btn">Beli</a>
            </div>
        </div>

     @endforeach
    </div>

</section>

</body>
</html
