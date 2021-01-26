<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $fillable = ['name', 'slug'];

    public function videos()
    {
        return $this->hasMany(Video::class, 'instansi_id');
    }
}
