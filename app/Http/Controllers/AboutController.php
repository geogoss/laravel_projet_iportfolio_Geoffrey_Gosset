<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Text;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function about () {
        $abouts = About::all();
        $skills = Skill::all();
        $heroes =Hero::first();
        $texts = Text::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view('pages.about', compact('abouts', 'skills', 'heroes', 'texts', 'portfolios', 'services', 'testimonials'));
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
