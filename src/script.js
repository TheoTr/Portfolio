function afficherHeure() {
    const divHeure = document.getElementById('heure');
    const date = new Date();
    const heure = date.getHours();
    const minutes = date.getMinutes();
    const secondes = date.getSeconds();

    const heureFormat = heure < 10 ? '0' + heure : heure;
    const minutesFormat = minutes < 10 ? '0' + minutes : minutes;
    const secondesFormat = secondes < 10 ? '0' + secondes : secondes;

    const heureActuelle = heureFormat + ':' + minutesFormat + ':' + secondesFormat;
    divHeure.textContent = heureActuelle;

}
function afficherDate() {
    const divDate = document.getElementById('date');
    const date = new Date();
    const jour = date.getDate();
    const mois = date.getMonth() + 1;
    const annee = date.getFullYear();

    const jourFormat = jour < 10 ? '0' + jour : jour;
    const moisFormat = mois < 10 ? '0' + mois : mois;

    const dateActuelle = jourFormat + '/' + moisFormat + '/' + annee;
    divDate.textContent = dateActuelle;
}


// Mettre à jour l'heure toutes les secondes
setInterval(afficherHeure, 1000);

// Appeler la fonction initiale pour afficher l'heure immédiatement
afficherHeure();
afficherDate();

