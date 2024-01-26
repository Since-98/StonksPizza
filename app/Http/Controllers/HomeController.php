<?php

namespace App\Http\Controllers;
use App\Models\menu;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');

    }




}
