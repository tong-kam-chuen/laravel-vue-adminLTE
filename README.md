<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Build a Multi-Purpose Laravel + Vue Application

>
    laravel new LaraStart && cd LaraStart

## Grant Privileges

Grant privileges to the project database , please refer to https://dev.mysql.com/doc/

## Migration Start

>
    php artisan migrate

## Create Login Password

For Database Seeding details thoroughly from https://laravel.com/docs/7.x/seeding
>
    php artisan make:seeder UsersTableSeeder
>
    php artisan db:seed

## Vue Installation

>
    composer require laravel/ui
>
    php artisan ui vue --auth
>
    npm install && npm run dev

## AdminLTE , bootstrap , fontawesome , vue-router , bootstrap-sass

>
    npm install bootstrap
>
    npm install admin-lte --save
>
    npm install @fortawesome/fontawesome-free
>
    npm install vue-router
>
    npm install bootstrap-sass --save

## Free Bootstrap Admin Template | AdminLTE.IO

Setup [layouts/app.blade.php] & Copy source code from https://adminlte.io/themes/dev/AdminLTE/index.html

## laravel/passport

Laravel Passport, which provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server that is maintained by https://laravel.com/docs/7.x/passport
>
    composer require laravel/passport
>
    php artisan vendor:publish --tag=passport-migrations
>
    php artisan migrate
>
    php artisan passport:install
>
    php artisan vendor:publish --tag=passport-components

## intervention/image

Use the below command and install it.
>
    composer  require intervention/image

After successfully install a laravel image intervention package. Register image intervention package to providers and aliases go to app/config/app.php register here.
>
    [config/app.php]

>
    'providers' => [
>
        Intervention\ Image\ ImageServiceProvider::class
>
    ],

>
    'aliases' => [
>
        'Image' => Intervention\ Image\ Facades\ Image::class
>
    ]

Pull a configuration file into your application by running one of the following artisan command.
>  
    php artisan vendor:publish --provider="Intervention\ Image\ ImageServiceProviderLaravelRecent"

## axios , vform , pipes-and-filters , moment , vue-progressbar , sweetalert2 , laravel-vue-pagination

>
    npm install axios vform
>
    npm install pipes-and-filters --save
>
    npm install moment@2.18.1 --save
>
    npm install vue-progressbar --save
>
    npm install sweetalert2 --save
>
    npm install laravel-vue-pagination

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

### Community Sponsors

<a href="https://op.gg"><img src="http://opgg-static.akamaized.net/icon/t.rectangle.png" width="150"></a>

- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
