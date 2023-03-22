<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Post;
use Intervention\Image\Facades\Image;


class PostsControllers extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            
            'caption'=>'required',
            'image'=>['required','image'],
        ]);

// 
        $imagePath = (request('image')->store('uploads','public'));

        $image = Image::make(public_path("storage/{$imagePath}")) -> fit(1200,1200);

        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);



        return redirect('/profile/'. auth()->user()->id);
    }
    public function show(\App\Models\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}