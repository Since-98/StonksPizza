<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index()
    {  $menus = Menu::all();

        return view('Menu.index', ['menus' => $menus]);
    }
}
