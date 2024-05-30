<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Comment extends Model
{
    use HasFactory;

    protected $fillable =['id','comment','user_name','status'];
}
