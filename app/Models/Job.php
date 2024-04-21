<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Head;

class Job extends Model
{
    use HasFactory;

    public function comp()
    {
        return $this->belongsTo(Company::class, 'company','id');
    }

    public function mitras()
    {
        return $this->hasMany(Broadcast::class, 'job','id');
    }

    public function to()
    { 
        return $this->hasOne(Patrner::class, 'id','tojob');
    }

    public function tojobs()
    { 
        return $this->hasMany(ToJob::class, 'job','id');
    }

    public function getopenAttribute()
    {                                
        $n = Head::where('job',$this->id)->count();
        $mod = $this->kouta-$n;
        return ($mod > 0) ? true : false;
            
    }

    public function getcodeAttribute()
    {                
      $numb = str_pad($this->id, 2, "0", STR_PAD_LEFT);
      $month = date('m',strtotime($this->created_at));
      $year = date('y',strtotime($this->created_at));
      return 'KD'.$numb.''.$this->comp->id.''.$this->comp->agen->id;
    }


}
