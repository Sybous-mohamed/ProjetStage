<?php
session_start();
include 'config/database.php';
include 'includes/functions.php';


if (isset($_POST['inscription-btn'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['user-mail']);
    $password = $_POST['user-pass'];
    $confirm = $_POST['user-confirmpass'];



    if (!isValidName($username)) {
        die("Le nom doit contenir uniquement des lettres et des espaces.");
    }

    if (!isValidEmail($email)) {
        die("Email invalide.");
    }

    if ($password !== $confirm) {
        die("Les mots de passe ne correspondent pas.");
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {//ychof wach déja kayn dak email
        die("Cet email est déjà utilisé.");
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $passwordHash]);

    $_SESSION['user_id'] = $conn->lastInsertId();
    header('Location: courses.php');
    exit;
}

if (isset($_POST['login_btn'])) {
    $email = trim($_POST['login_email']);
    $password = $_POST['login_password'];

    if (!isValidEmail($email)) {
        die("Email invalide.");
    }
/** */
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();


    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: courses.php');
        exit;
    } else {
        die("Email ou mot de passe incorrect.");
    }
}

header('Location: index.php');
exit;

?>