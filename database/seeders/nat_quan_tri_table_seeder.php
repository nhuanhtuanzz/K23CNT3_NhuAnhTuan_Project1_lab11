<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nat_quan_tri_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $natMatkhau = md5("12345678");
        DB::table('nat_quan_tri')->insert([
            'natTaikhoan'=>"nhutuan21102005@gmail.com",
            'natMatkhau'=>$natMatkhau,
            'natTrangthai'=>0
        ]);
        DB::table('nat_quan_tri')->insert([
            'natTaikhoan'=>"0977624973",
            'natMatkhau'=>$natMatkhau,
            'natTrangthai'=>0
        ]);
        
    }
}
