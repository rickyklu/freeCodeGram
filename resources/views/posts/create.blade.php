@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf


        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Image Caption</label>

                    <input id="name" name="caption" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                    @endif
                </div>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                    @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>
                <div class="row pt-3">
                    <button class="btn btn-primary">Submit Post</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection