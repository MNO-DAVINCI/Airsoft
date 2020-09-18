<?php

namespace App\Http\Controllers;
use App\Models\Airsoft;
use Illuminate\Http\Request;

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
        $airsoft = DB::select('select * from airsofts');
        return view('index',['name'=>$name]);
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
        return redirect()->route('index')->with('success', 'Successfully purchased products!');
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
    public function update(Request $request, Airsoft $airsoft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airsoft  $airsoft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airsoft $airsoft)
    {
        //
    }
}
