<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoriable');
    }
}
