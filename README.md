# SISTEM MONITORING NILAI TEGANGAN DAN ARUS BERBASIS WEB
Menampilkan dan mengamati data nilai tegangan dan nilai arus yang diperoleh dari suatu alat yang datanya dimasukan ke dalam database dan ditampilkan pada website serta Pengguna akan dapat mengunduh data tersebut dalam format file xlsx dan txt. Ini memungkinkan peneliti untuk melakukan analisis lebih mendalam di luar platform web.

## Table of Contents
- [1. Visual Studio Code (VSCode)](#1-visual-studio-code-vscode)
  - [1.1 Download and Installation](#11-download-and-installation)
- [2. XAMPP](#2-xampp)
  - [2.1 Download and Installation](#21-download-and-installation)
  - [2.2 Locating Project Files in localhost](#22-locating-project-files-in-localhost)
- [3. Importing SQL File into phpMyAdmin](#3-importing-sql-file-into-phpmyadmin)
  - [3.1 Access phpMyAdmin](#31-access-phpmyadmin)
  - [3.2 Import SQL File](#32-import-sql-file)
- [4. Inserting Data into Database](#4-inserting-data-into-database)
  - [4.1 Use Example Query](#41-use-example-query)

## 1. Visual Studio Code (VSCode)

Visual Studio Code is a lightweight and powerful source code editor that is available for Windows, macOS, and Linux. It comes with built-in support for JavaScript, TypeScript, and Node.js and has a rich ecosystem of extensions for other languages (C++, Python, PHP, etc.) and tools.

### 1.1 Download and Installation

Follow these steps to download and install Visual Studio Code:

1. Visit the official VSCode website at [https://code.visualstudio.com/](https://code.visualstudio.com/).
2. Click on the "Download" button for your operating system (Windows, macOS, or Linux).
3. Follow the installation instructions provided on the website.
4. Once installed, open VSCode and you're ready to start coding!

## 2. XAMPP

XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends. It includes Apache HTTP Server, MariaDB database, and interpreters for scripts written in PHP and Perl.

### 2.1 Download and Installation

Follow these steps to download and install XAMPP:

1. Visit the official XAMPP website at [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Navigate to the "Download" section and choose the appropriate version for your operating system (Windows, macOS, or Linux).
3. Start the installation process by running the downloaded installer.
   - On Windows, follow the on-screen instructions to complete the installation.
   - On macOS, drag and drop the XAMPP folder to your "Applications" directory.
   - On Linux, follow the terminal-based installation instructions provided on the website.
4. Once installed, launch XAMPP control panel and start the Apache server and MySQL database.
5. Open your web browser and navigate to `http://localhost` to confirm that XAMPP is running successfully.

### 2.2 Locating Project Files in localhost

Your project files should be placed in the `htdocs` directory within the XAMPP installation. Assuming your project is named "brinnew," follow these steps:

1. Open the XAMPP installation directory on your computer.
   - On Windows, it's typically located in `C:\xampp`.
   - On macOS, it's in the `Applications/XAMPP` directory.
   - On Linux, it depends on your installation path.

2. Navigate to the `htdocs` directory.
   - For example, the full path could be `C:\xampp\htdocs` on Windows.

3. Create a folder named "brinnew" in the `htdocs` directory.

4. Place your project files inside the "brinnew" folder.

Now, you can access your project in the browser using the URL `http://localhost/brinnew`.

## 3. Importing SQL File into phpMyAdmin

### 3.1 Access phpMyAdmin

1. Open your web browser.
2. Navigate to `http://localhost/phpmyadmin`.
3. Log in with the MySQL username and password you set during the XAMPP installation.

### 3.2 Import SQL File

1. In phpMyAdmin, select the database where you want to import the SQL file.
2. Click on the "Import" tab in the top menu.
3. Choose the SQL file you want to import by clicking on "Choose File."
4. Click the "Go" button to start the import process.

Now, your SQL file has been imported into the selected database in phpMyAdmin.

## 4. Inserting Data into Database

### 4.1 Use Example Query

To insert data into the "data" table in the "brinnew" database, you can use the following example SQL query:

```sql
INSERT INTO `data` (`data_id`, `username`, `timestamp`, `voltage`, `amperage`) VALUES
(1, 'AimLesson', '2023-11-11 19:00:20', 30, 4);
