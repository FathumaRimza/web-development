# Advanced Web Programming - Login System

## Description
A fully functional web-based **Login System** built using **PHP and MySQL**, designed as part of advanced web programming practice.  
This system allows users to **sign up, log in, and log out** securely, with proper session management and database integration.

## Tech Stack / Tools Used
- **PHP** (server-side scripting)  
- **MySQL** (database)  
- **HTML / CSS / JavaScript** (frontend)  
- **phpMyAdmin** (database management)  
- **XAMPP / Laragon** (local server environment)

## Features
- **User Signup:** Register new users with username, email, and password  
- **User Login:** Authenticate users with secure session management  
- **Logout:** Safely end user sessions  
- **Database Connection:** Configured via `config.php`  
- **Password Security:** Passwords stored using `password_hash`  
- **Validation:** Form validation for signup/login inputs  

## Installation / How to Run
1. Install a local server environment: **XAMPP** or **Laragon**  
2. Start **Apache** and **MySQL** services  
3. Copy the project folder to your web server directory:  
   - XAMPP: `C:\xampp\htdocs\your-project-folder`  
   - Laragon: `C:\laragon\www\your-project-folder`  
4. Open **phpMyAdmin** (`http://localhost/phpmyadmin`)  
5. Import the provided `database.sql` file to create the database and tables  
6. Update the database connection in `config/config.php`:
```php
<?php
$servername = "localhost";
$username = "root";
$password = ""; // default for XAMPP / Laragon
$dbname = "login_system";
?>
