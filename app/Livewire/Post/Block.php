<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Block extends Component
{
    #[\Livewire\Attributes\On('postStored')]
    public function render()
    {
        return view('livewire.post.block', [
            'posts' => \App\Models\Post::all()->sortByDesc('created_at'),
        ]);
    }

    public function delete($id)
    {
        Post::destroy($id);
        $this->dispatch('postStored');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $this->dispatch('editPost', $post);
    }
}
