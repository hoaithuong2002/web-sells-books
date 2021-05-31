@extends('back-end.layouts.master')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <form method="post" action="{{route('category.update' , $category->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Add Category</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author <i class="contact-index-index ">*</i></label>
                        <input type="text" id="name" value="{{$category->name}}" name="name" class="form-control">
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="amount" class=" form-control-label"> Amount <i class="contact-index-index ">*</i></label>
                                <input type="number" id="amount" name="amount" value="{{$category->amount}}"
                                       class="form-control @error('amount') border-danger @enderror">
                                @error('amount')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-outline-success btn-lg btn-block">Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
