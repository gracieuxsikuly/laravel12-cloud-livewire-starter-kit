<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class Posts extends Component
{
    public $idpost;
    public $posts;
    public function mount()
    {
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('livewire.posts');
    }
   #[On('reloadPost')]
    public function reloadPost()
    {
        $this->posts = Post::all();
    }
public function edit($id){
    $this->dispatch('editPost', $id);
}
public function delete($id){
    $this->idpost = $id;
    Flux::modal('delete-post')->show();
}
public function destroy(){
    Post::find($this->idpost)->delete();
    Flux::modal('delete-post')->close();
    $this->dispatch('reloadPost');
}
}
