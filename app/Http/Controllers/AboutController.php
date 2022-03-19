<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\Skill;
use App\Models\Text;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function about () {
        $abouts = About::all();
        $skills = Skill::all();
        $heroes =Hero::first();
        $texts = Text::all();
        return view('pages.about', compact('abouts', 'skills', 'heroes', 'texts'));
    }

    public function edit ($id) {
        $edit = About::find($id);
        return view('pages.editAbout', compact('edit'));
    }

    public function update ($id, Request $request) {
        $update = About::find($id);
        $update->img = $request->img;
        $update->title = $request->title;
        $update->birthday = $request->birthday;
        $update->website = $request->website;
        $update->phone = $request->phone;
        $update->city = $request->city;
        $update->age = $request->age;
        $update->degree = $request->degree;
        $update->email = $request->email;
        $update->freelance = $request->freelance;
        $update->save();
        return redirect('/about');

    }

}
