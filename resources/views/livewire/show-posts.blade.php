<div class="content-main">
    <div class="section">
        <h2>Artigos</h2>
        <div class="artigos-container">
            @foreach ($posts as $post)
                @if($post->type == 'a')
                    <div class="artigos">
                        <a href="{{ route('noticia.show', ['slug' => $post->slug]) }}">
                            <h3>{{$post->title}}</h3>
                            <p class="descricao">{{$post->caption}}</p>
                            <p class="descricao">{{$post->description}}</p>
                            <a href="{{$post->link}}" target="_blank" class="button">Ver artigo</a>
                            <a href="{{ route('noticia.show', ['slug' => $post->slug]) }}" class="button">Ver feedback do artigo</a>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    
    <hr>

    <div class="section">
        <h2>Notícias</h2>
        <div class="noticias-container">
            @foreach ($posts as $post)
                @if($post->type == 'n')
                    <div class="noticias">
                        <a href="{{ route('noticia.show', ['slug' => $post->slug]) }}">
                            <h3>{{$post->title}}</h3>
                            <p class="descricao">{{$post->caption}}</p>
                            <p class="descricao">{{$post->description}}</p>
                            <a href="{{$post->link}}" target="_blank" class="button">Ver notícia</a>
                            <a href="{{ route('noticia.show', ['slug' => $post->slug]) }}" class="button">Ver feedback da notícia</a>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="section">
        <h2>Episódios</h2>
        <div class="episodios-container">
            @foreach ($posts as $post)
                @if($post->type == 'e')
                    <div class="episodios">
                            <h3>{{$post->title}}</h3>
                            <p class="descricao">{{$post->caption}}</p>
                            <p class="descricao">{{$post->description}}</p>
                            <a href="{{$post->link}}" target="_blank" class="button">Ouvir</a>
                            <a href="{{ route('noticia.show', ['slug' => $post->slug]) }}" class="button">Ver feedback do episódio</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
