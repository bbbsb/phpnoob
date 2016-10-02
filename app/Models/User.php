<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    //use SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'id';

    //protected $dates = ['delete_at'];

    public function scopePopular($query)
    {
        return $query->where('id', '>', 4);
    }

}
