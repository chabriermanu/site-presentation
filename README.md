# 💼 Portfolio - Emmanuel CHABRIER

[![Live Demo](https://img.shields.io/badge/demo-online-green.svg)](http://ixnmzfpm.infinityfree.com)
[![GitHub](https://img.shields.io/badge/GitHub-chabriermanu-blue.svg)](https://github.com/chabriermanu)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Emmanuel%20Chabrier-0077B5.svg)](https://linkedin.com/in/emmanuelchabrier-160b68197)

> Portfolio professionnel d'un développeur web en reconversion, présentant mes compétences, projets et parcours.

## 🎯 À propos

Développeur web junior en formation intensive AFPA (8 mois), actuellement à la recherche d'un **stage de 10 semaines du 15 février au 22 avril 2026** dans la région de Montpellier/Béziers.

Fort de 15 ans d'expérience en logistique et 5 ans dans l'armée, je combine rigueur, autonomie et capacité d'adaptation dans ma nouvelle carrière de développeur web.

## 🚀 Fonctionnalités

- ✨ **Design responsive** - Compatible mobile, tablette et desktop
- 📄 **Affichage CV interactif** - Visualisation directe du CV en PDF avec téléchargement
- 📧 **Formulaire de contact** - Envoi de messages avec validation et stockage en base de données
- 🎨 **Modales dynamiques** - Présentation de mes objectifs, valeurs et projets
- 🔄 **Navigation fluide** - Transition entre pages sans rechargement
- 💬 **Synthèse vocale** (optionnel) - Description audio des éléments au survol

## 🛠️ Technologies utilisées

### Frontend
- **HTML5** - Structure sémantique
- **CSS3** - Styling moderne avec animations
- **JavaScript ES6+** - Interactivité et manipulation du DOM
- **Bootstrap 5.3** - Framework CSS responsive

### Backend
- **PHP 8** - Traitement côté serveur
- **MySQL** - Base de données relationnelle

### Outils & DevOps
- **Git & GitHub** - Gestion de versions
- **VS Code** - Environnement de développement
- **WAMP** - Serveur de développement local
- **InfinityFree** - Hébergement web gratuit

## 📂 Structure du projet

```
portfolio/
├── index.php                  # Page principale
├── header.php                 # En-tête avec navigation
├── footer.php                 # Pied de page avec scripts
├── contact.php                # Modale de contact
├── modalesPage1.php           # Modales page 1 (Objectifs, Valeurs, Projets, CV)
├── modalesPage2.php           # Modales page 2 (Avantages stagiaire)
├── traitement_contact.php     # Traitement du formulaire de contact
├── style.css                  # Styles personnalisés
├── js/
│   ├── script.js              # Script principal
│   ├── form-contact.js        # Gestion du formulaire
│   ├── modal.js               # Gestion des modales
│   └── speech.js              # Synthèse vocale
└── assets/
    └── cv/
        └── CV-Emmanuel-Chabrier.pdf  # CV téléchargeable
```

## 🚦 Installation & déploiement local

### Prérequis
- **WAMP** / **XAMPP** / **MAMP** (serveur local)
- **PHP 8.0+**
- **MySQL 5.7+**
- **Git** (optionnel)

### Étapes d'installation

1. **Cloner le repository**
```bash
git clone https://github.com/chabriermanu/mon-portfolio.git
cd mon-portfolio
```

2. **Configurer la base de données**

Créer une base de données MySQL :
```sql
CREATE DATABASE mon_site CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Créer la table `contact` :
```sql
USE mon_site;

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

3. **Configurer les identifiants de base de données**

Éditer `traitement_contact.php` :
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mon_site');
define('DB_USER', 'root');
define('DB_PASS', ''); // Votre mot de passe MySQL
```

4. **Démarrer le serveur local**

- Placez le projet dans `C:\wamp64\www\mon-portfolio\`
- Démarrez WAMP
- Accédez à `http://localhost/mon-portfolio/`

## 🌐 Déploiement en ligne

Le site est actuellement hébergé sur **InfinityFree** :
- **URL** : chabrier.great-site.net
- **Hébergement** : InfinityFree (gratuit)
- **Base de données** : MySQL (sql313.infinityfree.com)

## 📸 Aperçu

### Page d'accueil
Présentation professionnelle avec accès aux différentes sections (Objectifs, Valeurs, Projets, CV)

### Modale CV
Affichage interactif du CV en PDF avec design moderne et boutons de téléchargement

### Formulaire de contact
Système de contact avec validation côté client et serveur, stockage en base de données

## 🔒 Sécurité

- ✅ **Protection CSRF** - Tokens de sécurité pour les formulaires
- ✅ **Validation des données** - Côté client (HTML5) et serveur (PHP)
- ✅ **Requêtes préparées** - PDO avec paramètres liés (prévention injection SQL)
- ✅ **Sanitisation des entrées** - Filtrage des données utilisateur
- ✅ **Headers JSON** - Réponses sécurisées pour les requêtes AJAX

## 📈 Améliorations futures

- [ ] Migration vers un domaine personnalisé (`.fr` ou `.com`)
- [ ] Ajout d'une section blog pour partager mes apprentissages
- [ ] Intégration d'animations plus avancées (AOS, GSAP)
- [ ] Ajout de projets supplémentaires au portfolio
- [ ] Mise en place d'un système de newsletter
- [ ] Optimisation SEO et performances (Lighthouse)
- [ ] Mode sombre / clair

## 📝 Licence

Ce projet est sous licence **MIT** - voir le fichier [LICENSE](LICENSE) pour plus de détails.

## 📞 Contact

**Emmanuel CHABRIER**  
📧 Email : [chabrier.emmanuel@hotmail.fr](mailto:chabrier.emmanuel@hotmail.fr)  
💼 LinkedIn : [linkedin.com/in/emmanuelchabrier-160b68197](https://linkedin.com/in/emmanuelchabrier-160b68197)  
🐙 GitHub : [github.com/chabriermanu](https://github.com/chabriermanu)  
📍 Localisation : Saint-Geniès-de-Fontdit (34), France

---

⭐ **Recherche active d'un stage de 10 semaines** (15/02/2026 - 22/04/2026)  
💻 Développeur Web & Web Mobile - Formation AFPA Saint-Jean-de-Védas

---


*Réalisé avec ❤️ et beaucoup de ☕ - 2025*
