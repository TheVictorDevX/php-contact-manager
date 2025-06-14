# 📞 Simple PHP Contact Manager

A beginner-friendly PHP application for managing contacts with basic form handling, input validation, and secure database interaction using PDO. Ideal for anyone looking to learn the foundations of PHP and MySQL.

---

## ✨ Features

* **Add New Contacts**

  * Submit contact information (name, phone, email) via a simple web form.

* **Server-Side Validation**

  * ✍️ **Name**: Must not contain numbers.
  * 📱 **Phone**: Must not contain letters.
  * 📧 **Email**: Validated using `filter_var()`.

* **Database Integration**

  * MySQL storage for persistent contact records.

* **PDO for Database Access**

  * Secure database connection with prepared statements to prevent SQL injection.

---

## 🚀 Getting Started

### Prerequisites

Make sure you have the following installed:

* PHP 7.4+
* MySQL Server
* Web Server (Apache, Nginx, etc.)
* PDO MySQL Extension (usually enabled by default)

### 1. Database Setup

Run the following SQL statements:

```sql
CREATE DATABASE IF NOT EXISTS test;
USE test;

CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 2. Project Setup

Place `index.php` into your server's document root:

* **Apache** (XAMPP): `C:\xampp\htdocs\`
* **Linux (Apache/Nginx)**: `/var/www/html/`

### 3. Configure Database Connection

Edit the DB section in `index.php`:

```php
$host = "localhost";
$dbname = "test";
$username = "root";
$password = "";
```

If you use a different DB name, remember to update `$dbname`.

---

## 📝 Usage

1. Open your browser and navigate to:

   ```
   http://localhost/index.php
   ```

2. Fill out the contact form.

3. Click **"Add New Contact"**.

4. View success or error messages based on validation.

---

## 📁 Project Structure

```
.
└── index.php  # All logic and UI in one file
```

---

## 💡 Future Enhancements

* 📃 View all contacts in a table
* ✏️ Edit/Delete functionality
* 🔍 Search contacts
* 🖼️ Responsive UI with Bootstrap or Tailwind CSS
* 🚧 Client-side validation with JavaScript
* ⚡ Better error handling and flash messages
* 🔐 User authentication (login/logout)
* 📊 MVC structure or template separation for cleaner code

---

## 👥 Contributing

Pull requests are welcome! Here's how:

1. Fork the repo
2. Create a branch: `git checkout -b feature/your-feature`
3. Commit your changes: `git commit -m "Add feature"`
4. Push: `git push origin feature/your-feature`
5. Submit a Pull Request

---

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Happy coding! ✨
