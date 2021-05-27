@extends('back-end.layouts.master')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Category</strong>
                        </div>
                        <div class="card-body">
                            <div class="row box-top">
                                <div class="showing">
                                    <span class="showinfo-1">Show</span>
                                    <select name="bootstrap-data-table_length" aria-controls="bootstrap-data-table"
                                            class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="-1">All</option>
                                    </select>
                                    <span class="showinfo-2">entries</span>
                                </div>
                                <div class="search-box">
                                    <div class="dataTables_filter">
                                        <div class="dataTables_filter">
                                            <form action="{{route('category.search')}}" method="post">
                                                @csrf
                                                <label for="keyword">Search:</label>
                                                <input type="search" id="keyword" name="keyword" class="form-control form-control-sm"
                                                       aria-controls="bootstrap-data-table">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-author">
                                    <a type="submit" class=" fa-plus-square-o btn btn-outline-success" href="{{route('category.create')}}">Add Author</a>
                                </div>
                            </div>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr class="author-list">
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->amount}}</td>
                                        <td>
                                            <a href="{{$author->link}}"> {{$author->link}} </a>
                                        </td>
                                        <td>
                                            <div class="action-box">
                                                <a onclick="return confirm('Are you sure delete user: {{ $author->name }}')"
                                                   class="btn btn-outline-danger"
                                                   href="{{ route('author.delete', $author->id) }}">Delete</a>
                                                <a class="btn btn-outline-info"
                                                   href="{{ route('author.edit', $author->id) }}">Edit</a>
                                            </div>
                                            {{--                                            <button type="button" class="btn btn-outline-danger">Delete</button>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfood>
                                    <tr>
                                        <th>Name</th>
                                        <th>Avatar</th>
                                        <th>Year of birth</th>
                                        <th>Amount</th>
                                        <th>Nationality</th>
                                        <th>Link Wikipedia</th>
                                        <th>Action</th>

                                    </tr>
                                </tfood>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $authors->links() }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>

@endsection
