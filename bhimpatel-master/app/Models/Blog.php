<?php

namespace App\Models;
use App\Models\Blogimage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

        public function blogimages()

    {

        return $this->hasMany(Blogimage::class);

    }
}
