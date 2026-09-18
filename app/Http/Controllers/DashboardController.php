<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $stockBook = 8;
        $countMembers = 5;
        $countCategories = 5;

        return view ('dashboard.index', compact('stockBook', 'countMembers', 'countCategories'));
    }
}
