<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Categorie extends Model
{
    use HasFactory;

    protected $fillable =['id','blog_id','category_id'];
}
