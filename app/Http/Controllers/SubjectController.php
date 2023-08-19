<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index ()
    {
        $this->authorize('view', auth()->user());
        return Subject::all();
    }
    public function store (Request $request){
        $items = new Subject();
        $items->name = $request->name;
        $items->active = $request->active;
        

        $items->save();
        return ['Successfully added', Subject::all()];
    }
    public function show ($subject){ 
        return Subject::query()->with('materials')->findOrFail($subject);
    }
    public function update (Request $request){
        $items  = Subject::findOrFail($request->id);
        $items->name = $request->name;
        $items->active = $request->active;

        $items->update();
        return ['Successfully updated', Subject::findOrFail($request->id)];
    }
    public function delete (Request $request){
        $items  = Subject::findOrFail($request->id)->delete();
        return 'Successfully deleted';
    }
}
