<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function hasPermission($per)
    {
        if($per == 'master')
        {
            $par = ['admin'];       

            if(in_array($this->role,$par))
            {            
                return true;
            }     

        }

        if($per == 'mitra')
        {
            $par = ['mitra'];       

            if(in_array($this->role,$par))
            {            
                return true;
            }     
        }

        if($per == 'agency')
        {
            $par = ['agency'];       
            if(in_array($this->role,$par))
            {            
                return true;
            }     
        }

        if($per == 'peserta')
        {
            $par = ['peserta'];       
            if(in_array($this->role,$par))
            {            
                return true;
            }     
        }
    }

    public function mitra()
    {
        return $this->hasOne(Patrner::class, 'user', 'id');
    }

    public function so()
    { 
        return $this->hasMany(Broadcast::class, 'agency', 'id');
    }
}
