@extends('back-end.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-5">
                            <form action="{{route('category.update', $category->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Category name</label>
                                    <input name="name" type="text" class="form-control" value="{{$category->name}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
@endsection
