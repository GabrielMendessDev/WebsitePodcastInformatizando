<div>
    <!-- showcommets -->
    <div id="areaCommets">
        @foreach ($comments as $comment)
            <div>
                {{ $comment->author }}  -  {{ $comment->content}}   <br>
                @if($comment->likes->count())
                    <span>{{ $comment->likes->count() }} curtidas</span>
                    <a href="#" wire:click.prevent="unlikeComment({{ $comment->id }})">Descurtir</a>
                @else
                    <span>{{ $comment->likes->count() }} curtidas</span>
                    <a href="#" wire:click.prevent="likeComment({{ $comment->id }})">Curtir</a>
                @endif  
            </div>      
        @endforeach

    </div>
    @auth
        <form method="post" wire:submit.prevent="createComment">
            @csrf
                <input type="text" name="addComment" id="addComment" wire:model="content">
            @error('content') {{ $message }} @enderror
                <button type="submit">Comentar</button>
        </form>
    @endauth
</div>
