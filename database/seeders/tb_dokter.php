<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_dokter extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('dokter_nama');
        //     $table->string('dokter_JK');
        //     $table->string('dokter_Ttl');
        //     $table->string('dokter_NIK');
        //     $table->string('telepon')->unique();
        //     $table->string('alamat');
        //     $table->string('email')->unique();
        //     $table->string('username')->unique();
        //     $table->string('password');
        // DB::table('tb_shelter')->insert([
        //     'nama'=>'upin',
        //     'telepon' =>'085463526536',
        //     'alamat_shelter'=>'Banyuwangi',
        //     'email'=>'upin@gmail.com',
        //     'username'=>'upin123',
        //     'password'=>'1234'
        // ]);
        DB::table('tb_artikel')->insert([
            'artikel_image'=>'D:\semester 5\caremal\caremal\public\assets\img\image 1.png',
            'artikel_judul' =>'Obat batuk kucing',
            'artikel_deskripsi' =>'Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.',
            'artikel_status'=>'ACC',
            
        ]);
    }
}
