<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Author extends Model{
      protected $table = "authors";

      public function books(): HasMany{
            return $this->hasMany(Book::class);
      }
}