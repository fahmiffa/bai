<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function agen()
    {
        return $this->belongsTo(Agency::class, 'agency','user');
    }

    public function job()
    {
        return $this->hasMany(Job::class, 'company','id');
    }
}
