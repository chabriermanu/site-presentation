<!-- Modal Contact -->
<div id="modalContact" class="modal fade" tabindex="-1"> 
    <div class="modal-dialog"> 
        <div class="modal-content d-flex flex-column align-items-center text-center" style="width: 100%; height: 70vh; overflow-y: auto; margin: auto;" id="headerContact"> 
            <div class="w-100 position-relative"> 
                <button data-bs-dismiss="modal" class="modal-close">✌</button> 
                <h3 style="color:#1E90FF">Contact</h3>
            </div>
            <img class="mt-3 mb-3" width="94" height="94" src="https://img.icons8.com/3d-fluency/94/post-box-1.png" alt="post-box-1"/> 
            
            <p class="mt-3 ms-5 me-5">N'hésitez pas à me contacter pour discuter de vos projets ou pour toute question concernant mon profil.</p>
            
            <!-- Zone de message -->
            <div id="contactMessage" class="alert w-100 mx-5" style="display: none;"></div>
            
            <!-- Formulaire --> 
            <div class="w-100 px-5 mt-4"> 
                <form id="contactForm" method="post"> 
                    <div class="row mb-3"> 
                        <div class="col-md-6 mb-3 mb-md-0"> 
                            <div class="input-group">
                                <span class="input-group-text">👤</span>
                                <input type="text" name="nom" class="form-control" placeholder="Nom *" required> 
                            </div>
                        </div> 
                        <div class="col-md-6"> 
                            <div class="input-group">
                                <span class="input-group-text">👤</span>
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom *" required> 
                            </div>
                        </div> 
                    </div> 
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">
                                <img width="20" height="20" src="https://img.icons8.com/3d-fluency/20/email.png" alt="email"/>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Email *" required> 
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group align-items-start">
                            <span class="input-group-text">
                                <img width="20" height="20" src="https://img.icons8.com/3d-fluency/20/speech-bubble.png" alt="message"/>
                            </span>
                            <textarea name="message" class="form-control" placeholder="Votre message *" rows="5" required></textarea> 
                        </div>
                    </div> 
                    <div class="text-center mb-4"> 
                        <button type="submit" id="submitBtn" class="btn btn-primary px-5 py-2">Envoyer</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div>
</div>