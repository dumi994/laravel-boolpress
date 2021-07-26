<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
