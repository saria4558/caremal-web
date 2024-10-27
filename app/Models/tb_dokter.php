<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class tb_dokter extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_dokter';

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];

    // Pastikan password selalu ter-hash
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
