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

// Mettre à jour l'heure toutes les secondes
setInterval(afficherHeure, 1000);

// Appeler la fonction initiale pour afficher l'heure immédiatement
afficherHeure();
