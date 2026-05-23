# OneShot Framework Core

A custom PHP 8.2+ modular framework starter for Laragon, Apache, MySQL/SQLite, and long-term enterprise-style application builds.

This repository is intentionally dependency-light: no Laravel, no Symfony, no Composer requirement, no Node/Vite requirement. Composer can be added later, but the core boots on plain PHP.

## What is included

- Secure front controller
- Application kernel
- Small service container
- Config and `.env` loader
- Request / response objects
- Router with route groups and named routes
- Middleware pipeline
- CSRF/session foundation
- PDO database manager
- Migration runner
- Module loader
- View renderer
- Auth foundation
- CLI command runner: `php mobo`
- Admin module starter
- Audit module starter

## Laragon quick start

Clone into:

```bash
cd O:\laragon\www
git clone https://github.com/astcode/oneshot-framework-core.git mobocore
cd mobocore
copy .env.example .env
php mobo doctor
php mobo migrate
php mobo user:create admin@example.com password123 Admin
```

Visit:

```text
http://mobocore.test
http://mobocore.test/admin/login
```

## Apache document root

Point the vhost document root to:

```text
O:\laragon\www\mobocore\public
```

## Default database

The default `.env.example` uses SQLite:

```text
DB_CONNECTION=sqlite
DB_DATABASE=storage/database/database.sqlite
```

For MySQL:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mobocore
DB_USERNAME=root
DB_PASSWORD=
```

## Philosophy

The kernel stays small. The estate grows through modules.

A module may own routes, migrations, controllers, views, permissions, settings, services, assets, and lifecycle metadata without corrupting the core.
