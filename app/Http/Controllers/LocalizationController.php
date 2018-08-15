<?php

namespace App\Http\Controllers;

use App;
use Session;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function localize($lang)
    {
        App::setLocale($lang);
        Session::put('lang', $lang);
        return back();
    }
}
