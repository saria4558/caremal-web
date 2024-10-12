<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $table = 'masyarakats';

    protected $guarded = ['id'];

    protected $hidden = [
        'masy_password',
    ];

    // Pastikan password selalu ter-hash
    public function setPasswordAttribute($value)
    {
        $this->attributes['masy_password'] = Hash::make($value);
    }
}
