@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://instagram.fpew1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?tp=1&_nc_ht=instagram.fpew1-1.fna.fbcdn.net&_nc_ohc=Oa2sNYMoYzIAX-_kFXT&edm=ABfd0MgAAAAA&ccb=7-4&oh=84f77633680ed6467d80d0af2ffce471&oe=60943827&_nc_sid=7bff83"/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>372</strong> posts</div>
                <div class="pr-5"><strong>68.4K</strong> followers</div>
                <div class="pr-5"><strong>309</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fpew1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.128.1032.1032a/s640x640/166457897_348657959905181_7277256522874462696_n.jpg?tp=1&_nc_ht=instagram.fpew1-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=JZGRiQTK3iwAX9jIC3b&edm=ABfd0MgAAAAA&ccb=7-4&oh=86c86bc8da449f033bfe8cb6a82a5b13&oe=6093D21B&_nc_sid=7bff83" class="w-100" />
        </div>
        <div class="col-4">
            <img src="https://instagram.fpew1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c3.0.821.821a/s640x640/165277410_496819124819720_7792915483220030827_n.jpg?tp=1&_nc_ht=instagram.fpew1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=foVO1-avYN4AX8Fm59o&edm=ABfd0MgAAAAA&ccb=7-4&oh=f7ed0f2508aa36b34c0170ccd14aae5a&oe=6093D9FF&_nc_sid=7bff83" class="w-100" />
        </div>
        <div class="col-4">
            <img src="https://instagram.fpew1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.823.823a/s640x640/161583433_808782516657920_18787023218968172_n.jpg?tp=1&_nc_ht=instagram.fpew1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=AQ39Ox3h8swAX9_be_C&edm=ABfd0MgAAAAA&ccb=7-4&oh=2a0512cf9bba3a6c889351e569c84658&oe=60940B3B&_nc_sid=7bff83" class="w-100" />
        </div>
    </div>
</div>
@endsection
