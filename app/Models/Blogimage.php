<?php

namespace App\Models;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogimage extends Model
{
    use HasFactory;

        public function blog()

    {
        return $this->belongsTo(Blog::class);
    }
}
