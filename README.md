# Inventory Management System with POS
**Developed by**  
Abu Salah Musha Lemon

## Project Description

The **Inventory Management System with POS** is a comprehensive solution for small businesses to efficiently manage inventory, track sales, and generate reports. This system is built using **Laravel 11** for the backend and **HTML**, **CSS**, **JavaScript**, **jQuery** for the frontend. It provides an intuitive interface to manage product stock, sales, and various business operations, making it ideal for managing a small-scale business with minimal overhead.

---

## Key Features

### Inventory Management:
- Efficiently manage stock levels, product details, and categories.
- Track inventory changes in real time and maintain accurate stock records.

### Point of Sale (POS):
- Seamless sales transactions with an intuitive checkout process.
- Real-time updates to inventory as sales are processed.

### User Authentication:
- Secure login and user authentication provided by **Laravel**.
- Role-based access control, allowing different user permissions (e.g., Admin, Cashier).

### Reporting:
- Generate detailed sales and inventory reports.
- Option to export reports in different formats (CSV, PDF).

### Interactive DataTables:
- Utilize **jQuery DataTables** for dynamic, sortable, and searchable tables, enhancing data management efficiency.

### Responsive Design:
- Built with **Bootstrap** to ensure a responsive and visually appealing interface across all devices (desktop, tablet, mobile).

### Notifications:
- Display real-time notifications to keep users informed of system events and updates.

---

## Technologies Used

### Backend:
- **Framework**: Laravel 11
- **Programming Language**: PHP 8.x
- **Database**: MySQL
- **Authentication**: Built-in Laravel authentication for secure login.
  
### Frontend:
- **HTML**, **CSS**, **JavaScript**
- **jQuery**: Used for dynamic table management with **DataTables** for interactive and sortable tables.
- **Bootstrap**: Ensures a responsive and visually appealing design across all devices.
  
---

## Installation

To get started with the **Inventory Management System with POS**, follow these steps:

### Prerequisites:
- PHP 8.x or higher
- Composer (PHP dependency manager)
- MySQL or MariaDB
- Node.js and NPM (for managing frontend assets)

### Steps to Set Up:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Abu-Salah-Musha-Lemon/inventory-management-system-with-pos.git
   cd inventory-management-system-with-pos
   ```

2. **Install Backend Dependencies:**

   Run the following command to install required PHP dependencies:

   ```bash
   composer install
   ```

3. **Set Up the Environment File:**

   Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

   Then configure your database and other environment variables in the `.env` file:

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate the Application Key:**

   ```bash
   php artisan key:generate
   ```

---

## Additional Configuration

Before running the application, ensure that your PHP environment is properly configured.

### **Configuration `php.ini`:**

- Ensure the following extension is enabled in your `php.ini` file (used for downloading and unzipping files):

    ```ini
    extension=zip
    ```

- Ensure the following extension is enabled in your `php.ini` file (used for generating PDF files):

    ```ini
    extension=gd
    ```

---

5. **Run Database Migrations:**

   After setting up the database, run the Laravel migrations to create the necessary tables:

   ```bash
   php artisan migrate
   ```

6. **Build Frontend Assets:**

   Once the dependencies are installed, build the frontend assets (JavaScript, CSS):

   ```bash
   npm run dev
   ```

7. **Start the Development Server:**

   You can now start the Laravel server by running:

   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

---
8. **Error:**

  did you show utf8mb4_0900_ai_ci error.
  visite the path: config/database.php
  past : 
  ```bash
  mysql=>[
   'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
  ],
  ```
---

## Usage

**Inventory Management System with POS** is designed for small business owners who need an easy-to-use system to manage their inventory and sales operations.

- **Log In:** Use the credentials you set up during installation to log in.
- **Manage Products:** Add, edit, or delete products from your inventory.
- **Process Sales:** Use the POS system to complete customer sales, with real-time inventory updates.
- **Generate Reports:** Access detailed reports for inventory levels, sales transactions, and more.

---

## Contributing

We welcome contributions to improve the **Inventory Management System with POS**. Please follow the fork-and-pull request workflow:

1. Fork the repository
2. Clone your forked repository
3. Create a new branch (`git checkout -b feature-branch`)
4. Make your changes and commit them (`git commit -m 'Add new feature'`)
5. Push to your branch (`git push origin feature-branch`)
6. Open a pull request

---

## License

The **Inventory Management System with POS** is open-source software licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

---

## Contact

For inquiries or support, please reach out to **lemonahmed512@gmail.com**.

---

Thank you for using the **Inventory Management System with POS**! I hope it helps you efficiently manage your inventory and sales operations.

### Key Updates:
1. **Additional Configuration Section:**  
   I've included the configuration changes for `php.ini`, specifying that the `zip` and `gd` extensions need to be enabled.
   
2. **Full Setup Process:**  
   This now includes steps for setting up the environment, installing dependencies, running migrations, building assets, and starting the server.

---
