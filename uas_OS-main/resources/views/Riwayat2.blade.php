<!DOCTYPE html>
@extends('welcome2')
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
                <div class="ini-buttons">
                    <button type="button" class="btn btn-outline-secondary">Belum Bayar</button>
                    <button type="button" class="btn btn-outline-secondary">Terbayar</button>
                    <button type="button" class="btn btn-outline-secondary">Selesai</button> <br>
                </div>
                <div class="ini-searchdandropdown">
                    <input class="buat-search" type="text" name="q" placeholder="cari.."/>
                    <select class="dropdown" name="filter">
                        <option value="large">Large Warehouse</option>
                        <option value="normal">Normal Warehouse</option>
                        <option value="tiny">Tiny Warehouse</option>
                        <option value="xl">Extra Large Warehouse</option>
                    </select>
                </div>
                <div class="container">
                    <div class="ini-border">
                        <table class="ini-center-border">
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                            </tr>
                            @foreach($pengguna as $pgn)
                            <tr>
                                <td>{{ $pgn->USER_EMAIL }}</td>
                                <td>{{ $pgn->USER_NAME }}</td>
                                <td><button>tes</button></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

        </section>
    </body>
</html>
