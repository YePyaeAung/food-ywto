<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        
        return view('landing');
    }
    public function showMenuList() {
        $categories = Category::all();
        $menus = Menu::paginate(9);
        return view('menus', compact('categories', 'menus'));
    }
}
