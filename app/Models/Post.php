<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'publication',
        'content_publication',
        'state publication',
        'catery id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
