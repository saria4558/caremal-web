<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //     'name'=>'upin',
        //     'telepon' =>'085463526536',
        //     'password'=>'1234'
        // ]);

        DB::table('users')->insert([
            'name'=>'ayu',
            'telepon' =>'085335421511',
            'password'=>'1234567890'
        ]);
    }
}
