function traiterRetourajax(data) {
    var listelivreJson = JSON.parse(data);
    for (var i = 0; i < listelivreJson.length; i++) {

        var livre = listelivreJson[i];
        var ligneHtml = creerlignelivre(livre);
        ajouterLigneHtml(ligneHtml);
    }
}


function creerlignelivre(livreJson) {
    var lignelivre = "<li>";
    lignelivre += livreJson.serie;
    lignelivre += "</br>";
    lignelivre += livreJson.titre;
    lignelivre += "</br>";
    lignelivre += livreJson.tome;
    lignelivre += "</br>";
    lignelivre += livreJson.auteur;
    lignelivre += "<br>";
    lignelivre += "<input type='button' value='supprimer' onclick='supprimer ("+livreJson.id+")'/>";
    lignelivre += "<input type='button' value='modifier' onclick='modifier'/>";
    lignelivre += "</li>";
    lignelivre += "<br>";
    return lignelivre;
}

function ajouterLigneHtml(ligneHtml) {
    $("#liste").append(ligneHtml);
}

function afficherListeAjax() {
    $.ajax({
        url: "core/api/listelivre.php",
        success: traiterRetourajax
    });
}


$(document).ready(afficherListeAjax);