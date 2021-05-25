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
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <a type="submit" class="btn btn-outline-success" href="{{route('author.create')}}">Add
                                    Author</a>
                            </div>
                            <div class="col-col-lg-4">
                                <div class="input-group rounded ">
                                    <form action="{{route('author.search')}}" method="post">
                                        @csrf
                                        <span class="input-icon">
									        <input name="keywork" type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off"/>
								            	<i class="ace-icon fa fa-search nav-search-icon"></i>
							        	</span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
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
@endsection
