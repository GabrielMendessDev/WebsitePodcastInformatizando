<link href="{{ asset('css/posts.css') }}" rel="stylesheet">
<div>
    <section class="hero">
        <h2>{{$post->title}}</h2>
        <h2>{{$post->caption}}</h2>
        {!! $post->content !!}
        <h4>{{$post->author}}</h4>
    </section>
    @livewire('show-comments', ['postId' => $post->id])

    <footer class="main_footer">
    <div class="content">
        <div class="colfooter">
            <h3 class="titleFooter">Nossos Links</h3>
            <ul>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Termos de Serviço</a></li>
            </ul>
        </div>
        <div class="colfooter">
            <h3 class="titleFooter">Siga-nos</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <div class="colfooter">
            <h3 class="titleFooter">Aplicativo</h3>
            <ul>
                <li><a href="#">Baixar</a></li>
                <li><a href="#">Atualizações</a></li>
                <li><a href="#">Suporte</a></li>
            </ul>
        </div>
    </div>
    <div class="main_footer_copy">
        <p>&copy; {{ date('Y') }} Podcast Informatizando. Todos os direitos reservados.</p>
        <p><a href="#">Política de Privacidade</a></p>
    </div>
</footer>

</div>


