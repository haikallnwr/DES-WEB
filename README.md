# DES Encryption Web Implementation

A simple web-based application designed to demonstrate the working principles of the **Data Encryption Standard (DES)** algorithm. This project was created as a **Cryptography course assignment** to understand symmetric key encryption.

## Key Features

* **User Authentication:** Secure Login and Register system.
* **Text Encryption/Decryption:** Convert plaintext to ciphertext and vice-versa using DES-ECB mode.
* **File Encryption/Decryption:** Securely encrypt and decrypt uploaded documents or images.
* **Educational Dashboard:** Visual explanation of the DES algorithm history and process.

## Tech Stack

* **PHP** (Native) & OpenSSL Library
* **MySQL** (Database)
* **Bootstrap 5** (Frontend Styling)

## Quick Setup

1.  **Clone the Repo:** Place the project folder in your `htdocs` (XAMPP) or `www` (Laragon) directory.
2.  **Create Database:**
    * Open phpMyAdmin and create a database named `db_desweb`.
    * Run the following SQL query:
        ```sql
        CREATE TABLE users (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL
        );
        ```
3.  **Create Uploads Folder:** Create a new folder named `uploads` in the project root directory (required for file encryption).
4.  **Run:** Access `login.php` in your browser.

## Important Note (PHP 8.1+)

If you are using **PHP 8.1+** or **OpenSSL 3.0**, the DES algorithm is disabled by default (considered legacy). You must enable the **Legacy Provider** in your `openssl.cnf` configuration file or use **PHP 7.4** to ensure the encryption works correctly.

---
*Disclaimer: This project is for educational purposes only. DES is no longer considered secure for sensitive data.*
