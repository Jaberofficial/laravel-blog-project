<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createBlog()
    {
        return view('admin.blog.create');
    }

    public function storeBlog(Request $request)
    {
        $blog = new Blog();

        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->author_name = $request->author_name;
        $blog->blog_details = $request->blog_details;

        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = rand() . '.' . $image->getClientOriginalExtension();
            // $blog->image =  $imageName;
            $image->move('blogs', $imageName);

            $blog->image = url('blogs/' . $imageName);
        }

        $blog->save();

        toastr()->success('Blog Created Successfully.');
        return redirect()->back();
    }

    public function listBlog()
    {
        $blogs = Blog::orderBy("id", 'desc')->paginate(10);
        return view('admin.blog.list', compact('blogs'));
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);

        if ($blog->image && file_exists('blogs/' . basename($blog->image))) {
            unlink('blogs/' . basename($blog->image));
        }
        $blog->delete();

        toastr()->success('Blog Deleted Successfully.');
        return redirect()->back();
    }
    public function editBlog($id)
    {
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->author_name = $request->author_name;
        $blog->blog_details = $request->blog_details;

        if (isset($request->image)) {

            if ($blog->image && file_exists('blogs/' . basename($blog->image))) {
                unlink('blogs/' . basename($blog->image));
            }


            $image = $request->file('image');
            $imageName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move('blogs', $imageName);

            $blog->image = url('blogs/' . $imageName);
        }

                $blog->save();
                
        toastr()->success('Blog Updated Successfully.');
        return redirect('admin/list-blog');

    }
}
