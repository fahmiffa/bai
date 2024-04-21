<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Setting;

class Invoice extends Model
{
    use HasFactory;

    public function heads()
    {
        return $this->belongsTo(Head::class, 'mitra','mitra');
    }

    public function bills()
    {
        return $this->belongsTo(Bill::class, 'bill','id');
    }

    public function inv()
    {        
        return $this->hasMany(Inv::class, 'inv','id');
    }

    public function paid()
    {        
        return $this->hasOne(Payment::class, 'inv','id');
    }

    public function getnumberAttribute()
    {                
      $numb = str_pad($this->id, 3, "0", STR_PAD_LEFT);
      $month = date('m',strtotime($this->created_at));
      $year = date('y',strtotime($this->created_at));
      return 'INV'.$numb.''.$this->mitra.''.$month.''.$year;
    }

    public function getsumAttribute()
    {                
        $set = Setting::first()->tax;            
        $tot = 0;
        $val = $this->inv()->get();   
        foreach($val as $item)
        {         
            if($item->time)
            {
                $tot += $item->nominal*$item->time;
            }
            else
            {
                $tot += $item->nominal;
            }

        }

        $tax = $tot*$set/100;
        return $tot+$tax;
    }

    public function agency()
    {        
        return $this->hasOne(Agency::class, 'id','agen');
    }

    public function lpk()
    {        
        return $this->hasOne(Patrner::class, 'user','mitra');
    }
}
