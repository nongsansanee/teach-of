<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->hasMany(book::class);
    }
}