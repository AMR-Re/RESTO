<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
       // $specials = Category::where('name', 'specials')->first();
        $specials = Menu::all();

        return view('zendo-welcome', compact('specials'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
