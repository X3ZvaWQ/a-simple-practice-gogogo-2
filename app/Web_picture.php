<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web_picture extends Model
{
    //
    public $table = 'web_pictures';
    public $primaryKey = 'id';
    protected $fillable = [
        'href','id',
    ];
    public $timestamps = false;
}