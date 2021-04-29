<!DOCTYPE html>
<html>

<head>

    <title>John Prado</title>

    <style>
        *{
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
            margin: 1.25rem;
            max-width: auto;

        }

        a {

            --tw-space-x-reverse: 0;
            margin-right: calc(1rem * var(--tw-space-x-reverse));
            margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
            display: inline-block;
            font-weight: 800;
            text-transform: uppercase;

        }


        section {

            position: relative;
            box-sizing: content-box;
            border-style: dotted;
            text-align: center;

        }

        .Meus_Links {

            display: flex;
            position: relative;

        }

        h1 {

            display: flex;
            place-items: center;
            justify-content: center;
            font-size: 2.5rem;

        }

        p {

            display: flex;
            place-items: center;
            justify-items: center;
            padding: 1.5rem;
            justify-content: center;
            font-size: 1.5rem;
        }



    </style>

</head>

<body>

<section>

    <h1>Seja Bem-Vindo!</h1>

    <p>Muito obrigado por me visitar! Aqui você vai encontrar todos meus links e saber um pouco sobre mim.</p>

</section>

<section>

    <h1>Sobre Mim</h1>

    <p>Com influências de diversos artistas do Rock e segmentos similares, tento levar ao meu público um estilo único e original. Quero mostrar a minha verdade, trazendo os mais diversos sentimentos para que se emocionem e se identifiquem com essas músicas.</p>

</section>

<section>

    <h1>Bora conhecer meu trampo?</h1>

    <p>Aqui está tudo o que você precisa:</p>

    <?php

    echo '<a href="https://www.instagram.com/john_prado17/">Instagram</a>';
    echo '<a href="https://www.facebook.com/joao.luis.prado17">Facebook</a>';
    echo '<a href="https://open.spotify.com/artist/7FyeB6WvXir1lFo96V3le0">Spotify</a>';
    echo '<a href="https://www.youtube.com/channel/UCRR2obwXW-UTOM_PWFl3iTg">YouTube</a>';


    if (isset($_GET['pagina'])) {
        include 'pages/'.$_GET['pagina'].'.php';
    }

    ?>

</section>

</html>