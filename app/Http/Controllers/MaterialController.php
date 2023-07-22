<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Subject;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index ()
    {
        return Material::all();
    }
    public function create (){
        return redirect()->route('subjects');
    }
    public function store (Request $request){
        return 'Store';
    }
    public function show ($subject){ 
        return Material::query()->findOrFail($subject);
        
    }
    public function edit (){
        return 'Edit';
    }
    public function update (){
        return 'Update';
    }
    public function delete (){
         return 'Delete';
    }
}
