<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
