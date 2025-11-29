// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    console.log('🟢 Script form-contact chargé');
    
    const contactForm = document.getElementById('contactForm');
    
    if (!contactForm) {
        console.error('🔴 Formulaire contactForm introuvable !');
        return;
    }
    
    console.log('🟢 Formulaire trouvé');
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        console.log('🟢 Formulaire soumis');
        
        const form = this;
        const submitBtn = document.getElementById('submitBtn');
        const messageDiv = document.getElementById('contactMessage');
        
        // Désactiver le bouton
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Envoi en cours...';
        
        // Récupération des données
        const formData = new FormData(form);
        
        console.log('🟢 Données du formulaire:', {
            nom: formData.get('nom'),
            prenom: formData.get('prenom'),
            email: formData.get('email'),
            message: formData.get('message')
        });
        
        // Envoi AJAX
        fetch('traitement_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            console.log('🟢 Status:', response.status);
            console.log('🟢 Content-Type:', response.headers.get('Content-Type'));
            return response.text();
        })
        .then(text => {
            console.log('🟢 Réponse brute:', text);
            const data = JSON.parse(text);
            console.log('🟢 JSON parsé:', data);
            
            messageDiv.style.display = 'block';
            
            if (data.success) {
                messageDiv.className = 'alert alert-success w-100 mx-5';
                messageDiv.innerHTML = '<i class="bi bi-check-circle me-2"></i>' + data.message;
                form.reset();
                
                setTimeout(() => {
                    messageDiv.style.display = 'none';
                    // Fermer la modale
                    const modal = bootstrap.Modal.getInstance(document.getElementById('modalContact'));
                    if (modal) modal.hide();
                }, 3000);
            } else {
                messageDiv.className = 'alert alert-danger w-100 mx-5';
                messageDiv.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i>' + data.message;
            }
            
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Envoyer';
            messageDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        })
        .catch(error => {
            console.error('🔴 Erreur:', error);
            messageDiv.style.display = 'block';
            messageDiv.className = 'alert alert-danger w-100 mx-5';
            messageDiv.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i>Erreur de connexion.';
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Envoyer';
        });
    });
    
    // Réinitialiser à la fermeture
    const modal = document.getElementById('modalContact');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function() {
            document.getElementById('contactMessage').style.display = 'none';
            document.getElementById('contactForm').reset();
        });
    }
});