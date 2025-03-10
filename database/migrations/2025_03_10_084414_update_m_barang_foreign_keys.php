<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('m_barang', function (Blueprint $table) {
            // Hapus foreign key lama
            $table->dropForeign(['kategori_id']); 

            // Tambahkan foreign key baru dengan ON DELETE CASCADE
            $table->foreign('kategori_id')
                  ->references('kategori_id')->on('m_kategori')
                  ->onDelete('cascade') // atau onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('m_barang', function (Blueprint $table) {
            // Kembalikan ke definisi awal
            $table->dropForeign(['kategori_id']);

            // Definisi awal (tanpa cascade), misalnya:
            $table->foreign('kategori_id')
                  ->references('kategori_id')->on('m_kategori');
        });
    }
};
