<?php
session_start(); // Ajouter session pour l'utilisateur

$host = 'localhost';
 $db = 'mon_site';
$user = 'root';
$pass = '';
//connexion database
$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// GET les information -> URL
$niveau = isset($_GET['niveau']) ? strtoupper($_GET['niveau']) : '';
$filiere = isset($_GET['filiere']) ? $_GET['filiere'] : '';
$matiere = isset($_GET['matiere']) ? $_GET['matiere'] : '';
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

if ($niveau && $filiere && $matiere) {
    if ($search) {
        $stmt = $conn->prepare("SELECT * FROM cours WHERE niveau =  ?  AND filiere = ?  AND matiere = ?  AND titre LIKE ?");
        $stmt->execute([$niveau, $filiere, $matiere, '%'.$search.'%']);
    } else {
         $stmt = $conn->prepare("SELECT * FROM cours WHERE niveau = ? AND filiere = ? AND matiere = ? ");
        $stmt->execute([$niveau, $filiere, $matiere]);
    }
     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $results = [];
}

// Récupérer les favoris de l'utilisateur si connecté
$user_favorites = [];
if ($user_id) {
     $fav_stmt = $conn->prepare("SELECT cours_id FROM favorites WHERE user_id = ?");
    $fav_stmt->execute([$user_id]);
    $user_favorites = $fav_stmt->fetchAll(PDO::FETCH_COLUMN);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats des Cours</title>
    <!-- include header  -->

    <?php include('includes/header.php'); ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            background-color: #f4f6f9;
        }

        .body {
            margin-top: 30px;
            padding: 2rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
            color: #2c3e50;
        }

        .search-container {
            max-width: 600px;
            margin: 0 auto 2rem auto;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 16px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: #3498db;
            box-shadow: 0 2px 10px rgba(52, 152, 219, 0.2);
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 7px 15px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .search-btn:hover {
            background: #2980b9;
        }

        .course {
            background-color: white;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .course:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .course h3 {
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .course a {
            margin-right: 1rem;
            padding: 0.5rem 1rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .course a:hover {
            background-color: #2980b9;
        }

        .btn-fav {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: #bdc3c7;
            transition: color 0.3s ease;
            margin-left: 10px;
        }

        .btn-fav:hover {
            color: #f39c12;
        }

        .btn-fav.favorite {
            color: #f39c12;
        }

        .no-results {
            text-align: center;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            color: #7f8c8d;
        }

        .login-message {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="body">
    <h1>Résultats pour <?= htmlspecialchars($matiere) ?>  - <?= htmlspecialchars($filiere) ?> -  <?= htmlspecialchars($niveau) ?></h1>
    
    <?php if (!$user_id): ?>
         <div class="login-message">
            <p>Connectez-vous pour pouvoir ajouter des cours à vos favoris.</p>
        </div>
    <?php endif; ?>
    
     <!--recherche -->
     <div class="search-container">
         <form method="get" action="">
             <input type="hidden" name="niveau" value="<?= htmlspecialchars($niveau) ?>">
            <input type="hidden" name="filiere" value="<?= htmlspecialchars($filiere) ?>">
            <input type="hidden" name="matiere" value="<?= htmlspecialchars(str_replace(' ', '-', $matiere)) ?>">
            <input type="text" 
                   class="search-input" 
                   name="search" 
                    placeholder="Rechercher un cours par titre..." 
                   value="<?= htmlspecialchars($search) ?>">
            <button type="submit" class="search-btn">Rechercher</button>
        </form>
    </div>

    <!-- affich les resultats de form -->
    <?php if (count($results) > 0): ?>
        <?php foreach ($results as $row): ?>
            <div class="course">
                <h3><?= htmlspecialchars($row['titre']) ?></h3>
                <a href="/bacprep-site/<?= htmlspecialchars($row['pdf_url']) ?>" download><i class='bx bx-download'></i>
  Télécharger</a>
                <a href="<?= htmlspecialchars($row['youtube_url']) ?>" target="_blank"><i class='bx bx-show'></i>
 Regarder</a>
                <?php if ($user_id): ?>
                    <button class="btn-fav <?= in_array($row['id'], $user_favorites) ? 'favorite' : '' ?>" 
                              data-cours-id="<?= $row['id'] ?>" 
                             title="Ajouter aux favoris">
                         <i class='bx bx-star'></i>
                    </button>
                <?php endif; ?>
            </div>
         <?php endforeach; ?>
        <!-- aucun resultat  -->
    <?php else: ?>
        <div class="no-results">
            <p><?= $search ? 'Aucun résultat trouvé pour "'.htmlspecialchars($search).'"' : 'Aucun cours trouvé pour cette matière.' ?></p>
             <?php if ($search): ?>
                <a href="?niveau=<?= htmlspecialchars($niveau) ?>&filiere=<?= htmlspecialchars($filiere) ?>&matiere=<?= htmlspecialchars(str_replace(' ', '-', $matiere)) ?>" class="btn">Afficher tous les cours</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<?php include("includes/footer.php") ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    if (searchInput && !searchInput.value) {
        searchInput.focus();
    }
     
     //  des favorite
    const favButtons = document.querySelectorAll('.btn-fav');
    
     favButtons.forEach(button => {
         button.addEventListener('click', function() {
             const coursId = this.getAttribute('data-cours-id');
            const isFavorite = this.classList.contains('favorite');
            
            // Envoyer requête AJAX
            fetch('toggle_favorite.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    cours_id: coursId,
                    action: isFavorite ? 'remove' : 'add'
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // l'apparence du bouton
                    if (isFavorite) {
                        this.classList.remove('favorite');
                         this.title = 'Ajouter aux favoris';
                     } else {
                        this.classList.add('favorite');
                        this.title = 'Retirer des favoris';
                    }
                } else {
                     alert('Erreur: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                 alert('Une erreur est survenue');
            });
        });
    });
});
</script>

</body>
</html>