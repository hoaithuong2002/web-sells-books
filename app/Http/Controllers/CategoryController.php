<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->paginate(5);
        return view('back-end.category.index',compact('categories'));
    }

    public function create()
    {
        return view('back-end.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->amount = $request->amount;
        $category->save();
        toastr()->success('Đã thêm mới thể loại thành công!!!');
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('back-end.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->amount = $request->amount;
        $category->save();
        toastr()->success('Cập nhật thành công!!!');
        return redirect()->route('category.index');
    }

    public function delete($id)
    {

    }
}
