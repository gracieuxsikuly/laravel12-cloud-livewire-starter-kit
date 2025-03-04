<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;

class PostCreate extends Component
{
    public $title, $body;
    public function savepost(){
        $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'title' => $this->title,
            'body' => $this->body
        ]);
        $this->reset();
        Flux::modal('create-posts')->close();
        $this->dispatch('reloadPost');
        // session()->flash('message', 'Post Created Successfully.');
    }
    public function render()
    {
        return view('livewire.post-create');
    }
}
