<?php
session_start();
include 'config/database.php';
include 'includes/functions.php';

//les errors

    $_SESSION['errors'] = [];


//inscription
if (isset($_POST['inscription-btn'])) {

    $username = trim($_POST['username']);
    $email = trim($_POST['user-mail']);
    $password = $_POST['user-pass'];
    $confirm = $_POST['user-confirmpass'];
    $_SESSION["mail"] = $email;
    $_SESSION['username'] = $_POST['username'];

    // Validation
    if (!isValidName($username)) {
        $_SESSION['errors']['username'] = "Nom invalide.";
    }

    if (!isValidEmail($email)) {
        $_SESSION['errors']['email'] = "Email invalide.";
    }

    if (strlen($password) < 6) {
        $_SESSION['errors']['password'] = "Le mot de passe doit contenir au moins 6 caractères.";
    }

    if ($password !== $confirm) {
        $_SESSION['errors']['confirm'] = "Les mots de passe ne correspondent pas.";
    }

    // Vérifier email déjà utilisé
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute(array($email));
    if ($stmt->rowCount() > 0) {
        $_SESSION['errors']['email_used'] = "Cet email est déjà utilisé.";
    }

    // Si erreurs ->  formulaire
    if (!empty($_SESSION['errors'])) {
        header("Location: index.php");
        exit;
    }

    // Insertion utilisateur
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute(array($username, $email, $passwordHash));

    $_SESSION['user_id'] = $conn->lastInsertId();
    header('Location: courses.php');
    exit;
}

//connexion
if (isset($_POST['login_btn'])) {
    $email = trim($_POST['login_email']);
    $password = $_POST['login_password'];
    $_SESSION["mail"] = $email;
    if (!isValidEmail($email)) {
        $_SESSION['errors']['login'] = "Email invalide.";
        header("Location: index.php#loginModal");
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute(array($email));
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: courses.php');
        exit;
    } else {
        $_SESSION['errors']['logintwo'] = "Email ou mot de passe incorrect.";
        header("Location: index.php");
        exit;
    }
}



    header('Location: index.php');
exit;
?>
