# Laravel Artisan Find Command

This package aims to provide a simple way to search for Artisan commands by name, and execute them sequentially.

### Installation

```bash
composer require devajmeireles/artisan-find
```

### Usage

```bash
php artisan find
```

Behind the scenes, we use [Laravel Prompts](https://laravel.com/docs/prompts) to display a beautiful search input, and then we execute the command that you selected:

![CleanShot 2024-09-17 at 00 02 29](https://github.com/user-attachments/assets/82adc7d3-b097-409a-b049-ae8822b14daf)
