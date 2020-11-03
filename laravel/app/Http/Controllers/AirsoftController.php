<?php

namespace App\Http\Controllers;
use App\Models\Airsoft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AirsoftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airsofts = Airsoft::all();
        return view('index', $airsofts); //compacts functie weggehaald, is hier namelijk overbodig. Lees de php documentatie wat compact doet.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');     
    }
    
    //hier heb ik de getaddpage functie verwijderd, daarvoor MOET je namelijk de bovenstaande method create gebruiken. Lees de omschrijving van die method!!!!

    //hier heb ik de getIDForUpdate($id) method verwijderd, daarvoor MOET je namelijk de edit method gebruiken. 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //hier mist validatie, zie https://laravel.com/docs/8.x/validation
        
        $airsoft = new Airsoft;
        $airsoft->name = $request->input('name');
        $airsoft->save();
        return redirect()->route('index')->with('success', 'Successfully added products!');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function show(Airsoft $airsoft)
    {
        return view("/show", $airsoft);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function edit(Airsoft $airsoft)
    {
        return view('/edit', $airsoft);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airsoft $airsoft)
    {
        //hier mist validatie, zie https://laravel.com/docs/8.x/validation
        
        //je hoeft niet met queries te gaan werken, gebruik wat Laravel je aanbied!
        $airsoft->name = $request->input('name');
        $airsoft->save();
        
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airsoft $airsoft)
    {
        //wederom geen query nodig, gebruik wat laravel bied!
        $airsoft->delete();
        return redirect()->route('index');
    }

    public function deletepage()
    {
        return view('/delete');
    }
}
