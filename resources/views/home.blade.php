<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast Informatizando</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
<header>
    @if (Route::has('login'))
        <nav>
            @auth
                <a
                    href="{{ url('/') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Home
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ms-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>

<h1>Bem-vindo(a) ao Podcast Informatizando!</h1>
<div class="hero">
   <a href="https://open.spotify.com/show/19hR1FMJHPX9YoWz5ixw2h?si=gRDgSIMXQoei6Cr1Ng5CvQ&nd=1" target="_blank">
      <img src="./img/informatizando.jpg" alt="Imagem Podcast"/>
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
</body>
</html>
