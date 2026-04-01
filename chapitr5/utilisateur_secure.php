 <?php
 require 'connexion.php';
 $nom='aziza';
 $email="');delete from utilisateur;--";

 $stmt =$pdo->query("insert into utilisateur (nom , email ) values ( '$nom', '$email')");
 echo "insert into utilisateur (nom , email ) values ( '$nom', '$email')";

// $stmt =$pdo->prepare("insert into utilisateur (nom , email ) values ( :nom, :email)");
// $stmt->execute(
// //     ['nom'=>$nom,
// //     'email'=>$email
// // ]
    
// // );
 echo "Utilisateur ajouté.";

