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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>

    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fmnl3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/82932421_113372540208589_9133782467020486524_n.jpg?_nc_ht=instagram.fmnl3-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=Rxq60xAHufAAX93wreO&oh=16efaed869ed1507f5ea98c7500f3fac&oe=5EB28FE1" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fmnl3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/79034900_103479764438622_2488632597738697481_n.jpg?_nc_ht=instagram.fmnl3-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=FEQcYfqyv14AX9Ed2U0&oh=d9674c5a3e01bca2f5ea2100a9faaa37&oe=5EB1CACF" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fmnl3-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/77127438_2849307868412892_8604638033879038124_n.jpg?_nc_ht=instagram.fmnl3-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=6Et5q0vT_igAX8tdupd&oh=6208aa763ed3b690ea8078be454d11b6&oe=5EB217DB" alt="">
        </div>
    </div>
</div>
@endsection

