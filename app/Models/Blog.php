<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Blog extends Model
{
    use HasFactory;
    // protected $table = 'admin';
    protected $fillable = ['title', 'slug', 'author', 'blog', 'created_at', 'updated_at'];
};
