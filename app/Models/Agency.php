<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    public function head()
    {
        return $this->belongsTo(Head::class, 'id','agen');        
    }

    public function company()
    {
        return $this->hasMany(Company::class, 'agency','user');
    }

    public function mou()
    {
        return $this->hasMany(Mou::class, 'agency','id');
    }

    public function cat()
    {
        return $this->hasOne(User::class, 'id','user');
    }
}
