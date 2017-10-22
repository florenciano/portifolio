(function() {

    /************************************
    * REPLACE NAME OF PROJECTS
    * page: 'Nome-projeto'
    ************************************/
    var allProject = [
        "Um ícone do Furniture Design",
        "Project Name 2",
        "Project Name 3",
        "Infografia",
        "Interação 121",
        "Relatório anual"
    ];
    var allLink = [
        "../projeto/icone-design-furniture/",
        "../name-projeto2/",
        "../name-projeto3/",
        "../projeto/infografia/",
        "../projeto/interacao-121/",
        "../projeto/relatorio-anual/"
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
