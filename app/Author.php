<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //Opsi 1
   // protected $fillable = ['name'];

    protected $guarded = [];
    public $timestamps = false;

}
