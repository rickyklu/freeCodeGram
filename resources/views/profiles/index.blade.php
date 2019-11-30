@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img class="rounded-circle w-100" src="/storage/{{ $user->profile->image }}" alt="fccLogo">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>

                @can('update', $user->profile)
                <a href="/p/create">Add post</a>
                @endcan
                
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="col-3"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div class="col-3"><strong>{{ $user->posts->count() }} </strong>following</div>
                <div class="col-3"><strong>{{ $user->posts->count() }} </strong>followers</div>
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
            @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection