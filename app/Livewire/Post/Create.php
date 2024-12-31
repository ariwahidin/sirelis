<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $title = '';
    public $body = '';
    public $postId;
    public $editPost = false;
    public $isModalOpen = false;

    public function create()
    {
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    
    public function mount(Post $post)
    {
    }

    #[\Livewire\Attributes\On('editPost')]
    public function edit($post){
        $this->editPost = true;
        $this->postId = $post['id'];
        $this->title = $post['title'];
        $this->body = $post['body'];
        $this->openModal();
    }

    public function render()
    {
        return view('livewire.post.create');
    }

    public function store()
    {
        // Validate the data
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // Store the data
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'user_id' => Auth::id(),
        ]);

        // Redirect to the post index page
        $this->reset();
        $this->closeModal();
        $this->dispatch('postStored');
    }

    public function update()
    {
        // Validate the data
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // Store the data
        Post::find($this->postId)->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->editPost = false;

        // Redirect to the post index page
        $this->reset();
        $this->dispatch('postStored');
    }
}
