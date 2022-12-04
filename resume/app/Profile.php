<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
            'name', 'email', 'job', 'fb', 'link', 'about', 'age', 'file','address','lang',
        ];
}
