<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
        //funcion ver totl personas de la tabla json
        public function index()
        {
            $persons = Person::all();
            return response()->json($persons);
        }
    
        //funcion para apsarle un id y mostrar en json
        public function show($id)
        {
            $person = Person::find($id);
            if (!$person) {
                return response()->json(['error' => 'Person not found'], 404);
            }
            return response()->json($person);
        }

        //post para crear una nueva persona 
        public function store(Request $request)
    {
        $request->validate([
            'usuario_so' => 'required',
            'password' => 'required'
        ]);

        $person = Person::create($request->all());

        return response()->json($person, 201);
    }

    //actualizar

    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        $request->validate([
            'usuario_so' => 'required',
            'password' => 'required'
        ]);

        $person->update($request->all());

        return response()->json($person, 200);
    }

    //eliminar

    public function destroy($id)
    {
        $person = Person::find($id);
        if (!$person) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        $person->delete();

        return response()->json(null, 204);
    }



        public function login(){
            return view('inicio/login');
    
        }
        public function createuser(){
            return view('inicio/create');
    
        }
}
