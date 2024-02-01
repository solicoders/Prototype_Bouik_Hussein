# Creation application Laravel

- creation d'un projet laravel

```bash
composer create-project laravel/laravel gestion-musique
```

- installation de Admin LTE
    
```bash
    npm install admin-lte --save
```

- utilisations d'un namespace pour le projet


```bash
    php artisan make:controller Musique/MusicController
    php artisan make:controller Type/TypeController
```

- creation d'un model

```bash
    php artisan make:model Musique/Musique
    php artisan make:model Type/Type
```
