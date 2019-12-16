@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{ $user->profile->profileImage() }}" alt="fccLogo">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h1>{{ $user->username }}</h1>
                    <follow-button user-id={{ $user->id }} follows={{ $follows }}></follow-button>
                </div>

                @can('update', $user->profile)
                <a href="/p/create">Add post</a>
                @endcan

            </div>

            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="col-3"><strong>{{ $postCount }} </strong>posts</div>
                <div class="col-3"><strong>{{ $followersCount }} </strong>followers</div>
                <div class="col-3"><strong>{{ $followingCount }} </strong>following</div>
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