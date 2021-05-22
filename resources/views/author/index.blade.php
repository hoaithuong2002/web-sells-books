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
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Year of birth </th>
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
                                        <td>{{$author->link}}</td>
                                        <td>
                                            <a onclick="return confirm('Are you sure delete user: {{ $author->name }}')"
                                               class="btn btn-danger" href="{{ route('author.delete', $author->id) }}">Delete</a>
                                            <a class="btn btn-primary" href="{{ route('author.edit', $author->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfood>
                                    <tr>
                                        <th>Name</th>
                                        <th>Avatar</th>
                                        <th>Year of birth </th>
                                        <th>Amount</th>
                                        <th>Nationality</th>
                                        <th>Link Wikipedia</th>
                                        <th>Action</th>

                                    </tr>
                                </tfood>
                            </table>
                            <div class="d-flex justify-content-center">
{{--                                {{ $author->links() }}--}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>
@endsection
