<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class input extends Model
{
    public $table = 'input';
    public $primaryKey = 'id';
    protected $fillable = [
        'username','content',
    ];
    public $timestamps = false;
}
