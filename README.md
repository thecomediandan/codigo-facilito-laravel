<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Mis Notas

- Instalar el CLI de Laravel
```
composer global require laravel/installer

// En caso de que no se encuentre en las variables de entorno
// revisar donde se encuentran las aplicaciones globales de composer
composer global about

// Configurar el PATH para el directorio generalmente es (zshrc, bashrc, etc):
export PATH="$PATH:$HOME/.config/composer/vendor/bin"
```

- Crear un proyecto
```
laravel new my-name-project
```

- Instalar laravel/breeze
```
composer require laravel/breeze --dev

php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
```

- Usar laravel/mix en vez de vite para laravel/breeze
```
// DESINSTALAR VITE
// Quitar la dependencia de vite en el package.json
// borrar vite.config.js de la ruta principal
npm run dev
php artisan serve
```

- Usar barryvdh/laravel-debugbar como herramienta de depuración para el rendimiento generalmente en cantidad de queries realizadas. Generalmente se la usa al final para retocar el rendimiento y que cambiar.
```
composer require barryvdh/laravel-debugbar --dev
```

- Crear un modelo con su migración y su factory
```
❯ php artisan make:model Post -mf
Model created successfully.
Factory created successfully.
Created Migration: 2024_11_29_040606_create_posts_table
```

- Crear una migración para la relación entre amigos
```
❯ php artisan make:migration create_friends_table
Created Migration: 2024_11_29_040753_create_friends_table
```

- Aplicamos las migraciones solamente
```
❯ php artisan migrate
Migrating: 2024_11_29_040606_create_posts_table
Migrated:  2024_11_29_040606_create_posts_table (81.19ms)
Migrating: 2024_11_29_040753_create_friends_table
Migrated:  2024_11_29_040753_create_friends_table (111.44ms)
```

- Para usar un factory (fábrica) de un modelo en específico usamos Tinker
```
❯ php artisan tinker
Psy Shell v0.12.4 (PHP 7.4.28 — cli) by Justin Hileman
> App\Models\User::factory(4)->create()
= Illuminate\Database\Eloquent\Collection {#4996
    all: [
      App\Models\User {#5000
        name: "Dr. Jerome Kuhlman DDS",
        email: "edgar74@example.org",
        email_verified_at: "2024-11-29 04:19:21",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
        #remember_token: "fCwC9dGicR",
        updated_at: "2024-11-29 04:19:21",
        created_at: "2024-11-29 04:19:21",
        id: 2,
      },
      App\Models\User {#5007
        name: "Carmel Hessel II",
        email: "cleve58@example.org",
        email_verified_at: "2024-11-29 04:19:21",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
        #remember_token: "4U1yMHeuOh",
        updated_at: "2024-11-29 04:19:21",
        created_at: "2024-11-29 04:19:21",
        id: 3,
      },
      App\Models\User {#5008
        name: "Davin Rowe",
        email: "mcclure.savanna@example.net",
        email_verified_at: "2024-11-29 04:19:21",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
        #remember_token: "hfMt4IxhJm",
        updated_at: "2024-11-29 04:19:21",
        created_at: "2024-11-29 04:19:21",
        id: 4,
      },
      App\Models\User {#5009
        name: "Euna Sporer",
        email: "monserrate72@example.org",
        email_verified_at: "2024-11-29 04:19:21",
        #password: "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
        #remember_token: "6TeKEBIStc",
        updated_at: "2024-11-29 04:19:21",
        created_at: "2024-11-29 04:19:21",
        id: 5,
      },
    ],
  }

> exit

   INFO  Goodbye.
```

- Para aplicar las migraciones con los factory's configurados en la ruta
/database/factories usamos los seeders previamente configurados ubicados
 en /database/seeders a través del comando siguiente:
```
❯ php artisan migrate:refresh --seed
Rolling back: 2024_11_29_040753_create_friends_table
Rolled back:  2024_11_29_040753_create_friends_table (16.66ms)
Rolling back: 2024_11_29_040606_create_posts_table
Rolled back:  2024_11_29_040606_create_posts_table (11.04ms)
Rolling back: 2019_12_14_000001_create_personal_access_tokens_table
Rolled back:  2019_12_14_000001_create_personal_access_tokens_table (12.47ms)
Rolling back: 2019_08_19_000000_create_failed_jobs_table
Rolled back:  2019_08_19_000000_create_failed_jobs_table (12.88ms)
Rolling back: 2014_10_12_100000_create_password_resets_table
Rolled back:  2014_10_12_100000_create_password_resets_table (13.59ms)
Rolling back: 2014_10_12_000000_create_users_table
Rolled back:  2014_10_12_000000_create_users_table (9.60ms)
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (31.62ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (34.52ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (40.16ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (48.22ms)
Migrating: 2024_11_29_040606_create_posts_table
Migrated:  2024_11_29_040606_create_posts_table (75.57ms)
Migrating: 2024_11_29_040753_create_friends_table
Migrated:  2024_11_29_040753_create_friends_table (124.65ms)
Database seeding completed successfully.
```

