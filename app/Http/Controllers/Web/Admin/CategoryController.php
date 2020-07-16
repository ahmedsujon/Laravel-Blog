<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        $data = array(
            'categories' => Category::orderBy('id', 'desc')->get()
        );
        return view('admin.category.index', $data);
    }

    public function create()
    {
        $data = array(
            'category' =>  Category::orderBy('name', 'asc')->get()
        );
        return view('admin.category.create', $data);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
