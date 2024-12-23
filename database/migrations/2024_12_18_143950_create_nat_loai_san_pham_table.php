<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nat_loai_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('natMaloai',250)->unique();
            $table->string('natTenloai',250);
            $table->tinyInteger('natTrangthai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nat_loai_san_pham');
    }
};
