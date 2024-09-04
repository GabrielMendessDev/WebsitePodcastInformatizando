<div>
    <!-- showcommets -->
    
    <div id="areaCommets">
        @foreach ($comments as $comment)
            <div>
                {{ $comment->author }}  -  {{ $comment->content}}   <br>
                @auth
                @if($comment->likes->count())
                    <span>{{ $comment->likes->count() }} curtidas</span>
                    <a href="#" wire:click.prevent="unlikeComment({{ $comment->id }})">Descurtir</a>
                @else
                    <span>{{ $comment->likes->count() }} curtidas</span>
                    <a href="#" wire:click.prevent="likeComment({{ $comment->id }})">Curtir</a>
                @endif  
                @endauth 
                <p style="font-size: 12px;"><i>{{ $comment->created_at->format('d/m/Y H:i:s') }}</i></p>
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
