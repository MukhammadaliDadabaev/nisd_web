<?php

namespace App\Http\Controllers;

use App\Http\Requests\LangujStoreRequest;
use App\Http\Requests\LangujUpdateRequest;
use App\Models\Language;

class LanguagePageConroller extends Controller
{
  public function index()
  {
    $languages = Language::all();
    return view('admin.language.index', compact('languages'));
  }

  public function create()
  {
    return view('admin.language.create');
  }

  public function store(LangujStoreRequest $request)
  {
    $data = $request->validated();

    Language::create($data);
    return redirect()->route('admin.language.index');
  }

  public function show(Language $language)
  {
    return view('admin.language.show', compact('language'));
  }

  public function edit(Language $language)
  {
    return view('admin.language.edit', compact('language'));
  }

  public function update(LangujUpdateRequest $request, Language $language)
  {
    $data = $request->validated();

    $language->update($data);
    return view('admin.language.show', compact('language'));
  }

  public function destroy(Language $language)
  {
    $language->delete();
    return redirect()->route('admin.language.index');
  }
}
