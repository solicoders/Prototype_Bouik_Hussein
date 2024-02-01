 **# Jeux de test**

**Ce document contient les commandes utilisées pour créer et exécuter des seeders de base de données dans Laravel.**

## **Création d'un seeder**

Pour créer un seeder, utilisez la commande Artisan `make:seeder` :

```bash
php artisan make:seeder TypesTableSeeder
php artisan make:seeder MusiquesTableSeeder
```

## **Écriture d'un seeder**

Ouvrez le fichier seeder nouvellement créé et ajoutez vos données dans la méthode `run` :

## **Exécution d'un seeder**

Pour exécuter le seeder, utilisez la commande Artisan `db:seed` :

```bash
php artisan db:seed --class=TypesTableSeeder
php artisan db:seed --class=MusiquesTableSeeder
```

## **Ajout d'un seeder au fichier DatabaseSeeder.php**

Pour ajouter un seeder au fichier DatabaseSeeder.php, appelez la méthode `call` sur l'objet `$this` à l'intérieur de la méthode `run` :

```php
public function run()
{
    $this->call(TypesTableSeeder::class);
    $this->call(MusiquesTableSeeder::class);
}
```

N'oubliez pas d'importer le seeder en haut de votre fichier DatabaseSeeder.php :

```php
use Database\Seeders\TypesTableSeeder;
use Database\Seeders\MusiquesTableSeeder;
```
Pour exécuter tous les seeders, utilisez la commande Artisan db:seed :
    
```bash
    php artisan db:seed
```