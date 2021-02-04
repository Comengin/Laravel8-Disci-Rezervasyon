<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tedavi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TedaviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Tedavi::all();
        return view('admin.tedavi', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$datalist = Category::all();
        $datalist = Category::with('children')->get();
        return view('admin.tedavi_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Tedavi;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->save();
        return redirect()->route('admin_tedavi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tedavi  $tedavi
     * @return \Illuminate\Http\Response
     */
    public function show(Tedavi $tedavi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tedavi  $tedavi
     * @return \Illuminate\Http\Response
     */
    public function edit(Tedavi $tedavi, $id)
    {
        $data = Tedavi::find($id);
        //$datalist = Category::all();
        $datalist = Category::with('children')->get();
        return view('admin.tedavi_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tedavi  $tedavi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tedavi $tedavi, $id)
    {
        $data = Tedavi::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_tedavi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tedavi  $tedavi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tedavi $tedavi, $id)
    {
        //DB::table('tedavi')->where('id','=',$id)->delete();
        $data = Tedavi::find($id);
        $data->delete();
        return redirect()->route('admin_tedavi');
    }
}
