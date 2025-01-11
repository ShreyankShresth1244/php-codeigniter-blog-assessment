Here is the updated `README.md` file including references to the images you've added to the GitHub repository:

---

# Blog Application

## Project Overview

The **Blog Application** is a simple web-based platform for managing blog posts and comments. Built using **PHP CodeIgniter**, it features a responsive interface with **Bootstrap** styling and allows CRUD operations on blog posts.

---

## Features

### 1. Homepage
- Displays a list of blog posts with:
  - Title
  - Excerpt (first 100 characters of the content)
  - Author name
  - Publication date
  - A "Read More" button linking to the blog's detail page.
  
![Homepage](https://github.com/ShreyankShresth1244/php-codeigniter-blog-assessment/blob/main/images/homepage.png)

---

### 2. Blog Detail Page
- Displays full details of a selected blog post.
- Includes a comment section where users can:
  - Add their name, email, and comment.
  - View all existing comments.

![Blog Detail Page](https://github.com/ShreyankShresth1244/php-codeigniter-blog-assessment/blob/main/images/blog-detail.png)

---

### 3. Admin Panel
- Allows administrators to:
  - Add new blog posts.
  - Edit existing blog posts.
  - Delete blog posts.

![Admin Panel](https://github.com/ShreyankShresth1244/php-codeigniter-blog-assessment/blob/main/images/admin-panel.png)

---

### 4. Create Blog Post
- A form for administrators to create new blog posts by entering:
  - Title
  - Content
  - Author name

![Create Blog Post](https://github.com/ShreyankShresth1244/php-codeigniter-blog-assessment/blob/main/images/create-post.png)

---

### 5. Edit Blog Post
- A form for administrators to update existing blog posts by modifying:
  - Title
  - Content
  - Author name

![Edit Blog Post](https://github.com/ShreyankShresth1244/php-codeigniter-blog-assessment/blob/main/images/edit-post.png)

---

## Folder Structure

```plaintext
blog_app/
├── app/
│   ├── Controllers/
│   │   ├── BlogController.php
│   │   ├── AdminController.php
│   ├── Models/
│   │   ├── BlogModel.php
│   │   ├── CommentModel.php
│   ├── Views/
│   │   ├── blogs/
│   │   │   ├── index.php
│   │   │   ├── detail.php
│   │   ├── admin/
│   │   │   ├── index.php
│   │   │   ├── create.php
│   │   │   ├── edit.php
├── public/
│   ├── index.php
├── writable/
├── .env
├── composer.json
├── README.md
├── images/
│   ├── homepage.png
│   ├── blog-detail.png
│   ├── admin-panel.png
│   ├── create-post.png
│   ├── edit-post.png
```

---

## Instructions to Set Up the Project Locally

### Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL
- Apache or Nginx server
- Git

---

### Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/ShreyankShresth1244/php-codeigniter-blog-assessment.git
   cd php-codeigniter-blog-assessment
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   ```

3. **Set Up the Database**:
   - Create a database (e.g., `blog_db`).
   - Import the SQL schema:
     ```bash
     mysql -u <username> -p < blog_db.sql
     ```

4. **Configure Environment Variables**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials:
     ```env
     database.default.hostname = localhost
     database.default.database = blog_db
     database.default.username = <your_database_username>
     database.default.password = <your_database_password>
     database.default.DBDriver = MySQLi
     ```

5. **Run the Application**:
   Start the built-in PHP server:
   ```bash
   php spark serve
   ```
   The application will be available at `http://localhost:8080`.

---

## Instructions to Run the Project

1. Open the homepage at `http://localhost:8080` to view blog posts.
2. Use the "Read More" button to navigate to the blog detail page.
3. Access the admin panel at `http://localhost:8080/admin` to manage blogs:
   - Add, edit, or delete blog posts.

---

## Assumptions and Limitations

### Assumptions
- All users accessing the admin panel are authorized administrators.
- Basic error handling is implemented.

### Limitations
- No user authentication for the admin panel.
- Comments cannot be edited or deleted.
- No pagination for blog posts on the homepage.

---

## Contact

For any issues, reach out to **Shreyank Shresth** at [shreyankmit@gmail.com](mailto:shreyankmit@gmail.com).

---

Let me know if you need any additional updates! 😊
