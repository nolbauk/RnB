<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable {
    // fix
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'username', 'email', 'password', 'role_id', 'profile_picture', 'name', 'bio', 'birth', 'phone'
    ];

    protected $dates = ['deleted_at'];

    public function role() {
        return $this->belongsTo(Role::class);
    }
}