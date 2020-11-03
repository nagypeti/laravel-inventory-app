<?php

namespace App\Http\Controllers;

use Session;
use URL;

class LanguageController extends Controller
{
    public function setLocale($locale)
    {
        if (!in_array($locale, ['en', 'hu'])) {
            $locale = 'en';
        }
        Session::put('locale', $locale);
        return redirect(url(URL::previous()));
    }
}
