
<?php
         session_start();
        if($_SESSION['codigo'] == 'true'){
            
        ?>
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

            <form method="post" action="pergunta_1.php">
                <table id="tabela_teste" style="width:80%">
                    <tr>
                        <td> 1. Trabalhar com ferramentas ou máquinas.</td>
                        <td><select name='teste_1'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 2. Realizar pesquisas.</td>
                        <td><select name='teste_2'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 3. Desenhar ou pintar quadros.</td>
                        <td><select name='teste_3'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 4. Trabalhar com pessoas que necessitem de auxílio.</td>
                        <td><select name='teste_4'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 5. Investir em negócio promissor de alto risco.</td>
                        <td><select name='teste_5'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 6. Controlar os estoques em uma loja.</td>
                        <td><select name='teste_6'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 7. Montar aparelhos ou objetos.</td>
                        <td><select name='teste_7'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 8. Estudar o modo de viver em diferentes culturas.</td>
                        <td><select name='teste_8'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 9. Fazer trabalhos que requeiram expressão das emoções.</td>
                        <td><select name='teste_9'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 10. Desenvolver trabalhos voluntários.</td>
                        <td><select name='teste_10'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 11. Desempenhar tarefas em que possa comandar um grupo de pessoas.</td>
                        <td><select name='teste_11'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 12. Lidar com papéis em um escritório.</td>
                        <td><select name='teste_12'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 13. Construir ou reformar coisas.</td>
                        <td><select name='teste_13'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 14. Buscar explicações para fenômenos naturais ou sociais.</td>
                        <td><select name='teste_14'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 15. Criar programas para TV ou jornal.</td>
                        <td><select name='teste_15'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 16. Trabalhar para promover o bem-estar das pessoas.</td>
                        <td><select name='teste_16'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 17. Tentar convencer as pessoas sobre alguma coisa ou ideia.</td>
                        <td><select name='teste_17'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 18. Organizar a agenda de horários de um executivo.</td>
                        <td><select name='teste_18'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 19. Fazer coisas que requeiram uso de instrumentos e habilidades mecânicas.</td>
                        <td><select name='teste_19'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 20. Estudar as origens do universo.</td>
                        <td><select name='teste_20'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 21. Trabalhar com fotografia e vídeo.</td>
                        <td><select name='teste_21'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 22. Cuidar de pessoas.</td>
                        <td><select name='teste_22'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 23. Fazer coisas que exijam argumentação e debate.</td>
                        <td><select name='teste_23'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 24. Trabalhar com números e registros de uma maneira ordenada.</td>
                        <td><select name='teste_24'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 25. Construir coisas que sejam úteis para o dia a dia.</td>
                        <td><select name='teste_25'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 26. Descobrir como funciona a mente humana.</td>
                        <td><select name='teste_26'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 27. Cantar ou tocar instrumentos musicais.</td>
                        <td><select name='teste_27'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 28. Realizar atividades em que possa ensinar algo aos outros.</td>
                        <td><select name='teste_28'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 29. Exercer cargos de liderança.</td>
                        <td><select name='teste_29'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 30. Executar tarefas rotineiras.</td>
                        <td><select name='teste_30'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 31. Fazer trabalhos que exijam atividade física.</td>
                        <td><select name='teste_31'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 32. Examinar as causas das mudanças que ocorrem na sociedade.</td>
                        <td><select name='teste_32'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 33. Produzir coisas bonitas de se ver ou assistir.</td>
                        <td><select name='teste_33'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 34. Executar tarefas que exijam contato humano.</td>
                        <td><select name='teste_34'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 35. Lidar com atividades que exijam negociação.</td>
                        <td><select name='teste_35'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 36. Organizar arquivos.</td>
                        <td><select name='teste_36'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 37. Fazer trabalhos manuais.</td>
                        <td><select name='teste_37'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 38. Discutir temas científicos com outras pessoas.</td>
                        <td><select name='teste_38'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 39. Planejar a decoração de um ambiente.</td>
                        <td><select name='teste_39'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 40. Trabalhar com orientação de pessoas, assistência física ou mental.</td>
                        <td><select name='teste_40'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 41. Gerenciar um negócio próprio.</td>
                        <td><select name='teste_41'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 42. Trabalhar no caixa de um banco ou loja.</td>
                        <td><select name='teste_42'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 43. Consertar utensílios domésticos.</td>
                        <td><select name='teste_43'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 44. Ler trabalhos de filósofos ou outros intelectuais.</td>
                        <td><select name='teste_44'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 45. Dirigir um filme ou peça de teatro.</td>
                        <td><select name='teste_45'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 46. Realizar atividades que ajudem a melhorar a sociedade de algum modo.</td>
                        <td><select name='teste_46'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 47. Fazer coisas que exijam ambição.</td>
                        <td><select name='teste_47'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td> 48. Seguir uma rotina no trabalho.</td>
                        <td><select name='teste_48'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        </td>
                    </tr>
                </table><bR>
                <input type="text" hidden="hidden" name="nome_aluno" value="<?php echo $_POST['nome_aluno'] ?>">
                <input type="text" hidden="hidden" name="codigo" value="<?php echo $_POST['codigo'] ?>" >

                <label>Insira seu email</label><bR>
                <input type="email" name="email" placeholder="Email@email.com" required><bR>
                <label>Insira seu numero de celular (Whatsapp)</label><bR>
                <input type="number" name="celular" placeholder="(ddd) 9999 9999" required>
                <br> 
                <input type="submit" value="enviar">
                <br>
            </form>
             
        </div>


    </main><!-- /.container -->
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>




        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</body>
            
</html>

<?php
        }else{
            header('Location: index.php');
        }
        ?>