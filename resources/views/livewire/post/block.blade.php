<div>
    @foreach($posts as $post)
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title">{{ $post->title }}</h5>
            <span class="text-muted">{{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</span>
        </div>
        <div class="card-body">
            <p>{{ $post->body }}</p>
            <button class="btn btn-primary" wire:click="edit({{ $post->id }})">Edit</button>
            <button class="btn btn-danger" @click="$dispatch('confirm-delete',{id: {{ $post->id }}})">Delete</button>
        </div>
    </div>
    @endforeach
    <x-confirm-delete />
</div>