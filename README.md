# 📓 **My Blog App**

Welcome to **My Blog App**, a user-friendly and robust blogging platform built with Laravel. This app allows users to manage their articles seamlessly, with **CRUD** functionalities, **user authorization**, **authentication**, **search and sort** features, **testing setups**, and **database connectivity** for comprehensive development and deployment.

---

## 🚀 **Features Overview**

- **🔒 Authentication and Authorization**
  - Secure login and registration system.
  - Only authenticated users can create, edit, or delete their articles.

- **📝 CRUD Operations**
  - **Create** and publish new articles.
  - **Read** and view existing articles.
  - **Update** articles as per the user’s choice.
  - **Delete** articles with authorization checks.

- **🔍 Search and Sort**
  - **Search by User:** Locate articles by specific users.
  - **Search by Article:** Find articles by keywords in the title or content.
  - **Sort by Date:** Sort articles by publication date, from newest to oldest or vice versa.

- **🧪 Testing**
  - Comprehensive test cases to ensure reliability and robustness.

- **🔗 Database Connectivity**
  - Automatic database setup with configured environment variables.

---

## 📚 **Technology Stack**
- **Framework:** Laravel
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Database:** MySQL
- **Authentication:** Laravel Auth
- **Testing:** PHP Unit

---

## 📂 **Project Structure**

The app’s structure is straightforward to navigate and extend:

- **Controllers** manage the core application logic, handling user and article actions.
- **Views** offer user-friendly interfaces for interactions.
- **Models** encapsulate data handling and relations.

---

## ⚙️ **Getting Started**

### 1. **Clone the Repository**
    git clone https://github.com/nickgkizis/final-project-CF-blog.git
### 2. **Install PHP**
    Download according to your system
### 3. **Install Composer**
    Download according to your system
### 4. **Install Laravel**
    composer global require laravel/installer
### 5. **Install Dependencies**
    composer install
### 6. **.env File**
Rename .env.example to .env 
Generate an app key

    php artisan key:generate
Update database credentials in the .env file.

    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
### 7. **Run Migrations and Seeders**
    php artisan migrate --seed
### 8. **Start the Application**
    php artisan serve
### 9. **Run Tests**
    php artisan test
