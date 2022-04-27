<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'thumb',
        'title',
        'series',
        'description',
        'type',
        'sale_date',
        'price'
    ];
}
