<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Faker\Generator;

class CrudsController extends Controller
{
    //
    public function create(Generator $faker){
        $crud = new Crud();
        $crud->name = $faker->lexify('????????');
        $crud->color = $faker->boolean ? 'red' : 'green';
        $crud->save();

        return response($crud->jsonSerialize(), Response::HTTP_CREATED);
    }

    // Return full set of crud
    public function index(){
        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);
    }
    
    // Change color of the Crud
    public function update(Request $request, $id){
        $crud = Crud::findOrFail($id);
        $crud->color = $request->color;
        $crud->save();
    }

}
