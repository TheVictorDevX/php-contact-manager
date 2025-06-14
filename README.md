📞 Simple PHP Contact Manager
This is a straightforward PHP application designed to demonstrate basic contact management operations, including adding new contacts to a MySQL database with built-in input validation. It's an excellent starting point for learning about PHP form handling, database interaction (PDO), and fundamental data validation techniques.

✨ Features
Add New Contacts: A simple web form allows users to submit contact information (name, phone, and email).

Basic Server-Side Validation:

Name Validation: Ensures the name field does not contain numeric characters.

Phone Validation: Ensures the phone field does not contain alphabetic characters.

Email Validation: Leverages PHP's built-in filter_var function to validate email address format.

MySQL Database Integration: Stores submitted contact details persistently in a MySQL database.

PDO for Database Operations: Utilizes PHP Data Objects (PDO) for secure database interactions, employing prepared statements to prevent SQL injection vulnerabilities.

🚀 Getting Started
Follow these steps to get the Simple PHP Contact Manager up and running on your local machine.

Prerequisites
Before you begin, ensure you have the following installed:

PHP: Version 7.4 or higher is recommended.

MySQL Database: A local or remote MySQL server instance.

Web Server: Apache, Nginx, or any other PHP-compatible web server.

PDO MySQL Extension: This PHP extension is crucial for database connectivity and is usually enabled by default.

Installation
1. Database Setup
First, you need to set up your MySQL database and create the contacts table.

Connect to your MySQL server (e.g., using phpMyAdmin, MySQL Workbench, or the command line) and run the following SQL queries:

-- Create the database
CREATE DATABASE IF NOT EXISTS test;

-- Use the newly created database
USE test;

-- Create the contacts table
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Note: The current index.php file expects the database name to be test. If you choose a different name, remember to update the $dbname variable in your PHP file.

2. Project Files
Download or copy the index.php file into your web server's document root directory. Common locations include:

Apache: /var/www/html/ (Linux) or C:\xampp\htdocs\ (Windows XAMPP)

Nginx: /var/www/html/ (default)

3. Configure Database Connection
Open index.php in a text editor and locate the database connection section. Update the $host, $dbname, $username, and $password variables to match your MySQL server's credentials.

<?php
// ... (other PHP code)

// Database connection parameters
$host = "localhost"; // Your database host (e.g., "localhost" or an IP address)
$dbname = "test";    // The name of your database (as created above)
$username = "root";  // Your MySQL database username
$password = "";      // Your MySQL database password (leave empty if none)

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    // Establish the PDO connection
    // If you have a password, use: $pdo = new PDO($dsn, $username, $password);
    $pdo = new PDO($dsn, $username, $password);
    
    // Set PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully to the database!"; // Optional: for testing connection
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// ... (rest of the PHP code)
?>

4. Run the Application
Once the database and file are configured, open your web browser and navigate to the URL where you placed the file:

http://localhost/index.php

You should see a simple form to add new contacts.

📝 Usage
Open the Application: Access index.php in your web browser.

Enter Contact Details:

Name: Type the contact's full name.

Phone: Enter their phone number.

Email: Provide their email address.

Add Contact: Click the "Add New Contact" button.

Feedback: The page will display a message indicating whether the contact was successfully added or if there were validation errors.

📁 Project Structure
.
└── index.php    # The main (and only) application file

This project consists of a single index.php file containing both the PHP logic for handling form submissions and database interactions, as well as the HTML for the user interface.

💡 Future Enhancements
This project can be expanded in many ways, including:

Displaying Contacts: Add functionality to view all existing contacts in a list or table.

Edit/Delete Contacts: Implement features to update or remove contacts.

Search Functionality: Allow users to search for contacts by name, phone, or email.

Improved UI/UX: Enhance the user interface with CSS frameworks (e.g., Tailwind CSS, Bootstrap) for better aesthetics and responsiveness.

Client-Side Validation: Add JavaScript validation to provide immediate feedback to users before form submission.

Error Handling and Messaging: More robust error display for users.

User Authentication: Implement a login system to protect contact data.

Modularization: Separate PHP logic from HTML for better maintainability (e.g., using a templating system or MVC pattern).

🤝 Contributing
Contributions are welcome! If you have suggestions for improvements or find any issues, please feel free to:

Fork the repository.

Create a new branch (git checkout -b feature/your-feature-name).

Make your changes.

Commit your changes (git commit -m 'Add new feature').

Push to the branch (git push origin feature/your-feature-name).

Open a Pull Request.

📄 License
This project is open-source and available under the MIT License. See the LICENSE file for more details.
