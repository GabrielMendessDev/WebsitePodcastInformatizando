<div class="form-container" style="background-color: #121212; color: #e0e0e0; padding: 20px; border-radius: 8px; width: 50%; margin: 0 auto;">
    @if (session('error'))
        <div class="alert alert-danger" style="color: red; margin-bottom: 10px;">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success" style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    @livewireScripts
    <form method="post" wire:submit.prevent="create" style="display: flex; flex-direction: column;">
        @csrf

        <!-- Título -->
        <label for="title" style="margin-bottom: 5px;">Título</label>
        <input type="text" name="title" id="title" wire:model="title" style="padding: 12px; font-size: 16px; border-radius: 8px; border: 1px solid #444; background-color: #2a2a2a; color: #e0e0e0; margin-bottom: 15px;">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror

        <!-- Subtítulo -->
        <label for="caption" style="margin-bottom: 5px;">Subtítulo</label>
        <input type="text" name="caption" id="caption" wire:model="caption" style="padding: 12px; font-size: 16px; border-radius: 8px; border: 1px solid #444; background-color: #2a2a2a; color: #e0e0e0; margin-bottom: 15px;">
        @error('caption') <span style="color: red;">{{ $message }}</span> @enderror

        <!-- Texto -->
        <label for="content" style="margin-bottom: 5px;">Texto</label>
        <textarea name="content" id="content" wire:model="content" style="padding: 12px; font-size: 16px; border-radius: 8px; border: 1px solid #444; background-color: #2a2a2a; color: #e0e0e0; margin-bottom: 15px;"></textarea>
        @error('content') <span style="color: red;">{{ $message }}</span> @enderror

        <!-- Link -->
        <label for="link" style="margin-bottom: 5px;">Link</label>
        <textarea name="link" id="link" wire:model="link" style="padding: 12px; font-size: 16px; border-radius: 8px; border: 1px solid #444; background-color: #2a2a2a; color: #e0e0e0; margin-bottom: 15px;"></textarea>
        @error('link') <span style="color: red;">{{ $message }}</span> @enderror

        <!-- Tipo (Checkboxes) -->
        <label style="margin-bottom: 5px;">Tipo</label>
        <div style="margin-bottom: 15px;">
            <label><input type="checkbox" value="n" wire:model="type" style="margin-right: 5px;"> Notícia</label>
            <label><input type="checkbox" value="a" wire:model="type" style="margin-right: 5px;"> Artigo</label>
            <label><input type="checkbox" value="e" wire:model="type" style="margin-right: 5px;"> Episódio</label>
        </div>
        @error('type') <span style="color: red;">{{ $message }}</span> @enderror

        <button type="submit" style="padding: 12px 25px; background-color: #0f0; color: #000; font-weight: bold; font-size: 16px; border: none; border-radius: 8px; cursor: pointer;">Postar</button>
    </form>
</div>
