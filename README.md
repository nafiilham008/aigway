<p align="center">Laravel starter app for Aigway Skincare</p>


## Table of Contents
1. [Requirements](#requirements)
2. [What's inside?](#what-inside) 
3. [Features](#features)
4. [Setup](#setup)
5. [Usage](#usage)
6. [License](#license)
7. [Support](#support)

## Requirements
- [PHP ^8.1](https://www.php.net/releases/8.1/en.php)

<h2 id="what-inside">What's inside?</h2>

- [Laravel - ^9.x](https://laravel.com/)
- [Laravel Forify - ^1.x](https://laravel.com/docs/9.x/fortify)
- [Laravel Debugbar - ^3.x](https://github.com/barryvdh/laravel-debugbar)
- [Livewire - ^2.x](https://github.com/livewire/livewire)
- [Laravel livewire tables - ^2.x](https://github.com/rappasoft/laravel-livewire-tables)
- [Intervention Image - ^2.x](https://image.intervention.io/v2)

## Features
- [x] Content Management System All Menu for Admin.

## Setup
1. Clone or download from [Releases](https://github.com/nafiilham008/aigway.git)
```bash
git clone https://github.com/nafiilham008/aigway.git
```

2. CD into `/aigway`
```shell 
cd aigway
```

3. Install Laravel dependency
```shell
composer install
```

4. Create copy of ```.env```
```shell
cp .env.example .env
```

5. Generate laravel key
```shell
php artisan key:generate
```

6. Set database name and account in ```.env```
```shell
DB_DATABASE=aigway
DB_USERNAME=root
DB_PASSWORD=
```

7.  Run Laravel migrate and seeder
```shell
php artisan migrate --seed
``` 

8. Create the symbolic link
```shell
php artisan storage:link
``` 

9. Start development server
```shell
php artisan serve
``` 

Account
- Email: admin@example.com
- Password: password

## License
This project has been registered for Intellectual Property Rights (HKI) and can only be used by Aigway Skincare Official.
