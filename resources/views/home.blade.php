<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast Informatizando</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <style>
    button {
        background: none; /* Remove o fundo */
        border: none; /* Remove a borda padrão */
        cursor: pointer; /* Altera o cursor para parecer um link */
        color: white;
        padding: 0; /* Remove o padding padrão do botão */
    }
</style>
</head>

<body>
    <header>

        @if (Route::has('login'))
        <nav>
            <img class="img-ifrn" src="{{ asset('img/ifrn-logo.png') }}" alt="Logo-ifrn">
            @auth
            <h4 class="username">Olá, {{auth()->user()->name}}!</h4>
            <a
                href="{{ url('/') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Início
            </a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf

                <button type="submit" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    {{ __('Sair da conta') }}
                </button>


            </form>
            @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Login
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Cadastrar-se
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <h1 class="title">Bem-vindo(a) ao Podcast Informatizando!</h1>
    <div class="hero">
        <a href="https://open.spotify.com/show/19hR1FMJHPX9YoWz5ixw2h?si=gRDgSIMXQoei6Cr1Ng5CvQ&nd=1" target="_blank">
            <img src="./img/informatizando.jpg" alt="Imagem Podcast" />
        </a>
    </div>
    <div class="hero">
        <h2>
            Acompanhe as últimas tendências tecnológicas e descubra insights
            exclusivos dos especialistas do setor.
        </h2>
    </div>

    @livewire('show-posts')

    <footer class="main_footer">
        <div class="content">
        </div>
        <div class="main_footer_copy">
            <p>&copy; {{ date('Y') }} Podcast Informatizando. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>