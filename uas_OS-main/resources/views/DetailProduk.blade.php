@extends('welcome')
@extends('Footer')

<html>
    <head>
        <title>Detail Produk</title>
        <link rel="stylesheet" href="/css/detailProduk.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>

        <div class="hero">
            <div class="row">
                <div class="col">
                    <div class="slider">
                        <div class="preview">
                        <img src="/images/{{$unit[0]->UNIT_IMAGE}}" id="imagebox" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="content-detailProduk">
                        <h2>{{$unit[0]->PSEWA_NAME}}</h2>
                        <p>{{$unit[0]->UNIT_NO}}</p>
                        <p>{{$unit[0]->PSEWA_LARGE}}</p>

                        <p>Harga Per-Tahun = Rp{{number_format(($unit[0]->PSEWA_PRICEYEAR),2,',','.')}}</p>

                        <form action="/ubahharga/{{$unit[0]->UNIT_NO}}" method="get">
                            @csrf
                        <select name="tahun">
                            <option value="0">Pilih Tahun</option>
                            <option value="1">1 Tahun</option>
                            <option value="2">2 Tahun</option>
                            <option value="3">3 Tahun</option>
                            <option value="4">4 Tahun</option>
                            <option value="5">5 Tahun</option>
                        </select>
                        <button type="submit">Cek Harga</button>
                        </form>
                        @if(isset($request->tahun))
                        <div class="price">Rp {{number_format((($request->tahun)*($unit[0]->PSEWA_PRICEYEAR)),2,',','.')}}</div>
                        @else
                        <div class="price">Rp 0</div>
                        @endif
                            @if(isset($request->tahun)and ($request->tahun)!=0)
                        <a href="/Transaksi2/{{($request->tahun)*($unit[0]->PSEWA_PRICEYEAR)}}/{{$unit[0]->PSEWA_NAME}}/{{$unit[0]->UNIT_NO}}/{{$request->tahun}}">
                            <button type="button">Beli Sekarang</button></a>

                        @endif

                    </div>
                </div>
            </div>
    </body>
    </html>
