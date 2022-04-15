
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="/css/invoice.css">

    <!-- <title>Invoice..!</title> -->
</head>

<body>
        <div class="p-5">
            <div class="judul">
                 <h1>Invoice</h1>
            </div>
            <section class="store-user mt-5">
                <div class="col-10">
                    <div class="row bb pb-3">
                        <div class="col-7">
                            <p>Penyewa,</p>
                            <h2>{{session('nama')}}</h2>
                            <div class="txn mt-2">Nomor Penyewaan : <span>{{$ambilinv[0]->  ID_INVOICE}}</span></div>
                        </div>
                      
                    </div>
                    <div class="row extra-info pt-3">
                        <div class="col-7">
                            <p>Metode Pembayaran: <span>{{$ambilinv[0]->METODE}}</span></p>
                            <p>Mulai Sewa: <span>{{$ambilinv[0]->TANGGALSEWA}}</span></p>
                        </div>
                        <div class="col-5">
                            <p>Unit: <span>{{$ambilinv[0]->UNIT_NO}}</span></p>
                            <p>Status Pembayaran: <span>{{$ambilinv[0]->STATUS}}</span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-area mt-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Jenis Warehouse</td>
                            <td>Durasi</td>
                            <td>Harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <img class="mr-3 img-fluid" src="/images/{{$ambilinv[0]->UNIT_IMAGE}}" alt="Product 01">
                                    <div class="media-body">
                                        <p class="mt-0 title">{{$ambilinv[0]->PSEWA_NAME}}</p>
                                        {{$ambilinv[0]->PSEWA_LARGE}}
                                    </div>
                                </div>
                            </td>
                            <td>{{$ambilinv[0]->LAMA_SEWA}}</td>
                            <td>{{$ambilinv[0]->TOTAL}}</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="font-weight-bold para"> Catatan: </p>
                        <p class="para2">Mohon segera menyelesaikan Pembayaran!</p>
                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <tr>
                                <td>Sub Total:</td>
                                <td>{{$ambilinv[0]->TOTAL}}</td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td>{{$ambilinv[0]->TOTAL}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
                <a href="/"><button class="btn9" type="button" style="float: right;">Kembali ke Halaman Utama</button></a>
        </div>
</body></html>
