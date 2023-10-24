<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodmenuController extends Controller
{
    public function index(){

        $data['getrecord'] = Food::all();
        // $newMenuItem = session('new_menu_item');

        return view('foodmenupage', $data);
    }
}
