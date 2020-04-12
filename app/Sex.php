<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kind'
    ];
}
