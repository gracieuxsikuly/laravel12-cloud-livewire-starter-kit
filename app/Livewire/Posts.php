<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.posts',compact('posts'));
    }
}