# Cómo entiendo el funcionamiento de Laravel

## Inyección de dependencia del objeto Request

En Laravel, el objeto Request encapsula toda la información sobre la solicitud HTTP que se está procesando, y está disponible en los controladores y otros lugares a través de inyección de dependencias, facilitando el acceso a datos de la solicitud de manera eficiente.

Cuando el cliente realiza una solicitud (por ejemplo, una petición GET, POST, PUT, etc.), Laravel crea una instancia de Illuminate\Http\Request y la asocia con la solicitud actual. Este objeto contiene todos los detalles sobre la solicitud.

## Infomación de usuario activo o en sesión activa

Laravel encuentra la información del usuario en sesión mediante su sistema Middleware y su clase Auth, para acceder a la información del usuario en cualquier lugar podemos usar esta clase:

```php
$user = auth()->user();
// O
$user = Auth::user();
```

Esto es posible porque Laravel gestiona la sesión de forma automática. Cuando el usuario inicia sesión, se guarda un identificador único en la sesión (por ejemplo, el ID del usuario). Laravel utiliza este identificador para recuperar el usuario desde el modelo configurado en config/auth.php, típicamente App\Models\User.

``` php
'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],
],
```

## Tipos de dependencias que Laravel puede inyectar

Laravel puede inyectar dependencias gracias a su sistema llamado 'service container'. Las dependencias que Laravel reconoce por defecto son:

### Autenticación (Auth)

Laravel puede inyectar el objeto de autenticación de manera automática en los controladores. Esto es útil para acceder al usuario autenticado o trabajar con la autenticación en general.

    auth(): Este objeto puede ser inyectado directamente.

Ejemplo:

```php
public function __construct(\Illuminate\Auth\Guard $auth)
{
    $this->auth = $auth;
}

public function show()
{
    $user = $this->auth->user();  // Accede al usuario autenticado
}
```
Aunque no es común que necesites inyectar el auth() directamente, puedes inyectarlo si lo necesitas explícitamente.

### Usuario autenticado (User)

Si necesitas el modelo de usuario autenticado (por ejemplo, si estás utilizando auth en tus controladores), Laravel puede inyectar el modelo de usuario directamente en tus métodos de controlador, siempre que esté disponible en la sesión.

```php
public function profile(User $user)
{
    // Laravel inyectará automáticamente el usuario autenticado
    return view('profile', compact('user'));
}
```

### Request (Request)

Como ya mencionamos, Laravel puede inyectar el objeto Request para acceder a los datos de la solicitud HTTP (como parámetros de la URL, entradas de formularios, etc.).

```php
public function store(Request $request)
{
    $data = $request->all();
}
```

### Ruta (Route)

Laravel también puede inyectar el objeto de la ruta en los controladores. Esto es útil cuando necesitas acceder a los parámetros de la ruta o información sobre la solicitud.

```php
public function show(Route $route)
{
    $parameter = $route->parameter('id');  // Obtiene un parámetro de la URL
}
```

### Respuesta (Response)

El objeto Response puede ser inyectado, lo que te permite construir respuestas HTTP de manera personalizada. Sin embargo, en la mayoría de los casos, Laravel utiliza sus métodos de controladores para generar respuestas, pero también se puede inyectar cuando es necesario.

```php
public function show(Response $response)
{
    return $response->setContent('Hello, world!');
}
```

### Sesión (Session)

Si necesitas acceder a la sesión en tu controlador, Laravel puede inyectar el objeto Session, lo que te permite trabajar con los datos de la sesión de manera sencilla.

```php
public function store(Session $session)
{
    $session->put('key', 'value');  // Guarda un valor en la sesión
}
```

### Cache (Cache)

Laravel permite inyectar el servicio de cache directamente en el controlador. Esto es útil si deseas interactuar con el sistema de cache para almacenar o recuperar datos en caché.

```php
public function show(Cache $cache)
{
    $cachedData = $cache->get('some-key');
}
```

### Log (Log)

Puedes inyectar el servicio de log de Laravel, lo que facilita la escritura de registros en los archivos de log del sistema.

```php
public function store(Log $log)
{
    $log->info('User created');
}
```

### Autorización (Gate, Policy)

Si estás utilizando gate o policy en Laravel para manejar la autorización de acceso a recursos, estos objetos pueden ser inyectados para realizar verificaciones de permisos o acciones.

```php
public function __construct(Gate $gate)
{
    if ($gate->denies('update-post')) {
        abort(403);
    }
}
```

### Cola (Queue)

Puedes inyectar el objeto Queue para trabajar directamente con la cola de trabajos (jobs) de Laravel.

```php
public function dispatchJob(Queue $queue)
{
    $queue->push(new SomeJob());
}
```

### Validación (Validator)

Laravel también permite inyectar el servicio de validación directamente. Si necesitas hacer validaciones dentro de un controlador, puedes inyectar el validador.

