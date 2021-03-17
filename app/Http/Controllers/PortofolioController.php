<?php

namespace App\Http\Controllers;

use App\Portofolio;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::all();
        return view('admin.portofolio', compact('portofolio'));
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
        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imgName);
        Portofolio::create([
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
            'image' => $imgName
        ]);
        return redirect('/admin/portofolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $img = Portofolio::where('id', $request->id)->first();
        File::delete('uploads/' . $img->image);

        // Update
        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imgName);

        Portofolio::where('id', $request->id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
                'image' => $imgName
            ]);
        return redirect('/admin/portofolio')->with('status', 'Edit data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        $img = Portofolio::where('id', $portofolio->id)->first();
        File::delete('uploads/' . $img->image);

        Portofolio::destroy($portofolio->id);
        return redirect('/admin/portofolio')->with('status', 'Data berhasil dihapus!');
    }
}
