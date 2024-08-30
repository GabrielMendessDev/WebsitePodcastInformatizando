<div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @livewireScripts
    <form method="post" wire:submit.prevent="create">
        @csrf
        
        <!-- Título -->
        <label for="title">Title</label>
        <input type="text" name="title" id="title" wire:model="title">
        @error('title') <span>{{ $message }}</span> @enderror

        <!-- Subtítulo -->
        <label for="caption">Subtitle</label>
        <input type="text" name="caption" id="caption" wire:model="caption">
        @error('caption') <span>{{ $message }}</span> @enderror

        <!-- Texto -->
        <label for="content">Text</label>
        <textarea name="content" id="content" wire:model="content"></textarea>
        @error('content') <span>{{ $message }}</span> @enderror


        <!-- Link -->
        <label for="link">Link</label>
        <textarea name="link" id="link" wire:model="link"></textarea>
        @error('link') <span>{{ $message }}</span> @enderror

        <!-- Tipo (Checkboxes) -->
        <label>Type</label>
        <div>
            <input type="checkbox" value="n" wire:model="type"> News
            <input type="checkbox" value="a" wire:model="type"> Article
            <input type="checkbox" value="e" wire:model="type"> Episode
        </div>
        @error('type') <span>{{ $message }}</span> @enderror

        <button type="submit">Post</button>
    </form>
</div>
