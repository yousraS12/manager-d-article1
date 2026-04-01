resumé de chapitre 2 :
- le methode princepe de PDO: 
query() : utilisée pour des requéte simples et directes.
 

Pour récupérer les résultats, on utilise fetchAll(PDO::FETCH_ASSOC) qui retourne un tableau associatif contenant toutes les lignes.

Une boucle foreach permet de parcourir les résultats et d’afficher les données.



Il est important d’utiliser try/catch pour gérer les erreurs et éviter l’arrêt du programme.
conclusion :
Connexion → Requête SELECT → Récupération des données → Affichage → Gestion des erreurs.
