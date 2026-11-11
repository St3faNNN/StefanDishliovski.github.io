# Stefan Dishliovski — Portfolio

A Laravel 13 single-page portfolio built with PHP, Blade, Vite and custom CSS/JavaScript.

## Stack
- PHP 8.3+
- Laravel 13
- Blade templates
- Vite
- Vanilla JavaScript
- Responsive custom CSS

## Local development

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Open http://127.0.0.1:8000. Run `npm run dev` in a separate terminal for live frontend development.

## Production

GitHub Pages cannot execute PHP. Deploy this application to a PHP 8.3+ host and point the web-server document root to Laravel's `public/` directory. Configure production environment variables, install dependencies, build Vite assets, and ensure `storage/` and `bootstrap/cache/` are writable.

```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Never commit the production `.env` file.

## Content

Project descriptions, education, research interests and skills are currently defined in `app/Http/Controllers/PortfolioController.php`.

The `laravel-redesign` branch is for development. The existing GitHub Pages site on `main` remains unchanged until PHP hosting is configured and the new site is reviewed.