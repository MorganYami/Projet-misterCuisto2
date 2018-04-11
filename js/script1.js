// Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok

var check = {}; // On met toutes nos fonctions dans un objet littéral

check['lastName'] = function(id) {

    var name = document.getElementById(id);

    if (name.value.length >= 2) {
        name.className = 'correct';
        return true;
    } else {
        name.className = 'incorrect';
        return false;
    }

};
check['firstName'] = check['lastName']; // La fonction pour le prénom est la même que celle du nom

// Contrôle du courriel en fin de saisie
document.getElementById("courriel").addEventListener("blur", function (e) {
    // Correspond à une chaîne de la forme xxx@yyy.zzz
    var regexCourriel = /.+@.+\..+/;
    var validiteCourriel = "";
    var name = document.getElementById(id);
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse invalide";
        name.className = 'incorrect';
    }
    
});

// Mise en place des événements

(function() { // Utilisation d'une IIFE pour éviter les variables globales.

    var myForm = document.getElementById('myForm'),
        inputs = document.querySelectorAll('input[type=text], input[type=password]'),
        inputsLength = inputs.length;

    for (var i = 0; i < inputsLength; i++) {
        inputs[i].addEventListener('keyup', function(e) {
            check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
        });
    }

    

    myForm.addEventListener('reset', function() {

        for (var i = 0; i < inputsLength; i++) {
            inputs[i].className = '';
        }


    });

})();