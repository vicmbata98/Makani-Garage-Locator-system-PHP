# Installation Guide for Makani Garage Locator System

## Prerequisites
- PHP >= 7.2
- Composer
- MySQL or MariaDB

## Installation Steps

1. **Clone the Repository**  
   Clone the project to your local machine using the following command:  
   ```bash
   git clone https://github.com/vicmbata98/Makani-Garage-Locator-system-PHP.git
   cd Makani-Garage-Locator-system-PHP
   ```

2. **Install Dependencies**  
   Make sure you have Composer installed on your machine. Run the following command to install the required dependencies:  
   ```bash
   composer install
   ```

3. **Configure Database**  
   Create a MySQL database and update the `.env` file with your database credentials. Here is an example of how the `.env` file should look:  
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Run Migrations**  
   After configuring the database, run the following command to migrate the database:  
   ```bash
   php artisan migrate
   ```

5. **Serve the Application**  
   You can now run the application locally using the Artisan command:  
   ```bash
   php artisan serve
   ```
   Access the application at `http://localhost:8000`

## Conclusion
You have successfully installed the Makani Garage Locator System! You can now begin using the application or modify it as needed.