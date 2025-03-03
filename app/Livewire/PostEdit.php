<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;


class PostEdit extends Component
{
    public $idpost,$title,$body;
    public function render()
    {
        return view('livewire.post-edit');
    }
#[On('editPost')]
    public function editPost($id)
    {
        $post = Post::find($id);
        $this->idpost = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;
        Flux::modal('posts-edit')->show();
    }
    public function postedit(){
        $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = Post::find($this->idpost);
        $post->title = $this->title;
        $post->body = $this->body;
        $post->save();
        Flux::modal('posts-edit')->close();
        $this->dispatch('reloadPost');
    }

}
