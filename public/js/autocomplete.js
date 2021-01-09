function autocomplete(inp, arr)
{
    /*la fonction d'autocomplétion prend deux arguments, l'élément de champ de texte et un tableau de valeurs autocomplétées possibles :*/
    var currentFocus;
    /*exécuter une fonction lorsque quelqu'un écrit dans le champ de texte :*/
    inp.addEventListener("input", function (e)
    {
        var a, b, i, val = this.value;
        /*ferme toute liste déjà ouverte de valeurs complétées automatiquement*/
        closeAllLists();
        if (!val) { return false; }
        currentFocus = -1;
        /*créer un élément DIV qui contiendra les éléments (valeurs) :*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*ajouter l'élément DIV comme un enfant du conteneur d'autocomplétion :*/
        this.parentNode.appendChild(a);
        /*Pour chaque élément du tableau...*/
        for (i = 0; i < arr.length; i++)
        {
            /*cVérifiez si l'élément commence par les mêmes lettres que la valeur de la zone de texte :*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase())
            {
                /*créer un élément DIV pour chaque élément correspondant :*/
                b = document.createElement("DIV");
                /*mettez les lettres correspondantes en gras :*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insérer un champ de saisie qui contiendra la valeur de l'élément courant du tableau :*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*exécuter une fonction lorsque quelqu'un clique sur la valeur de l'objet (élément DIV) :*/
                b.addEventListener("click", function (e)
                {
                    /*insérer la valeur pour le champ de texte à remplir automatiquement :*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*fermer la liste des valeurs complétées automatiquement,
                    (ou toute autre liste ouverte de valeurs complétées automatiquement :*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
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
    /*exécuter une fonction lorsque quelqu'un clique dans le document :*/
    document.addEventListener("click", function (e)
    {
        closeAllLists(e.target);
    });
}

/*Un tableau contenant tous les noms de pays du monde :*/
var countries = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central Arfrican Republic", "Chad", "Chile", "China", "Colombia", "Congo", "Cook Islands", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauro", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "St Kitts & Nevis", "St Lucia", "St Vincent", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor L'Este", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen", "Zambia", "Zimbabwe"];

/*lancer la fonction d'auto-complétion sur l'élément "myInput", et transmettre le tableau des pays comme valeurs d'auto-complétion possibles :*/
/*autocomplete(document.getElementById("myInput"), countries);*/


/*
var nameProduct = [];
// retrieve JSon from external url and load the data inside an array :
$.getJSON( "/products/select", function( data ) {
var items = [];
$.each( data, function( key, val ) {
nameProduct.push(val.description);
});
});
autocomplete(document.getElementById("myInput"), nameProduct);
*/


var nameProduct = {
    url: '/products/select',
    getValue: "name",
    list: {
        match: {
            enabled: true
        }
    }
};
console.log(nameProduct);
$("#myInput").easyAutocomplete(nameProduct);


/*ressource
http://easyautocomplete.com/guide#sec-categories

https://gist.github.com/imranismail/10200241

*/