```php
public function store(Validator $validator)
{
    $validator->validate($data);
}
```

### Dependencias personalizadas

Si tienes clases o servicios personalizados en tu aplicación (por ejemplo, servicios que has creado en el directorio app/Services), puedes inyectarlos en tus controladores siempre que Laravel pueda resolver sus dependencias desde el contenedor de servicios.

```php
public function __construct(MyCustomService $service)
{
    $this->service = $service;
}
```

### Configuración (Config)

Si necesitas acceder a la configuración de la aplicación, puedes inyectar la clase Config para leer valores de los archivos de configuración.

```php
public function show(Config $config)
{
    $appName = $config->get('app.name');
}
```

### Enlace de un modelo específico

Laravel también puede inyectar directamente instancias de modelos específicos en los métodos del controlador basándose en los parámetros de la ruta. Esto se llama modelo de enlace implícito.

Por ejemplo, si tienes una ruta que pasa un parámetro id para un modelo Post, puedes inyectar directamente ese modelo:
```php
public function show(Post $post)
{
    return view('post.show', compact('post'));
}
```
Laravel automáticamente busca un modelo Post con el id proporcionado en la URL y lo inyecta en el controlador.

## Manejar Inyección de dependencias (DI) con Laravel

Podemos utiliza el sistema de contenedor de servicios de Laravel para inyectar dependencias personalizadas en donde queramos. Tendremos que crear una carpeta si es que no la tiene en `/App/Services`, en esta carpeta crearemos nuestros servicios o clases a inyectar:
```php
namespace App\Services;

class MyCustomService
{
    public function doSomething()
    {
        return "Doing something...";
    }
}
```
Una vez creado el servicio tendremos que registrar la clase en un provider generalmente llamado `AppServiceProvider` en la carpeta de providers `/App/Providers`.
```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyCustomService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MyCustomService::class, function ($app) {
            return new MyCustomService();
        });
    }

    public function boot()
    {
        //
    }
}
```
En este ejemplo, estamos utilizando el método `singleton` para que Laravel cree una instancia única de la clase `MyCustomService`. Si prefieres que Laravel cree una nueva instancia cada vez que la inyecte, puedes usar el método `bind`.

Ahora podemos inyectar esta dependencia por ejemplo en un Controller:
```php
namespace App\Http\Controllers;

use App\Services\MyCustomService;

class MyController extends Controller
{
    protected $myService;

    public function __construct(MyCustomService $myService)
    {
        $this->myService = $myService;
    }

    public function show()
    {
        return $this->myService->doSomething();  // Llama al servicio inyectado
    }
}
```
En métodos específicos:
```php
namespace App\Http\Controllers;

use App\Services\MyCustomService;

class MyController extends Controller
{
    public function show(MyCustomService $myService)
    {
        return $myService->doSomething();
    }
}
```
Con parámetros dinámicos. Si tu clase o servicio necesita depender de parámetros dinámicos (por ejemplo, un parámetro de la URL o un parámetro de la solicitud), puedes hacer uso del contenedor de servicios para resolver esos parámetros también.

Por ejemplo, si tienes un servicio que necesita el id de un usuario, puedes resolverlo desde el contenedor:
```php
namespace App\Services;

class UserService
{
    public function findUserById($id)
    {
        return User::find($id);
    }
}
```
Si en tu controlador quieres inyectar el `UserService` y el id del usuario desde la URL, puedes hacerlo como sigue:
```php
namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    public function show($id, UserService $userService)
    {
        return $userService->findUserById($id);
    }
}
```
Laravel se encarga de pasar el `$id` de la ruta y el `UserService` como dependencias al método.

Inyección de dependencias en Jobs, Listeners o eventos. Por ejemplo, si tienes un `Job` que necesita un servicio:
```php
namespace App\Jobs;

use App\Services\MyCustomService;

class SomeJob extends Job
{
    protected $myService;

    public function __construct(MyCustomService $myService)
    {
        $this->myService = $myService;
    }

    public function handle()
    {
        $this->myService->doSomething();
    }
}
```
Laravel inyectará automáticamente el `MyCustomService` cuando el Job sea ejecutado.

Inyeccion de dependencias en Middleware:
```php
namespace App\Http\Middleware;

use App\Services\MyCustomService;

class SomeMiddleware
{
    protected $myService;

    public function __construct(MyCustomService $myService)
    {
        $this->myService = $myService;
    }

    public function handle($request, \Closure $next)
    {
        // Usar el servicio en el middleware
        return $next($request);
    }
}
```

Inyección de dependencias en factories o repositories

Por ejemplo de un repositorio:

```php
namespace App\Repositories;
use App\Models\User;

class UserRepository
{
    public function getAllUsers()
    {
        return User::all();
    }
}
```

A un controlador si se usa el patrón `repository`:
```php
namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function index(UserRepository $userRepository)
    {
        return $userRepository->getAllUsers();
    }
}
```