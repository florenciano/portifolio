(function() {

    /************************************
    * REPLACE NAME OF PROJECTS
    * page: 'Nome-projeto'
    ************************************/
    var allProject = [
        "Organizando navegações confusas",
        "Apoio ao Ensino",
        "Um ícone do Furniture Design",
        "Infografia para web",
        "Usabilidade em software",
        "Dê-me uma identidade!",
    ];
    var allLink = [
        "../../projeto/organizando-navegacoes-confusas/",
        "../../projeto/apoio-ao-ensino/",
        "../../projeto/icone-design-furniture/",
        "../../projeto/infografia/",
        "../../projeto/usabilidade-em-software/",
        "../../projeto/de-me-uma-identidade/",
    ];

    var nameProjectPrevious = document.getElementById('name-projeto-anterior'),
        nameProjectFirst = document.getElementById('name-proximo-projeto'),
        listProject = document.getElementsByTagName('body')[0].getAttribute('data-list-number-project'),
        listNumbProject = parseInt(listProject); // string to number

    function hideElement (element) {
        element.previousElementSibling.setAttribute("class", "d-none");
        element.innerHTML = null;
    }

    // projetos anteriores
    if(listNumbProject-1 == 0) { hideElement(nameProjectPrevious) }
        else {
            nameProjectPrevious.innerHTML = allProject[listNumbProject-2];
            nameProjectPrevious.previousElementSibling.setAttribute("href", allLink[listNumbProject-2]);
        }

    // números nonsene
    if(listNumbProject > allProject.length || listNumbProject == 0) {
        hideElement(nameProjectPrevious);
        hideElement(nameProjectFirst);
    }

    // próximos projetos
    if(listNumbProject+1 > allProject.length) { hideElement(nameProjectFirst)}
        else {
            nameProjectFirst.innerHTML = allProject[listNumbProject];
            nameProjectFirst.previousElementSibling.setAttribute("href", allLink[listNumbProject]);
        }

})();
