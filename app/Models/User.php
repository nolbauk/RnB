<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable {
    
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'username', 'email', 'password', 'role_id', 'profile_picture', 'name', 'bio', 'birth', 'phone'
    ];

    protected $dates = ['deleted_at'];

    public function role() {
        return $this->belongsTo(Role::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function commentReactions()
    {
        return $this->hasMany(CommentReaction::class);
    }    
}