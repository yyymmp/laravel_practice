<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //
    protected $table = 'keyword';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','keyword'];
}
