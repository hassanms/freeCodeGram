@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://instagram.fpew1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?tp=1&_nc_ht=instagram.fpew1-1.fna.fbcdn.net&_nc_ohc=Oa2sNYMoYzIAX-_kFXT&edm=ABfd0MgAAAAA&ccb=7-4&oh=84f77633680ed6467d80d0af2ffce471&oe=60943827&_nc_sid=7bff83"/>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts()->count()}}</strong> posts</div>
                <div class="pr-5"><strong>68.4K</strong> followers</div>
                <div class="pr-5"><strong>309</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{ $post->image }}" class="w-100" />
            </div>
        @endforeach
    </div>
</div>
@endsection
