<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{



    public function create () {
        return view('pages.createTextHero');
    }

    public function store (Request $request){
        $store = new Text();
        $store->text = $request->text;
        $store->save();
        return redirect('/about');
    }



    public function edit ($id){
        $edit = Text::find($id);
        return view('pages.editTextHero', compact('edit'));
    }

    public function update ($id, Request $request){
        $update = Text::find($id);
        $update->text = $request->text;
        $update->save();
        return redirect('/about');
    }

    public function destroy ($id){
        $delete = Text::find($id);
        $delete->delete();
        return redirect('/about');
    } 

}
