<?php

namespace App\Models;
use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Book extends Model{
      protected $table = "books";

      public function author(): BelongsTo{
            return $this->belongsTo(Author::class);
      }

}