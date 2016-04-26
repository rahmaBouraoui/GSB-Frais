function confirmDeco() {
    if(confirm("Etes vous sur de vouloir vous deconnecter ?")) {
        window.location.replace("Connexion") ;
    }
}

function supprimerHorsForfait(idHorsForfait, libelle, montant, date, idFiche) {
    if(confirm("Etes vous sur de vouloir supprimer l'hors forfait "+ libelle +" de "+ montant +" euros du " + date + " ?")) {
        window.location.replace("supprimerHorsForfait"+idHorsForfait+"-"+idFiche) ;
    }
}

function validerFiche(idFiche) {
    var idVisiteur = document.getElementById('form_nomVisiteur').value ;
    var mois = document.getElementById('form_mois').value ;
    
    if(confirm("Valider la fiche ?")) {
        window.location.replace("validerFiche"+idFiche+"-"+idVisiteur+"-"+mois) ;
    }
}

function changerEtatFraisForfait(idFiche) {
    select = document.getElementById('etatFraisForfait') ;
    idEtat = select.value ;
    
    window.location.replace("validerFicheFrais") ;
    //window.location.replace("changerEtatFraisForfait"+idFiche+"-"+idEtat) ;
}

function majHorsForfait(idLigne) {
    var idVisiteur = document.getElementById('form_nomVisiteur').value ;
    var mois = document.getElementById('form_mois').value ;
    var libelle = document.getElementById("libelle"+idLigne).value ;
    var montant = document.getElementById("montant"+idLigne).value ;
    var etat = document.getElementById("etat"+idLigne).value ;
    
    window.location.replace("modifierHorsForfait"+idLigne+"+-"+libelle+"+-"+montant+"+-"+etat+"+-"+idVisiteur+"+-"+mois) ;
}

function comptableSuppHorsForfait(idLigneFraisHorsForfait, libelle, montant, date, idFiche) {
    var idVisiteur = document.getElementById('form_nomVisiteur').value ;
    var mois = document.getElementById('form_mois').value ;
    
    if(confirm("Etes vous sur de vouloir Refuser l'hors forfait "+ libelle +" de "+ montant +" euros du " + date + " ?")) {
        window.location.replace("comptableSuppHorsForfait"+idLigneFraisHorsForfait+"-"+idVisiteur+"-"+mois+"-"+idFiche) ;
    }
}