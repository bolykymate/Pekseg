<?php

namespace App\Http\Controllers;

use App\Models\Pekaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PekaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return pekaru::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            
            'nev' => 'required',
            'tipus' => 'required',
            'ar' => 'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['Hibaüzenet' => 'Hiányzik egy kötelező adat'],404);
        }
        $pekaru = Pekaru::create($request->all());
        return response()->json(['Pékáruk' => $pekaru->nev],201);
    }

    public function getByid($id)
    {
        $pekaru=Pekaru::find($id);
        if(is_null($pekaru))
        {
            return response()->json(['Nem megfelelő'=>'Nincs ilyen id az adattáblában'],404);
        }
        
         return response()->json($pekaru,200);
        
    }

 

    public function getHigherThan($ar)
    {
        $pekaru=Pekaru::where('ar','>',$ar);
        if($pekaru->exists())
        {
            return $pekaru->get();
        }
        else
        {
            return response()->json(['Nem létező érték'=>'Nem lehet az keresett összegnél magasabb árú pékárut találni'],404);
        }

    }


    public function getLowerThan($ar)
    {
        $pekaru=Pekaru::where('ar','<',$ar);
        if($pekaru->exists())
        {
            return $pekaru->get();
        }
        else
        {
            return response()->json(['Nem létező érték'=>'Nem lehet az keresett összegnél alacsonyabb árú pékárut találni'],404);
        }

    }


    public function update(Request $request,$id)
    {
        $pekaru=Pekaru::find($id);
        if(is_null($pekaru))
        {
            return response()->json(['Nem található'=>'Nincs ilyen id-jű sor az adattáblában'],404);
        }
        $validator=Validator::make($request->all(),
        [
            'nev'=>'required',
            'tipus'=>'required',
            'ar'=>'required'
            
        ]
        );
        if($validator->fails())
        {
            return response()->json(['Hiba!'=>'Fontos adat hiányzik, nem lehet frissíteni'],406);
        }

        $pekaru->update($request->all());
        return response()->json(['Pékáru'=>$pekaru->nev],201);

    }

    public function destroy($id)
    {
        $pekaru=Pekaru::find($id);
        if(is_null($pekaru))
        {
            return response()->json(['valami nem jó'=>'Nincs ilyen id-jű sor az adattáblában'],404);
        }
        $pekaru->delete();

        return response('',205);

        
    }


    public function search(Request $request)
{
    if ($request->has('nev')) 
    {
        $result = Pekaru::where('nev', $request->nev)->get();
    }
    elseif ($request->has('tipus')) 
    {
        $result = Pekaru::where('tipus', $request->tipus)->get();
    }
    else 
    {
        return response()->json(['error' => 'Hiányzó keresési paraméter'], 400);
    }



    return response()->json($result);
}


 
}

