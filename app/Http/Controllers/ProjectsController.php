<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Album;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums= Album::with('Photos')->get();
        return view('admin.albums.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::with('Photos')->get();
        return view('admin.create-album')->with('albums', $albums);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);


            //get file name with the extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image
        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

        if($request->file('brochure')){
            //get file name with the extension
            $filenameWithExtBro = $request->file('brochure')->getClientOriginalName();
            //Get just the filename
            $filenameBro = pathinfo($filenameWithExtBro, PATHINFO_FILENAME);
            //Get extension
            $extensionBro = $request->file('brochure')->getClientOriginalExtension();
            
            //Create new filename
            $filenameToStoreBro = $filenameBro.'_'.time().'.'.$extensionBro;
            
            // Upload image
            $pathBro = $request->file('brochure')->storeAs('public/brochures', $filenameToStoreBro);
        }


            //create album
        $project = new Album;

        $project->name = $request->input('name');
        $project->location = $request->input('location');
        $project->description = $request->input('description');
        $project->cover_image = $filenameToStore;
        
        if($request->file('brochure')){
            $project->brochure = $filenameToStoreBro;
        }
        
        $project->save();

        return redirect('/admin/create-album')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('Photos')->find($id);
        return view('admin.albums.show')->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('admin.albums.edit')->with('album', $album);
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
        $this->validate($request, [
            'name'=>'required',
            'cover_image'=>'image|max:1999',
        ]);


            //get file name with the extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image
        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

            //create album
        $project = Album::find($id);

        $project->name = $request->input('name');
        $project->location = $request->input('location');
        $project->description = $request->input('description');
        $project->cover_image = $filenameToStore;
        
        $project->save();

        return redirect('/admin/create-album')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);

        if(Storage::delete('public/album_covers/'.$album->cover_image)){
            $album->delete();
        }

        return redirect('/admin/albums')->with('success', 'Album Deleted');
    }
}
