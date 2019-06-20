<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable =['id', 'name', 'price', 'content', 'active' ];
    public $timestamps = true;
}
