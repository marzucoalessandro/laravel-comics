<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comics;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {

         $comic = Comics::all();
         return view('admin.comics.index', compact('comic'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
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
          'title' => 'required',
          'cover' => 'required'
        ]);

        Comics::create($validate);
        $new_comic = Comics::orderBy('id', 'desc')->first();

        return redirect()->route('admin.comics.index', compact('new_comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comics)
    {
      return view('admin.comics.show', compact('comics', ['comics' => $comics->id]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comics)
    {
      return view('admin.comics.edit', compact('comics', ['comics' => $comics->id]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comics)
    {
      $validate = $request->validate([
          'title' => 'required',
          'cover' => 'required'
        ]);

        $comics->update($validate);
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
