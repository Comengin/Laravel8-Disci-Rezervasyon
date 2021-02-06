<?php

namespace App\Http\Controllers;

use App\Models\Procces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProccesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Procces::where('user_id', Auth::id())->get();
        return view('home.user_procces',['datalist'=>$datalist]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procces  $procces
     * @return \Illuminate\Http\Response
     */
    public function show(Procces $procces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procces  $procces
     * @return \Illuminate\Http\Response
     */
    public function edit(Procces $procces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procces  $procces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procces $procces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procces  $procces
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procces $procces)
    {
        //
    }
}
