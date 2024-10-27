<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class tb_Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_admin';

    protected $guarded = ['id'];

    protected $hidden = [
        'admin_password',
    ];

    // Pastikan password selalu ter-hash
    public function setPasswordAttribute($value)
    {
        $this->attributes['admin_password'] = Hash::make($value);
    }
}
