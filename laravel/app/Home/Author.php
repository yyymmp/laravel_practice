<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'author';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','name'];
}
