<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $blog = Blog::get();
            return DataTables::of($blog)
                ->editcolumn('header', function ($row) {
                    return $row->header;
                })
                
                ->editcolumn('image', function ($row) {
                    return '<img class="img-thumbnail" width="80px" hieght="80px" src="'.asset('images/'.$row->image).'">';
                })

                ->addcolumn('actions', function ($row) {
                    return ' <a href="' . url("blog/edit/" . encrypt($row->id)) . '" class="btn btn-info float-left">
                                    Edit
                             </a>
                        <form action="' . action("BlogController@destroy", $row->id) . '" method="post" class="float-left ml-2">' .
                        csrf_field() . '
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger float-left">
                                Delete
                            </button>
                        </form>';
                })
                ->rawColumns(['actions','image'])
                ->make(true);
        }
        return view('admin_dashboard.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dashboard.blog.create');
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
            'image' => 'required|image',
            'header' => 'required|min:15|max:50',
            'description' => 'required|min:150',
        ]);
        // $path= $request->file('image')->store('images/blog');
        $path=Storage::put('blog',$request->file('image'));
        $blog = new Blog();
        $blog->image = $path;
        $blog->header = $request->input('header');
        $blog->description = $request->input('description');
        $blog->save();
        toast()->success('Blog saved successfully')->timerProgressBar();
        return redirect()->back();
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
        $id=decrypt($id);
        $blog = Blog::find($id);
        return view('admin_dashboard.blog.edit', compact('blog'));
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
            'image' => 'required|image',
            'header' => 'required|min:15|max:50',
            'description' => 'required|min:150',
        ]);
        $blog = Blog::find($id);
        if($request->hasFile('image')){
            // $path= $request->file('image')->store('images/blog');
            $path=Storage::put('blog',$request->file('image'));
            $blog->image = $path;
        }
        $blog->header = $request->input('header');
        $blog->description = $request->input('description');
        $blog->save();
        toast()->success('Blog updated successfully')->timerProgressBar();
        return redirect(url('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->back();
    }
}
