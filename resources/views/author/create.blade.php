@extends('layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <form method="post" action="{{route('author.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Add Author</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author
                        </label>
                        <input value="{{old('name')}}" type="text" name="name"
                               class="form-control  @error('name') border-danger  @enderror">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="avatars" class=" form-control-label">Avatar</label>
                        <input type="file" name="avatars"
                               class="form-control col-md-6  @error('avatars') border-danger  @enderror">
                        @error('avatars')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year" class=" form-control-label">Year</label>
                        <input type="date" id="year" name="year"
                               class="form-control @error('year') border-danger @enderror ">
                        @error('year')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="amount" class=" form-control-label">Work Amount </label>
                                <input type="number" id="amount" name="amount" class="form-control @error('amount') border-danger @enderror" >
                                @error('amount')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="nationality" class=" form-control-label">Nationality</label>
                                <input type="text" id="nationality" name="nationality" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class=" form-control-label">Link Wiki</label>
                        <input type="text" id="link" name="link"
                               class="form-control @error('link') border-danger @enderror">
                        @error('link')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Add Author</button>
                </div>
            </form>

        </div>
    </div>
@endsection
