<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Randevu;
use App\Models\Review;
use App\Models\Tedavi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RandevuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $datalist = Randevu::where('user_id',Auth::id())->get();
        return view('home.user_procces',['datalist'=>$datalist]);
    }
    public function yenirandevual()
    {
        return view('home.randevu_add');
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
        $data = new Randevu();
        $data->user_id=Auth::id();
        $data->hekim=$request->input('doctor');
        $data->date=$request->input('date');
        $data->time=$request->input('time');
        $data->note=$request->input('note');
        $data->ip=$_SERVER['REMOTE_ADDR'];
        $data->save();
        /*return view('user_randevu');*/
        return redirect()->route('user_randevu')->with('success','Mesajınız Kaydedilmiştir. Teşekkür ederiz.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function deletemyrandevu($id)
    {
        $data = Randevu::find($id);
        $data->delete();
        return redirect()->back()->with('success','Procces Deleted');
    }
    public function show(Randevu $randevu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function edit(Randevu $randevu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randevu $randevu)
    {
        //
    }
}
