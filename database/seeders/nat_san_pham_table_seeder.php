<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nat_san_pham_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nat_san_pham')->insert([
            'natMasanpham'=>"AT01",
            'natTensanpham'=>"Bánh mì xá xíu",
            'natHinhanh'=>"img/san-pham/AT01.jpg",
            'natSoluong'=>100,
            'natDongia'=>40000,
            'natMaloai'=>1,
            'natTrangthai'=>0,
        ]);
        DB::table('nat_san_pham')->insert([
            'natMasanpham'=>"AT02",
            'natTensanpham'=>"Bánh mì thịt bò",
            'natHinhanh'=>"img/san-pham/AT02.jpg",
            'natSoluong'=>200,
            'natDongia'=>45000,
            'natMaloai'=>1,
            'natTrangthai'=>0,
        ]);
        DB::table('nat_san_pham')->insert([
            'natMasanpham'=>"NT01",
            'natTensanpham'=>"Bánh mì trứng",
            'natHinhanh'=>"img/san-pham/NT011.jpg",
            'natSoluong'=>100,
            'natDongia'=>20000,
            'natMaloai'=>2,
            'natTrangthai'=>0,
        ]);
        DB::table('nat_san_pham')->insert([
            'natMasanpham'=>"NT02",
            'natTensanpham'=>"Bánh mì que",
            'natHinhanh'=>"img/san-pham/NT02.jpg",
            'natSoluong'=>200,
            'natDongia'=>10000,
            'natMaloai'=>2,
            'natTrangthai'=>0,
        ]);
        DB::table('nat_san_pham')->insert([
            'natMasanpham'=>"AC01",
            'natTensanpham'=>"Xôi ruốc",
            'natHinhanh'=>"img/san-pham/TA01.jpg",
            'natSoluong'=>100,
            'natDongia'=>25000,
            'natMaloai'=>3,
            'natTrangthai'=>0,
        ]);
        DB::table('nat_san_pham')->insert([
            'natMasanpham'=>"TAN01",
            'natTensanpham'=>"Nước Cam",
            'natHinhanh'=>"img/san-pham/TAN01.jpg",
            'natSoluong'=>150,
            'natDongia'=>20000,
            'natMaloai'=>4,
            'natTrangthai'=>0,
        ]);
    }
}
