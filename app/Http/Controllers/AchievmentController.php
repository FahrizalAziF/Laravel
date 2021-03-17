<?php

namespace App\Http\Controllers;

use App\Achievments;
use File;
use Illuminate\Http\Request;

class AchievmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievments = Achievments::all();
        return view('admin.achievment', compact('achievments'));
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
        Achievments::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imgName
        ]);
        return redirect('/admin/achievment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achievments  $achievments
     * @return \Illuminate\Http\Response
     */
    public function show(Achievments $achievments)
    {
        return $achievments;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achievments  $achievments
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievments $achievments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achievments  $achievments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievments $achievments)
    {
        // Delete Image
        $img = Achievments::where('id_achiev', $request->id_achiev)->first();
        File::delete('uploads/' . $img->image);

        // Update
        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imgName);
        Achievments::where('id_achiev', $request->id_achiev)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imgName
            ]);

       

        return redirect('/admin/achievment')->with('status', 'Edit data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achievments  $achievments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Achievments::where('id_achiev', $id)->first();
        File::delete('uploads/' . $img->image);

        Achievments::destroy($id);
        return redirect('/admin/achievment')->with('status', 'Hapus data berhasil!');
    }
}
