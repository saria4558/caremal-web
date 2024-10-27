<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('telepon')->unique();
        //     // $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        // DB::table('users')->insert([
        //     'name'=>'ipin',
        //     'telepon' =>'085234123255',
        //     'password'=>'1234567890'
        // ]);
        DB::table('users')->insert([
            'name'=>'admin',
            'telepon' =>'0812345678901',
            'password' => Hash::make('passwordadmin'),
        ]);

        // DB::table('users')->insert([
        //     'name'=>'ayu',
        //     'telepon' =>'085335421511',
        //     'password'=>'1234567890'
        // ]);
    }
}
