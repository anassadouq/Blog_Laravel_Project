@extends('layouts.app')

@section('content')
<h2 class="text-center my-3" style="font-weight : bold">{{$post->title}}</h2>

<div class="container">
    <p class="text-center" style="font-weight:bold">By : 
        <span class="text-secondary">{{$post->user->name}}</span>
    </p>
    <p class="mx-2 text-secondary">{{$post->description}}</p>

    @if(Auth::user() && Auth::user()->id == $post->user_id)
        <a href="{{ route('post.edit', $post) }}" class="btn btn-success text-center">Edit Post</a>
        
        <form action="{{ route('post.destroy', $post) }}" method="post">
            @csrf  
            @method('delete')
            <button class="btn btn-danger text-center my-2">Delele Post</button>    
        </form>
    @endif
</div>
@endsection