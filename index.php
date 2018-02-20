<!DOCTYPE html>
<html>   
    <head>
        <title> Elephant Game | Dinicley Alves</title>
        <meta charset="utf-8">
        <meta name="author" content="Dinicley Alves - www.dinicleyalves.com.br" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- META TAGS -->     
        <meta property="og:title" content="Elephant Game"/>
        <meta property="og:type" content="game"/>
        <meta property="og:description" content="Joguinho Elephant Game, pra passar tempo entre os cods, com mascote do PHP PA!" />
        <meta property="og:image" content="http://phppa.org/public/images/phppa.png"/>
        <meta property="og:url" content="http://elephantgame.dinicleyalves.com.br/"/>
        <meta property="og:site_name" content="Elephant Game" />
        <meta property="og:fb:admins" content="ProfDinicley" />
        <meta name="twitter:card" content="summary">

        <!-- // CSS -->
        <link href="css/elephant-reset.css" rel="stylesheet"> <!-- CSS Reset-->
        <link href="css/elephant-main.css" rel="stylesheet"> <!-- CSS Principal -->
    </head>
    <body>

        <!-- // HTML5 -->
        <main id="main-game"> <!-- Configuração da pag. HTML -->
            <section id="screen-game"> <!-- Configuração da área do jogo -->                
                <section id="background-game" class="animated"> <!-- Plano de fundo do jogo -->
                    <section>
                        <div id="img-youtube">
                            <a href="https://www.youtube.com/channel/UCNFadfe0fkDVRKo9N-Rc8tQ?sub_confirmation=1" target="_blank" title="Canal do YouTube">
                                <img src="https://lh3.googleusercontent.com/-o4sq2KHHbuo/AAAAAAAAAAI/AAAAAAAAAyE/Jz_ocmvSIc8/s120-p-rw-no/photo.jpg"></a>

                            <a href="http://www.dinicleyalves.com.br/" target="_blank" title="Conheça meu site!">
                                <img src="assets/l-site.png"></a>

                            <a href="https://bernarttsw.com.br/central/aff.php?aff=3" target="_blank" title="Hospedado por Bernartt Soluções Web">
                                <img src="https://bernarttsw.com.br/wp-content/uploads/2015/10/logo_site.png"></a>

                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- AD Elephant Game 320 x 100 -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:320px;height:100px"
                                 data-ad-client="ca-pub-6383267750822293"
                                 data-ad-slot="8729082369"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>



                        </div>
                    </section>
                    <section id="area-elephantgame"> <!-- Área limite para o elephant -->
                        <div id="phptopo" class="animated"></div> <!-- IMAGEM PHP TOPO - BLOCO SUPERIOR -->
                        <div id="player" class="elephant animated"></div>  <!-- Área limite para o jogador -->
                        <div id="bigscore"></div> <!-- Marcação do score no topo -->                  
                        <div id="borajogar"></div> <!-- #BORAJOGAR - Tela inicial  -->

                        <div id="scorepoints"> <!-- ScorePoints - Quadro de Pontos do Jogo -->
                            <div id="medal"></div> <!-- Medalha conquistada -->
                            <div id="currentscore"></div> <!-- Pontuação obtida -->
                            <div id="highscore"></div> <!-- Maior pontuação por Cookies -->
                            <div id="replay"><img src="assets/replay.png" alt="replay"></div> <!-- IMG para recomeçar -->
                        </div>                   
                        <!-- Canoletas, vão aparecendo aqui por meio de um Array -->

                    </section>
                </section>            
                <section id="footer-game" class="animated"></section> <!-- Rodapé ou base do jogo -->
            </section>
        </main>

        <!-- // JS & APIs -->
        <script src="js/elephant-jquery.min.js"></script> <!-- JQuery -->
        <script src="js/elephant-jquery.transit.min.js"></script> <!-- JQuery transições -->
        <script src="js/elephant-buzz.min.js"></script> <!-- API para áudio -->
        <script src="js/elephant-main.js"></script> <!-- JS principal - Lógica -->

    </body>
</html>