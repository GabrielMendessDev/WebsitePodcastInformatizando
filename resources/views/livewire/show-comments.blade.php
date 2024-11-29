<div>
    <!-- showcommets -->

    <div id="areaCommets">
        @foreach ($comments as $comment)
            <div>
                {{ $comment->author }} - {{ $comment->content }} <br>

                <!-- Mostra o número de curtidas para todos -->
                <span>{{ $comment->likes->count() }} curtidas</span>

                <!-- Opções de curtir/descurtir para usuários autenticados -->
                @auth
                    @if($comment->isLikedBy(auth()->user()))
                        <a href="#" wire:click.prevent="unlikeComment({{ $comment->id }})">Descurtir</a>
                    @else
                        <a href="#" wire:click.prevent="likeComment({{ $comment->id }})">Curtir</a>
                    @endif
                @endauth

                <p style="font-size: 12px;"><i>{{ $comment->created_at->format('d/m/Y H:i:s') }}</i></p>
            </div>
        @endforeach
    </div>

    <!-- Formulário para comentar, apenas para usuários autenticados -->
    @auth
        <form method="post" wire:submit.prevent="createComment">
            @csrf
            <input type="text" name="addComment" id="addComment" wire:model="content">
            @error('content') {{ $message }} @enderror
            <button type="submit">Comentar</button>
        </form>
    @endauth
</div>
