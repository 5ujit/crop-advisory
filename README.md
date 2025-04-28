# Crop Advisory and Farmer's Companion

This is a Laravel-based web application designed to help farmers with crop suggestions, weather precautions, pest alerts, and more. Farmers can register, log in, and submit their ideas and needs.

## 🚀 Setup Instructions

Follow these steps to get the project up and running on your local machine.

---

### 🔁 Clone the Repository
```bash
git clone https://github.com/your-username/crop-advisory.git
cd crop-advisory
```

### 📦 Install Composer Dependencies
```bash
composer install
```

### ⚙️ Setup Environment File
```bash
cp .env.example .env
```
> On Windows:
```bash
copy .env.example .env
```

### 🔑 Generate App Key
```bash
php artisan key:generate
```

### 🛠️ Set Up Database
Edit the `.env` file and set your local database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crop_advisory
DB_USERNAME=root
DB_PASSWORD=
```

### 🗃️ Run Migrations
```bash
php artisan migrate
```

### 🌐 Serve the Application
```bash
php artisan serve
```
Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 👨‍🌾 Features
- Crop Management (Add, Edit, View, Delete)
- Weather Info (API Integrated)
- Farmer Ideas & Needs Submission *(Coming Soon)*
- User Authentication *(Coming Soon)*

---

## 🤝 Contributions
Contributions are welcome! Fork the repo and create a pull request.

---

## 🛡️ License
This project is licensed under the MIT License.

---

## 🙌 Credits
Made with ❤️ using Laravel by Shashwat

