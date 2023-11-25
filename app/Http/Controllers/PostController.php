<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->user_id = $request->user()->id; // Assuming the user ID is obtained from the authenticated user
        $post->title = $request->title;
        $post->description = $request->description;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }
    
        $post->save();
    
        return redirect()->route('post.index');
    }    

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->except('image')); // mise à jour des autres attributs du détail
    
        // mise à jour de l'image si une nouvelle a été téléchargée
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/'.$post->image); // supprimez l'ancienne image
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $post->image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $post->image);
        }
        
        $post->save();
        return redirect('/post');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        
        return redirect('/post');
    }
}