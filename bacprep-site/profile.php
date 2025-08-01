<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$host = 'localhost';
$db = 'mon_site';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $user_id = $_SESSION['user_id'];
    $message = '';
    $error = '';
    
    //  formulaire de modification du profil
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['update_profile'])) {
            $nom = trim($_POST['nom']);
            $email = trim($_POST['email']);
            
            if (empty($nom) || empty($email)) {
                $error = 'Le nom et l\'email sont obligatoires';
            } else {
                //  si l'email existe déjà
                $check_email = $conn->prepare("SELECT id FROM users WHERE email = ? AnD id != ?");
                $check_email->execute(array($email, $user_id));
                
                if ($check_email->fetch()) {
                    $error = 'Cet email est déjà utilisé par un autre utilisateur';
                } else {
                    $update_stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
                    if ($update_stmt->execute(array($nom, $email, $user_id))) {
                        $message = 'Profil mis à jour avec succès!';
                    } else {
                        $error = 'Erreur lors de la mise à jour du profil';
                    }
                }
            }
        }
        
        // changement de mot de passe
        if (isset($_POST['change_password'])) {
            $current_password = $_POST['current_password'];
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];
            
            if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
                $error = 'Tous les champs de mot de passe sont obligatoires';
            } else if ($new_password !== $confirm_password) {
                $error = 'Les nouveaux mots de passe ne correspondent pas';
            } else if (strlen($new_password) < 6) {
                $error = 'Le nouveau mot de passe doit contenir au moins 6 caractères';
            } else {
                // Vérifier l'ancien mot de passe
                $check_password = $conn->prepare("SELECT password FROM users WHERE id = ?");
                $check_password->execute(array($user_id));
                $user_data = $check_password->fetch(PDO::FETCH_ASSOC);
                
                if (password_verify($current_password, $user_data['password'])) {
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $update_password = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
                    
                    if ($update_password->execute(array($hashed_password, $user_id))) {
                        $message = 'Mot de passe mis à jour avec succès!';
                    } else {
                        $error = 'Erreur lors de la mise à jour du mot de passe';
                    }
                } else {
                    $error = 'Le mot de passe actuel est incorrect';
                }
            }
        }
    }
    
    // Récupérer les informations de l'utilisateur
    $user_stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $user_stmt->execute(array($user_id));
    $user = $user_stmt->fetch(PDO::FETCH_ASSOC);
    
    // Récupérer les cours favoris
    $favorites_stmt = $conn->prepare("
        SELECT c.*, f.created_at as date_ajout 
        FROM cours c 
        INNER JOIN favorites f ON c.id = f.cours_id 
        WHERE f.user_id = ? 
        ORDER BY f.created_at DESC
    ");
    $favorites_stmt->execute(array($user_id));
    $favorites = $favorites_stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Profil - Favoris</title>
    <?php include('includes/header.php'); ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            background-color: #f4f6f9;
        }

        .container {
            max-width: 1200px;
            margin: 58px auto;
            padding: 2rem;
        }

        .profile-header {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            text-align: center;
        }

        .profile-header h1 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .favorites-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .section-title {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        .section-title i {
            color: #f39c12;
            margin-right: 10px;
            font-size: 24px;
            
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .course-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            border-left: 4px solid #f39c12;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .course-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .course-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .course-meta {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .course-meta span {
            background: #ecf0f1;
            padding: 2px 8px;
            border-radius: 12px;
            margin-right: 5px;
        }

        .course-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .btn-download {
            background: #3498db;
            color: white;
        }

        .btn-download:hover {
            background: #2980b9;
        }

        .btn-watch {
            background: #e74c3c;
            color: white;
        }

        .btn-watch:hover {
            background: #c0392b;
        }

        .btn-remove {
            background: #95a5a6;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-remove:hover {
            background: #7f8c8d;
        }

        .no-favorites {
            text-align: center;
            padding: 3rem;
            color: #7f8c8d;
            
        }

        .no-favorites i {
            font-size: 4rem;
            margin-bottom: 1rem;
            display: block;
        }

        .date-added {
            font-size: 0.8rem;
            color: #95a5a6;
            margin-top: 0.5rem;
        }

        .profile-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        .btn-submit {
            background: #3498db;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background: #2980b9;
        }

        .btn-danger {
            background: #e74c3c;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .alert {
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert-error {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <?php if ($message): ?>
        <div class="alert alert-success">
            <i class='bx bx-check-circle'></i> <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="alert alert-error">
            <i class='bx bx-error-circle'></i> <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <div class="profile-header">
        <h1>Bonjour, <?= htmlspecialchars(isset($user['username']) ? $user['username'] : 'Utilisateur') ?>!</h1>
        <p>Gérez vos informations personnelles et vos cours favoris</p>
    </div>

    <!--  modification du profil -->
    <div class="profile-form">
        <h2 class="section-title">
            <i class='bx bx-user'></i>
            Informations personnelles
        </h2>
        
        <form method="POST" action="">
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" 
                           value="<?= htmlspecialchars($user['username']) ?>" 
                           required maxlength="100">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                           value="<?= htmlspecialchars($user['email']) ?>" 
                           required maxlength="150">
                </div>
            </div>
            
            <button type="submit" name="update_profile" class="btn-submit">
                <i class='bx bx-save'></i>
                Mettre à jour le profil
            </button>
        </form>
    </div>

    <!-- changement de mot de passe -->
    <div class="profile-form">
        <h2 class="section-title">
            <i class='bx bx-lock'></i>
            Changer le mot de passe
        </h2>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="current_password">Mot de passe actuel</label>
                <input type="password" id="current_password" name="current_password" 
                       required minlength="6">
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="new_password">Nouveau mot de passe</label>
                    <input type="password" id="new_password" name="new_password" 
                           required minlength="6">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmer le nouveau mot de passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" 
                           required minlength="6">
                </div>
            </div>
            
            <button type="submit" name="change_password" class="btn-submit btn-danger">
                <i class='bx bx-key'></i>
                Changer le mot de passe
            </button>
        </form>
    </div>

    <div class="favorites-section">
        <h2 class="section-title">
            <i class='bx bx-star'></i>
            Mes Cours Favoris (<?= count($favorites) ?>)
        </h2>

        <?php if (count($favorites) > 0): ?>
            <div class="course-grid">
                <?php foreach ($favorites as $course): ?>
                    <div class="course-card">
                        <div class="course-title"><?= htmlspecialchars($course['titre']) ?></div>
                        <div class="course-actions">
                            <button class="btn btn-remove" 
                                    onclick="removeFavorite(<?= $course['id'] ?>)" 
                                    title="Retirer des favoris">
                                <i class='bx bx-trash'></i>
                            </button>
                        </div>
                        <div class="date-added">
                            Ajouté le <?= date('d/m/Y à H:i', strtotime($course['date_ajout'])) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-favorites">
                <i class='bx bx-star'></i>
                <h3>Aucun cours favori</h3>
                <p>Commencez à ajouter des cours à vos favoris en cliquant sur l'étoile ⭐</p>
                <a href="courses.php" class="btn btn-download">Parcourir les cours</a>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php include("includes/footer.php") ?>

<script>
function removeFavorite(coursId) {
    if (confirm('Êtes-vous sûr de vouloir retirer ce cours de vos favoris ?')) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'toggle_favorite.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                try {
                    var data = JSON.parse(xhr.responseText);
                    if (data.success) {
                        location.reload(); // Recharger la page 
                    } else {
                        alert('Erreur: ' + data.message);
                    }
                } catch (e) {
                    alert('Une erreur est survenue');
                }
            }
        };
        
        xhr.send(JSON.stringify({
            cours_id: coursId,
            action: 'remove'
        }));
    }
}

// formulaire de mot de passe
document.getElementById('confirm_password').addEventListener('input', function() {
    var newPassword = document.getElementById('new_password').value;
    var confirmPassword = this.value;
    
    if (newPassword !== confirmPassword) {
        this.setCustomValidity('Les mots de passe ne correspondent pas');
    } else {
        this.setCustomValidity('');
    }
});

// Auto-hide des messages
setTimeout(function() {
    var alerts = document.querySelectorAll('.alert');
    for (var i = 0; i < alerts.length; i++) {
        alerts[i].style.transition = 'opacity 0.5s';
        alerts[i].style.opacity = '0';
        setTimeout(function(alert) {
            if (alert.parentNode) {
                alert.parentNode.removeChild(alert);
            }
        }, 500, alerts[i]);
    }
}, 5000);
</script>

</body>
</html>