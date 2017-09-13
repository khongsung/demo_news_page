<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'ks01_categories';

    public function news()
    {
    	return $this->hasMany(News::class);
    }
}
