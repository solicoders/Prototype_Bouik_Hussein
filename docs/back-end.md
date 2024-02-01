# Back-end

**Étapes pour créer la classe Repository pour la classe Musique**
1. Créez un dossier `GestionMusique` dans le dossier `app`.
2. Créez un fichier de classe nommé `BaseRepository.php` dans le dossier `GestionMusique`.
3. Créez un fichier de classe nommé `MusiquesRepository.php`dans le dossier `GestionMusique`.
4. Importez la classe `Musique`.
5. Créez un fichier de classe nommé `TypesRepository.php` dans le dossier `GestionMusique`.
6. Importez la classe `Type`.
7. Définissez la classe `TypesRepository` qui hérite de `BaseRepository`.
8. Définissez la classe abstraite `MusiquesRepository` qui hérite de `BaseRepository`.

9. Définissez les méthodes abstraites suivantes :
    1. `find` : qui permet de récupérer une musique par son id.
    2. `create` : qui permet de créer une musique.
    3. `update` : qui permet de mettre à jour une musique.
    4. `delete` : qui permet de supprimer une musique.
    5. `all` : qui permet de récupérer toutes les musiques.
