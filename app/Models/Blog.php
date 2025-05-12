<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Blog extends Model
{
    use HasFactory;
    // protected $table = 'admin';
    protected $fillable = ['title', 'slug', 'author_id', 'blog', 'created_at', 'updated_at'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);       //Membuat relasi antara tabel Blog dan user 
    }                                               // Menggunakan BelongsTo
};
