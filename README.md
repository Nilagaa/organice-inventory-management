# Organice: Inventory Management System

Organice is a PHP-based Inventory Management System built for small-scale businesses and organizations to manage their inventory effectively. The system offers a straightforward login module and an organized interface for managing categories, suppliers, products, and inventory.

---

## Features
- **Login System**: Restricted access through a secure login module.
- **Dashboard**: Displays navigation to categories, suppliers, products, and inventory.
- **Inventory Management**: Add, edit, and remove items systematically.
- **Modular Structure**: Reusable components like header, footer, and container for consistency.

---

## Folder Structure
- **`assets/`**: Contains images used in the application.
- **`css/`**: Contains CSS stylesheets.
- **`inc/`**: Includes reusable components (e.g., header, footer).
- **`js/`**: JavaScript files for interactivity.
- **`sql/`**: SQL file for setting up the database (`ims_db.sql`).
- **`videos/`**: Demo videos showcasing functionality.

---

## Requirements
- **XAMPP**: For running Apache and MySQL.
- **PHPMyAdmin**: To manage the database.

---

## Installation and Setup
1. Install **XAMPP**.
2. Start **Apache** and **MySQL** using the XAMPP control panel.
3. Open **PHPMyAdmin** at `http://localhost/phpmyadmin`.
4. Create a database named `ims_db`.
5. Import the SQL file located in the `sql/` folder (`ims_db.sql`).
6. Place the project files in the `htdocs` directory of XAMPP.
7. Access the application in your browser at `http://localhost/organice/`.

---

## Usage Instructions
1. Navigate to the `login.php` page.
2. Use the following credentials to log in:
   - **Email**: `admin@mail.com`
   - **Password**: `admin123`
3. Explore the features:
   - Manage categories, suppliers, and products.
   - Add, edit, or remove items from the inventory.

---

## Demo Videos
- **Login Module**: [View Demo](videos/log-in_module.mp4)
- **System Overview**: [View Demo](videos/admin_module.mp4)

---

## Notes
- To add new users, update the `ims_user` table in PHPMyAdmin.
- The system does not include a tax or registration module.

---

## License
This project is licensed under the [MIT License](LICENSE).

---

## Author
[Nilagaa](https://github.com/nilagaa)
