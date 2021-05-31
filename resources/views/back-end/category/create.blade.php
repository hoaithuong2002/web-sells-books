@extends('back-end.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Add Author</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author <i class="contact-index-index ">*</i>
                        </label>
                        <input value="{{old('name')}}" type="text" name="name"
                               class="form-control  @error('name') border-danger  @enderror">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="amount" class=" form-control-label">Work Amount <i
                                        class="contact-index-index ">*</i></label>
                                <input type="number" id="amount" name="amount"
                                       class="form-control @error('amount') border-danger @enderror">
                                @error('amount')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Add Author</button>
                </div>
            </form>

        </div>
    </div>


@endsection
