<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projetos de organização no design da navegação em sistemas complexos realizados pelo designer digital; UX Rodrigo Florenciano">
    <title>Rodrigo Florenciano - Organizando navegações confusas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="../../assets/css/screen.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel='shortcut icon' type='image/x-icon' href='http://rodrigoflorenciano.com.br/assets/img/favicon-rodrigo-florenciano.ico' />
</head>
<body data-list-number-project="1">
    <div class="container-fluid px-0">
        <header class="header-page-header-page_projects">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <a href="../../" title="Home"><img src="../../assets/img/rodrigoflorenciano-designer-digital-ux.svg" alt="Rodrigo Florenciano - Logo" class="d-block mx-auto mx-lg-0 mb-2 mb-lg-3"></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 mb-5">
                        <h1 class="h1 lg-0 font-weight-normal">Organizando navegações confusas</h1>
                        <p class="">
                            <span class="color-text-medium">Design de Interação</span> |
                            <span class="color-text-medium">Arquitetura de informação</span> |
                            <span class="color-text-medium">Design de Interface</span> |
                            <span class="color-text-medium">Testes com usuários</span> |
                            <span class="color-text-medium">Prototipagem</span>
                        </p>
                        <p>Apresento aqui dois projetos que tratam de como uma organização na navegação é fundamental para as tarefas sejam realizadas com mais facilidade. O primeiro é um projeto conceito que nasceu depois de experimentar na própria pele a dificuldade de encontrar informações num sistema desorganizado e com uma interface confusa (Detran.SP), presumi que seria uma boa ideia propor alternativas de melhorias; o segundo também aborda o mesmo tema, só que dentro de uma arquitetura mais enxuta.</p>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div>&nbsp;</div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="h3 font-weight-normal">Por onde eu começo?</h3>
                    <p>Se você, assim como eu já teve que utilizar os serviços do <a href="www.detran.sp.gov.br/" title=":: DETRAN-SP :: DEPARTAMENTO ESTADUAL DE TRÂNSITO DE SÃO PAULO">Detran.SP</a> sabe que não é fácil navegar com tantas opções na tela.</p>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                     <div class="row h-100">
                        <div class="col align-self-center">
                            <p class="lead color-text-medium text-center"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><br>Set 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 my-3">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/interface-atual.jpg" alt="Interface do site do DETRAN.SP - navegação confusa" title="Interface site Detran (época da análise)" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <p id="itens-problemas">Enumerei em 5 <strong>itens-problemas</strong> o sistema de navegação.
                        <ol>
                             <li>Uma pesquisa com o termo "<em>multa</em>" surgem mais de 10 páginas de resultados com 20 respostas por página. Fiquei na dúvida de qual seria o contexto da minha necessidade;</li>
                             <li>As 4 seções de navegação estão tímidas. É fácil ignorá-los;</li>
                             <li>Os "Serviços online" não deixa claro para qual seção se refere. Recebe mais atenção do que menu de navegação;</li>
                             <li>Induz que seja as principais opções de navegação da seção. Inconsistência visual com os demais elementos da interface.</li>
                             <li>Uma extensa lista de navegação com padrão visual próprio. Separar do menu causa confusão se faz parte da seção ou se eles são assuntos genéricos.</li>
                         </ol>
                        <p>O Detran preocupou-se em disponibilizar TODAS as informações ao público de uma única vez, e o usuário teve que pagar o preço: não se acha nada com facilidade!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <h3 class="h3 font-weight-normal mt-5">O que você faria para melhorar este cenário?</h3>
                        <p>A seguir uma proposta para colocar ordem na casa. Os principais pontos de melhorias:</p>
                        <ul>
                            <li>A busca proporcionará resultados relevantes e qual o contexto da aplicação;</li>
                            <li>Partindo do pressuposto que as informações em maior destaque são os serviços mais relevantes para o público, garantiremos uma navegação funcional;</li>
                            <li>Eliminação de redundâncias! Serviços semelhantes ou relacionados ficarão agrupados e terão o mesmo padrão visual;</li>
                            <li>Organizar as informações secundárias das seções. Para situações emergenciais e específicas disponibilizar um ponto de contato com a instituição;</li>
                            <li>Redesenho de interface: moderno, adaptativo e com <em>patterns</em> visuais ajudará fluir melhor a navegação.</li>
                        </ul>
                        <p>Com base nestas observações criei uma proposta de <strong>arquitetura de informação</strong> para visualizar o fluxo de navegação: cada seção com mostra suas principais opções. Informações menos relevantes ficará dentro do guarda-chuva "<span class="color-text-medium ">Outros serviços</span> *".</p>
                        <p><small>*: Pesquisas de campo mostrariam quais seriam os itens relacionados dos seus respectivos serviços.</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/redesign-arquitetura-informacao.png" alt="Proposta de uma nova arquitetura de informação" title="Nova arquitetura de informação" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <h3 class="h3 font-weight-normal mt-5">Projetando navegações e UI Mobile</h3>
                        <p>A seguir proposta para novas interações no design da navegação, novas possibilidades de usos no sistema de busca e o redesenho da interface.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/redesign-navegacao-ui-mobile.jpg" alt="Redesign da navegação, sistema de busca por texto e voz" title="Redesign de interações e navegações e definição do design de interface" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <ol>
                            <li><strong>Menu de navegação</strong>: Cada seção com identificação visual. Ao navegar pela seção desejada o menu apresenta os principais serviços. O ambiente cromático sinaliza ao usuário a seção atual da navegação;</li>
                            <li><strong>Sistema de busca</strong>: Listagem (<em>auto-complete</em>) sucinta, porém relevante ao usuário, mostrando o contexto da aplicação;</li>
                            <li><strong>Busca por comando de voz</strong>: Trata-se de uma possibilidade para otimizar a rapidez da busca.</li>
                        </ol>
                        <p>A seguir o redesenho de toda interface do site da <em>home-page</em> e de uma página interna.</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/ui-mobile.jpg" alt="Design de interface para mobile" title="Interface mobible: home-page e página interna" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <h3 class="h3 font-weight-normal mt-5">Experiência de navegação Desktop</h3>
                        <p>A seguir uma proposta visual para a home-page do site. A sugestão para o menu de navegação é agrupar todas informações num só lugar, criar consistência visual e boa legibilidade. O sistema de busca recebe uma área estratégica na tela e tem mais destaque. Cada grupo de informação na página (notícias, TV, Detran) recebe um padrão de design visual para melhor identificação.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/proposta-interface-desktop.jpg" alt="Interface e navegação desktop" title="Proposta de interface e sistema de navegação para versão desktop" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="h2 font-weight-normal mt-5">Sistemas web <small class="text-muted">com defeitos de fabricação</small></h2>
                    <p>A <a href="https://www.proteste.org.br" title="PROTESTE - Associação Brasileira de Defesa do Consumidor">PROTESTE</a> (Associação Brasileira de Defesa do Consumidor) desenvolveu uma solução tecnológica "Acess Control ou ACA2" para o acompanhamento e registro de preços de diversos produtos. Um sistema integrado com usuários de vários locais do país. A equipe de TI da empresa submeteu o sistema a uma análise de usabilidade, uma vez que os primeiros usuários encontraram dificuldade em manuseá-lo.</p>
                    <p>Analisando a arquitetura inicial do sistema percebe-se que após a etapa do login é disponibilizado muitas informações na tela inicial. Sem uma marcação visual do tipo "Você está aqui" o usuário encontrava dificuldade para saber por onde começar.</p>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                     <div class="row h-100">
                        <div class="col align-self-center">
                            <p class="lead color-text-medium text-center"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><br>Jul 2013</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/arquitetura-informacao-atual.png" alt="Arquitetura de informação confusa" title="Arquitetura de informação atual do sistema" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <h3 class="h3 font-weight-normal mt-5">Testando a usabilidade</h3>
                        <p>Realizei <strong>teste de usabilidade </strong>com alguns usuários para avaliar a facilidade de operar o sistema. Foi proposto uma tarefa corriqueira "<strong>Imprimir as informações cadastradas dos produtos que começam com a letra R</strong>" , e os principais feedbacks encontrados foram:</p>
                        <blockquote class="blockquote">
                            <p class="mb-1">Sistema precisando de uma gama maior de marcação visual.</p>
                            <p class="mb-1">Uma vez encontrado o item "products" foi fácil encontrar o campo de pesquisa, porém, este campo só permite pesquisa literal, mas sem especificar qual campo esta sendo levado em consideração [na busca].</p>
                            <p class="mb-1">Estou na dúvida se é necessário marcar o checkbox todos os itens da lista para imprimir, o botão "imprimir" estava habilitado.</p>
                            <footer class="blockquote-footer text-uppercase"><cite title="Source Title">user01</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote">
                            <p class="mb-1">A navegação a partir do menu, em tese, é simples, é uma navegação em dois cliques, mas possui um agravante muito sério, pois os três itens listados possuem a mesma representação visual, por quê?</p>
                            <p class="mb-1">Uma dúvida se é necessário ou não, selecionar os elementos da tabela através do checkbox, percebi que independente do tipo de seleção o sistema redireciona para uma página que só tem o conteúdo da tabela.</p>
                            <footer class="blockquote-footer text-uppercase"><cite title="Source Title">user02</cite></footer>
                        </blockquote>
                        <h3 class="h3 font-weight-normal mt-5">Analisando a qualidade da interface</h3>
                        <p>Esta etapa é fundamental para investigar onde há erros na interface de usuários. Identifiquei 3 padrões:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/analise-heuristica.png" alt="Análise heurística de interface" title="Heurística de interface do sistema" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="col-md-9">
                        <ol>
                            <li>Menu de navegação principal, não possui distinção visual entre seus elementos. Dificulta a identificação rápido dos itens;</li>
                            <li>Todas as operações de entrada de dados mantêm dados com linguagem técnica. Não apresenta ajuda contextual do tipo de dados requerido para preenchimento. Há mistura de termos de idiomas e sem validação de dados ao prosseguir a operação;</li>
                            <li>Mensagem de erro sem tratamento textual para informar ao usuário a causa do erro ou feedback da operação.</li>
                        </ol>
                        <h3 class="h3 font-weight-normal mt-5">Redesenhando a navegação do sistema</h3>
                        <p>A proposta pretende corrigir os problemas descritos anteriormente. Determinadas operações ficaram somente disponíveis de acordo com o fluxo de navegação no sistema. O sistema notificará a localização do usuário (<em>breadcrumbs</em>). Tarefas concluídas retornam para a página inicial. Linguagem verbal em único idioma preferencialmente em português. Tratamento dos termos técnicos e siglas para eliminar dúvidas. Sistema de busca proporcionando mais opções de configurações.</p>
                        <p>A seguir temos a arquitetura do sistema reformulada e uma representação do fluxo da navegação com wireframes.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 mb-3">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/nova-arquitetura-informacao.png" alt="Redesenho da arquitetura de informação" title="Redesenho da arquitetura de informação" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid p-0 mb-5">
            <div class="row no-gutters">
                <div class="col-12">
                    <img src="../../assets/img/projeto/organizando-navegacoes-confusas/navegacao-wireframes.png" alt="Arquitetura de navegação com wireframes" title="Sistema de navegação completo - wireframes" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-4 text-center">
                    <a href="" title="Lorem ispum dolor simet"><i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i> Projeto anterior</a>
                    <span class="d-block name-projeto-anterior" id="name-projeto-anterior"></span>
                </div>
                <div class="col-md-2 text-center my-4 my-md-0">
                    <a href="../../#principais-projetos" title="Ver outros projetos"><i class="fa fa-th-large fa-lg" aria-hidden="true"></i></a>
                    <span class="d-block name-todos-projetos" id="name-todos-projetos">Todos</span>
                </div>
                <div class="col-md-4 text-center">
                    <a href="" title="Lorem ispum dolor simet"><i class="fa fa-arrow-left fa-lg fa-flip-horizontal" aria-hidden="true"></i> Próximo projeto</a>
                    <span class="d-block name-proximo-projeto" id="name-proximo-projeto"></span>
                </div>
            </div>
        </div>
    </section>
    <?php include("../../footer.php") ?>
    <?php include("../../google-analytics.php") ?>
    <script src="../../assets/js/main.js"></script>
</body>
</html>