<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];
    
    public function articles() :BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}