<?php

namespace App\Models;

use App\Models\Traits\HasImageSrcAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasImageSrcAttribute;
    use HasFactory;
    
    protected $fillable = [
        'title', 
        'image',
        'content',
    ];
}
