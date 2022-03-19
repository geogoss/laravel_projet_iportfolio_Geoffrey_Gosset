<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function hero () {
        $heroes = Hero::all();
        return view('pages.about', compact('heroes'));
    }

    public function edit ($id) {
        $edit = Hero::find($id);
        return view('pages.editHero', compact('edit'));
    }

    public function update ($id, Request $request) {
        $update = Hero::find($id);
        $update->name = $request->name;
        $update->img = $request->img;
        $update->save();
        return redirect('/about');
    }

    

}
