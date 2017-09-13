<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'ks01_news';
    protected $fillable = [];

    public function category()
    {
    	return $this->belongsTo(Categories::class);
    }

    public function user ()
    {
    	return $this->belongsTo(User::class);
    }
}
