<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Centro Boa Forma - Seu espaço de saúde</title>
		<link rel="icon" href="img/fav.png">        
        <!-- GOOGLE ICONS -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- FONT AWESOME 
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
		<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- MATERIALIZE CSS -->		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="css/custom.css">
	</head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- MENU-MOBIlE-->          
            <ul class="sidenav" id="menu-mobile">
                <li><a class="sidenav-close" href="#home">Home</a>
                <li><a class="sidenav-close" href="#sobre">Sobre o Boa forma</a>
                <li><a class="sidenav-close" href="#servicos">Serviços</a>
                <li><a class="sidenav-close" href="#unidades">Unidades</a>
                <li><a class="sidenav-close" href="#contato">Contato</a>
            </ul>

            <div class="navbar-fixed">
                <nav class="navbar z-depth-0">
                    <div class="nav-wrapper container">
                        <h1 class="logo_text"> Centro Boa forma - Seu espaço de saúde </h1>
                        <a href="#"><img class="logo_img" src="img/logo.png" alt="Centro Boa forma"></a>

                        <ul class="right hide-on-med-and-down">
                            <li><a href="#home">Home</a>
                            <li><a href="#sobre">Sobre o Boa forma</a>
                            <li><a href="#servicos">Serviços</a>
                            <li><a href="#unidades">Unidades</a>
                            <li><a href="#contato">Contato</a>
                        </ul>
                        <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
        </header>


        <!-- HOME -->
        <section class="scrollspy home bloco" id="home"> 
            <div class="row container banner">
                <div class="col s12 center">
                    <h2 class="white-text"> O melhor treinamento funcional da região.</h2>
                    <p class="white-text light"> Um novo conceito em prevenção promoção e reabilitação da saúde 
                    para quem busca a melhora do condicionamento e emagrecimento, além 
                    de ser divertido e desafiador. Quer experimentar ?</p>
                    <div class="row botoes">
                        <a href="#sobre" class="btn btn-large blue-logo">Sobre nós</a>
                        <a href="#contato" class="btn btn-large white black-text">Contato</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- SOBRE -->
        <section class="scrollspy sobre bloco" id="sobre">
            <div class="row container">
                <div class="col s12 center">
                    <h2 class="light titulo"> Sobre nós</h2>
                </div>
                <div class="col s12 l6">
                    <p>A Centro Boa Forma chegou a Itabuna e região trazendo um novo conceito
                        em prevenção, promoção e reabilitação da saúde. Localizada no centro da cidade, 
                        conta com fácil estacionamento, salas amplas e climatizadas, ambiente confortável 
                        e seguro aos seus usuários. Suas instalações foram projetadas e equipadas sob medida,
                        dentro dos padrões de acessibilidade, para acolher principalmente pessoas com limitações funcionais.   
                        O centro dispõe de uma equipe profissional qualificada e com experiência no mercado, prezando sempre por
                        tratamentos individualizados e baseados em evidências científicas. 
                        Localizada no centro da cidade, conta com fácil estacionamento, salas amplas e climatizadas, 
                        ambiente confortável e seguro aos seus usuários.</p>
                </div>
                
                <div class="col s12 l6 center">
                    <div class="carousel carousel-slider">
                        <a href="#" class="carousel-item">
                            <img src="img/banner-01.jpg" alt="Imagem institucional">
                        </a>
                        <a href="#" class="carousel-item">
                            <img src="img/banner-02.jpg" alt="Imagem institucional">
                        </a>
                        <a href="#" class="carousel-item">
                            <img src="img/banner-03.jpg" alt="Imagem institucional">
                        </a>           
                    </div>
                </div>
            </div>
            
            <div class="row blue-logo missao-visao-valores">
                <div class="container">
                    <article class="item col s12 m4 center">
                        <span class="icon"><i class="material-icons medium">directions_run</i></span>
                        <h3 class="light"> Missão </h3>
                        <p class="light"> Promover a saúde e bem-estar dos clientes com ações de 
                            prevenção, promoção e reabilitação,através de tratamentos eficazes e 
                            humanizados em Fisioterapia e suas vertentes.</p>
                    </article>
                    <article class="item col s12 m4 center">
                        <span class="icon"><i class="material-icons medium">visibility</i></span>
                        <h3 class="light"> Visão </h3>
                        <p class="light">Tornar-se referência no cenário estadual, buscando a 
                            excelência dos serviços prestados, além de promover o desenvolvimento 
                            técnico-científico de sua equipe e da sociedade.</p>
                    </article>
                    <article class="item col s12 m4 center">
                        <span class="icon"><i class="material-icons medium">grade</i></span>
                        <h3 class="light"> Valores </h3>
                        <p class="light">
                            • Agir com ética frente aos clientes e colaboradores. <br>
                            • Tornar o ambiente de trabalho o mais familiar possível. <br>
                            • Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- SERVIÇOS -->
        <section class="servicos bloco scrollspy" id="servicos" >
            <div class="row container">
                <div class="col s12 center">
                    <h2 class="light titulo white-text"> Serviços </h2>
                    <p class="light paragrafo white-text">Suas instalações foram projetadas e equipadas sob medida, dentro dos padrões de acessibilidade, 
                        para acolher principalmente pessoas com limitações funcionais. A clínica dispõe de uma equipe 
                        profissional qualificada e com experiência no mercado, prezando sempre por tratamentos 
                        individualizados e baseados em evidências científicas.</p>
                </div>
            </div>
            <div class="row container">
                <!-- PILATES -->
                <article class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/pilates.jpg" alt="Pilates" class="materialboxed">
                            <a href="#pilates-modal" class="btn btn-floating halfway-fab waves-effect waves-light blue-logo modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title"> Pilates </h3>
                            <p class="light"> Pilates é um método de controle muscular desenvolvido por Joseph Pilates...</p>
                        </div>
                    </div>
                </article>
                <!-- MODAL PILATES-->
                <div class="modal" id="pilates-modal"> 
                    <div class="modal-content">
                        <h5 class="light"> O que é Pilates? </h5>
    				    <p class="light black-text"> O Pilates é um método de exercício físico e alongamento que utiliza 
                            o peso do próprio corpo na sua execução. É uma técnica de reeducação do movimento que visa 
                            trabalhar o corpo todo, trazendo equilíbrio muscular e mental. </p>
                        <h5 class="light"> Quais os benefícios do Pilates? </h5>
                        <ul class="collection">
                            <li class="collection-item">Alongar, tonificar e definir a musculatura sem exageros;</li>
                            <li class="collection-item">Melhorar a postura;</li>
                            <li class="collection-item">Tonificar a musculatura profunda do abdômen;</li>
                            <li class="collection-item">Prevenir e recuperar lesões; </li>
                            <li class="collection-item">Reduzir o “stress” e aliviar as tensões;</li>
                            <li class="collection-item">Deixar sua coluna mais forte e flexível;</li>
                            <li class="collection-item">Melhorar a área de movimento das articulações;</li>
                            <li class="collection-item"> Melhora a circulação sanguínea;</li>
                            <li class="collection-item"> Aumentar a coordenação e o equilíbrio;</li>
                            <li class="collection-item">  Corrigir sobrecargas e alinhar os músculos;</li>
                            <li class="collection-item"> Melhorar a mobilidade e a agilidade;</li>
                            <li class="collection-item"> Complementar o seu treino esportivo;</li>
                            <li class="collection-item"> Melhorar o visual de seu corpo e a sua auto-estima.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn blue.logo modal-action modal-close">Sair</a>
                    </div>
                </div>

                <!-- NUTRIÇÃO -->
                <article class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/nutricao.jpg" alt="Nutrição" class="materialboxed">
                            <a href="#nutricao-modal" class="btn btn-floating halfway-fab waves-effect waves-light blue-logo modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title"> Nutrição </h3>
                            <p class="light"> Ele planeja, administra e coordena programas de alimentação e 
                                nutrição em empresas, escolas... </p>
                        </div>
                    </div>
                </article>
                <!-- MODAL NUTRIÇÃO-->
                <div class="modal" id="nutricao-modal">
                    <div class="modal-content">
                        <h5 class="light"> Qual a importância da nutrição? </h5>
                        <p class="light black-text"> Seja por um estilo de vida saudável ou para eliminar peso, a preocupação com os 
                            alimentos é constante na rotina das pessoas. Por isso é importante saber comer e dar relevância ao que 
                            se come. Uma nutrição adequada pode prevenir doenças e tornar a vida mais saudável. </p>
                    </div>
    
                    <div class="modal-footer">
                        <a class="btn blue-logo modal-action modal-close"> Sair </a>
                    </div>
                </div>

                <!-- FISIOTERAPIA -->
                <article class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/fisioterapia.jpg" alt="Fisioterapia" class="materialboxed">
                            <a class="btn btn-floating halfway-fab waves-effect waves-light blue-logo modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title"> Fisioterapia </h3>
                            <p class="light"> O fisioterapeuta trata e previne doenças e lesões, empregando técnicas...</p>
                        </div>
                    </div>
                </article>
                <!-- MODA FISIOTERAPIA-->
                    

                <!-- FUNCIONAL -->
                <article class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/funcional.jpg" alt="Funcional" class="materialboxed">
                            <a class="btn btn-floating halfway-fab waves-effect waves-light blue-logo modal-trigger">
                                <i class="material-icons">more_horiz</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title"> Funcional </h3>
                            <p class="light"> O treinamento funcional é um método de trabalho ainda mais dinâmico...</p>
                        </div>
                    </div>
                </article>
                <!-- MODA FUNCIONAL-->

            </div>
            <!-- BOTÃO QUADRO DE HORÁRIO-->
            <div class="row center btn-horario">
                <a href="#horarios-modal" class="btn btn-large blue-logo modal-trigger"><i class="material-icons left">timer</i>Quadro de horários</a>
            </div>
            <!-- MODAL QUADRO DE HORÁRIO-->
            <div class="modal" id="horarios-modal">
                <div class="modal-content">
                    <h5 class="light">Quadro de horários</h5>

                    <ul class="tabs">
                        <li class="tab col s3"><a href="#tabela-pilates" class="active">Pilates</a></li>
                        <li class="tab col s3"><a href="#tabela-musculacao">Musculação</a></li>
                        <li class="tab col s3"><a href="#tabela-fitness">Fitness</a></li>
                        <li class="tab col s3"><a href="#tabela-artes-marciais">Artes Marciais</a></li>
                    </ul>

                    <!-- TABELA PILATES -->
                    <table class="striped responsive-table center" id="tabela-pilates">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6:00 às 10:00 </td>
                                <td> Pilates</td>
                                <td> </td>
                                <td> Pilates</td>
                                <td></td>
                                <td> Pilates</td>
                                <td> Pilates</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00 às 22:00 </td>
                                <td> </td>
                                <td> Pilates</td>
                                <td> </td>
                                <td> Pilates</td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- TABELA MUSCULAÇÃO -->
                    <table class="striped responsive-table center" id="tabela-musculacao">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6:00 às 10:00 </td>
                                <td> Musculação</td>
                                <td> Musculação</td>
                                <td> Musculação</td>
                                <td></td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00 às 22:00 </td>
                                <td> Musculação</td>
                                <td> Musculação</td>
                                <td> Musculação</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                     <!-- TABELA FITNESS -->
                     <table class="striped responsive-table center" id="tabela-fitness">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6:00 às 10:00 </td>
                                <td> Fitness</td>
                                <td> </td>
                                <td> Fitness</td>
                                <td></td>
                                <td> Fitness</td>
                                <td> </td>
                                <td>Fitness</td>
                            </tr>
                            <tr>
                                <td>12:00 às 22:00 </td>
                                <td> Fitness</td>
                                <td> </td>
                                <td> Fitness</td>
                                <td> </td>
                                <td>Fitness </td>
                                <td> </td>
                                <td>Fitness</td>
                            </tr>
                        </tbody>
                    </table>
                     <!-- TABELA ARTES MARCIAIS -->
                     <table class="striped responsive-table center" id="tabela-artes-marciais">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6:00 às 10:00 </td>
                                <td> </td>
                                <td> Artes Marciais</td>
                                <td> </td>
                                <td>Artes Marciais</td>
                                <td> </td>
                                <td> Artes Marciais</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00 às 22:00 </td>
                                <td> </td>
                                <td> Artes Marciais</td>
                                <td> </td>
                                <td> Artes Marciais</td>
                                <td> </td>
                                <td> Artes Marciais</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close"> Sair </a>
                </div>
            </div>
        </section>

        <!-- UNIDADES-->
        <section class="unidades bloco scrollspy" id="unidades">
            <div class="row container">
                <div class="col s12 center">
                    <h2 class="light titulo white-text"> Unidades </h2>
                    <p class="light paragrafo white-text">Para oferecer serviços de acordo com a realidade e necessidade de cada região do Brasil, 
                        o centro boa forma possui unidades em quatro estados. Com atividades permanentes os espaços físicos 
                        buscam oferecer facilidade de acesso e atendimento de qualidade.</p>
                </div>
            </div>
            <div class="row container">
                <!-- BH -->
                <article class="col s12 l6">
                    <div class="card horizontal">
                        <div class="card-image card-image-horizontal">
                            <img src="img/bh.jpg" alt="Belo Horizonte">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3 class="card-title light"> Belo Horizonte</h3>
                                <p class="light">
                                    <i class="material-icons">phone</i> 123 321 123 <br>
                                    <i class="material-icons">email</i> bh@boaforma.com <br>
                                    <i class="material-icons">location_on</i> Av. Belo Horizonte, 123 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- SALVADOR -->
                <article class="col s12 l6">
                    <div class="card horizontal">
                        <div class="card-image card-image-horizontal">
                            <img src="img/salvador.jpg" alt="Salvador">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3 class="card-title light"> Salvador</h3>
                                <p class="light">
                                    <i class="material-icons">phone</i> 123 321 123 <br>
                                    <i class="material-icons">email</i> salvador@boaforma.com <br>
                                    <i class="material-icons">location_on</i> Av. Bahia, 123 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- SÂO PAULO -->
                <article class="col s12 l6">
                    <div class="card horizontal">
                        <div class="card-image card-image-horizontal">
                            <img src="img/sp.jpg" alt="São Paulo">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3 class="card-title light"> São Paulo</h3>
                                <p class="light">
                                    <i class="material-icons">phone</i> 123 321 123 <br>
                                    <i class="material-icons">email</i> sp@boaforma.com <br>
                                    <i class="material-icons">location_on</i> Av. São Paulo, 123 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- RIO DE JANEIRO -->
                <article class="col s12 l6">
                    <div class="card horizontal">
                        <div class="card-image card-image-horizontal">
                            <img src="img/rj.jpg" alt="Rio de Janeiro">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3 class="card-title light"> Rio de Janeiro</h3>
                                <p class="light">
                                    <i class="material-icons">phone</i> 123 321 123 <br>
                                    <i class="material-icons">email</i> rj@boaforma.com <br>
                                    <i class="material-icons">location_on</i> Av. Rio de Janeiro, 123 <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- CONTATO -->
        <section class="contato bloco scrollspy" id="contato">
            <div class="row container">
                <div class="col s12 center">
                    <h2 class="titulo light"> Contato</h2>
                </div>
                <div class="col s12 m6 l4 hide-on-med-only">
                    <div class="mapa transparent">
                        <iframe src="" frameborder="0"> Lugar </iframe>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="informacoes white-text">
                    <h4>Redes Sociais</h4>
                    <p class="light"> Fique por dentro das novidades, receba dicas, ou simplesmente mostre ao mundo que você 
                    faz parte desse projeto sensacional! </p>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-facebook blue"></i></a>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-google red"></i></a>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-twitter "></i></a>

                    <h4>Endereço</h4>
                    <p class="light"> Rua paraiso, 123 <br>
                    centro, Itabuna -Ba</p>

                    <h4>Contatos</h4>
                    <p class="light"> 
                        (72) 4563-4567 <br>
                        (43) 5678-8653 <br>
                        (31) 5478-3556
                    </p>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="formulario white black-text">
                        <h4> Fale Conosco</h4>
                        <p class="light"> Dúvidas, criticas ou sujestões? Entre em contato conosco, seu feedback é muito importante. </p>

                        <form action="" method="post">
                            <div class="input-field"> 
                                <input type="text"  name="name" id="name">
                                <label for="name"> Seu nome</label>
                            </div>
                            <div class="input-field"> 
                                <input type="email"  name="email" id="email">
                                <label for="email"> Seu email</label>
                            </div>
                            <div class="input-field"> 
                                <input type="text"  name="subject" id="subject">
                                <label for="subject"> Assunto</label>
                            </div>
                            <div class="input-field"> 
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message"> Mensagem</label>
                            </div>
                            <button class="btn blue-logo" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--DEPOIMENTOS-->
        <div class="depoimentos blue-logo">
            <div class="row container">
                <div class="col s12 center">
                    <h2 class="titulo white-text light">Depoimentos</h2>
                </div>
                <div class="col s12 m4 center">
                    <img src="img/depo1.jpg" class="circle responsive-img" alt="Depoimento de Felipe">
                    <p class="light white-text"> "Conheci o treinamento funcional e a metodologia Centro Boa Forma por indicação 
                        de um amigo. Excelentes profissionais e super atenciosos!"</p>
                    <h4 class="light white-text">Felipe Souza</h4>
                    <p class="white-text">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </p>
                </div>

                <div class="col s12 m4 center">
                    <img src="img/depo2.jpg" class="circle responsive-img" alt="Depoimento de Bruno">
                    <p class="light white-text"> "Gostei muito da oficina e das aulas, superou minhas expectativas. A empresa e 
                        os treinamentos foram ótimos!"</p>
                    <h4 class="light white-text">Bruno Valério</h4>
                    <p class="white-text">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </p>
                </div>
                <div class="col s12 m4 center">
                    <img src="img/depo3.jpg" class="circle responsive-img" alt="Depoimento de Joana">
                    <p class="light white-text"> "Treinar com motivação e satisfação pelos resultados obtidos são os motivos que 
                        me conquistaram e me mantém no Centro Boa Forma."</p>
                    <h4 class="light white-text">Joana Souza</h4>
                    <p class="white-text">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </p>
                </div>
            </div>
        </div>

        <!--RODAPÉ-->
        <footer class="rodape">
            <div class="row container center">
                <img src="img/logo.png" class="logo_img">
                <p class="light white-text">© Centro Boa Forma 2017 - Todos os direitos reservados</p>
            </div>
        </footer>



        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- MATERIALIZE JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- JAVASCRIPT -->
        <script>
            // INICIALIZAÇÃO
            $(document).ready(function(){
                // MENU MOBILE
                $(".sidenav").sidenav();
                // LINK INTERNO
                $(".scrollspy").scrollSpy({
                    scrollOffset: 0
                });
                // MATERIAL BOXED
                $('.materialboxed').materialbox();
                // CAROUSEL
                $(".carousel.carousel-slider").carousel({
                    fullWidth: true,
                    indicators: true
                });
                // MODAL
                $(".modal").modal();
                // TABS
                $('ul.tabs').tabs({
                    swipeable:false,
                    responsiveThreshold: Infinity       
                });
                function autoplay() {
                    $(".carousel").carousel("next");
                    setTimeout(autoplay, 4500);
                }
                autoplay();
        });

        // ADICIONANDO NAVCOLOR
        $(window).on("scroll", function(){
            if($(window).scrollTop() > 100) {
                $(".navbar").addClass("navbar-color");
            } else {
                $(".navbar").removeClass("navbar-color");
            }
        })
        </script>

        <?php
        if(isset($_GET['status'])):
            if($_GET['status'] = "sucesso"):
            echo "<script>Materialize.toast('Enviado com sucesso!', 4000); </script>";
            else:
            echo "<script>Materialize.toast('Erro ao enviar', 4000); </script>";
            endif;
        endif;
        ?>
        
    </body>
</html>

