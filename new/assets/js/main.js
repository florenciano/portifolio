!function(){function e(e){e.previousElementSibling.setAttribute("class","d-none"),e.innerHTML=null}var n=["Organizando navegações confusas","Apoio ao Ensino","Um ícone do Furniture Design","Infografia para web","Usabilidade em software","Dê-me uma identidade!"],o=["../../projeto/organizando-navegacoes-confusas/","../../projeto/apoio-ao-ensino/","../../projeto/icone-design-furniture/","../../projeto/infografia/","../../projeto/usabilidade-em-software/","../../projeto/de-me-uma-identidade/"],t=document.getElementById("name-projeto-anterior"),i=document.getElementById("name-proximo-projeto"),a=document.getElementsByTagName("body")[0].getAttribute("data-list-number-project"),r=parseInt(a);r-1==0?e(t):(t.innerHTML=n[r-2],t.previousElementSibling.setAttribute("href",o[r-2])),(r>n.length||0==r)&&(e(t),e(i)),r+1>n.length?e(i):(i.innerHTML=n[r],i.previousElementSibling.setAttribute("href",o[r]))}();