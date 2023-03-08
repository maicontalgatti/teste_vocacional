<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Custom styles personal -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body class="img_back">
    <?php
    include("db.php");

    ?>



    <main role="main" class="container">

        <div class="starter-template bloco_principal align_center">
            <h3 class="align_center">Escala de Interesses Vocacionais (EIV)</h3>
            <p class="lead align_center p_text">Abaixo há uma série de frases que descrevem variados tipos de atividades ou situações.
                Você deve avaliar, conforme sua opinião pessoal, o quanto lhe agrada ou desagrada cada atividade ou situação.
                Para cada uma das frases escreva na coluna “Resp.”, a resposta que melhor se aproxima à sua opinião de acordo com a chave de resposta abaixo.</p>
            <!-- Colocar uma table pequena aqui -->
            <p class="lead align_center p_text">Você pode usar as opções: 1, 2, 3, 4, 5, 6 e 7, dependendo do quanto lhe agrada ou desagrada a atividade ou situação descrita na frase
                (quanto mais perto de 1, mais lhe desagrada, quanto mais perto de 7, mais lhe agrada a atividade). Note que responder que uma atividade lhe agrada não significa
                que você gostaria, necessariamente, de trabalhar numa profissão que envolva a atividade ou situação descrita (embora isso também possa ser o caso).
                Assinale apenas uma resposta por frase, e não pare muito tempo para pensar em cada resposta; a sua primeira impressão é o mais importante. Lembre-se
                de não deixar nenhum item em branco..</p>

            <form method="post" action="processa_teste.php">
                <table id="tabela_teste" style="width:80%">
                    <tr>
                        <td> 1. Trabalhar com ferramentas ou máquinas.</td>
                        <td><input type='text' name='teste_1'></td>
                    </tr>
                    <tr>
                        <td> 2. Realizar pesquisas.</td>
                        <td><input type='text' name='teste_2'></td>
                    </tr>
                    <tr>
                        <td> 3. Desenhar ou pintar quadros.</td>
                        <td><input type='text' name='teste_3'></td>
                    </tr>
                    <tr>
                        <td> 4. Trabalhar com pessoas que necessitem de auxílio.</td>
                        <td><input type='text' name='teste_4'></td>
                    </tr>
                    <tr>
                        <td> 5. Investir em negócio promissor de alto risco.</td>
                        <td><input type='text' name='teste_5'></td>
                    </tr>
                    <tr>
                        <td> 6. Controlar os estoques em uma loja.</td>
                        <td><input type='text' name='teste_6'></td>
                    </tr>
                    <tr>
                        <td> 7. Montar aparelhos ou objetos.</td>
                        <td><input type='text' name='teste_7'></td>
                    </tr>
                    <tr>
                        <td> 8. Estudar o modo de viver em diferentes culturas.</td>
                        <td><input type='text' name='teste_8'></td>
                    </tr>
                    <tr>
                        <td> 9. Fazer trabalhos que requeiram expressão das emoções.</td>
                        <td><input type='text' name='teste_9'></td>
                    </tr>
                    <tr>
                        <td> 10. Desenvolver trabalhos voluntários.</td>
                        <td><input type='text' name='teste_10'></td>
                    </tr>
                    <tr>
                        <td> 11. Desempenhar tarefas em que possa comandar um grupo de pessoas.</td>
                        <td><input type='text' name='teste_11'></td>
                    </tr>
                    <tr>
                        <td> 12. Lidar com papéis em um escritório.</td>
                        <td><input type='text' name='teste_12'></td>
                    </tr>
                    <tr>
                        <td> 13. Construir ou reformar coisas.</td>
                        <td><input type='text' name='teste_13'></td>
                    </tr>
                    <tr>
                        <td> 14. Buscar explicações para fenômenos naturais ou sociais.</td>
                        <td><input type='text' name='teste_14'></td>
                    </tr>
                    <tr>
                        <td> 15. Criar programas para TV ou jornal.</td>
                        <td><input type='text' name='teste_15'></td>
                    </tr>
                    <tr>
                        <td> 16. Trabalhar para promover o bem-estar das pessoas.</td>
                        <td><input type='text' name='teste_16'></td>
                    </tr>
                    <tr>
                        <td> 17. Tentar convencer as pessoas sobre alguma coisa ou ideia.</td>
                        <td><input type='text' name='teste_17'></td>
                    </tr>
                    <tr>
                        <td> 18. Organizar a agenda de horários de um executivo.</td>
                        <td><input type='text' name='teste_18'></td>
                    </tr>
                    <tr>
                        <td> 19. Fazer coisas que requeiram uso de instrumentos e habilidades mecânicas.</td>
                        <td><input type='text' name='teste_19'></td>
                    </tr>
                    <tr>
                        <td> 20. Estudar as origens do universo.</td>
                        <td><input type='text' name='teste_20'></td>
                    </tr>
                    <tr>
                        <td> 21. Trabalhar com fotografia e vídeo.</td>
                        <td><input type='text' name='teste_21'></td>
                    </tr>
                    <tr>
                        <td> 22. Cuidar de pessoas.</td>
                        <td><input type='text' name='teste_22'></td>
                    </tr>
                    <tr>
                        <td> 23. Fazer coisas que exijam argumentação e debate.</td>
                        <td><input type='text' name='teste_23'></td>
                    </tr>
                    <tr>
                        <td> 24. Trabalhar com números e registros de uma maneira ordenada.</td>
                        <td><input type='text' name='teste_24'></td>
                    </tr>
                    <tr>
                        <td> 25. Construir coisas que sejam úteis para o dia a dia.</td>
                        <td><input type='text' name='teste_25'></td>
                    </tr>
                    <tr>
                        <td> 26. Descobrir como funciona a mente humana.</td>
                        <td><input type='text' name='teste_26'></td>
                    </tr>
                    <tr>
                        <td> 27. Cantar ou tocar instrumentos musicais.</td>
                        <td><input type='text' name='teste_27'></td>
                    </tr>
                    <tr>
                        <td> 28. Realizar atividades em que possa ensinar algo aos outros.</td>
                        <td><input type='text' name='teste_28'></td>
                    </tr>
                    <tr>
                        <td> 29. Exercer cargos de liderança.</td>
                        <td><input type='text' name='teste_29'></td>
                    </tr>
                    <tr>
                        <td> 30. Executar tarefas rotineiras.</td>
                        <td><input type='text' name='teste_30'></td>
                    </tr>
                    <tr>
                        <td> 31. Fazer trabalhos que exijam atividade física.</td>
                        <td><input type='text' name='teste_31'></td>
                    </tr>
                    <tr>
                        <td> 32. Examinar as causas das mudanças que ocorrem na sociedade.</td>
                        <td><input type='text' name='teste_32'></td>
                    </tr>
                    <tr>
                        <td> 33. Produzir coisas bonitas de se ver ou assistir.</td>
                        <td><input type='text' name='teste_33'></td>
                    </tr>
                    <tr>
                        <td> 34. Executar tarefas que exijam contato humano.</td>
                        <td><input type='text' name='teste_34'></td>
                    </tr>
                    <tr>
                        <td> 35. Lidar com atividades que exijam negociação.</td>
                        <td><input type='text' name='teste_35'></td>
                    </tr>
                    <tr>
                        <td> 36. Organizar arquivos.</td>
                        <td><input type='text' name='teste_36'></td>
                    </tr>
                    <tr>
                        <td> 37. Fazer trabalhos manuais.</td>
                        <td><input type='text' name='teste_37'></td>
                    </tr>
                    <tr>
                        <td> 38. Discutir temas científicos com outras pessoas.</td>
                        <td><input type='text' name='teste_38'></td>
                    </tr>
                    <tr>
                        <td> 39. Planejar a decoração de um ambiente.</td>
                        <td><input type='text' name='teste_39'></td>
                    </tr>
                    <tr>
                        <td> 40. Trabalhar com orientação de pessoas, assistência física ou mental.</td>
                        <td><input type='text' name='teste_40'></td>
                    </tr>
                    <tr>
                        <td> 41. Gerenciar um negócio próprio.</td>
                        <td><input type='text' name='teste_41'></td>
                    </tr>
                    <tr>
                        <td> 42. Trabalhar no caixa de um banco ou loja.</td>
                        <td><input type='text' name='teste_42'></td>
                    </tr>
                    <tr>
                        <td> 43. Consertar utensílios domésticos.</td>
                        <td><input type='text' name='teste_43'></td>
                    </tr>
                    <tr>
                        <td> 44. Ler trabalhos de filósofos ou outros intelectuais.</td>
                        <td><input type='text' name='teste_44'></td>
                    </tr>
                    <tr>
                        <td> 45. Dirigir um filme ou peça de teatro.</td>
                        <td><input type='text' name='teste_45'></td>
                    </tr>
                    <tr>
                        <td> 46. Realizar atividades que ajudem a melhorar a sociedade de algum modo.</td>
                        <td><input type='text' name='teste_46'></td>
                    </tr>
                    <tr>
                        <td> 47. Fazer coisas que exijam ambição.</td>
                        <td><input type='text' name='teste_47'></td>
                    </tr>
                    <tr>
                        <td> 48. Seguir uma rotina no trabalho.</td>
                        <td><input type='text' name='teste_48'></td>
                    </tr>
                </table><bR>
                <input type="text" hidden="hidden" name="nome_aluno" value="<?php echo $_POST['nome_aluno'] ?>">
                <input type="text" name="email" placeholder="Email@email.com" >
                <input type="text" hidden="hidden" name="codigo" value="<?php echo $_POST['codigo'] ?>">
                <input type="number" name="celular" placeholder="(ddd) 9999 9999" >
                <input type="submit" value="enviar">
                <br>
            </form>
            <!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav> -->

            <!-- <input type="text" class="align_center"><br>
        <input type="button" class="align_center" value="Iniciar" href="teste.php"> -->
            <!-- <p class="lead align_center">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p> -->
        </div>








    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>