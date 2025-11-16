<?php include 'header.php'; ?>
        <!-- Section Introduction -->
        <section id="intro" class="container my-5">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <p class="lead">Aujourd'hui en reconversion professionnelle, je me forme au métier de développeur web et web mobile 
                        après avoir exercé pendant plusieurs années comme cariste. Suite à des problèmes de santé, j'ai saisi 
                        l'opportunité de me réorienter vers ce domaine qui m'a toujours passionné.</p>

                    <p>Actuellement en formation de Développeur Web et Web Mobile, je consolide mes compétences en HTML/CSS, 
                    JavaScript, TypeScript, ainsi que les frameworks et bibliothèques React, Vue.js, Node.js, Bootstrap et 
                    Symfony. Je maîtrise également PHP, l'utilisation d'API REST et la gestion de bases de données MySQL. 
                    Mon parcours autodidacte et ma formation me permettent aujourd'hui de créer des applications web modernes 
                    et responsive, tout en développant une solide compréhension des fondamentaux du développement full-stack. 
                    Je souhaite particulièrement approfondir mes connaissances en Angular et Python pour élargir davantage 
                    mon expertise technique.</p>

                    <p>Je suis à la recherche d'un stage de 10 semaines à partir de fin février 2026, où je pourrai mettre 
                    en pratique mes compétences techniques tout en continuant à apprendre au sein d'une équipe. Mon 
                    expérience professionnelle m'a apporté rigueur, autonomie et une forte capacité d'adaptation, des 
                    qualités que je souhaite mettre au service de mon nouveau projet professionnel.
                    </p>
                </div>
            </div>
        </section>

        <!-- Titre section -->
        <section id="middle" class="container my-5">
            <div class="row justify-content-center align-items-stretch">
        <!-- Titre en haut sur mobile -->
                <div class="col-12 d-lg-none text-center mb-4">
                    <h2 class="display-5" style="color:#1E90FF">Faisons Connaissance</h2>
                </div>

        <!-- Colonne gauche -->
                <div class="col-12 col-lg-4 d-flex flex-column align-items-center gap-3 mb-3 mb-lg-0">
                    <!-- Objectifs -->
                    <div id="objectifs" class="card card-icon-only text-center w-100" style="max-width:516px;">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Mes Objectifs</h3>
                            <img class="rotatey-loop" 
                            width="94" height="94" 
                            src="https://img.icons8.com/3d-fluency/94/purposeful-man.png" alt="purposeful-man" data-target="#modalObjectifs"/>
                            <p class="card-text d-lg-none mt-2">Contenu à venir</p>
                        </div>
                    </div>
            <!-- Valeurs -->
                    <div id="valeurs" class="card card-icon-only text-center w-100 order-1 order-lg-4" style="max-width:516px;">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Mes Valeurs</h3>
                            <img class="rotatey-loop" width="94" height="94" 
                            src="https://img.icons8.com/3d-fluency/94/morale.png" alt="morale" data-target="#modalValeurs"/>
                            <p class="card-text d-lg-none mt-2">Contenu à venir</p>
                        </div>
                    </div>
            
                </div>

        <!-- Colonne centrale avec le titre (uniquement sur desktop) -->
                <div class="col-12 col-lg-4 d-none d-lg-flex justify-content-center align-items-center">
                    <h2 class="display-5 text-center" style="color:#1E90FF">Faisons Connaissance</h2>
                </div>

        <!-- Colonne droite -->
                <div class="col-12 col-lg-4 d-flex flex-column align-items-center gap-3">
                    <!-- Projets -->
                    <div id="projets" class="card card-icon-only text-center w-100" style="max-width:516px;">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Mes Projets</h3>
                            <img class="rotatey-loop" width="94" height="94" src="https://img.icons8.com/3d-fluency/94/hard-working.png" 
                            alt="hard-working" data-target="#modalProjets"/>
                            <p class="card-text d-lg-none mt-2">Contenu à venir</p>
                        </div>
                    </div>
                    <!-- CV -->
                    <div id="cv" class="card card-icon-only text-center w-100 order-2 order-lg-2" style="max-width:516px;">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Mon CV</h3>
                            <img class="rotatey-loop" width="94" height="94" src="https://img.icons8.com/3d-fluency/94/resume.png" 
                            alt="resume" data-target="#modalCv"/>
                            <a href="#" class="btn btn-primary mt-3 d-lg-none">Télécharger mon CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="end" class="container-fluid py-5">
            <div class="row justify-content-center">
                <div id="contact" class="col-12 col-md-8 col-lg-6 text-center">
                    <h3>Contact</h3>
                    <img class="rotatey-loop" 
                    width="94" height="94" 
                    src="https://img.icons8.com/3d-fluency/94/post-box-1.png" 
                    alt="post-box-1"
                    data-bs-toggle="modal" 
                    data-bs-target="#modalContact"
                    style="cursor: pointer;"/>
                <p>Contactez-moi</p>
            </div>
        </footer>
    </div>        
   <!--section modal-->
    <?php include 'modalesPage1.php'; ?>
   <!-- Contact --> 
    <?php include 'contact.php'; ?>
    <div id="page2" class="hidden">
        <header class="container-fluid p-0">
            <div class="d-flex flex-wrap align-items-center justify-content-between px-3 py-2">
                <div class="order-1">
                    <button id="btnVersHistoire" type="button" class="btn-neon badge rounded-pill bg-secondary text-dark px-3 py-2">Mon histoire</button>
                </div>

                <!-- Nom -->
                <div id="name" class="order-2 flex-grow-1 text-center">
                    <h1 class="m-0 text-break">
                        <span class="d-block d-sm-inline">CHABRIER</span>
                        <span class="d-block d-sm-inline">Emmanuel</span>
                    </h1>
                </div>

                <!-- Réseaux sociaux -->
                <div class="order-3">
                    <nav class="navbar navbar-expand-sm">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#socialCollapse" aria-controls="socialCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="socialCollapse">
                            <div class="d-flex gap-2">
                                <!-- Indeed -->
                                <a href="https://profile.indeed.com/p/emmanuelc-yxukpo8"
                                    class="btn btn-info d-flex justify-content-center align-items-center"
                                    style="width:58px; height:46px;" target="_blank" rel="noopener noreferrer">
                                    <img src="https://www.bing.com//th?id=OSK.2niXS2HsDTwDq6P2Jv49AZWzYWuQR9Rr4WfAVtvGL_U&w=80&h=80&qlt=90&c=6&rs=1&cdv=1&pid=RS"
                                        style="width:32px; height:32px;" alt="Indeed">
                                </a>
                                <!-- LinkedIn -->
                                <a href="https://fr.linkedin.com/in/emmanuel-chabrier-160b68197?trk=people-guest_people_search-card"
                                    class="btn btn-info d-flex justify-content-center align-items-center"
                                    style="width:58px; height:46px;" target="_blank" rel="noopener noreferrer">
                                    <img src="https://thvnext.bing.com/th/id/ODF.F8hkx5f_DpSQJ5Rg49E4Pg?w=32&h=32&qlt=90&pcl=fffffc&o=6&cb=ucfimgc1&pid=1.2"
                                        style="width:32px; height:32px;" alt="LinkedIn">
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Titre section -->
        <section id="middle" class="container my-5 b">
            <div class="row justify-content-center align-items-stretch">
                <!-- Titre en haut sur mobile -->
                <div class="col-12 d-lg-none text-center mb-4">
                    <h2 class="display-5" style="color:#1E90FF">Les avantages d'avoir un stagiaire</h2>
                </div>

                <!-- Colonne gauche -->
                <div class="col-12 col-lg-4 d-flex flex-column align-items-center gap-3 mb-3 mb-lg-0">
                    <!-- Un regard neuf -->
                    <div id="regard" class="card card-icon-only text-center w-100" style="max-width:516px;" 
                        data-bs-toggle="modal" data-bs-target="#modalRegard">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Un regard neuf</h3>
                            <img class="rotatey-loop" width="94" height="94" 
                                src="https://img.icons8.com/3d-fluency/94/refresh.png" alt="refresh"/>
                            <p class="card-text d-lg-none mt-2">Contenu à venir</p>
                        </div>
                    </div>

                    <!-- Marque employeur -->
                    <div id="Marque" class="card card-icon-only text-center w-100" style="max-width:516px;" 
                        data-bs-toggle="modal" data-bs-target="#modalMarque">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Marque Employeur</h3>
                            <img class="rotatey-loop" width="94" height="94" 
                                src="https://img.icons8.com/3d-fluency/94/group-task.png" alt="group-task"/>
                            <p class="card-text d-lg-none mt-2">Contenu à venir</p>
                        </div>
                    </div>
                </div>

                <!-- Colonne centrale avec le titre (uniquement sur desktop) -->
                <div class="col-12 col-lg-4 d-none d-lg-flex justify-content-center align-items-center">
                    <h2 class="display-5 text-center" style="color:#1E90FF">Les avantages d'avoir un stagiaire</h2>
                </div>

                <!-- Colonne droite -->
                <div class="col-12 col-lg-4 d-flex flex-column align-items-center gap-3">
                    <!-- Transmission -->
                    <div id="projets" class="card card-icon-only text-center w-100" style="max-width:516px;" 
                        data-bs-toggle="modal" data-bs-target="#modalTrans">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Transmission</h3>
                            <img class="rotatey-loop" width="94" height="94" 
                                src="https://img.icons8.com/3d-fluency/94/classroom.png" alt="classroom"/>
                            <p class="card-text d-lg-none mt-2">Contenu à venir</p>
                        </div>
                    </div>

                    <!-- Coût maîtrisé -->
                    <div id="cv" class="card card-icon-only text-center w-100" style="max-width:516px;" 
                        data-bs-toggle="modal" data-bs-target="#modalCout">
                        <div class="card-body py-4">
                            <h3 class="card-title d-lg-none">Coût maîtrisé</h3>
                            <img class="rotatey-loop" width="94" height="94" 
                                src="https://img.icons8.com/3d-fluency/94/card-wallet.png" alt="card-wallet"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Section Contact -->
        <footer id="end" class="container-fluid py-5">
            <div class="row justify-content-center">
                <div id="contact" class="col-12 col-md-8 col-lg-6 text-center">
                    <h3>Contact</h3>
                    <img class="rotatey-loop" 
                        width="94" height="94" 
                        src="https://img.icons8.com/3d-fluency/94/post-box-1.png" 
                        alt="post-box-1"
                        data-bs-toggle="modal" 
                        data-bs-target="#modalContact"
                        style="cursor: pointer;"/>
                    <p>Contactez-moi</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Modale pour la page 2 -->
   <?php include 'modalesPage2.php'; ?>
<?php include 'footer.php'; ?>