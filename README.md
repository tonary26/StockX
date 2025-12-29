# 👟 StockX
### Laravel Backend Project

---

## 📌 Overview
Интернет-магазин кроссовок, разработанный на **Laravel**.
Проект охватывает полный пользовательский и административный цикл: кэширование, аутентификация, корзина, каталог с фильтрацией и CRUD товаров.

> Проект создан как **учебный и портфолио-проект** с упором на чистую backend-архитектуру.

---

## 🛠 Tech Stack
- **PHP** 8.3+
- **Laravel** 12
- **MySQL**
- **Redis** (Caching)
- **Blade**
- **CSS**
- **Vite**
- **Composer**
- **Git**

---

## ⚙️ Requirements
- PHP >= 8.3
- Composer
- Node.js & npm
- MySQL 
- Redis

---

## 🚀 Installation

```bash
git clone https://github.com/tonary26/StockX.git
cd StockX

composer install
npm install

cp .env.example .env
php artisan key:generate
