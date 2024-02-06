<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
        'user_id'
        ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function label(){
        return $this->belongsToMany(Label::class, 'article_label');
    }

    public function meneadores(){
        return $this->belongsToMany(User::class, 'article_user');
    }
}
