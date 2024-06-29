# User Management System

A simple User Management System built with PHP that allows administrators to perform CRUD (Create, Read, Update, Delete) operations on user records. This application follows the TDD (Test-Driven Development) approach.

## Features

- Add new users with attributes: username, email, and password.
- Update user information (username, email, password).
- Delete user accounts.
- Display a list of all users with their basic information (username, email).
- Search for users by username or email.
- Basic authentication for administrators.
- Password hashing for enhanced security.
- Protection against common security vulnerabilities (SQL injection, XSS attacks).
- Simple and user-friendly interface using HTML and CSS.
- User records stored in a MariaDB database using PHP's PDO.
- Appropriate error handling and input validation.

## Requirements

- PHP 7.4 or higher
- MariaDB
- Composer

## Installation

### Step 1: Clone the Repository

```sh
git clone https://github.com/LikeAshraful/usermanagement.git
cd usermanagement
```

### Step 2: Install Dependencies

```sh
composer init
composer install
```

### Step 3: Configure the Database

```sh
CREATE DATABASE user_management;

DB_HOST=localhost
DB_NAME=user_management
DB_USER=root
DB_PASS=yourpassword


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, email, password)
VALUES ('admin', 'admin@admin.com', '$2y$10$qmZb7hRwvqUBEywC71Bvd.d4ieMkny91sxbUDsop/GskDzQYipGxq');

```

### Step 4: Start the Server

```sh
php -S localhost:8000
```

### Step 5: Access the Application

Open your browser and navigate to http://localhost:8000/index.php.


