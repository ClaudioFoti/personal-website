<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetLocaleRequest;
use Illuminate\Support\Facades\Redirect;

class LocaleController extends Controller
{
    public function setLocale(SetLocaleRequest $request){
        if (array_key_exists($request->locale,config('claudiofoti.languages'))) {
            session()->put('locale',$request->locale);
        }

        return Redirect::back();
    }
}
