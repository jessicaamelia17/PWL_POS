<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            ['supplier_kode' => 'SUP001', 'supplier_nama' => 'CV Sumber Makmur', 'supplier_alamat' => 'Jl. Merdeka No. 10', 'supplier_telp' => '081234567890'],
            ['supplier_kode' => 'SUP002', 'supplier_nama' => 'PT Berkah Jaya', 'supplier_alamat' => 'Jl. Soekarno Hatta No. 50', 'supplier_telp' => '081298765432'],
            ['supplier_kode' => 'SUP003', 'supplier_nama' => 'UD Maju Bersama', 'supplier_alamat' => 'Jl. Diponegoro No. 20', 'supplier_telp' => '081212345678'],
            ['supplier_kode' => 'SUP004', 'supplier_nama' => 'Toko Sinar Abadi', 'supplier_alamat' => 'Jl. Ahmad Yani No. 15', 'supplier_telp' => '082345678901'],
            ['supplier_kode' => 'SUP005', 'supplier_nama' => 'Distributor Nusantara', 'supplier_alamat' => 'Jl. Gatot Subroto No. 5', 'supplier_telp' => '083456789012'],
        ];

        DB::table('m_supplier')->insert($suppliers);
    }
}
