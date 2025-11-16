import {openModal} from "./modal.js"
import { speak, stopSpeaking } from './speech.js';
const page1 = document.querySelector('#page1');
const page2 = document.querySelector('#page2');

document.querySelectorAll('img').forEach(img => {
  img.addEventListener('mouseover', () => {
    const text = img.dataset.desc;
    if (text) speak(text);
  });

  img.addEventListener('mouseout', () => {
    stopSpeaking();
  });

  img.addEventListener('click', () => {
    const target = img.dataset.target;
    if (target) openModal(target);
  });
});


document.querySelector('#btnVersAvantages').addEventListener('click', () => {
    page1.classList.add('hidden');
    page2.classList.remove('hidden');
});

document.querySelector('#btnVersHistoire').addEventListener('click', () => {
    page2.classList.add('hidden');
    page1.classList.remove('hidden');
});

// Script pour gérer l'envoi du formulaire en AJAX
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêcher le rechargement de la page
    
    // Récupération des éléments
    const form = this;
    const submitBtn = document.getElementById('submitBtn');
    const messageDiv = document.getElementById('contactMessage');
    
    // Désactiver le bouton pendant l'envoi
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Envoi en cours...';
    
    // Récupération des données du formulaire
    const formData = new FormData(form);
    
    // Envoi des données via AJAX
    fetch('traiter_contact_adapte.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Affichage du message de retour
        messageDiv.style.display = 'block';
        
        if (data.success) {
            // Succès
            messageDiv.className = 'alert alert-success';
            messageDiv.innerHTML = '<i class="bi bi-check-circle me-2"></i>' + data.message;
            
            // Réinitialiser le formulaire
            form.reset();
            
            // Masquer le message après 5 secondes
            setTimeout(() => {
                messageDiv.style.display = 'none';
            }, 5000);
        } else {
            // Erreur
            messageDiv.className = 'alert alert-danger';
            messageDiv.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i>' + data.message;
        }
        
        // Réactiver le bouton
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Envoyer';
        
        // Scroll vers le message
        messageDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    })
    .catch(error => {
        // Erreur de connexion
        console.error('Erreur:', error);
        messageDiv.style.display = 'block';
        messageDiv.className = 'alert alert-danger';
        messageDiv.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i>Erreur de connexion. Veuillez réessayer.';
        
        // Réactiver le bouton
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Envoyer';
    });
});

// Réinitialiser le message quand on ferme le modal
document.getElementById('modalContact').addEventListener('hidden.bs.modal', function () {
    document.getElementById('contactMessage').style.display = 'none';
    document.getElementById('contactForm').reset();
});