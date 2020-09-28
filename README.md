# Laravel Jetstream Limewire Docker

## Installation du projet
Lancer ces commandes dans un terminal bash.
Il est nécéssaire d'avoir installé composer sur votre machine ainsi que docker.

```bash
cd laravel-jestream-limewire/ 
```

```bash
composer install
```

```bash
docker-compose up -d --build
```

```bash
docker-compose exec laravel-app php artisan key:generate
```

```bash
docker-compose exec laravel-app npm install && npm run dev
```

```bash
docker-compose exec laravel-app php artisan migrate
```

## Utile au projet
Ajouter la pile Jetstream Livewire :
```bash
php artisan vendor:publish --tag=jetstream-views
```

Créer un composant Livewire :
```bash
docker-compose exec laravel-app php artisan make:livewire MyComponent
```
