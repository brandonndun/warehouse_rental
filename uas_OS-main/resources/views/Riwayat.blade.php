<!DOCTYPE html>
@extends('welcome')
@extends('Footer')
<html>
    <head>
        <meta charset="UTF-8">
        <title> Riwayat Penyewaan </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/Riwayat.css">

    </head>

    <body>
        <section class="section">
            <h1 class="Teks-riwayat">Riwayat Penyewaan<h1><br>
                <div class="container">
                    <div class="ini-border">
                        <table class="ini-center-border">
                            <tr>
                                <th>Unit</th>
                                <th>Jenis Warehouse</th>
                                <th>Durasi Sewa</th>
                                <th>Total</th>
                                <th>Status Pembayaran</th>
                            </tr>
                            @foreach($pengguna as $pgn)
                            <tr>
                                <td>{{ $pgn->unit_no}}</td>
                                <td>{{ $pgn->warehouse_name }}</td>
                                <td>{{ $pgn->lama_sewa }}</td>
                                <td>{{ $pgn->total }}</td>
                                <td>{{ $pgn->status }}</td>
                                <td><a href="/invoice/{{$pgn->id_invoice}}"><button>Detail</button></a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
        </section>
    </body>
</html>
