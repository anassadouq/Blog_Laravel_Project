@extends('layouts.app')

@section('content')
<h2 class="text-center my-3" style="font-weight: bold">Add a new Blog</h2>

<div class="container">
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>
                    <label for="title">Title:</label>
                </td>
                <td>
                    <input type="text" name="title" placeholder="Title" class="my-2">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">Description:</label>
                </td>
                <td>
                    <textarea name="description" rows="10" cols="120" placeholder="Description" class="my-2"></textarea>
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
                    <button class="btn btn-success text-center my-2">SUBMIT THE POST</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection