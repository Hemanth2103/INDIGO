
$host = 'localhost';
$port = '5432';
$dbname = 'your_database_name';
$user = 'your_username';
$password = 'your_password';

$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

// Create users table
$pdo->exec("
    CREATE TABLE IF NOT EXISTS users (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role VARCHAR(255) NOT NULL,
        status VARCHAR(255) NOT NULL
    )
");

// Create products table
$pdo->exec("
    CREATE TABLE IF NOT EXISTS products (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        quantity INT NOT NULL
    )
");

// Create sales table
$pdo->exec("
    CREATE TABLE IF NOT EXISTS sales (
        id SERIAL PRIMARY KEY,
        product_id INT NOT NULL,
        user_id INT NOT NULL,
        quantity INT NOT NULL,
        total_price DECIMAL(10, 2) NOT NULL,
        sale_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
");
