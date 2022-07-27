<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function language($locale)
    {
        if(in_array($locale, ['am', 'en']))
            Session::put('locale', $locale);
        else
            Session::put('locale', 'am');

        return redirect()->back();
    }
}
