<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index ()
    {
        return Material::all();
    }
    public function create (){
        return "Create";
    }
    public function store (Request $request){
        $items = new Material();
        $items->subject_id = $request->subject_id;
        $items->title = $request->title;
        $items->content_uz = $request->content_uz;
        $items->content_ru = $request->content_ru;
        $items->content_en = $request->content_en;
        $items->content_id = $request->content_id;

        $items->save();
        return ['Successfully added', Material::all()];
    }
    public function show ($material){ 
        return Material::query()->findOrFail($material);
        
    }
    public function update (Request $request){
        $items  = Material::findOrFail($request->id);

        $items->subject_id = $request->subject_id;
        $items->title = $request->title;
        $items->content_uz = $request->content_uz;
        $items->content_ru = $request->content_ru;
        $items->content_en = $request->content_en;
        $items->content_id = $request->content_id;

        $items->update();
        return ['Successfully updated', Material::findOrFail($request->id)];
    }
    public function delete (Request $request){
        $items  = Material::findOrFail($request->id)->delete();
        return 'Successfully deleted';
    }
}
