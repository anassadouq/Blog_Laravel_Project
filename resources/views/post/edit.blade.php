@extends('layouts.app')

@section('content')
<h2 class="text-center my-3" style="font-weight: bold">Edit Blog</h2>

<div class="container">
    <form action="{{ route('post.update', $post) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>
                    <label for="title">Title:</label>
                </td>
                <td>
                    <input type="text" name="title" value="{{ $post->title }}" class="my-2">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">Description:</label>
                </td>
                <td>
                    <textarea name="description" rows="10" cols="120" class="my-2">{{ $post->description }}</textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="image">Image:</label>
                </td>
                <td>
                    <input type="file" name="image" class="my-2">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-success text-center my-2">UPDATE THE POST</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection