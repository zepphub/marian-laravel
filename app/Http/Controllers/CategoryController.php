<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::All();

        return view('admin.categories_index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        $duplicate = Category::where('name', $category->name)->first();
        if ($duplicate) {
          return redirect()->route('admin.categories.index')->withErrors('Existe una categoría con ese nombre.')->withInput();
        }
        $category->save();
        $message = 'Categoría "'.$category->name.'" creada.';

        return redirect()->route('admin.categories.index')->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $message = 'Categoría "'.$category->name.'" renombrada a "'.$request->name.'".';
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $duplicate = Category::where('name', $category->name)->where('id', "!=", $category->id)->first();
        if ($duplicate) {
          return redirect()->route('admin.categories.index')->withErrors('Existe otra categoría con ese nombre.')->withInput();
        }
        $category->save();

        return redirect()->route('admin.categories.index')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $message = 'Categoría "'.$category->name.'" borrada.';
        $category->delete();

        return redirect()->route('admin.categories.index')->withMessage($message);
    }
}
