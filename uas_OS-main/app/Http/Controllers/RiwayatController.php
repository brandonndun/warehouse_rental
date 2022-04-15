<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatModel;
use Session;

class RiwayatController extends Controller
{
    //fungsi yang dijalankan saat controller dipanggil
    function __construct()
    {
        $this->RiwayatModel = new RiwayatModel();
    }
    //fungsi untuk menampilkan data dari tabel database
    public function Riwayat()
    {
        //memanggil fungsi get_pengguna yang ada di model Riwayat Model
        $pengguna = $this->RiwayatModel->get_pengguna();
        //mengirim data pengguna ke view Riwayat
        // return view('Riwayat',['pengguna' => $pengguna]);
        return view('Riwayat')->with('pengguna', $pengguna);
    }

    public function logindata(Request $request) {
        $statLogin = $this->RiwayatModel->cek_login($request);
        if(isset($statLogin)){
            $data = $request->mail;
            $nama = $this->RiwayatModel->ambil_nama($request);
            $sessnama = $nama[0]->USER_NAME;
            $request->session()->put('user', $data);
            $request->session()->put('nama', $sessnama);
           $warehouse = $this->RiwayatModel->warehouse_query();
         return view('Dashboard')->with('warehouse', $warehouse)
         ;
        }else{

            Session::flash('error', 'Email dan Password tidak sesuai!');
            return redirect('/Login');
        }
    }

    public function regis_data(Request $request) {
        if($request->pass==$request->pass2){
            $statRegis = $this->RiwayatModel->cek_emaill($request);
            if(isset($statRegis)){
                return back()->withErrors(['Email Telah Digunakan!']);
            }else{
                $user = $this->RiwayatModel->insert_user($request);
                return view('/Login');
            }
        }else{
            return back()->withErrors(['Kata sandi tidak sama!']);
        }
    }

    public function login_done() {
        $warehouse = $this->RiwayatModel->warehouse_query();
        // $ft = $this->LihatDataModel->group_fromto();
         return view('Dashboard')->with('warehouse', $warehouse)
         ;
    }
    public function no_login() {

        $warehouse = $this->RiwayatModel->warehouse_query();
        // $ft = $this->LihatDataModel->group_fromto();
        return view('Dashboard2')->with('warehouse', $warehouse);
     }

    public function detail_produk($UNIT_NO) {
        $unit = $this->RiwayatModel->unit_query($UNIT_NO);
        if (session()->has('user')) {
            return view('DetailProduk')->with('unit', $unit);
            }else{
            return view('DetailProduk2')->with('unit', $unit);
        }
    }
    public function ubah_harga(Request $request, $UNIT_NO) {
        $unit = $this->RiwayatModel->unit_query($UNIT_NO);
        if (session()->has('user')) {
            return view('DetailProduk')->with('unit', $unit)->with('request', $request);
            }else{
            return view('DetailProduk2')->with('unit', $unit)->with('request', $request);
        }
    }
    public function transaksi($harga, $namagudang, $unitgudang, $tahun) {
        return view('Transaksi2')->with('harga', $harga)->with('namagudang', $namagudang)->with('unitgudang', $unitgudang)->with('tahun', $tahun);
    }
    public function Invoice(Request $request, $namagudang, $unitgudang, $tahun,$harga) {
        $urutan = $this->RiwayatModel->hitung_baris();
        if (isset($urutan)) {
            $count = count($urutan)+1;
        }else{
            $count = 1;
        }
        if($count < 10){
            $tcount = '000' . $count;
        }
        elseif($count >= 10 and $count < 100){
            $tcount = '00' . $count;
        }
        elseif($count >= 100 and $count<1000){
            $tcount = '0' . $count;
        }
        elseif($count >= 1000){
            $tcount = $count;
        }
        $invoice2 = 'INV-' . $tcount;
        $email_user = session('user');
        $lama_sewa = $tahun . ' Tahun';
        $insert = $this->RiwayatModel->insert_transaksi($invoice2,$namagudang, $unitgudang, $email_user, $lama_sewa, $request, $harga);
        $update = $this->RiwayatModel->update_unit($unitgudang) ;
        $ambilinv = $this->RiwayatModel->ambil_inv($invoice2);
        return view('Invoice')->with('ambilinv',  $ambilinv );
    }
    
    public function detailinv($id_invoice) {
        $ambilinv = $this->RiwayatModel->ambil_inv($id_invoice);
        return view('Invoice')->with('ambilinv',  $ambilinv );
    }
    public function update_pass(Request $request) {
        $isiemail = session('user');
        $statemail = $this->RiwayatModel->check_email($request, $isiemail);
        if(isset($statemail)){
            if($request->passbaru == $request->passkonfirmasi){
                $update = $this->RiwayatModel->ganti_pass($request, $isiemail);
                return redirect('/Profile')->with('alert', 'Update Sucess!!');
            }else{
                return back()->withErrors(['Kata Sandi Tidak Sama!']);
            }
        }else{
            return back()->withErrors(['Kata Sandi Lama Salah!']);
        }
    }
}

?>

