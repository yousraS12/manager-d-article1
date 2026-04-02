<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blgdb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Erreur de connexion";
}

// تجربة خطأ
try {
    $pdo->query("SELECT * FROM table_inexistante");
} catch (PDOException $e) {
    // نسجلو الخطأ فـ fichier
    file_put_contents('erreurs.log', $e->getMessage() . PHP_EOL, FILE_APPEND);

    // رسالة للمستخدم
    echo "Une erreur est survenue. Contactez l'administrateur.";
}
?>