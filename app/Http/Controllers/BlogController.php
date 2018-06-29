<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = Blog::all();
        return view('admin.blog.create')->with('blogs', $blogs);
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
            'title'=>'required',
            'body'=>'required',
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
        $path = $request->file('cover_image')->storeAs('public/blog_covers', $filenameToStore);

            //create album
        $blog = new Blog;

        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->cover_image = $filenameToStore;


        
        $blog->save();

        return redirect('/admin/blog')->with('success', 'News Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
        ]);

        if($request->file('cover_image')) {

            //get file name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            
            //Create new filename
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            
            // Upload image
            $path = $request->file('cover_image')->storeAs('public/blog_covers', $filenameToStore);
        } else {
            $filenameToStore = " ";
        }

            //create album
        $blog = Blog::find($id);

        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->cover_image = $filenameToStore;


        
        $blog->save();

        return redirect('/admin/blog')->with('success', 'News Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if(Storage::delete('public/blog_covers/'.$blog->cover_image)){
            $blog->delete();
        } else {
            $blog->delete();
        }

        return redirect('/admin/blog')->with('success', ' News Post Deleted');
    }
}
