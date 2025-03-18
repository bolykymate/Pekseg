<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FelhasznaloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return felhasznalo::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'jelszo' => 'required',
            'email' => 'required',
            'nev' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['Hibaüzenet' => 'Hiányzik egy kötelező adat'],404);
        }
        $felhasz = Felhasznalo::create($request->all());
        return response()->json(['Pékáru ' => $felhasz->nev],201);
    }


    public function getByid($id)
    {
        $felhasznalo=Felhasznalo::find($id);
        if(is_null($felhasznalo))
        {
            return response()->json(['Nem megfelelő'=>'Nincs ilyen id az adattáblában'],404);
        }
        
         return response()->json($felhasznalo,200);
        
    }

    public function FilterByFelhasznaloid($fid)
    {
        $felhasznalo = Felhasznalo::where('id', '=', $fid)->get(); 

    if ($felhasznalo->isEmpty()) { 
        return response()->json(['Nem létezik' => 'Nincs felhasználó ezzel a felhasználó ID-vel'], 404);
    }
    
    return response()->json($felhasznalo); 
    }

    public function update(Request $request,$id)
    {
        $felhasznalo=Felhasznalo::find($id);
        if(is_null($felhasznalo))
        {
            return response()->json(['Nem található'=>'Nincs ilyen id-jű sor az adattáblában'],404);
        }
        $validator=Validator::make($request->all(),
        [
            'nev'=>'required',
            'jelszo'=>'required',
            'email'=>'required'
            
        ]
        );
        if($validator->fails())
        {
            return response()->json(['Hiba!'=>'Fontos adat hiányzik, nem lehet frissíteni'],406);
        }

        $felhasznalo->update($request->all());
        return response()->json(['Felhasználó'=>$felhasznalo->nev],202);


    }


    public function destroy($id)
    {
        $felhasznalo=Felhasznalo::find($id);
        if(is_null($felhasznalo))
        {
            return response()->json(['valami nem jó'=>'Nincs ilyen id-jű sor az adattáblában'],401);
        }
        $felhasznalo->delete();

        return response('',205);

        
    }
}
