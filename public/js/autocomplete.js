var products = {};
var currentFocus;
var inp = document.getElementById("valProd");
var inpHidden = document.getElementById("idProd");

function addActive(x)
{
    /*une fonction permettant de classer un élément comme "actif" :*/
    if (!x) return false;
    /*commencez par supprimer la classe "active" sur tous les éléments :*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*ajouter la classe "autocomplétion-active" :*/
    x[currentFocus].classList.add("autocomplete-active");
}

function removeActive(x)
{
    /*une fonction permettant de supprimer la classe "active" de tous les éléments à remplir automatiquement :*/
    for (var i = 0; i < x.length; i++)
    {
        x[i].classList.remove("autocomplete-active");
    }
}

function closeAllLists(elmnt)
{
    /*fermer toutes les listes à remplir automatiquement dans le document,
    sauf celle qui a été adoptée comme argument :*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++)
    {
        if (elmnt != x[i] && elmnt != inp)
        {
            x[i].parentNode.removeChild(x[i]);
        }
    }
}

var doAutocomplete = function (component)
{
    arr = products;
    var a, b, i, val = component.value;
    /*ferme toute liste déjà ouverte de valeurs complétées automatiquement*/
    closeAllLists();
    if (!val) { return false; }
    currentFocus = -1;
    /*créer un élément DIV qui contiendra les éléments (valeurs) :*/
    a = document.createElement("DIV");
    a.setAttribute("id", component.id + "autocomplete-list");
    a.setAttribute("class", "autocomplete-items");
    /*ajouter l'élément DIV comme un enfant du conteneur d'autocomplétion :*/
    component.parentNode.appendChild(a);
    /*Pour chaque élément du tableau...*/
    for (i = 0; i < arr.length; i++)
    {
        var name = arr[i].name;
        var id = arr[i].id;
        if (name.substr(0, val.length).toUpperCase() == val.toUpperCase())
        {
            /*créer un élément DIV pour chaque élément correspondant :*/
            b = document.createElement("DIV");
            /*mettez les lettres correspondantes en gras :*/
            b.innerHTML = "<strong>" + name.substr(0, val.length) + "</strong>";
            b.innerHTML += name.substr(val.length);
            /*insérer un champ de saisie qui contiendra la valeur de l'élément courant du tableau :*/
            b.innerHTML += "<input id='" + id + "' type='hidden' value='" + name + "'>";
            /*exécuter une fonction lorsque quelqu'un clique sur la valeur de l'objet (élément DIV) :*/
            b.addEventListener("click", function (e)
            {
                /*insérer la valeur pour le champ de texte à remplir automatiquement :*/
                inp.value = this.getElementsByTagName("input")[0].value;
                inpHidden.value = this.getElementsByTagName("input")[0].id;
                /*fermer la liste des valeurs complétées automatiquement,
                (ou toute autre liste ouverte de valeurs complétées automatiquement :*/
                closeAllLists();
            });
            a.appendChild(b);
        }
    }
}

function autocomplete(inp)
{
    /*la fonction d'autocomplétion prend un argument, l'élément de champ de texte  :*/
    var task = function (e)
    {
        call(this);
    }
    inp.addEventListener("input", task);
    /*exécuter une fonction appuie sur une touche du clavier :*/
    inp.addEventListener("keydown", function (e)
    {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40)
        {
            /*Si la touche fléchée DOWN est enfoncée,
            augmenter la variable currentFocus :*/
            currentFocus++;
            /*et de rendre l'article en cours plus visible :*/
            addActive(x);
        } else if (e.keyCode == 38)
        { //up
            /*Si la touche flèche vers le haut est enfoncée, diminuez la variable currentFocus :*/
            currentFocus--;
            /*et de rendre l'article en cours plus visible :*/
            addActive(x);
        } else if (e.keyCode == 13)
        {
            /*Si vous appuyez sur la touche ENTRÉE, vous empêchez la soumission du formulaire,*/
            e.preventDefault();
            if (currentFocus > -1)
            {
                /*et simuler un clic sur l'élément "actif" :*/
                if (x) x[currentFocus].click();
            }
        }
    });
    /*exécuter une fonction lorsque quelqu'un clique dans le document :*/
    document.addEventListener("click", function (e)
    {
        closeAllLists(e.target);
    });
}

autocomplete(inp);


function call(comp)
{
    var product = comp.value;
    var url = 'http://bikestore/products/select?keyword=' + product;
    var component = comp;

    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = gestion_requete;
    httpRequest.open('GET', url);
    httpRequest.send();

    function gestion_requete()
    {
        if (httpRequest.readyState === XMLHttpRequest.DONE)
        {
            if (httpRequest.status === 200)
            {
                var data = httpRequest.responseText;
                data = JSON.parse(data);
                data.sort(function (key1) { return key1.name; });
                products = data;
                doAutocomplete(component);
            }
            else
            {
                alert('problème de requête.');
            }
        }
    }
}



