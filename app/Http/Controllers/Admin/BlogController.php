<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::all();
    $categories = Category::all();
    return view('admin.blog.index', compact('blogs', 'categories'));
  }


  public function create()
  {
    $blogs = Blog::all();
    $categories = Category::all();
    return view('admin.blog.create', compact('blogs', 'categories'));
  }

  public function store(BlogStoreRequest $request)
  {

    $data = $request->validated();
    unset($data['image']);
    if ($request->has('image')) {
      $data['image'] = $request->file('image')->store('blog-image');
    }

    $data['user_id'] = Auth::user()->id;
    $data['status'] = $request->status ? 1 : 0;
    Blog::create($data);
    return redirect()->route('admin.blog.index');
  }


  public function show(Blog $blog)
  {
    return view('admin.blog.show', compact('blog'));
  }

  public function edit(Blog $blog)
  {
    return view('admin.blog.edit', compact('blog'));
  }


  public function update(BlogUpdateRequest $request,  Blog $blog)
  {
    $data = $request->validated();
    unset($data['image']);
    if ($request->has('image')) {
      Storage::delete($blog->image);
      $data['image'] = $request->file('image')->store('blog-image');
    }

    $blog->update($data);

    return view('admin.blog.show', compact('blog'));
  }

  // $data = $request->validated();
  //   $data['image'] = Storage::disk('public')->put('/blog-images', $data['image']);
  //   $data['image'] = $request->file('image')->getClientOriginalName();

  public function destroy(Blog $blog)
  {
    $blog->delete();
    return redirect()->route('admin.blog.index');
  }
}
