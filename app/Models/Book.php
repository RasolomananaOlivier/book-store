<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'total_pages',
        'rating',
        'published_date',
        'isbn',
        'publisher_id',
        'author_id',
        'image_path'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
