<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfoli extends Model
{
    protected $fillable = [
            'name', 'field','link','img',
        ];
}
