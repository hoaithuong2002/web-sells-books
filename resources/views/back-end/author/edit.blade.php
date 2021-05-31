@extends('back-end.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <form method="post" action="{{route('author.update' , $author->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Edit Author</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author <i class="contact-index-index ">*</i></label>
                        <input type="text" id="name" value="{{$author->name}}" name="name" class="form-control">
                    </div>
                        <div class="form-group">
                            <label for="avatars" class=" form-control-label">Avatar</label>
                            <input type="file" id="avatars" value="{{$author->avatar}}" name="avatars"
                                   class="form-control">
                        </div>

                    <div class="form-group">
                        <label for="year" class=" form-control-label">Year <i class="contact-index-index ">*</i></label>
                        <input type="date" id="year" name="year" value="{{$author->year}}"
                               class="form-control @error('year') border-danger @enderror">
                        @error('year')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="amount" class=" form-control-label">Work Amount <i class="contact-index-index ">*</i></label>
                                <input type="number" id="amount" name="amount" value="{{$author->amount}}"
                                       class="form-control @error('amount') border-danger @enderror">
                                @error('amount')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nationality" class=" form-control-label">Nationality <i class="contact-index-index ">*</i></label>
                                <input type="text" id="nationality" name="nationality" value="{{$author->nationality}}"
                                       class="form-control @error('nationality') border-danger @enderror">
                                @error('nationality')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class=" form-control-label">Link Wiki</label>
                        <input type="text" id="link" name="link" value="{{$author->link}}"
                               class="form-control">
                    </div>

                    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
