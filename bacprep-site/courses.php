<?php
session_start();
include 'config/database.php';
$stmt = $conn->prepare("SELECT * FROM users where email=?");
$stmt->execute(array($_SESSION["mail"]));
$user = $stmt->fetch();
$_SESSION["user_id"]=  $user["id"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Bacprep - Plateforme Éducative</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            min-height: 100vh;
            color: #333;
            padding: 0;
            margin: 0;
        }
        
        /* */
        .main-content {
            margin-top: 60px;
            padding: 2rem;
        }
        
        /* */
        .contact-form {
            background-color: white;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 3rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .contact-form h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .select {
            display: flex;
            flex-direction: column;
        }
        
        .select label {
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .select select,
        .select input,
        .select textarea {
            padding: 12px 15px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .select select:focus,
        .select input:focus,
        .select textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        
        .select textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background-color: #3498db;
            color: white;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Contact */
        #contact .contact-form {
            margin-top: 2rem;
        }
    </style>
</head>
<body>

<?php include('includes/header.php')?>
    <!-- Main Content -->

    <main class="main-content">
        <!-- Search Form -->
        <section id="cours" class="contact-form">
            <h2><i class='bx bx-search'></i> Trouver vos cours</h2>
            <form action="resultats.php" method="GET">
                <div class="row">
                    <div class="select">
                        <label for="niveau"><i class='bx bx-book'></i> Niveau :</label>
                        <select id="niveau" name="niveau" required onchange="update_Filiere()">
                            <option value="">Sélectionnez un niveau</option>
                            <option value="1bac">1ère année Bac</option>
                            <option value="2bac">2ème année Bac</option>
                        </select>
                    </div>
                    <div class="select">
                        <label for="filiere"><i class='bx bx-target-lock'></i> Filière :</label>
                        <select id="filiere" name="filiere" required onchange="update_Matiere()">
                            <option value="">Sélectionnez d'abord un niveau</option>
                        </select>
                    </div>
                    <div class="select">
                        <label for="matiere"><i class='bx bx-bookmark'></i> Matière :</label>
                        <select id="matiere" name="matiere" required>
                            <option value="">Sélectionnez d'abord une filière</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class='bx bx-search'></i> Rechercher</button>
            </form>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact-form">
            <h2><i class='bx bx-envelope'></i> Contactez-nous</h2>
            <form class="row">
                <div class="select">
                    <label for="name"><i class='bx bx-user'></i> Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom" required>
                </div>
                
                <div class="select">
                    <label for="email"><i class='bx bx-envelope'></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>
                </div>
                
                <div class="select" style="grid-column: 1 / -1;">
                    <label for="message"><i class='bx bx-message-detail'></i> Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Votre message..." required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" style="grid-column: 1 / -1;">
                    <i class='bx bx-send'></i> Envoyer
                </button>
            </form>
        </section>
    </main>

    <?php include("includes/footer.php") ?>


    <script>
         const coursesData = {
            "1bac": {
                "Sciences Expérimentales": ["Arabe" , "Français" , , "Histoire-Géographie" , "Education-Islamique"],
                // , "Éducation Islamique", "Histoire-Géographie"
            },
            "2bac": {
                "Sciences Physiques": ["Mathématiques", "Physique-Chimie", "SVT" , "Philosophie", "Anglais"],
                
                "Sciences de la Vie et de la Terre": ["Mathématiques", "Physique-Chimie", "SVT" , "Philosophie", "Anglais"]
            }
        };
        // "Sciences Mathématiques": ["Mathématiques", "Physique-Chimie", "SVT", "Anglais", "Philosophie"],
          function update_Filiere() {
             const niveau = document.getElementById('niveau').value;
             const filiereSelect = document.getElementById('filiere');
             const matiereSelect = document.getElementById('matiere');
            

            filiereSelect.innerHTML = '<option value="">Sélectionnez une filière</option>';
            matiereSelect.innerHTML = '<option value="">Sélectionnez d\'abord une filière</option>';
            if (niveau && coursesData[niveau]) {
                 const filieres = Object.keys(coursesData[niveau]);
                filieres.forEach(filiere => {
                     const option = document.createElement('option');
                    option.value = filiere;
                    option.textContent = filiere;
                    filiereSelect.appendChild(option);
                });
            }
        }

        function update_Matiere() {
             const niveau = document.getElementById('niveau').value;
             const filiere = document.getElementById('filiere').value;
             const matiereSelect = document.getElementById('matiere');
            matiereSelect.innerHTML = '<option value="">Sélectionnez une matière</option>';
            
            if (niveau && filiere && coursesData[niveau] && coursesData[niveau][filiere]) {
                 const matieres = coursesData[niveau][filiere];
                matieres.forEach(matiere => {
                      const option = document.createElement('option');
                    option.value = matiere.toLowerCase().replace(' ', '-');
                    option.textContent = matiere;
                    matiereSelect.appendChild(option);
                });
            }
        }
    </script>
</body>
</html>