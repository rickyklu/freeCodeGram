@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method("PATCH")


    <div class="row">
      <div class="col-8 offset-2">
        <div class="row">
          <h1>Edit Profile</h1>
        </div>

        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label">Title</label>

          <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group row">
          <label for="description" class="col-md-4 col-form-label">Description</label>

          <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group row">
          <label for="url" class="col-md-4 col-form-label">URL</label>

          <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('url') }}</strong>
          </span>
          @endif
        </div>

        <div class="row">
          <label for="image" class="col-md-4 col-form-label">Profile Image</label>
          <input type="file" id="image" name="image" class="form-control-file">
          @if ($errors->has('image'))
          <strong>{{ $errors->first('image') }}</strong>
          @endif
        </div>

        <div class="row pt-3">
          <button class="btn btn-primary">Save Profile</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection