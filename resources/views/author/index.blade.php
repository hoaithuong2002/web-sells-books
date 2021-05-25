@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="dataTables_length" id="bootstrap-data-table_length">
                                            <label>
                                                Show
                                                <select name="bootstrap-data-table_length"
                                                        aria-controls="bootstrap-data-table"
                                                        class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="50">50</option>
                                                    <option value="-1">All</option>
                                                </select>
                                                entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="dataTables_filter">
                                            <form action="{{route('author.search')}}" method="post">
                                                @csrf
                                            <label>
                                                Search:
                                                <input type="search" name="keyword" class="form-control form-control-sm"
                                                        aria-controls="bootstrap-data-table">
                                            </label>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <a type="submit" class=" fa-plus-square-o btn btn-outline-success" href="{{route('author.create')}}" >Add Author</a>
                                    </div>
                                </div>

                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Year of birth</th>
                                    <th>Amount</th>
                                    <th>Nationality</th>
                                    <th>Link Wikipedia</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($authors as $author)
                                    <tr class="author-list">
                                        <td>{{$author->name}}</td>
                                        <td><img src="{{asset('storage/' .$author->avatar)}}" width="200"></td>
                                        <td>{{$author->year}}</td>
                                        <td>{{$author->amount}}</td>
                                        <td>{{$author->nationality}}</td>
                                        <td>
                                            <a href="{{$author->link}}"> {{$author->link}} </a>
                                        </td>
                                        <td>
                                            {{--                                            <button type="button" class="btn btn-outline-danger">Delete</button>--}}
                                            <a onclick="return confirm('Are you sure delete user: {{ $author->name }}')"
                                               class="btn btn-outline-danger"
                                               href="{{ route('author.delete', $author->id) }}">Delete</a>
                                            <a class="btn btn-outline-info"
                                               href="{{ route('author.edit', $author->id) }}">Edit</a>
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
                                {{ $authors->links( ) }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>


    <script>
        $(function () {
            $("#keyword").autocomplete({
                serviceUrl:'/author/search',
                paramName: "keyword",
                onSelect: function(suggestion) {
                    $("#keyword").val(suggestion.value);
                },
                transformResult: function(response) {
                    return {
                        suggestions: $.map($.parseJSON(response), function(item) {
                            return {
                                value: item.name,
                            };
                        })
                    };
                },
            });
        })
    </script>
@endsection
