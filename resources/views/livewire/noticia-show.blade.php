<link href="{{ asset('css/posts.css') }}" rel="stylesheet">

<div>
    <section class="hero">
        <h2>{{$post->title}}</h2>
        {!! $post->content !!}
        <h5>Publicado por: {{$post->author}}</h5>
        <h5>Data da publicação: {{ $post->created_at->format('d/m/Y H:i:s') }}</h5>
    </section>
    @livewire('show-comments', ['postId' => $post->id])

    <footer class="main_footer">
    <div class="content">
    </div>
    <div class="main_footer_copy">
        <p>&copy; {{ date('Y') }} Podcast Informatizando. Todos os direitos reservados.</p>
    </div>
</footer>

</div>


