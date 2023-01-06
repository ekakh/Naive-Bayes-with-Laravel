<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table = 'users';
    protected $fillable  = [
        'id', 'roles_id', 'nama', 'jabatan', 'telepon', 'email', 'password'
    ];

    public function roles()
    {
        return $this->belongsTo(role::class);
    }
}
