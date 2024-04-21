<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use App\Models\Patrner;
use App\Models\Agency;
use App\Models\Field;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function mitra()
    {
        return Patrner::where('user',Auth::user()->id)->exists();
        // return false;
    }

    public function agency()
    {
        return Agency::where('user',Auth::user()->id)->exists(); 
        // return false;
    }

    public function peserta()
    {
        return Field::where('user',Auth::user()->id)->exists();         
    }
}
