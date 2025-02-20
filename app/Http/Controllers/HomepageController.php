<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function splash(){
        return view("splash");
    }
    public function home(){
        return view("home");
    }
    public function about(){
        return redirect()->away("https://www.avvanz.com/about-us");
    }
    public function screen(){
        return redirect()->away("https://www.avvanz.com/screen");
    }
    public function develop(){
        return redirect()->away("https://www.avvanz.com/develop");
    }
    public function contact(){
        return redirect()->away("https://www.avvanz.com/contact-us");
    }
    public function screenGlobal(){
        return redirect()->away("https://www.avvanz.com/screenglobal/");
    }
    public function cdGlobal(){
        return redirect()->away("https://cdd-global.avvanz.com/login");
    }
    public function learnGlobal(){
        return redirect()->away("https://learnglobal.apptitude.xyz");
    }
}
