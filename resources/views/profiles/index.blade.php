@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/images/fccLogo.png" alt="fccLogo">
        </div>
        <div class="col-9 pt-5" >
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add post</a>
            </div>
            <div class="d-flex">
                <div class="col-3">posts</div>
                <div class="col-3">following</div>
                <div class="col-3">followers</div>
            </div>
            <div class="pt-4">
                <strong>{{ $user->profile->title }} </strong>
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <a href="#">{{ $user->profile->url ?? 'N/A' }}</a>
        </div>
        <div class="row pt-4">
            <div class="col-4">
                <img class="w-100" src="/images/unsplash.jpg" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" src="/images/unsplash.jpg" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" src="/images/unsplash.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
