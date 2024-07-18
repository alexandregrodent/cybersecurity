# DVWA Web Server Setup

## Description

This project sets up a secure, maintainable, and performant web server with DVWA for learning and testing web vulnerabilities.

## Structure

-   **config/**: Configuration files for the application and database.
-   **public/**: Publicly accessible files, including the main entry point and DVWA files.
-   **logs/**: Access and error logs.
-   **scripts/**: Scripts for automation and testing.
-   **src/**: Source code, organized by MVC architecture.
-   **tests/**: Unit, integration, and functional tests.

## Setup

1. **Install dependencies**:

    ```bash
    sudo apt install dvwa
    ```

2. **Configure the database**:

    - Create the database and user:
        ```sql
        CREATE DATABASE dvwa;
        CREATE USER 'dvwa'@'localhost' IDENTIFIED BY 'password';
        GRANT ALL PRIVILEGES ON dvwa.* TO 'dvwa'@'localhost';
        FLUSH PRIVILEGES;
        ```

3. **Update configuration files**:

    - Update `config/config.inc.php` with your database settings.

4. **Start the server**:

    ```bash
    sudo service apache2 restart
    ```

5. **Access DVWA**:
   Open `http://localhost/dvwa` in your browser.

## Testing

-   **Run unit tests**:
    ```bash
    ./vendor/bin/phpunit tests/unit
    ```
