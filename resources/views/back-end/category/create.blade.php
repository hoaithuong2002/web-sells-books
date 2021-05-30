@extends('back-end.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-5">
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Category name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Category Amount</label>
                                    <input name="amount" type="number" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">submit</button>
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
