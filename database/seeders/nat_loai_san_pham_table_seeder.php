<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nat_loai_san_pham_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nat_loai_san_pham')->insert([
            'natMaloai'=>"1",
            'natTenloai'=>"Bánh mì Sài Gòn",
            'natTrangthai'=>0
        ]);
        DB::table('nat_loai_san_pham')->insert([
            'natMaloai'=>"2",
            'natTenloai'=>"Bánh mì Hà Nội",
            'natTrangthai'=>0
        ]);
        DB::table('nat_loai_san_pham')->insert([
            'natMaloai'=>"3",
            'natTenloai'=>"Xôi",
            'natTrangthai'=>0
        ]);
        DB::table('nat_loai_san_pham')->insert([
            'natMaloai'=>"4",
            'natTenloai'=>"Đồ uống",
            'natTrangthai'=>0
        ]);
    }
}
