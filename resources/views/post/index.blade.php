@extends('layouts.app')

@section('content')
    <div>
        <h2 class="text-center my-3" style="font-weight:bold">All Blogs</h2>
    </div>
    @if(Auth::check())
        <div class="m-3">
            <a href="{{ route('post.create') }}" class="btn btn-success mx-5">New Blog</a>
        </div>
    @endif
    @foreach ($posts as $post)
        <div class="container p-3">
            <h2 class="my-3" style="font-weight: bold; font-size: 30px">{{$post->title}}</h2>
            <p class="mx-2" style="font-weight: bold">By:
                <span class="text-secondary">{{$post->user->name}}</span>
            </p>
            @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" class="my-3" style="max-width: 400px;">
            @endif

            <p class="mx-2 text-secondary">{{$post->description}}</p>
            <a href="{{ route('post.show', $post) }}" class="btn btn-dark text-center">READ MORE</a>
        </div>
        <hr>
    @endforeach
@endsection
