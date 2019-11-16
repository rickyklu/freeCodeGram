@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="/images/fccLogo.png" alt="fccLogo">
        </div>
        <div class="col-9 pt-5" >
            <div><h1>freeCodeCamp</h1></div>
            <div class="d-flex">
                <div class="col-3">posts</div>
                <div class="col-3">following</div>
                <div class="col-3">followers</div>
            </div>
            <div class="pt-4">
                <strong>freeCodeCamp</strong>
            </div>
            <div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto laudantium pariatur totam a facere voluptate blanditiis expedita ut! Incidunt, fuga. Eaque qui veniam velit minus.
            </div>
            <a href="https://freeCodeCamp.org">freeCodeCamp.org</a>
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
