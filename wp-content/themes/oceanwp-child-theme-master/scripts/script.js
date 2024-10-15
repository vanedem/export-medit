// Code pour fermer la popup
document.addEventListener('DOMContentLoaded', function() {
    // Ouvrir la pop-up
    document.querySelector('.contact-btn').addEventListener('click', function() {
        document.querySelector('.popup-overlay').classList.remove('hidden');
    });

    // Fermer la pop-up en cliquant sur le bouton de fermeture
    document.querySelector('.popup-close').addEventListener('click', function() {
        document.querySelector('.popup-overlay').classList.add('hidden');
    });

    // Fermer la pop-up en cliquant en dehors du contenu de la pop-up
    document.querySelector('.popup-overlay').addEventListener('click', function(event) {
        if (event.target === document.querySelector('.popup-overlay')) {
            document.querySelector('.popup-overlay').classList.add('hidden');
        }
    });
});