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
docker-compose up --build
```

```bash
docker-compose exec laravel-app npm install && npm run dev
```

```bash
docker-compose exec laravel-app php artisan migrate
```
