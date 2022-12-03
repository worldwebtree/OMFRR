<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\KeywordsImport;
use App\Models\Admin\RattingKeywords;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class KeywordManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RattingKeywords $rattingKeywords)
    {
        $keywords = $rattingKeywords->paginate(10);

        return view('dashboard.Admin.Keyword.keywordManage', compact('keywords'));
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
        /**
         *  if the request contain the file with .xlsx
         *  extension then this if statement will execute.
         */

        $file = $request->file('Keyword_file');

        Excel::import(new KeywordsImport, $file);

        return redirect()->route('admin.keyword.management')
        ->with('created', 'Keyword has been added successfully.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RattingKeywords $rattingKeywords, $id)
    {
        $delete = $rattingKeywords->findOrFail($id);

        $delete->delete();

        return redirect()->route('admin.keyword.management')
        ->with('deleted', 'The keyword has been deleted.');
    }
}
