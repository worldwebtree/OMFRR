<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutUS;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AboutUS $aboutUS)
    {
        $about = $aboutUS->get();

        return view('dashboard.Admin.aboutUs', compact('about'));
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
        $request->validate([
            'description' => ['required', 'string'],
        ]);

        AboutUS::create([
            'description' => $request->description,
        ]);

        return redirect()->route('admin.about')
        ->with('created', 'Website About has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => ['required', 'string'],
        ]);

        $about = AboutUS::findOrFail($id);

        $about->update([
            'description' => strip_tags($request->description),
        ]);

        return redirect()->route('admin.about')
        ->with('updated', 'Website About has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUS $aboutUS, $id)
    {
        $about = $aboutUS->findOrFail($id);

        $about->delete();

        return redirect()->route('admin.about')
        ->with('deleted', 'Website about has been deleted successfully');
    }
}
