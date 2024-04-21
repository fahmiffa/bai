<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public function output()
    { 
        return $this->hasOne(User::class, 'id','to');
    }

    public function input()
    { 
        return $this->hasOne(User::class, 'id','in');
    }
}
