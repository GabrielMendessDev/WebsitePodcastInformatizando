<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&display=swap" rel="stylesheet" />
  <title>Podcast Informatizando</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
  <?php
    require_once "header/header.php";
  ?>
  </header>

  <section class="hero">
    <h2>O uso excessivo das redes sociais e manipulação do algoritmo</h2>
    <a href="https://open.spotify.com/show/19hR1FMJHPX9YoWz5ixw2h?si=gRDgSIMXQoei6Cr1Ng5CvQ&nd=1" target="_blank">
      <img class="img-episodios" src="./img/informatizando.jpg" alt="Imagem Podcast" />
    </a>
    <a href="https://open.spotify.com/show/19hR1FMJHPX9YoWz5ixw2h?si=gRDgSIMXQoei6Cr1Ng5CvQ&nd=1" target="_blank"
      class="button">Ouvir Agora</a>
    <div class="introducao-episodio">
      <p>
        É sabido por muitas pessoas que o uso excessivo das redes sociais é
        motivo de preocupação. No entanto, esse conhecimento não parece deter
        o crescimento contínuo da sua utilização. Um estudo conduzido pela
        entidade pública de saúde do Reino Unido revelou que o uso excessivo
        das mídias sociais está associado a uma série de problemas, incluindo
        ansiedade, depressão, solidão, distúrbios do sono, baixa autoestima e
        dificuldades de relacionamento offline. Além disso, o uso das redes
        sociais frequentemente leva os usuários a criar uma realidade
        ficcional, uma distorção da realidade com a qual não estão
        satisfeitos. Diante disso, surge a pergunta: como esse uso excessivo
        se tornou ainda mais problemático? Para responder a essa questão, é
        fundamental compreender a constante evolução das redes sociais, agora
        impulsionada pela Inteligência Artificial (IA).
      </p>
    </div>
  </section>

  <section class="hero">
    <h2>
      Mas o que a manipulação do algoritmo faz para que os usuários fiquem
      “presos” as redes?
    </h2>
    <img class="img-episodios" src="img/interrogacao.jpg" alt="logo-pergunta" />
    <div class="introducao-episodio">
      <p>
        A manipulação do algoritmo nas redes sociais desempenha um papel
        crucial na retenção dos usuários dentro da plataforma. Os algoritmos
        são conjuntos de códigos que identificam padrões e determinam quais
        conteúdos serão exibidos aos usuários, além de definir sua frequência
        e relevância. Esses algoritmos também operam com um código de
        prioridade, muitas vezes projetado para apresentar e promover produtos
        ou ideias específicas. Para alcançar esse objetivo, os algoritmos
        analisam ativamente a vida virtual dos usuários em busca de
        informações sobre suas preferências, fragilidades e comportamentos.
        Isso nos leva a refletir sobre a veracidade da afirmação do jornalista
        Andy Lewis: "Se você não paga pelo produto, o produto é você". Nas
        redes sociais, onde muitas vezes somos o produto, essa dinâmica
        torna-se ainda mais evidente, pois as plataformas são frequentemente
        utilizadas como veículos para a venda de produtos ou ideias.
      </p>
    </div>
  </section>

  <section class="hero">
    <h2>Resumo do Episódio</h2>
    <img class="img-episodios" src="img/resumo-episodio.png" alt="resumo-episodio" />
    <div class="introducao-episodio">
      <p>
        No episódio 08, discute-se a importância dos cuidados ao utilizar as
        redes sociais de forma excessiva, considerando seu impacto em várias
        áreas da vida das pessoas, como a acadêmica, profissional e
        socioeconômica. A manipulação do algoritmo pode levar à
        procrastinação, o ato de postergar responsabilidades, e isso pode ser
        explicado pela maneira como os algoritmos das redes sociais operam.
        Esses algoritmos têm o poder de persuadir e viciar os usuários,
        mostrando conteúdos que despertam seu interesse e prendendo sua
        atenção através da liberação de dopamina, um hormônio associado ao
        prazer. Para evitar esse ciclo vicioso, é recomendado reduzir o uso
        das redes sociais para atividades essenciais e buscar outras formas de
        entretenimento, como a prática de exercícios físicos. É crucial fazer
        escolhas que otimizem o tempo e evitem ficar preso nesse ciclo de
        dopamina barata, que pode causar danos à saúde mental no futuro. Além
        disso, a exposição constante às informações nas redes sociais aumenta
        o risco de as pessoas serem expostas a notícias falsas, conhecidas
        como Fake News, e repassá-las sem verificar sua veracidade. Isso
        ocorre porque os algoritmos das redes sociais tendem a priorizar
        informações que despertam o interesse do usuário, mesmo que não sejam
        verdadeiras.
      </p>
    </div>
  </section>

  <section class="form">
    <?php
    require_once "form/form.php";
    ?>
  </section>

  <?php
  require_once "bd/bd.php";
  ?>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<script src="js/script.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

</html>