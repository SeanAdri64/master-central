<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# Prueba Técnica – Master Central

**Nombre:** Sean Adrian Richard Vargas Cantor

## Descripción

Aplicación web desarrollada en Laravel para la gestión de reservas de laboratorios (fotografía, video y sonido).

## Tecnologías usadas
* Laravel 13
* PHP 8
* SQLite
* Bootstrap 5
*  Tinker

## Funcionalidades
CRUD
* Crear reservas
* Ver reservas
* Editar reservas
* Eliminar reservas

## Modelo de datos

* Usuarios (estudiante, docente, administrativo)
* Laboratorios (con capacidad)
* Reservas (relación entre usuario y laboratorio)

## Instalación

```bash
git clone <repo>
cd proyecto
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## 📷 Notas

Se implementaron validaciones, relaciones Eloquent y diseño con Bootstrap.

## 📎 Autor

Sean Adrian Richard Vargas Cantor

# comando para correr
php artisan serve --host=0.0.0.0 --port=8000

La base de datos utilizada fue SQLite

##Tinker para poner datos de laboratorio
Se necesitan datos para poder crear reservas
Paso 1: abrir Tinker
php artisan tinker

En la terminal:

php artisan tinker
Paso 2: pegar 
App\Models\Laboratorio::createApp\Models\Laboratorio::create(['nombre'=>'fotografia','capacidad'=>20]);
App\Models\Laboratorio::create(['nombre'=>'video','capacidad'=>30]);
App\Models\Laboratorio::create(['nombre'=>'sonido','capacidad'=>25]);

Para verificar :
App\Models\Laboratorio::all();

## Tinker usuarios:
php artisan tinker
App\Models\Usuario::create([
    'nombre' => 'Juan Perez',
    'identificacion' => '123',
    'tipo' => 'Estudiante',
    'dependencia' => 'Ingeniería'
]);

App\Models\Usuario::create([
    'nombre' => 'Maria Lopez',
    'identificacion' => '456',
    'tipo' => 'Docente',
    'dependencia' => 'Comunicación'
]);


## Ejemplos de reserva:
usuario_id: 1
laboratorio_id: 1
fecha_solicitud: 2026-05-24
fecha_inicio: 2026-05-25T10:00
fecha_fin: 2026-05-25T12:00
observacion: Clase de fotografía básica


usuario_id: 2
laboratorio_id: 2
fecha_solicitud: 2026-05-24
fecha_inicio: 2026-05-26T14:00
fecha_fin: 2026-05-26T16:00
observacion: Grabación de video institucional



usuario_id: 3
laboratorio_id: 3
fecha_solicitud: 2026-05-24
fecha_inicio: 2026-05-27T08:00
fecha_fin: 2026-05-27T10:00
observacion: Producción de audio podcast


Video con explicacion de como correr el proyecto.
https://screenrec.com/share/aAFn1SIgZK