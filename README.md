🏨 Espiransa Resort Management System (RMS)
A modular, MVC-structured Room Reservation System built with Pure PHP and MySQL. This project is designed to manage hotel bookings, user authentication, and administrative tasks for Espiransa Resort.

🚀 Project Overview
This system allows guests to browse rooms and make reservations while providing administrators with tools to manage bookings. It utilizes a custom MVC (Model-View-Controller) architecture to ensure separation of concerns, security, and scalability.

✨ Key Features
User Roles: Separate views for Guests, Admins, and Authenticated Users.

Authentication: Secure Login and Registration system.

Room Management: Browse available rooms and view details.

MVC Architecture: Clean codebase separating Logic (App), UI (Views), and Assets (Public).

🛠️ Tech Stack
Backend: PHP (Object-Oriented, MVC Pattern)

Database: MySQL

Frontend: Bootstrap 5, HTML5, CSS3, JavaScript

Server: Apache (via XAMPP/WAMP/MAMP)

⚙️ Installation & Setup Guide
Follow these steps to set up the project on your local machine.

Prerequisites
XAMPP (or WAMP/MAMP) installed.

Git installed.

Step 1: Clone the Repository
Open your terminal (Git Bash or CMD) and navigate to your server's root directory (usually htdocs for XAMPP).

Bash

cd C:/xampp/htdocs
git clone https://github.com/kayceelyoDev/EspiransaRms.git
Step 2: Database Configuration
Start Apache and MySQL in your XAMPP Control Panel.

Open your browser and go to http://localhost/phpmyadmin.

Create a new database named room_reservation.

Click Import on the top menu.

Choose the file database_schema.sql located in the root folder of the cloned project.

Click Go to create the tables.

Step 3: Connect the Application
Navigate to the folder: app/config/.

Open config.php (or database.php depending on your logic) in your code editor.

Ensure your database credentials match your local setup:

PHP

// Example Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'room_reservation'); // Must match the DB you created
define('DB_USER', 'root');             // Default XAMPP user
define('DB_PASS', '');                 // Default XAMPP password is empty
Step 4: Run the Project
Because this project uses a strict MVC structure with a public entry point, you must access the public folder in your browser.

Go to:

http://localhost/EspiransaRms/public/

(Note: If you access just /EspiransaRms/, you will see a directory listing. You must click public to start the app.)

## 📂 Project Structure

We follow a custom MVC pattern to keep the code organized:

```text
EspiransaRms/
├── app/                  🧠 Backend Logic
│   ├── config/           # Database and App configuration
│   ├── controller/       # Handles business logic (e.g., BookingController)
│   ├── models/           # Database interactions (SQL queries)
│   └── router/           # Route handling logic
│
├── public/               🌍 Public Access (Web Root)
│   ├── assets/           # CSS, JS, Images, and Uploads
│   └── index.php         # Entry point (The Bootstrap file)
│
├── views/                🎨 User Interface
│   ├── components/       # Reusable UI parts (cards, modals)
│   ├── layouts/          # Header, Footer, Main Layouts
│   └── pages/            # Page content (Admin, Auth, Guest, Home)
│
├── database_schema.sql   🗄️ SQL Import File
└── README.md             📖 Documentation

🤝 Contribution
Fork the repository.

Create a feature branch: git checkout -b feature/new-feature.

Commit your changes: git commit -m "Add new feature".

Push to the branch: git push origin feature/new-feature.

Open a Pull Request.
