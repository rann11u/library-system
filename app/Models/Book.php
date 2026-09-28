<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $filllabel = [
        'title',
        'author',
        'year',
        'stock',
    ];
}
