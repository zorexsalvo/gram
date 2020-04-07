@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-5">
            <img src="https://pbs.twimg.com/profile_images/782132102368223232/yJxwuI1g_400x400.jpg"
                 alt=""
                 class="rounded-circle"
                 style="max-height: 150px">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>

    </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="">
        </div>
        @endforeach
    </div>
</div>
@endsection
