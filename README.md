# CI4 Login System

Simple login system built with CodeIgniter 4 and MySQL, featuring authentication, session handling, and a minimal UI.

## Requirements

- PHP 8.1+ installed
- Composer installed
- MySQL or MariaDB server (e.g., using XAMPP, Laragon, MAMP)
- Web server (Apache via XAMPP, or built-in PHP server)
- phpMyAdmin or MySQL CLI to create the database

Recommended: Use XAMPP for a quick local setup (Apache + MySQL).

## Features

- User login with email and password
- Secure password hashing
- Session-based authentication
- Protected dashboard after login
- Logout functionality
- Custom CSS styling

## Quick Start

### 1. Clone the project
```bash
git clone https://github.com/JakubDziedzic9/ci4-login-system
cd ci4-login-system
```

### 2. Install dependencies
```bash
composer install
```

### 3. Prepare the database
1. Start your MySQL server (e.g., via XAMPP).
2. Open phpMyAdmin at [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. Create a new empty database named `ci4_login_v2`.
4. Then run:

```bash
php spark migrate
php spark db:seed UserSeeder
```

This will create the necessary `users` table and insert a default user.

### 4. Run the server
```bash
php spark serve
```

### 5. Open in browser
[http://localhost:8080](http://localhost:8080)

Login credentials:
```
Email: admin@example.com
Password: haslo123
```

## Project Structure

- `app/Controllers/Auth.php` — Handles login and logout
- `app/Controllers/Dashboard.php` — Protected dashboard after login
- `app/Models/UserModel.php` — User model for accessing users table
- `app/Database/Migrations/` — Migration for creating users table
- `app/Database/Seeds/UserSeeder.php` — Seeder for creating default user
- `app/Views/auth/login.php` — Login form view
- `app/Views/dashboard.php` — Dashboard view
- `public/css/style.css` — Styling for login and dashboard views

## License

MIT License
