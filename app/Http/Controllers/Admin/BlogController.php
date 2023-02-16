<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogStoreRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
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
    $categories = Category::all();
    return view('admin.blog.index', compact('blogs', 'categories'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $blogs = Blog::all();
    $categories = Category::all();
    return view('admin.blog.create', compact('blogs', 'categories'));
  }

  /**
   * Store a newly created resource in storage.
   *   if ($request->hasFile('photo')) {
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(BlogStoreRequest $request)
  {
    $data = $request->validated();
    unset($data['image']);
    if ($request->has('image')) {
      $data['image'] = $request->file('image')->store('blog-image');
    }

    Blog::create($data);
    return redirect()->route('admin.blog.index');
  }

  // $data['image'] = Storage::disk('public')->put('/blog-images', $data['image']);
  // $data['image'] = $request->file('image')->getClientOriginalName();
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Blog $blog)
  {
    return view('admin.blog.show', compact('blog'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function edit(Blog $blog)
  {
    return view('admin.blog.edit', compact('blog'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
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
  /**
   * Remove the specified resource from storage. ['blog' => $blog->id]
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function delete(Blog $blog)
  {
    $blog->delete();
    return redirect()->route('admin.blog.index');
  }
}
