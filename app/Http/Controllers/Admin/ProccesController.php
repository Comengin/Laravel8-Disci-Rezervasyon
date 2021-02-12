<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Procces;
use App\Models\Randevu;
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
        $datalist = Randevu::all();
        return view('admin.procces',['datalist'=>$datalist]);
    }
    public function list($status)
    {
        $datalist = Randevu::where('status',$status)->get();
        return view('admin.procces',['datalist'=>$datalist]);
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
    public function show(Procces $procces,$id)
    {
        $data = Randevu::find($id);
        $datalist = Procces::where('id',$id)->get();
        return view('admin.randevu_edit',['data'=>$data,'datalist'=>$datalist]);
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
    public function update(Request $request, Procces $procces,$id)
    {
        $data = Randevu::find($id);
        $data->status=$request->input('status');
        $data->note=$request->input('note');
        $data->save();
        return redirect()->back()->with('success','Randevu Updated');
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
