<!DOCTYPE html>
<html class="no-js" lang="pt-BR" ng-app="relDownloadsCasos">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="casos, insper, relatório, downloads casos, casos insper">
    <title>Relatório de Casos - Rodrigo Florenciano - Designer digital; UX</title>
    <link rel="stylesheet" href="assets/css/main.css">
        <link rel='shortcut icon' type='image/x-icon' href='http://rodrigoflorenciano.com.br/assets/img/favicon-rodrigo-florenciano.ico' />
</head>
<body>
    <div class="wrapper">
        <header role="banner" id="top" class="wfull fix">
            <h1>Relatório Casos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus debitis, inventore quas quasi harum voluptatibus eligendi corrupti, aut architecto fugiat, quidem libero cum voluptatem possimus ipsam perferendis est laborum animi!.</p>
        </header>
        <div id="main" role="main" class="fix wfull">
            <article>
                <header class="row year"><h2>– 2015 –</h2>
                </header>
                <section class="row fix graph">
                    <div class="c12 container-graph">
                        <h3>Quantidades de Casos baixados durante o ano</h3>
                        <div class="area-graph">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </section>
                <section class="row months" ng-controller="topCasosMeses">
                    <div class="wfull fix">
                        <ul class="list-in-months">
                            <!-- jan -->
                            <li class="c3 jan">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Janeiro</span>
                                    <span class="valueMonth">134</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosJan">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- fev -->
                            <li class="c3 fev">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Fevereiro</span>
                                    <span class="valueMonth">254</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosFev">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- mar -->
                            <li class="c3 mar">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Março</span>
                                    <span class="valueMonth">552</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosMar">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- abr -->
                            <li class="c3 abr">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Abril</span>
                                    <span class="valueMonth">476</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosAbr">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wfull fix">
                        <ul class="list-in-months">
                            <!-- mai -->
                            <li class="c3 mai">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Maio</span>
                                    <span class="valueMonth">488</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosMai">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- jun -->
                            <li class="c3 jun">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Junho</span>
                                    <span class="valueMonth">402</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosJun">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- jul -->
                            <li class="c3 jul">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Julho</span>
                                    <span class="valueMonth">300</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosJul">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ago -->
                            <li class="c3 ago">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Agosto</span>
                                    <span class="valueMonth">520</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosAgo">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wfull fix">
                        <ul class="list-in-months">
                            <!-- set -->
                            <li class="c3 set">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Setembro</span>
                                    <span class="valueMonth">633</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosSet">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- out -->
                            <li class="c3 out">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Outubro</span>
                                    <span class="valueMonth">655</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosOut">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nov -->
                            <li class="c3 nov">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Novembro</span>
                                    <span class="valueMonth">733</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosNov">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- dez -->
                            <li class="c3 dez">
                                <a href="#" title="Veja os principais casos baixados no mês" class="btnMonth">
                                    <span class="nameMonth">Dezembro</span>
                                    <span class="valueMonth">297</span>
                                    <span class="icoMore"><img src="assets/img/icoMore.png" alt="+"></span>
                                </a>
                                <div class="listCases">
                                    <h3>Casos mais baixados</h3>
                                    <ul class="list-in-listCases">
                                        <li ng-repeat="n in topCasosDez">
                                            <span class="nameCase"><a href="{{n.linkCaso}}" title="Acessa a página do caso no portal Insper">{{n.nameCaso}}</a></span>
                                            <span class="numberCase">{{n.numbCaso}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="row fix topList">
                    <div class="c12">
                        <h3>Lista geral dos Top 10</h3>
                        <div class="c6 column">
                            <ol class="wfull list-topList" id="listE-topList" ng-controller="top1-5">
                                <li ng-repeat="n in listEsq">
                                    <div class="numbCase-topList">0</div>
                                    <div class="nameCase-topList"><a href="{{n.linkCaso}}" title="Veja detalhes do Caso">{{n.nameCaso}}</a></div>
                                    <div class="valueCase-topList">{{n.valueCaso}}</div>
                                </li>
                            </ol>
                        </div>
                        <div class="c6 column">
                            <ol class="wfull list-topList" start="6" id="listD-topList" ng-controller="top6-10">
                                <li ng-repeat="n in listDir">
                                    <div class="numbCase-topList">0</div>
                                    <div class="nameCase-topList"><a href="{{n.linkCaso}}" title="Veja detalhes do Caso">{{n.nameCaso}}</a></div>
                                    <div class="valueCase-topList">{{n.valueCaso}}</div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </section>
                <div class="row fix sum">
                    <div class="btn">
                        <span class="ico-sum"></span>
                        <span class="txt-sum">Total Geral dos Casos mais baixados</span>
                        <span class="value-sum" id="value-sum">0</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <footer role="contentinfo" id="footer" class="wfull fix">
        <section class="wrapper">
            <div class="row">
                <h3><img src="assets/img/insper-logo.png" alt="Insper: Ensino Superior em Negócios, Direito e Engenharia"></h3>
                <p class="signature">Nome do departamento - editado</p>
            </div>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-2.1.4.min.js"><\/script>')</script>
    <!-- plugins -->
    <script src="assets/js/libs/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <!-- code: controlles AngularJs -->
    <script src="assets/js/rel.js"></script>
    <!-- code project -->
    <script src="assets/js/main.js"></script>
    <?php include("../../../google-analytics.php") ?>
</body>
</html>
