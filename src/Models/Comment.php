<?php


namespace InvataProgramare\Novelist\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'website',
        'content',
        'status',
        'article_id',
    ];
}
