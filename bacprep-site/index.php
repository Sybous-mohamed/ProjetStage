<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>BacPrep - Plateforme de Préparation</title>
    <link rel="stylesheet" href="./assets/style.css">
    <style>
        .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .password-container input {
            width: 100%;
            padding-right: 45px;
        }
        
        .password-toggle {
            position: absolute;
            right: 12px;
            cursor: pointer;
            color: #7f8c8d;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .password-toggle:hover {
            color: #3498db;
        }
        
        .password-toggle.active {
            color: #3498db;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="logo.jpeg" alt="logo" height="50px" width="120px">
        </div>
        
        <nav class="links">
            <a href="#home"><i class='bx bx-home'></i> Accueil</a>
            <a href="#fonctionalite"><i class='bx bx-star'></i> Fonctionnalités</a>
            <a href="#statique"><i class='bx bx-bar-chart'></i> Statistiques</a>
            <a href="#commentaire"><i class='bx bx-message-dots'></i> Témoignages</a>
            <a href="#contact"><i class='bx bx-envelope'></i> Contact</a>
        </nav>
        
        <div class="cnx-btn">
            <button class="btn btn-secondary" onclick="showLoginModal()">
                <i class='bx bx-log-in'></i>
                Connexion
            </button>
            <button class="btn btn-primary" onclick="inscriptionModal()">
                <i class='bx bx-user-plus'></i>
                Inscription
            </button>
        </div>
    </header>
    <div class="container">
    <!-- accueil -->
    <main class="accueil">
        <!-- Hero Section -->
        <section id="home" class="hero">
            <h1>Bienvenue sur BacPrep</h1>
            <p>Votre plateforme de préparation au baccalauréat avec des ressources pédagogiques de qualité et un accompagnement personnalisé.</p>
            <button class="btn btn-primary" onclick="inscriptionModal()">
                <i class='bx bx-rocket'></i>
                Commencer maintenant
            </button>
        </section>

        <!-- fonctionalite -->
        <section id="fonctionalite" class="fonctionalite">
            <div class="m3lomat">
                <i class='bx bx-book-open feature-icon'></i>
                <h3>Cours Complets</h3>
                <p>Accédez à des cours couvrant l'ensemble du programme officiel pour toutes les matières.</p>
            </div>
            
            <div class="m3lomat">
                <i class='bx bx-video feature-icon'></i>
                <h3>Vidéos Pédagogiques</h3>
                <p>Apprenez avec des vidéos explicatives réalisées par des professeurs expérimentés.</p>
            </div>
            
            <div class="m3lomat">
            <i class='bx bx-file feature-icon'></i>
            <h3>Fiches de Révision</h3>
            <p>Révisez efficacement avec des fiches synthétiques couvrant les points clés de chaque leçon.</p>
            </div>
        </section>

        <!-- statique Section -->
        <section id="statique" class="statique">
            <h2>Nos Résultats</h2>
            <div class="statique-div">
                <div class="statCHild">
                    <i class='bx bx-book' style="font-size: 2rem; color: #3498db; margin-bottom: 0.5rem;"></i>
                    <div class="stat-number">+180</div>
                    <div class="stat-label">Cours disponibles</div>
                </div>
                
                <div class="statCHild">
                    <i class='bx bx-user' style="font-size: 2rem; color: #3498db; margin-bottom: 0.5rem;"></i>
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Étudiants</div>
                </div>
                
                <div class="statCHild">
                    <i class='bx bx-check-circle' style="font-size: 2rem; color: #3498db; margin-bottom: 0.5rem;"></i>
                    <div class="stat-number">90%</div>
                    <div class="stat-label">Réussite</div>
                </div>
                
                <div class="statCHild">
                    <i class='bx bx-time' style="font-size: 2rem; color: #3498db; margin-bottom: 0.5rem;"></i>
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Disponibilité</div>
                </div>
            </div>
        </section>

        <!-- Commentaire -->
        <section id="commentaire" class="commentaire">
            <h2><i class='bx bx-message-dots'></i> Témoignages</h2>
            <div class="commentaire-grid">
                <div class="card-commnt">
                    <div class="head-comment">
                        <div class="avatar-com">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="info-user">
                            <h4>Sarah K.</h4>
                            <div class="rate-site">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <p class="comment-text">
                        Grâce à BacPrep, j'ai pu combler mes lacunes en mathématiques et obtenir une excellente note au bac. Les explications sont très claires !
                    </p>
                    <small class="comment-date">Mention Très Bien - 2024</small>
                </div>
                
                <div class="card-commnt">
                    <div class="head-comment">
                        <div class="avatar-com">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="info-user">
                            <h4>Mehdi E.</h4>
                            <div class="rate-site">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <p class="comment-text">
                        Les cours de physique-chimie sont exceptionnels. J'ai particulièrement apprécié les exercices pratiques qui m'ont permis de bien comprendre.
                    </p>
                    <small class="comment-date">Mention Bien- 2024</small>
                </div>
                
                <div class="card-commnt">
                    <div class="head-comment">
                        <div class="avatar-com">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="info-user">
                            <h4>Lina M.</h4>
                            <div class="rate-site">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                        </div>
                    </div>
                    <p class="comment-text">
                        Plateforme très utile pour réviser à son rythme. J'ai pu améliorer mes notes en philosophie grâce aux méthodes proposées.
                    </p>
                    <small class="comment-date">Mention Assez Bien -2023</small>
                </div>
            </div>
        </section>

        <!--Contact-->
        
        <section id="contact" class="contact">
            <h2><i class='bx bx-envelope'></i> Contactez-nous</h2>
            <form class="formCONTACT">
                <div class="infoPourEnvoyé">
                    <label for="name"><i class='bx bx-user'></i> Nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom">
                </div>
                
                <div class="infoPourEnvoyé">
                    <label for="email"><i class='bx bx-envelope'></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email">
                </div>
                
                <div class="infoPourEnvoyé">
                    <label for="message"><i class='bx bx-message-detail'></i> Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Votre message..."></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary"><i class='bx bx-send'></i>Envoyer</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="foter-content">
            <div class="footer-info">
                <h3><i class='bx bx-book'></i> BacPrep</h3>
                <p>Plateforme de préparation au baccalauréat offrant des ressources pédagogiques de qualité pour toutes les filières.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/moha.sy.603544"><i class='bx bxl-facebook'></i></a>
                    <a href="https://instagram.com/moha_syb"><i class='bx bxl-instagram'></i></a>
                    <a href="https://wa.me/212675238048"><i class='bx bxl-whatsapp'></i></a>
                </div>
            </div>
            
            <div class="footer-info">
                <h3><i class='bx bx-link'></i> Liens</h3>
                <a href="#home">Accueil</a>
                <a href="#fonctionalite">Fonctionnalités</a>
                <a href="#statique">Résultats</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-info">
                <h3><i class='bx bx-phone'></i> Contact</h3>
                <p><i class='bx bx-envelope'></i> mohamed.sybous@gmail.com</p>
                <p><i class='bx bx-phone'></i> +212 675238048</p>
                <p><i class='bx bx-map'></i> Ouled Berhil, Maroc</p>
            </div>
        </div>
        
        <div class="footer-bottom"><p> &copy; 2025 BacPrep -Tout  les droits réservés</p></div>
    </footer>

    <!-- Scroll too Top -->
    <button class="scroll-top" onclick="scrollToTop()"><i class='bx bx-up-arrow-alt'></i></button>

    </div>
    
    <!-- Login-->
<div class="modal-info" id="loginModal" >
    <div class="modal">
        <div class="header-inscription">
            <h2 class="titre-inscription">Connexion</h2>
            <button class="modal-close" onclick="closeModal('loginModal')"><i class='bx bx-x'></i></button>
        </div>
        <form class="modal-form" method="post" action="auth.php">
            <input type="email" name="login_email" placeholder="Email" required>
            <p id="emailerror" style="text-align: center; color : red ;">
                <?php if(isset($_SESSION['errors']['login'])) echo $_SESSION['errors']['login']; ?>
            </p>
            <div class="password-container">
                <input type="password" name="login_password" id="loginPassword" placeholder="Mot de passe" required>
                <i class='bx bx-hide password-toggle' onclick="togglePassword('loginPassword', this)"></i>
            </div>
            <button type="submit" class="btn btn-primary" name="login_btn">
                <i class='bx bx-log-in'></i> Se connecter
            </button>
            <p id="deja-inscri" style="text-align: center; color : red ;">
                <?php if(isset($_SESSION['errors']['logintwo'])) echo $_SESSION['errors']['logintwo']; ?>
            </p>
            <p style="text-align: center; color: #7f8c8d; margin-top: 1rem;">
                Pas de compte ? <a href="#" onclick="switchToRegister()" style="color: #3498db;">S'inscrire</a>
            </p>
        </form>
    </div>
</div>

<!-- inscription -->
<div class="modal-info" id="inscriptionModal">
    <div class="modal">
        <div class="header-inscription">
            <h2 class="titre-inscription">Inscription</h2>
            <button class="modal-close" onclick="closeModal('inscriptionModal')"><i class='bx bx-x'></i></button>
        </div>
        <form class="modal-form" method="post" onsubmit="return validateInscriptionForm();" action="auth.php">
            <input type="text" name="username" placeholder="Nom complet" required>
            <p id="errornom" style="text-align: center; color : red ;">
                <?php if (isset($_SESSION['errors']['username'])) echo $_SESSION['errors']['username']; ?>
            </p>
            <input type="email" name="user-mail" placeholder="Email" required>
            <p id="errormailinscri" style="text-align: center; color : red ;">
                <?php if (isset($_SESSION['errors']['email'])) echo $_SESSION['errors']['email']; ?>
            </p>
            <div class="password-container">
                <input type="password" name="user-pass" id="registerPassword" placeholder="Mot de passe" required>
                <i class='bx bx-hide password-toggle' onclick="togglePassword('registerPassword', this)"></i>
            </div>
            <p id="errorpass" style="text-align: center; color : red ;">
                <?php if (isset($_SESSION['errors']['password'])) echo $_SESSION['errors']['password']; ?>
            </p>
            <div class="password-container">
                <input type="password" name="user-confirmpass" id="confirmPassword" placeholder="Confirmer mot de passe" required>
                <i class='bx bx-hide password-toggle' onclick="togglePassword('confirmPassword', this)"></i>
            </div>
            <p id="errorpassconf" style="text-align: center; color : red ;">
                <?php if (isset($_SESSION['errors']['confirm'])) echo $_SESSION['errors']['confirm']; ?>
            </p>
            <button type="submit" class="btn btn-primary" name="inscription-btn">
                <i class='bx bx-user-plus'></i> S'inscrire
            </button>
            <p id="email-deja-inscri" style="text-align: center; color : red;">
                <?php if(isset($_SESSION['errors']['email_used']))echo $_SESSION['errors']['email_used']; ?>
            </p>
            <p style="text-align: center; color: #7f8c8d; margin-top: 1rem;">
                Déjà inscrit ? <a href="#" onclick="switchToLogin()" style="color: #3498db;">Se connecter</a>
            </p>
        </form>
    </div>
</div>
    <script src="assets/script.js"></script>
    <script>
        // Fonction pour basculer la visibilité du mot de passe
        function togglePassword(inputId, toggleIcon) {
            const passwordInput = document.getElementById(inputId);
            const isPassword = passwordInput.type === 'password';
            
            //  le type d'input
            passwordInput.type = isPassword ? 'text' : 'password';
            
            // l'icône
            toggleIcon.className = isPassword ? 'bx bx-show password-toggle active' : 'bx bx-hide password-toggle';
        }
    </script>
 <script>
<?php if (!empty($_SESSION['errors'])): ?>
    window.addEventListener('load', function () {
    <?php
        //inscription
        if (
            isset($_SESSION['errors']['username']) ||isset($_SESSION['errors']['email']) ||
            isset($_SESSION['errors']['password']) || isset($_SESSION['errors']['confirm']) ||
            isset($_SESSION['errors']['email_used'])
            ) {
                echo "inscriptionModal();";
            }
        
            //login؟
            elseif (isset($_SESSION['errors']['login']) || isset($_SESSION['errors']['logintwo'])) {
               echo "showLoginModal();";
            }
        ?>
    });
    <?php endif; ?>
</script>

    <?php unset($_SESSION['errors']); ?>
</body>
</html>