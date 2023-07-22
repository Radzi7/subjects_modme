<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index ()
    {
        return Subject::all();
    }
    public function create (){
        
        return 'Create';;
    }
    public function store (Request $request){
        return 'Store';
    }
    public function show ($subject){ 
        return Subject::query()->findOrFail($subject);
        
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
