<?php
session_start();
header('Content-Type: application/json');

//  si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    echo json_encode(array('success' => false, 'message' => 'Utilisateur non connecté'));
    exit;
}

$host = 'localhost';
$db = 'mon_site';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupérer les données JSON
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input || !isset($input['cours_id']) || !isset($input['action'])) {
        echo json_encode(array('success' => false, 'message' => 'Données manquantes'));
        exit;
    }
    
    $user_id = $_SESSION['user_id'];
    $cours_id = (int)$input['cours_id'];
    $action = $input['action'];
    
    if ($action === 'add') {
        // le favori n'existe pas déjà
        $check_stmt = $conn->prepare("SELECT id FROM favorites WHERE user_id = ? AND cours_id = ?");
        $check_stmt->execute(array($user_id, $cours_id));
        
        if ($check_stmt->fetch()) {
            echo json_encode(array('success' => false, 'message' => 'Cours déjà dans les favoris'));
            exit;
        }
        
        // Ajouter aux favorite
        $stmt = $conn->prepare("INSERT INTO favorites (user_id, cours_id, created_at) VALUES (?, ?, NOW())");
        $stmt->execute(array($user_id, $cours_id));
        
        echo json_encode(array('success' => true, 'message' => 'Cours ajouté aux favoris'));
        
    } elseif ($action === 'remove') {
        // Supprimer des favorite
        $stmt = $conn->prepare("DELETE FROM favorites WHERE user_id = ? AND cours_id = ?");
        $stmt->execute(array($user_id, $cours_id));
        
        echo json_encode(array('success' => true, 'message' => 'Cours retiré des favoris'));
        
    } else {
        echo json_encode(array('success' => false, 'message' => 'Action non valide'));
    }
    
} catch(PDOException $e) {
    echo json_encode(array('success' => false, 'message' => 'Erreur de base de données: ' . $e->getMessage()));
}
?>