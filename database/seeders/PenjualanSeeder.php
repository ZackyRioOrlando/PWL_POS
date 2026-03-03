<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
        ['user_id'=>1,'pembeli'=>'Budi','penjualan_kode'=>'TRX001','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>2,'pembeli'=>'Andi','penjualan_kode'=>'TRX002','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>3,'pembeli'=>'Siti','penjualan_kode'=>'TRX003','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>1,'pembeli'=>'Rina','penjualan_kode'=>'TRX004','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>2,'pembeli'=>'Doni','penjualan_kode'=>'TRX005','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>3,'pembeli'=>'Lina','penjualan_kode'=>'TRX006','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>1,'pembeli'=>'Agus','penjualan_kode'=>'TRX007','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>2,'pembeli'=>'Rudi','penjualan_kode'=>'TRX008','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>3,'pembeli'=>'Maya','penjualan_kode'=>'TRX009','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ['user_id'=>1,'pembeli'=>'Tono','penjualan_kode'=>'TRX010','penjualan_tanggal'=>now(),'created_at'=>now(),'updated_at'=>now()],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
