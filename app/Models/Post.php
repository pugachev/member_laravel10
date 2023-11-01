<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'image',
    ];
    //Users→Posts 1人のユーザーは複数のコメントを持つ
    public function user(){
        return $this->belongsTo(User::class);
    }
}
