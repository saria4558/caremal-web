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
        DB::table('tb_shelter')->insert([
            'nama'=>'upin',
            'telepon' =>'085463526536',
            'alamat_shelter'=>'Banyuwangi',
            'email'=>'upin@gmail.com',
            'username'=>'upin123',
            'password'=>'1234'
        ]);
    }
}
