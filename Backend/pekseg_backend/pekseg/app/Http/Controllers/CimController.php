<?php

namespace App\Http\Controllers;

use App\Models\Cim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return cim::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'felhasznalo' => 'required',
            'cim' => 'required',
            'telSzam' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['Hibaüzenet' => 'Hiányzik egy kötelező adat'],404);
        }
        $cim = Cim::create($request->all());
        return response()->json(['Pékáru ' => $cim->felhasznalo],201);
    }

    public function getByid($id)
    {
        $cim=Cim::find($id);
        if(is_null($cim))
        {
            return response()->json(['Nem megfelelő'=>'Nincs ilyen id az adattáblában'],404);
        }
        
         return response()->json($cim,200);
        
    }

    public function update(Request $request,$id)
    {
        $cim=Cim::find($id);
        if(is_null($cim))
        {
            return response()->json(['Nem található'=>'Nincs ilyen id-jű sor az adattáblában'],404);
        }
        $validator=Validator::make($request->all(),
        [
            'felhasznalo'=>'required',
            'cim'=>'required',
            'telSzam'=>'required'
            
        ]
        );
        if($validator->fails())
        {
            return response()->json(['Hiba!'=>'Fontos adat hiányzik, nem lehet frissíteni'],403);
        }

        $cim->update($request->all());
        return response()->json(['Cím'=>$cim->felhasznalo],201);



    }

    public function destroy($id)
    {
        $cim=Cim::find($id);
        if(is_null($cim))
        {
            return response()->json(['valami nem jó'=>'Nincs ilyen id-jű sor az adattáblában'],401);
        }
        $cim->delete();

        return response()->json(['Üzenet' => 'Cím sikeresen törölve',],205);

        
    }
}