<?php
// Configuration de la base de données pour WAMP
define('DB_HOST', 'localhost');
define('DB_NAME', 'mon_site');  // ✅ Votre base de données
define('DB_USER', 'root');       // ✅ Utilisateur par défaut WAMP
define('DB_PASS', '');           // ✅ Mot de passe vide par défaut WAMP

// En-têtes pour permettre les requêtes AJAX
header('Content-Type: application/json');

// Vérifier que la requête est bien en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // Récupération et validation des données
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validation des champs obligatoires
    if (empty($nom) || empty($prenom) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Tous les champs marqués * sont obligatoires'
        ]);
        exit;
    }

    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Adresse email invalide'
        ]);
        exit;
    }

    // Validation de la longueur des champs
    if (strlen($nom) > 100 || strlen($prenom) > 100) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Le nom et le prénom ne doivent pas dépasser 100 caractères'
        ]);
        exit;
    }

    if (strlen($email) > 255) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'L\'email ne doit pas dépasser 255 caractères'
        ]);
        exit;
    }

    if (strlen($message) > 5000) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Le message est trop long'
        ]);
        exit;
    }

    // Préparation de la requête d'insertion (adaptée à votre structure de table)
    // Note: date_envoi sera automatiquement rempli avec CURRENT_TIMESTAMP
    $sql = "INSERT INTO contact (nom, prenom, email, message) 
            VALUES (:nom, :prenom, :email, :message)";
    
    $stmt = $pdo->prepare($sql);
    
    // Exécution de la requête avec les paramètres liés
    $result = $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':message' => $message
    ]);

    if ($result) {
        // Réponse en cas de succès
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.'
        ]);
    } else {
        throw new Exception("Erreur lors de l'insertion");
    }

} catch (PDOException $e) {
    // Erreur de base de données
    error_log("Erreur BDD contact: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer plus tard.'
    ]);
} catch (Exception $e) {
    // Autre erreur
    error_log("Erreur contact: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur inattendue est survenue.'
    ]);
}
?>