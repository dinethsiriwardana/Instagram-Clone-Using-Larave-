@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/assets/profile.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>
                {{$user->username}}
                </h1>
            </div>
            <div class="d-flex">
                <div class = "pe-5"><strong>128 </strong>posts</div>
                <div class = "pe-5"><strong>492 </strong>followers</div>
                <div class = "pe-5"><strong>337 </strong>following</div>
            </div>
            <div class="pt-4"><b>{{$user->profile->title}}</b></div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
              <a href="http://{{$user->profile->url}}" target="_blank" rel="noopener noreferrer">{{$user->profile->url}}</a> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="/assets/11.jpeg" class="w-100 pt-1" srcset="">
        </div>
        <div class="col-4">
            <img src="/assets/2.jpeg" class="w-100 pt-1" srcset="">
        </div>
        <div class="col-4">
            <img src="/assets/3.jpg" class="w-100 pt-1" srcset="">
        </div>
    </div>
</div>
@endsection
