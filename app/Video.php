<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['user_id', 'category_id', 'instansi_id', 'thumbnail', 'title', 'slug', 'link_file', 'body', 'cover', 'file'];
    protected $with = ['author', 'category', 'tags', 'instansi'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'video_tag');
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
