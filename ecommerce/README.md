# PHP E-commerce Website

A complete, production-ready E-commerce application built with native PHP 8, MySQL, and Tailwind CSS. Designed to run seamlessly on XAMPP.

## Features

-   **User Panel**: Browse products, Add to Cart, Register/Login.
-   **Admin Panel**: Dashboard stats, Manage Products (Structure ready).
-   **Security**: PDO Prepared Statements, Password Hashing, Session Management.
-   **Design**: Modern Responsive UI using Tailwind CSS (CDN).

## Installation Guide (XAMPP)

1.  **Clone/Copy**: Place the project folder inside your XAMPP `htdocs` directory.
    -   Example: `C:\xampp\htdocs\ecommerce`

2.  **Database Setup**:
    -   Open phpMyAdmin (`http://localhost/phpmyadmin`).
    -   Create a new database named `ecommerce_db`.
    -   Import the `database.sql` file located in the project root.

3.  **Configuration**:
    -   Rename `.env.example` to `.env` (if using a library to parse it) OR simply edit `app/core/Database.php` directly if not using a composer package for env.
    -   *Note*: This project uses a direct configuration in `app/core/Database.php` for simplicity without Composer dependencies by default.
    -   Open `app/core/Database.php` and ensure the credentials match your MySQL setup (Default: user `root`, pass `empty`).

4.  **Run**:
    -   Start Apache and MySQL modules in XAMPP Control Panel.
    -   Open your browser and navigate to: `http://localhost/ecommerce/public`
    -   **Important**: The application entry point is in the `public` folder.

## Admin Config

-   **Login URL**: `http://localhost/ecommerce/public/login` (Admin shares the same login form but redirects to dashboard based on role).
-   **Default Admin Credentials** (seeded in `database.sql`):
    -   Email: `admin@example.com`
    -   Password: `password`
-   **Default User Credentials**:
    -   Email: `user@example.com`
    -   Password: `password`

## Folder Structure

-   `/app`: Core application logic (MVC).
-   `/public`: Web root (CSS, JS, index.php).
-   `/config`: Configuration files.
-   `/routes`: URL routing definitions.
-   `database.sql`: MySQL database schema.

## Troubleshooting

-   **404 Not Found**: Ensure you are accessing via `/public`. If using a Virtual Host, point the document root to the `/public` folder.
-   **Database Error**: Check `app/core/Database.php` credentials.
