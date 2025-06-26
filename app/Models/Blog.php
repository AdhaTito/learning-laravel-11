<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    // protected $table = 'admin';
    protected $fillable = ['title', 'slug', 'author_id', 'blog', 'created_at', 'updated_at', 'category_id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');       //Membuat relasi antara tabel Blog dan user 
    }                                                           // Menggunakan BelongsTo

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);       //Membuat relasi antara tabel blog dan category 
    }                                                  // Menggunakan BelongsTo
};
