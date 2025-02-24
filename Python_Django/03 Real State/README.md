# Real Estate Listing Project

## Overview
This is a **Django-based** real estate listing web application that allows users to browse property listings, view details, and contact realtors. The project follows a modular approach, making it scalable and maintainable.

## Features
- User authentication (Register, Login, Dashboard)
- Property listings with search and filtering
- Contact realtors via inquiry forms
- Responsive design with Bootstrap
- Admin panel for managing listings and user inquiries

## Technologies Used
- **Backend:** Django, Python
- **Database:** SQLite (can be replaced with PostgreSQL/MySQL)
- **Frontend:** HTML, CSS (Bootstrap), JavaScript (jQuery)
- **Other:** Django ORM, Django Templates

## Project Structure

real-estate-listings/
│── manage.py                # Django project management script
│── requirements.txt         # Project dependencies
│── .gitignore               # Git ignored files
│
├── accounts/                # User authentication
│   ├── admin.py
│   ├── apps.py
│   ├── models.py
│   ├── tests.py
│   ├── urls.py
│   ├── views.py
│   ├── migrations/
│   │   ├── __init__.py
│
├── btre/                    # Main Django project configuration
│   ├── settings.py
│   ├── urls.py
│   ├── wsgi.py
│   ├── static/              # Static files (CSS, JS, images)
│   │   ├── css/
│   │   │   ├── admin.css
│   │   │   ├── style.css
│   │   ├── js/
│   │   │   ├── main.js
│   │   │   ├── lightbox.min.js
│   │   ├── img/
│   │       ├── logo.png
│   │       ├── showcase.jpg
│
├── contacts/                # Contact forms for inquiries
│   ├── admin.py
│   ├── apps.py
│   ├── models.py
│   ├── urls.py
│   ├── views.py
│   ├── migrations/
│   │   ├── 0001_initial.py
│   │   ├── __init__.py
│
├── listings/                # Property listings
│   ├── admin.py
│   ├── apps.py
│   ├── choices.py           # Choices for model fields
│   ├── models.py
│   ├── tests.py
│   ├── urls.py
│   ├── views.py
│   ├── migrations/
│   │   ├── 0001_initial.py
│   │   ├── __init__.py
│
├── pages/                   # Static pages (home, about)
│   ├── admin.py
│   ├── apps.py
│   ├── urls.py
│   ├── views.py
│   ├── migrations/
│   │   ├── __init__.py
│
├── realtors/                # Realtors module
│   ├── admin.py
│   ├── apps.py
│   ├── models.py
│   ├── views.py
│   ├── migrations/
│   │   ├── 0001_initial.py
│   │   ├── __init__.py
│
├── templates/               # HTML templates for the frontend
│   ├── base.html            # Base template
│   ├── accounts/
│   │   ├── dashboard.html
│   │   ├── login.html
│   │   ├── register.html
│   ├── listings/
│   │   ├── listing.html
│   │   ├── listings.html
│   │   ├── search.html
│   ├── pages/
│   │   ├── about.html
│   │   ├── index.html
│   ├── partials/
│   │   ├── _alerts.html
│   │   ├── _footer.html
│   │   ├── _navbar.html
│   │   ├── _topbar.html
