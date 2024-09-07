INSERT INTO `users` (
    `name`,
    `email`,
    `email_verified_at`,
    `password`,
    `two_factor_secret`,
    `two_factor_recovery_codes`,
    `two_factor_confirmed_at`,
    `remember_token`,
    `current_team_id`,
    `profile_photo_path`,
    `created_at`,
    `updated_at`,
    `lvl`
) VALUES (
    'Gabriel Mendes',
    'gabriel@gmail.com',
    NULL,                     -- email_verified_at
    '$2y$12$ti1lifKAWtHI9U2VCSXZyevAZxXCeAchVvlE4LczsW7yKvKbUVUYK',    -- password, substituir pela senha criptografada
    NULL,                     -- two_factor_secret
    NULL,                     -- two_factor_recovery_codes
    NULL,                     -- two_factor_confirmed_at
    NULL,                     -- remember_token
    NULL,                     -- current_team_id
    NULL,                     -- profile_photo_path
    NOW(),                    -- created_at
    NOW(),                    -- updated_at
    'adm'                  -- lvl
);




INSERT INTO `posts` (`id`, `users_id`, `author`, `type`, `title`, `caption`, `content`, `link`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gabriel Mendes', 'e', 'Episódio 1: O que são malwares?', 'O que são Malwares? Quais são os principais tipo? A gente fala um pouquinho disso para vocês!', 'O que são Malwares? Quais são os principais tipo? A gente fala um pouquinho disso para vocês!', 'https://open.spotify.com/episode/7CWaOxJwvMlbBNupDKF7Ub', 'episodio-1-o-que-sao-malwares', '2024-09-04 10:34:43', '2024-09-04 10:34:43'),
(2, 1, 'Gabriel Mendes', 'e', 'Episódio 2: Antivírus e senhas', 'Qual a importância de um antivírus? Como criar uma boa senha?', 'Qual a importância de um antivírus? Como criar uma boa senha?', 'https://open.spotify.com/episode/1tGe55S7Itf8Tl575aS3TN', 'episodio-2-antivirus-e-senhas', '2024-09-04 10:36:30', '2024-09-04 10:36:30'),
(3, 1, 'Gabriel Mendes', 'e', 'Episódio 3: Garotas na informática', 'Nesse episódio conversamos com a professora Jéssica Diniz sobre inclusão feminina na informática.', 'Nesse episódio conversamos com a professora Jéssica Diniz sobre inclusão feminina na informática.', 'https://open.spotify.com/episode/3OPnxQ1kNOEbklT8lpc6GQ', 'episodio-3-garotas-na-informatica', '2024-09-04 10:37:37', '2024-09-04 10:37:37'),
(4, 1, 'Gabriel Mendes', 'e', 'Episódio 4: A informática tem cor?', 'Nesse episódio, falaremos um pouco sobre a questão racial dentro do meio tecnológico com os convidados prof. Igor Gacheiro, prof. Eduardo Henrique e a aluna Lívia Alves. De antemão pedimos desculpas pelos problemas no áudio.', 'Nesse episódio, falaremos um pouco sobre a questão racial dentro do meio tecnológico com os convidados prof. Igor Gacheiro, prof. Eduardo Henrique e a aluna Lívia Alves. De antemão pedimos desculpas pelos problemas no áudio.', 'https://open.spotify.com/episode/6N2vzaWV1MbZFmtAVWNgxE', 'episodio-4-a-informatica-tem-cor', '2024-09-04 10:38:23', '2024-09-04 10:38:23'),
(5, 1, 'Gabriel Mendes', 'e', 'Episódio 5: Como as empresas ganham dinheiro com as nossas informações?', 'O nosso quinto episódio traz a resposta para a seguinte pergunta: como empresas, por exemplo o Facebook, ganham dinheiro com nossos dados?', 'O nosso quinto episódio traz a resposta para a seguinte pergunta: como empresas, por exemplo o Facebook, ganham dinheiro com nossos dados?', 'https://open.spotify.com/episode/4G0RjqxyPGArM7NnkQ8YI8', 'episodio-5-como-as-empresas-ganham-dinheiro-com-as-nossas-informacoes', '2024-09-04 10:39:25', '2024-09-04 10:39:25'),
(6, 1, 'Gabriel Mendes', 'e', 'Episódio 6: 5G e a disputa EUA x China', 'No 06 episódio temos uma discussão sobre um assunto que vai determinar o futuro das comunicações: o 5G!', 'No 06 episódio temos uma discussão sobre um assunto que vai determinar o futuro das comunicações: o 5G!', 'https://open.spotify.com/episode/4A0Kw5S84kmRD3scqiPcfk', 'episodio-6-5g-e-a-disputa-eua-x-china', '2024-09-04 10:40:43', '2024-09-04 10:40:43'),
(7, 1, 'Gabriel Mendes', 'e', 'Episódio 7: Os riscos da superexposição nas redes sociais', 'No nosso sétimo episodio falaremos sobre os riscos da superexposição nas redes sociais para os usuários e como podemos mudar nosso mau uso.', 'No nosso sétimo episodio falaremos sobre os riscos da superexposição nas redes sociais para os usuários e como podemos mudar nosso mau uso.', 'https://open.spotify.com/episode/3nxQ31uFzwJQZaFPjEkOki', 'episodio-7-os-riscos-da-superexposicao-nas-redes-sociais', '2024-09-04 10:42:48', '2024-09-04 10:42:48'),
(8, 1, 'Gabriel Mendes', 'e', 'Episódio 8: O uso excessivo das redes sociais e a manipulação do algoritmo', 'Aqui você vai ficar por dentro de como o algoritmo pode te manipular a ponto de você se sentir dependente do seu celular e as redes sociais', 'Aqui você vai ficar por dentro de como o algoritmo pode te manipular a ponto de você se sentir dependente do seu celular e as redes sociais', 'https://open.spotify.com/episode/61dVI63VLtO53WPwJ8Zky5', 'episodio-8-o-uso-excessivo-das-redes-sociais-e-a-manipulacao-do-algoritmo', '2024-09-04 10:43:57', '2024-09-04 10:43:57'),
(9, 1, 'Gabriel Mendes', 'e', 'Episódio 9: Saúde mental nas redes sociais', 'Os impactos das redes sociais na nossa saúde: prejuízos, consequências e formas de prevenção', 'Os impactos das redes sociais na nossa saúde: prejuízos, consequências e formas de prevenção', 'https://open.spotify.com/episode/5VRVfy2VUUtvKBBY2DOsXq', 'episodio-9-saude-mental-nas-redes-sociais', '2024-09-04 10:45:45', '2024-09-04 10:45:45'),
(10, 1, 'Gabriel Mendes', 'n', 'Lançamento do Python 3.13: O que Esperar', 'Novas funcionalidades e melhorias na próxima versão do Python', 'O Python 3.13 está programado para ser lançado em outubro de 2024, trazendo melhorias no suporte, extensões de segurança, e uma série de mudanças importantes na biblioteca padrão. Além disso, a comunidade Python continua a se reunir em eventos como PyCon e EuroPython, com foco em novas aplicações para IA e ciência de dados. Este novo ciclo promete um suporte prolongado e melhorias substanciais na experiência dos desenvolvedores.', 'https://realpython.com/python-news-may-2024/', 'lancamento-do-python-313-o-que-esperar', '2024-09-04 10:52:06', '2024-09-04 10:52:06'),
(11, 1, 'Gabriel Mendes', 'n', 'Mercado de Programação em Alta: Oportunidades e Desafios', 'O crescimento acelerado da demanda por desenvolvedores no Brasil.', 'Com o aumento da digitalização das empresas, a procura por profissionais de programação está em alta. O mercado busca não apenas desenvolvedores experientes, mas também novos talentos. Especialistas apontam que o domínio de linguagens como Python e JavaScript são essenciais para se destacar nesse cenário competitivo.', 'https://www.folha.uol.com.br/', 'mercado-de-programacao-em-alta-oportunidades-e-desafios', '2024-09-04 10:54:05', '2024-09-04 10:54:05'),
(12, 1, 'Gabriel Mendes', 'a', 'As Melhores Linguagens de Programação para Iniciantes em 2024', 'Descubra as linguagens mais indicadas para quem está começando na área de desenvolvimento.', 'Escolher a primeira linguagem de programação pode ser desafiador para quem está começando. Este artigo destaca Python, JavaScript e Ruby como as linguagens mais acessíveis e com boas oportunidades no mercado. Python, em particular, é recomendada devido à sua simplicidade e versatilidade em diferentes áreas, como desenvolvimento web e análise de dados.', 'https://blog.grancursosonline.com.br/', 'as-melhores-linguagens-de-programacao-para-iniciantes-em-2024', '2024-09-04 10:55:08', '2024-09-04 10:55:08'),
(13, 1, 'Gabriel Mendes', 'n', 'Inteligência Artificial e Programação: Como o Futuro Está Sendo Moldado', 'A fusão da programação com a IA e suas implicações para o mercado de trabalho.', 'A Inteligência Artificial (IA) está revolucionando o mundo da programação. Com o surgimento de novas ferramentas e frameworks, como TensorFlow e PyTorch, os desenvolvedores têm a oportunidade de criar soluções inteligentes. Esse movimento traz novos desafios, como a necessidade de atualizar constantemente as habilidades técnicas.', 'https://www.folha.uol.com.br/', 'inteligencia-artificial-e-programacao-como-o-futuro-esta-sendo-moldado', '2024-09-04 10:56:26', '2024-09-04 10:56:26');
