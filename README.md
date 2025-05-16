
 ## ✨ BizConsult
 
  BizConsult is a modern, responsive website template designed for business consulting agencies, corporate firms, and professional service providers. It offers a clean and elegant interface, ideal for showcasing company information, services, testimonials, and contact details. This project is perfect for developers, freelancers, or small businesses looking for a ready-to-use front-end solution to build a professional online presence quickly and efficiently.


## ✨ Features

- Built with **Bootstrap 5**
- Fully responsive and mobile-friendly
- Sticky navigation bar
- Animated elements on scroll
- Testimonial carousel (Owl Carousel)
- Newsletter subscription form
- Clean and organized code
- SEO-friendly structure
- Font Awesome icons
- Google Fonts integration

## 🛠️ Tech Stack

**Frontend:**  
- HTML5, CSS3, Bootstrap 5 (BizConsult Template)  
- Blade Templating (Laravel)  

**Backend:**  
- PHP (Laravel Framework)  
- Composer (PHP package management)  

**Development Tools:**  
- Node.js, npm (for asset compilation with Laravel Mix)  
- Laravel Mix (Webpack wrapper)  

## 🔧 Installation (Using Laravel)

To get started, clone this repository.

```
git clone https://github.com/h35h7m/BizConsult.git
```

Next, copy your `.env.example` file as `.env` and configure your Database connection.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR-DATABASE-NAME
DB_USERNAME=YOUR-DATABASE-USERNAME
DB_PASSWORD=YOUR-DATABASE-PASSWROD
```

## Run Packages and helpers

You have to all used packages and load helpers as below.

```
composer install
npm install
npm run build
```

## Generate new application key

You have to generate new application key as below.

```
php artisan key:generate
```

## Run Migrations and seeders

You have to run all the migration files included with the project and also run seeders as below.

```
php artisan migrate
php artisan db:seed
```


