<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showAddPostScreen() {
        return view('add-post');
    }

    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $incomingFields['user_id'] = auth()->id();

        Post::create($incomingFields);
        
        return redirect('/home');
    }

    public function showEditPostScreen(Post $post) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/home');
        }

        return view('edit-post', ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/home');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update($incomingFields);
        
        return redirect('/home');
    }

    public function deletePost(Post $post) {
        if (auth()->user()->id === $post['user_id']) {
            $post->delete();
        }

        return redirect('/home');
    }
}
