@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="http://pluspng.com/img-png/instagram-png-instagram-png-logo-1179.png" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">

                <h1>{{ $user->username}}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>123</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><strong>{{ $user->profile->url }}</strong></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fbsb8-1.fna.fbcdn.net/vp/d69dbfaecf5c0e4c35bc1fa26b4f4984/5DF8160B/t51.2885-15/sh0.08/e35/s640x640/67106713_2492969334323508_5132516564300328397_n.jpg?_nc_ht=instagram.fbsb8-1.fna.fbcdn.net" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbsb8-1.fna.fbcdn.net/vp/d69dbfaecf5c0e4c35bc1fa26b4f4984/5DF8160B/t51.2885-15/sh0.08/e35/s640x640/67106713_2492969334323508_5132516564300328397_n.jpg?_nc_ht=instagram.fbsb8-1.fna.fbcdn.net" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbsb8-1.fna.fbcdn.net/vp/d69dbfaecf5c0e4c35bc1fa26b4f4984/5DF8160B/t51.2885-15/sh0.08/e35/s640x640/67106713_2492969334323508_5132516564300328397_n.jpg?_nc_ht=instagram.fbsb8-1.fna.fbcdn.net" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
