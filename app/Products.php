<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

Class Products extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
        'description',

    ];
    public static $rules = [
        "name" => "required|max:120",
        "price" => "required|max:5",
        "description" => "required|max:1000"
    ];
}