@extends('layouts.master')
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <form method="post" action="{{route('author.update' , $author->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Add Author</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author</label>
                        <input type="text" id="name" value="{{$author->name}}" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="avatars" class=" form-control-label">Avatar</label>
                        <input type="file" id="avatars" value="{{$author->avatar}}" name="avatars" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="year" class=" form-control-label">Year</label>
                        <input type="date" id="year" name="year"  value="{{$author->year}}" class="form-control">
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="amount" class=" form-control-label">Work Amount </label>
                                <input type="number" id="amount" name="amount" value="{{$author->amount}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="nationality" class=" form-control-label">Nationality</label>
                                <input type="text" id="nationality" name="nationality" value="{{$author->nationality}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class=" form-control-label">Link Wiki</label>
                        <input type="text" id="link" name="link" value="{{$author->link}}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Add Author</button>
                </div>
            </form>

        </div>
    </div>
@endsection
