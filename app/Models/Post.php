<?php

namespace App\Models;

use App\Accessors\DefaultAccessors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory,DefaultAccessors;

    protected $fillable =[
        'title',
        'content',
        'user_id',
        'date',
    ];

    

    
}
