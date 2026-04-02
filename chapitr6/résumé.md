Il est essentiel de toujours contrôler et filtrer les données saisies par l’utilisateur afin d’éviter les failles de sécurité.

Il faut systématiquement utiliser prepare() et execute() pour exécuter les requêtes SQL, afin de se protéger contre les injections SQL.

Les messages d’erreur sensibles ne doivent jamais être affichés directement à l’utilisateur, mais plutôt enregistrés côté serveur.

Les comptes MySQL doivent être configurés avec des permissions limitées, pour réduire les risques en cas de problème.