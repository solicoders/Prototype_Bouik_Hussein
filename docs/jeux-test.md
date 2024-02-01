# Jeux de test

This document contains the commands used for creating and running database seeders in Laravel.

## Creating a Seeder

To create a seeder, use the `make:seeder` Artisan command:

```bash
php artisan make:seeder TypesTableSeeder
php artisan make:seeder MusiquesTableSeeder
```
## Writing a Seeder
Open the newly created seeder file and add your data in the run method:

Running a Seeder
To run the seeder, use the db:seed Artisan command:
    
```bash
    php artisan db:seed --class=TypesTableSeeder
    php artisan db:seed --class=MusiquesTableSeeder
```

Adding a Seeder to DatabaseSeeder.php
To add a seeder to the DatabaseSeeder.php file, call the call method on the $this object inside the run method:

```bash
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(MusiquesTableSeeder::class);
    }
```

Don't forget to import the seeder at the top of your DatabaseSeeder.php file:
    
```bash
        use Database\Seeders\TypesTableSeeder;
        use Database\Seeders\MusiquesTableSeeder;
    ```