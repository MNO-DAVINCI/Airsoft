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
        //
        $airsofts = Airsoft::all();
        // get fucntion aanpassen
        return view('index', compact('airsofts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getaddpage()
    {
        //
        return view('/add');
    }

    public function getIDForUpdate($id)
    {
        //
        $airsoft = Airsoft::find($id);
        return view('/update', ['weapon' => $airsoft]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function edit(Airsoft $airsoft)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->input('id');
        $name = $request->input('name');
        $update = DB::update('update airsofts set name = (?) where id = (?)', [$name, $id]);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('airsofts')->where('id', $id)->delete();
        return redirect()->route('index');
    }

    public function deletepage()
    {
        //
        return view('/delete');
    }
}
