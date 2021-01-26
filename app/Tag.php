<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    public function videos()
    {
        return $this->belongsToMany(Video::class, 'video_tag');
    }
}
