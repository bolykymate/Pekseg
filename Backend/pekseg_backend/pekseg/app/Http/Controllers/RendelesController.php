<?php

namespace App\Http\Controllers;

use App\Models\Rendeles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RendelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return rendeles::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'pekaru' => 'required',
            'felhasznalo' => 'required',
            'nev' => 'required',
            'cim' => 'required',
            'szamlazasiNev' => 'required',
            'RDatum' => 'required',
            'KDatum' => 'required',
            'fizetesiMod' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['Hibaüzenet' => 'Hiányzik egy kötelező adat'],404);
        }
        $rendeles = Rendeles::create($request->all());
        return response()->json(['Pékáru ' => $rendeles->nev],201);
    }

    public function getByid($id)
    {
        $rendeles=Rendeles::find($id);
        if(is_null($rendeles))
        {
            return response()->json(['Nem megfelelő'=>'Nincs ilyen id az adattáblában'],404);
        }
        
         return response()->json($rendeles,202);
        
    }

    public function FilterByFizetesimod($fm)
    {
        $rendeles=Rendeles::where('fizetesimod','=',$fm);
        if($rendeles->exists())
        {
            return $rendeles->get();
        }
        else{
            return response()->json(['Nem létezik'=>'Nem létezik ilyen féle fizetési mód'],407);
        }
    }


    public function FilterByFelhasznaloid($fid)
    {
    $rendeles = Rendeles::where('felhasznalo', '=', $fid)->get(); 

    if ($rendeles->isEmpty()) { 
        return response()->json(['Nem létezik' => 'Nincs rendelés ezzel a felhasználó ID-vel'], 407);
    }
    
    return response()->json($rendeles); 
    }



    public function update(Request $request,$id)
    {
        $rendeles=Rendeles::find($id);
        if(is_null($rendeles))
        {
            return response()->json(['Nem létezik'=>'Nincs ilyen id-jű sor az adattáblában'],404);
        }
        $validator=Validator::make($request->all(),
        [
            'pekaru'=>'required',
            'felhasznalo'=>'required',
            'cim'=>'required',
            'szamlazasiNev'=>'required',
            'KDatum'=>'required',
            'fizetesiMod'=>'required'
            
        ]
        );
        if($validator->fails())
        {
            return response()->json(['Hiba!'=>'Fontos adat hiányzik, nem lehet frissíteni'],406);
        }

        $rendeles->update($request->all());
        return response()->json(['Rendelés'=>$rendeles->szamlazasiNev],201);

    }

    public function destroy($id)
    {
        $rendeles=Rendeles::find($id);
        if(is_null($rendeles))
        {
            return response()->json(['valami nem jó'=>'Nincs ilyen id-jű sor az adattáblában'],404);
        }
        $rendeles->delete();

        return response('',205);

        
    }

 

    
}

