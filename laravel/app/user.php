<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "user_info";
    public $timestamps = false;
    protected $primaryKey = 'id';
}
