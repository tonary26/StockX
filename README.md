# 👟 StockX
### Laravel Backend Project

---

## 📌 Overview
Интернет-магазин кроссовок, разработанный на **Laravel**.  
Проект реализует полный пользовательский цикл: аутентификация, корзина, каталог с фильтрацией, CRUD товаров и кэширование через Redis.  
Поддерживается запуск как локально, так и через Docker.

Проект создан как **учебный и портфолио-проект** с упором на чистую архитектуру.

---

## 🛠 Tech Stack
- PHP 8.3+
- Laravel 12
- MySQL
- Redis (Caching)
- Docker & Docker Compose
- Blade
- CSS
- Vite
- Composer
- Git

---

## ⚙️ Requirements
PHP >= 8.3, Composer, Node.js & npm, MySQL, Redis  
или  
Docker, Docker Compose

---

## 🚀 Installation & Run

### Local
```bash
git clone https://github.com/tonary26/StockX.git
cd StockX
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

### Docker
```bash
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed
docker compose exec app php artisan storage:link
```
