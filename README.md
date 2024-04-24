# Application-Gestion-Apprenants
# N'oubliez pas de modifier le fichier config.php

("DATABASE_HOST", "votre hostserver");

("DATABASE_NAME", "le nom de votre database");

("DATABASE_USERNAME", "le nom d'utilisateur lié à votre database");

("DATABASE_PASSWORD", "le mot de passe de votre database");



# Description
Ce projet à pour but de gérer les apprenants. Il sera possible grâce à ce projet de gérer les absences, les retards et les présences des apprenants.
Cette application nécéssite une connexion pour accédér aux différents espaces tel que ceux des apprenants et ceux des formateurs.
Cette applications s'inspire fortement de SoWeSign.


Fonctionnalités :

# Rôles
 Les utilisateurs ont des accès différents en fonction des rôles qui leurs sont assignés. Les routes sont vérifiés en fonction de chaque rôle.

# Promos
 Les promotions pourront être ajoutées, modifiées et supprimées par les formateurs. Il est possible de voir en détails différentes promotions créées avec les apprenants qui en font parties.

# Retard
 Les utilisateurs ayant le admin (formateurs) pourront gérer les absences, les retards et les présences des apprenants.

# Code 
un code aléatoire est généré dès lors que l'apprenant valide sa présence à un cours.
Ce code sera par la suite envoyés aux apprenants afin qu'ils puissent aussi valider leurs présence à leurs tours.
 
