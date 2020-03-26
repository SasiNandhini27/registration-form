<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_name', 'isbn_no', 'author_name', 'publisher_name', 'publication_year'];
}
