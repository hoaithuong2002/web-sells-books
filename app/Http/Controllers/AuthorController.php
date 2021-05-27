<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = DB::table('authors')->paginate(5 );
        return view('back-end.author.index', compact('authors'));
    }

    public function create()
    {
        return view('back-end.author.create');
    }

    public function store(AuthorRequest $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $path = $request->file('avatars')->store('/avatars', 'public');
        $author->avatar = $path;
        $author->year = $request->year;
        $author->amount = $request->amount;
        $author->nationality = $request->nationality;
        $author->link = $request->link;
        $author->save();
        toastr()->success('Congratulations on your successful creation!!!');

        if ($request->hasFile('image')) {
            $file = $request->file('avatars');
            $file->storeAs('public/avatars', 'anh_' . $author->id);
        }
        return redirect()->route('author.index');
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('back-end.author.edit', compact('author'));
    }

    public function update($id, AuthorRequest $request)
    {
        $author = Author::find($id);
        $author->name = $request->name;
        $path = $request->file('avatars')->store('/avatars', 'public');
        $author->avatar = $path;
        $author->year = $request->year;
        $author->amount = $request->amount;
        $author->nationality = $request->nationality;
        $author->link = $request->link;
        $author->save();
        toastr()->success('Cập nhật thành công');

        if ($request->hasFile('image')) {
            $file = $request->file('avatars');
            $file->storeAs('public/avatars', 'anh_' . $author->id);
        }
        return redirect()->route('author.index');
    }

    public function delete($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        toastr()->success('Xoá thành công');
        return redirect()->route('author.index');
    }
    public function search(Request $request)
    {
//        dd($request);
        $search = $request->keyword;
        $authors = DB::table('authors')->where('name', 'LIKE', "%$search%")->paginate(4);
        return view('back-end.author.index',  compact('authors'));
    }

    public function show($id )
    {

        $author= DB::table('authors')->where('id','=',$id)->get();
//        return view('back-end.author.show',compact('author'));
        return $author;
    }
}
