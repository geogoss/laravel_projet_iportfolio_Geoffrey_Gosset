<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    
    public function edit ($id) {
        $edit = Skill::find($id);
        return view('pages.editSkill', compact('edit'));
    }

    public function update ($id, Request $request) {
        $update = Skill::find($id);
        $update->skillname = $request->skillname;
        $update->pourcentage = $request->pourcentage;
        $update->save();
        return redirect('/skill');

    }


}
