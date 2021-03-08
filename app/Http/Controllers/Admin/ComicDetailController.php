<?php

namespace App\Http\Controllers\Admin;

use App\ComicDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicDetail = ComicDetail::all();
        return view('admin.details.index', compact('comicDetail'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
          'price' => 'required',
          'description' => 'required',
          'designer' => 'required',
          'writer' => 'required',
          'data_publ' => 'required',
          'vol_numb' => 'required',
          'size' => 'required',
          'page' => 'required',
          'rated' => 'required'
        ]);

        ComicDetail::create($validate);
        $new_detail = ComicDetail::orderBy('id', 'desc')->first();

        return redirect()->route('admin.details.index', compact('new_detail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComicDetail  $comicDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ComicDetail $comicDetail)
    {
        return view('admin.details.show', compact('comicDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComicDetail  $comicDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ComicDetail $comicDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComicDetail  $comicDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComicDetail $comicDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComicDetail  $comicDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComicDetail $comicDetail)
    {
        //
    }
}
