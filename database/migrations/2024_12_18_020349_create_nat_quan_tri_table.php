<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nat_quan_tri', function (Blueprint $table) {
            $table->id();
            $table->string('natTaikhoan',250)->unique();
            $table->string('natMatkhau',250);
            $table->tinyInteger('natTrangthai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nat_quan_tri');
    }
};
