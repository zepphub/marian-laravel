<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::All();

        return view('categories')->with('categories', $categories);
    }

    public function list()
    {
        $categories = Category::All();

        return view('admin.categories_list')->with('categories', $categories);
    }

    public function store(Category $request)
    {
        $categories = Category::All();
        $data = [
            'name' => $request->name,
        ];

        $category = Device::create($data);

        return redirect()->route('admin.categories_list')->with('categories', $categories);
    }

    public function delete($id)
    {
        $categories = Category::All();
        $category = Category::find($id);
        $category->delete();

        return view('admin.categories_list')->with('categories', $categories)->with('notice', 'El usuario ha sido eliminado correctamente.');
    }

}
