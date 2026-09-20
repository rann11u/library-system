<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index (){
        $members = [
            'Andi',
            'Budi',
            'Citra',
            'Dewi',
            'Eko'
        ];

        return view('members.index', compact ('members'));
    }

        public function show($id){
        return 'Member <br> ID Member: ' . $id;
    }

}
