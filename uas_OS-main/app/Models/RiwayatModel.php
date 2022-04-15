<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RiwayatModel extends Model
{
    function get_pengguna() {
        if (DB::table('invoice')->exists()){
            return DB::table('invoice')->get();
        }
    }
    function cek_login($request) {
        if (DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->where('USER_PASSWORD', '=',$request->pass)->exists()){
            return DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->where('USER_PASSWORD', '=',$request->pass)->get();
        }
    }
    function ambil_nama($request) {
        return DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->get();
    }
    function insert_user($request){
        DB::table('pengguna')->insert([
            'USER_EMAIL' => $request->mail,
            'USER_NAME' => $request->name,
            'USER_PASSWORD' => $request->pass,
            'USER_DELETE' => '0'
        ]);
    }
    function hitung_baris() {
    if (DB::table('invoice')->exists()){
        return DB::table('invoice')->get();
    }
}

    function cek_emaill($request) {
        if (DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->exists()){
            return DB::table('pengguna')->where('USER_EMAIL', '=',$request->mail)->get();
        }
    }
    function warehouse_query(){
        return DB::table('UNIT')
        ->join('KATEGORI_SEWA', 'UNIT.PSEWA_NO', '=', 'KATEGORI_SEWA.PSEWA_NO')
        ->where('UNIT.UNIT_STATUS', '=', '0')
        ->get(array(
            'UNIT.UNIT_NO',
            'KATEGORI_SEWA.PSEWA_NAME',
            'KATEGORI_SEWA.PSEWA_PRICEYEAR',
            'UNIT.UNIT_IMAGE'
        ));
      
    } 
    function unit_query($UNIT_NO)
    {
            return DB::table('UNIT')
            ->join('KATEGORI_SEWA', 'UNIT.PSEWA_NO', '=', 'KATEGORI_SEWA.PSEWA_NO')
            ->where('UNIT.UNIT_NO', '=', $UNIT_NO)
            ->get(array(
                'KATEGORI_SEWA.PSEWA_NAME',
                'UNIT.UNIT_NO',
                'KATEGORI_SEWA.PSEWA_LARGE',
                'KATEGORI_SEWA.PSEWA_PRICEYEAR',
                'UNIT.UNIT_IMAGE'
            ));
    }
    function insert_transaksi($invoice2,$namagudang, $unitgudang, $email_user, $lama_sewa, $request, $harga)
    {
        DB::table('INVOICE')->insert([
            'ID_INVOICE' => $invoice2,
            'WAREHOUSE_NAME' => $namagudang,
            'UNIT_NO' =>  $unitgudang,
            'EMAIL' =>$email_user,
            'LAMA_SEWA' =>$lama_sewa,
            'TANGGALSEWA' =>  $request->mulai_sewa,
            'METODE' => $request->metode,
            'TOTAL' => $harga,
            'STATUS' => 'Belum Terbayar',
            'INV_DELETE' => '0'
            
        ]);
    }
    function update_unit($unitgudang) {
        DB::table('unit')
            ->where('unit_no', '=', $unitgudang)
            ->update(['unit_status' => '1']);

    }
    function ambil_inv($invoice2){
        return DB::table('UNIT')
            ->join('KATEGORI_SEWA', 'UNIT.PSEWA_NO', '=', 'KATEGORI_SEWA.PSEWA_NO')
            ->join('invoice', 'UNIT.UNIT_NO', '=', 'invoice.UNIT_NO')
            ->where('invoice.ID_INVOICE', '=', $invoice2)
            ->get(array(
                'KATEGORI_SEWA.PSEWA_NAME',
                'KATEGORI_SEWA.PSEWA_LARGE',
                'UNIT.UNIT_NO',
                'UNIT.UNIT_IMAGE',
                'INVOICE.ID_INVOICE',
                'INVOICE.LAMA_SEWA',
                'INVOICE.TANGGALSEWA',
                'INVOICE.METODE',
                'INVOICE.TOTAL',
                'INVOICE.STATUS'
            ));
    }
    function check_email($request, $isiemail) {
        if (DB::table('pengguna')->where('USER_EMAIL', '=', $isiemail)->where('USER_PASSWORD', '=',$request->passlama)->exists()){
            return DB::table('pengguna')->where('USER_EMAIL', '=',$isiemail)->where('USER_PASSWORD', '=',$request->passlama)->get();
        }
    }
    function ganti_pass($request, $isiemail) {
        DB::table('pengguna')
            ->where('USER_EMAIL', '=', $isiemail)
            ->update(['USER_PASSWORD' => $request->passbaru]);

    }

}

