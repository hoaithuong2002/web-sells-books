@extends('back-end.layouts.master')
@section('content')
    <div class="card">
        <form method="post" action="{{route('author.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-header"><strong>Add Author</strong></div>
            <div class="card-body card-block row justify-content-between">
                <div class="col col-4 ol-lg-4">
                    <div class="form-group">
                        <label for="avatars" class=" form-control-label">Avatar </label>
                        <input type="file" name="avatars"
                               class="form-control col-md-12 @error('avatars') border-danger  @enderror">@error('avatars')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col col-8 col-lg-8">
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name Author <i
                                class="contact-index-index ">*</i>
                        </label>
                        <input value="{{old('name')}}" type="text" name="name"
                               class="form-control  @error('name') border-danger  @enderror">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="year" class=" form-control-label">Year <i
                                class="contact-index-index ">*</i></label>
                        <input type="date" id="year" name="year"
                               class="form-control col-sm-12 @error('year') border-danger @enderror ">
                        @error('year')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-8">
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
                        <div>
                            <div class="form-group">
                                <label for="nationality" class=" form-control-label">Nationality <i
                                        class="contact-index-index ">*</i></label>
                                <input type="text" id="nationality" name="nationality"
                                       class="form-control @error('nationality') border-danger @enderror">
                                @error('nationality')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
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
            </div>
        </form>

    </div>

    <script type="text/javascript" src="{{asset('/js/dropdown.js')}}"></script>
    <script>
        $(".dropzone").dropzone({
            dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Tải lên một hoặc nhiều hình ảnh về tác gỉả, tại đây",
        });
    </script>
@endsection
