<?php

namespace App\Http\Controllers;

use App\Http\Requests\LangujStoreRequest;
use App\Http\Requests\LangujUpdateRequest;
use App\Models\Language;

class LanguagePageConroller extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $languages = Language::all();
    return view('admin.language.index', compact('languages'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.language.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(LangujStoreRequest $request)
  {
    $data = $request->validated();

    Language::create($data);
    return redirect()->route('admin.language.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Language $language)
  {
    return view('admin.language.show', compact('language'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Language $language)
  {
    return view('admin.language.edit', compact('language'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(LangujUpdateRequest $request, Language $language)
  {
    $data = $request->validated();

    $language->update($data);
    return view('admin.language.show', compact('language'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Language $language)
  {
    $language->delete();
    return redirect()->route('admin.language.index');
  }
}
