<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','comment','article_id'];
}
