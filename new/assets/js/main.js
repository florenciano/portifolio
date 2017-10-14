(function() {

    /************************************
    * REPLACE NAME OF PROJECTS
    * page: 'Nome-projeto'
    ************************************/
    var allProject = [
        "Project Name 1",
        "Project Name 2",
        "Project Name 3",
        "Project Name 4",
        "Project Name 5",
        "Project Name 6"
    ];
    var allLink = [
        "../name-projeto/",
        "../name-projeto2/",
        "../name-projeto3/",
        "../name-projeto4/",
        "../name-projeto5/",
        "../name-projeto6/"
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
