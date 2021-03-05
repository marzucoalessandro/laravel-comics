<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {

         $comics = Comic::all();
         return view('admin.comics.index', compact('comics'));

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
          'cover' => 'nullable | mimes:jpg,jpeg,png,wbmp | max:200',
        ]);
        $cover = Storage::disk('public')->put('img', $request->cover);
        // dd($cover);
        $validate['cover'] = $cover;

        Comic::create($validate);
        $new_comic = Comic::orderBy('id', 'desc')->first();
        return redirect()->route('admin.comics.index', compact('new_comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
      return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
      return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
      $validate = $request->validate([
          'title' => 'required',
          'cover' => 'nullable | mimes:jpg,jpeg,png,wbmp | max:200',
        ]);
        $cover = Storage::put('img', $request->cover);

        $validate['cover'] = $cover;

        $comic->update($validate);
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
      $comic->delete();
      return redirect()->route('admin.comics.index', compact('comic'));
    }
}
