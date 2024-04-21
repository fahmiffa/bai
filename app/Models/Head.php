<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;


    public function partner()
    {
        return $this->hasOne(Patrner::class, 'user','mitra');
    }
   
    public function apply()
    {
        return $this->hasOne(Job::class, 'id','job');
    }

    public function invoices()
    {
        return $this->hasOne(Invoice::class, 'mitra','mitra');
    }

    public function data()
    {
        return $this->hasOne(Data::class, 'id','inter');
    }

    public function monitoring()
    {        
        return $this->hasOne(Complaint::class, 'head','id');
    }

    public function comp()
    {
        return $this->hasOne(Company::class, 'id','company');
    }

    public function agency()
    {
        return $this->hasOne(Agency::class, 'id','agen');
    }

    public function document()
    {
        return $this->hasOne(Document::class, 'head','id');
    }

    public function peserta()
    {
        return $this->hasOne(Field::class, 'id','field');
    }

    public function bill()
    {
        return $this->hasOne(Bill::class, 'head','id');
    }

}
