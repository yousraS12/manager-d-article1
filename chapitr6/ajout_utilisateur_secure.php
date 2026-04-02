<?php
require 'connexion.php';

$stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->execute([
    'nom' => 'Alice',
    'email' => 'alice@test.com'
]);
echo "Utilisateur ajouté.";
// $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
// $stmt->execute([
//     'nom' => $nom,
//     'email' => $email
// ]);
echo "Utilisateur ajouté avec succès.";
try {
    // Code d’insertion
} catch (PDOException $e) {
    file_put_contents('logs/errors.log', $e->getMessage(), FILE_APPEND);
    echo "Une erreur est survenue. Contactez l’administrateur.";
}

