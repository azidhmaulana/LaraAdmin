## <p align="center">LaraAdmin - Laravel 11 Admin Panel Starter Kit 🚀</p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About LaraAdmin

LaraAdmin is a pre-configured Laravel 11 starter kit with AdminLTE, Laravel Breeze, and Spatie Permissions, designed to streamline the development of admin panels and dashboard-based applications.

## 📌 Features
- [ Laravel 11 ](https://laravel.com/) - The latest version of Laravel with improved performance and security.
- [ AdminLTE ](https://adminlte.io/) - A professional and responsive admin dashboard template.
- [ Laravel Breeze ](https://laravel.com/docs/11.x/starter-kits#laravel-breeze) - Simple authentication scaffolding using Blade templates.
- [ Spatie Permissions ](https://spatie.be/docs/laravel-permission/v6/introduction) - Role-based access control for managing user permissions.
- [User & Role Management ] - Pre-built authentication and authorization system.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## 🚀 Installation

1. Clone the Repository

    ```
    git clone https://github.com/azidhmaulana/LaraAdmin.git
    cd LaraAdmin
    ```

2. Install Dependencies
   
    ```
    composer install
    npm install && npm run dev
    ```

3. Set Up Environment

    ```
    cp .env.example .env
    php artisan key:generate
    ```
    Configure your database settings in the .env file.

4. Run Migrations

   ```
   php artisan migrate
   ```

5. Seed Default Roles & Users (Optional)

    ```
    php artisan db:seed
    ```

6. Start the Server
    ```
    php artisan serve
    ```
    Access your app at http://127.0.0.1:8000

## 📜 License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🌟 Support & Contributions

If you find this project helpful, give it a ⭐ on GitHub! Contributions, issues, and feature requests are welcome.

🔗 GitHub Repository: (https://github.com/azidhmaulana/LaraAdmin)
