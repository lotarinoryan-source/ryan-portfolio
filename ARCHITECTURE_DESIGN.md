# Ryan Mark Portfolio Website - Architecture Design Document

**Project Name:** Ryan Mark Portfolio Website  
**Version:** 1.0  
**Date:** December 2024  
**Developer:** Ryan Mark Lotarino  
**Technology Stack:** Laravel 11, PHP 8.2, MySQL, HTML5, CSS3, JavaScript

---

## Table of Contents
1. [Executive Summary](#executive-summary)
2. [System Overview](#system-overview)
3. [Architecture Diagram](#architecture-diagram)
4. [Technology Stack](#technology-stack)
5. [Database Design](#database-design)
6. [Application Structure](#application-structure)
7. [Features & Functionality](#features--functionality)
8. [Security Considerations](#security-considerations)
9. [Deployment Architecture](#deployment-architecture)
10. [Future Enhancements](#future-enhancements)

---

## 1. Executive Summary

The Ryan Mark Portfolio Website is a full-stack web application built with Laravel framework, designed to showcase graphic design work, provide interactive features, and serve as a professional online presence. The application includes a contact management system, review functionality, and multiple portfolio galleries.

### Key Objectives
- Showcase professional design portfolio
- Enable client communication through contact forms
- Collect and display customer reviews
- Provide responsive design for all devices
- Demonstrate technical capabilities through working demos

---

## 2. System Overview

### 2.1 Purpose
A professional portfolio website that serves as:
- Digital portfolio showcase
- Client communication platform
- Review and testimonial collection system
- Demonstration of technical skills

### 2.2 Target Users
- Potential clients seeking design services
- Recruiters and employers
- Fellow designers and collaborators
- General visitors

### 2.3 Core Functionality
- Portfolio galleries (Graphic Design, Web Design, UI/UX, App Design)
- Contact form with email notifications
- Review submission and display system
- Responsive navigation
- Interactive demos (Task Manager App)

---

## 3. Architecture Diagram

```
┌─────────────────────────────────────────────────────────────┐
│                        CLIENT LAYER                          │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐  ┌──────────┐   │
│  │ Desktop  │  │  Tablet  │  │  Mobile  │  │  Browser │   │
│  └──────────┘  └──────────┘  └──────────┘  └──────────┘   │
└─────────────────────────────────────────────────────────────┘
                            ↓ HTTP/HTTPS
┌─────────────────────────────────────────────────────────────┐
│                    PRESENTATION LAYER                        │
│  ┌──────────────────────────────────────────────────────┐  │
│  │              Blade Templates (Views)                  │  │
│  │  • welcome.blade.php    • services.blade.php         │  │
│  │  • about.blade.php      • contact.blade.php          │  │
│  │  • graphic-design       • web-design                 │  │
│  │  • uiux-design          • app-design                 │  │
│  └──────────────────────────────────────────────────────┘  │
│  ┌──────────────────────────────────────────────────────┐  │
│  │              Static Assets                            │  │
│  │  • CSS (style.css, responsive.css)                   │  │
│  │  • JavaScript (inline & external)                    │  │
│  │  • Images (photos/, assets/)                         │  │
│  └──────────────────────────────────────────────────────┘  │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                    APPLICATION LAYER                         │
│  ┌──────────────────────────────────────────────────────┐  │
│  │              Laravel Framework                        │  │
│  │  ┌────────────────┐  ┌────────────────┐             │  │
│  │  │   Routing      │  │  Middleware    │             │  │
│  │  │  (web.php)     │  │  (CSRF, Auth)  │             │  │
│  │  └────────────────┘  └────────────────┘             │  │
│  │  ┌────────────────────────────────────────────────┐ │  │
│  │  │            Controllers                          │ │  │
│  │  │  • ContactController                            │ │  │
│  │  │  • ReviewController                             │ │  │
│  │  └────────────────────────────────────────────────┘ │  │
│  │  ┌────────────────────────────────────────────────┐ │  │
│  │  │            Models                               │ │  │
│  │  │  • ContactSubmission                            │ │  │
│  │  │  • Review                                       │ │  │
│  │  └────────────────────────────────────────────────┘ │  │
│  └──────────────────────────────────────────────────────┘  │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                      DATA LAYER                              │
│  ┌──────────────────────────────────────────────────────┐  │
│  │              MySQL Database                           │  │
│  │  ┌────────────────────┐  ┌────────────────────┐     │  │
│  │  │ contact_submissions│  │     reviews        │     │  │
│  │  │ • id               │  │ • id               │     │  │
│  │  │ • first_name       │  │ • name             │     │  │
│  │  │ • last_name        │  │ • email            │     │  │
│  │  │ • email            │  │ • rating           │     │  │
│  │  │ • service          │  │ • comment          │     │  │
│  │  │ • subject          │  │ • is_approved      │     │  │
│  │  │ • message          │  │ • timestamps       │     │  │
│  │  │ • is_read          │  └────────────────────┘     │  │
│  │  │ • timestamps       │                             │  │
│  │  └────────────────────┘                             │  │
│  └──────────────────────────────────────────────────────┘  │
└─────────────────────────────────────────────────────────────┘
                            ↓
┌─────────────────────────────────────────────────────────────┐
│                   EXTERNAL SERVICES                          │
│  ┌──────────────────┐  ┌──────────────────┐               │
│  │  Email Service   │  │  File Storage    │               │
│  │  (Mailtrap/SMTP) │  │  (Local/Cloud)   │               │
│  └──────────────────┘  └──────────────────┘               │
└─────────────────────────────────────────────────────────────┘
```

---

## 4. Technology Stack

### 4.1 Backend
- **Framework:** Laravel 11.x
- **Language:** PHP 8.2+
- **Database:** MySQL 8.0
- **ORM:** Eloquent
- **Template Engine:** Blade

### 4.2 Frontend
- **HTML5:** Semantic markup
- **CSS3:** Custom styling with gradients and animations
- **JavaScript:** Vanilla JS for interactivity
- **Responsive Design:** Mobile-first approach

### 4.3 Development Tools
- **Composer:** Dependency management
- **Artisan:** Laravel CLI tool
- **Git:** Version control

### 4.4 Third-Party Services
- **Mailtrap:** Email testing
- **Gmail SMTP:** Production email delivery

---

## 5. Database Design

### 5.1 Database Schema

#### Table: `contact_submissions`
```sql
CREATE TABLE contact_submissions (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    service VARCHAR(255) NULL,
    subject VARCHAR(255) NULL,
    message TEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

#### Table: `reviews`
```sql
CREATE TABLE reviews (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NULL,
    rating INTEGER NOT NULL CHECK (rating >= 1 AND rating <= 5),
    comment TEXT NOT NULL,
    is_approved BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

#### Table: `achievements`
```sql
CREATE TABLE achievements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NULL,
    date DATE NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

### 5.2 Entity Relationship Diagram

```
┌─────────────────────┐
│ contact_submissions │
├─────────────────────┤
│ id (PK)             │
│ first_name          │
│ last_name           │
│ email               │
│ service             │
│ subject             │
│ message             │
│ is_read             │
│ timestamps          │
└─────────────────────┘

┌─────────────────────┐
│      reviews        │
├─────────────────────┤
│ id (PK)             │
│ name                │
│ email               │
│ rating              │
│ comment             │
│ is_approved         │
│ timestamps          │
└─────────────────────┘

┌─────────────────────┐
│   achievements      │
├─────────────────────┤
│ id (PK)             │
│ title               │
│ description         │
│ date                │
│ timestamps          │
└─────────────────────┘
```

---

## 6. Application Structure

### 6.1 Directory Structure
```
portfolio/laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── ContactController.php
│   │       └── ReviewController.php
│   └── Models/
│       ├── ContactSubmission.php
│       └── Review.php
├── database/
│   ├── migrations/
│   │   ├── create_contact_submissions_table.php
│   │   ├── create_reviews_table.php
│   │   └── create_achievements_table.php
│   └── seeders/
│       └── ReviewSeeder.php
├── public/
│   ├── assets/
│   │   ├── photos/
│   │   ├── profile1.png
│   │   └── rylogo.png
│   ├── style.css
│   ├── responsive.css
│   └── index.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── components/
│       │   └── header.blade.php
│       ├── emails/
│       │   └── contact.blade.php
│       ├── apps/
│       │   └── task-manager.blade.php
│       ├── welcome.blade.php
│       ├── about.blade.php
│       ├── services.blade.php
│       ├── contact.blade.php
│       ├── graphic-design.blade.php
│       ├── web-design.blade.php
│       ├── uiux-design.blade.php
│       └── app-design.blade.php
├── routes/
│   └── web.php
└── .env
```

### 6.2 MVC Pattern Implementation

**Models:**
- Handle database interactions
- Define relationships
- Implement business logic

**Views:**
- Blade templates for UI
- Reusable components
- Responsive layouts

**Controllers:**
- Handle HTTP requests
- Process form submissions
- Return responses

---

## 7. Features & Functionality

### 7.1 Core Features

#### Home Page
- Hero section with profile image
- Call-to-action buttons
- Customer review counter (clickable)
- Social media links
- Responsive design

#### Services Page
- Four service categories:
  - Graphic Design
  - UI/UX Design
  - Web Design
  - App Design
- Clickable cards linking to portfolios
- Hover animations

#### About Page
- Personal introduction
- Tabbed interface:
  - Education
  - Experience
  - Skills
  - Achievements
- Skill progress bars
- Statistics display

#### Contact Page
- Contact information cards (Phone, Email, Location)
- Multi-field contact form:
  - First Name & Last Name
  - Email Address
  - Service Interested In
  - Subject
  - Message
- Form validation
- Email notification system
- Success modal

#### Portfolio Pages
- **Graphic Design:** 18 real project images with lightbox
- **Web Design:** 6 dummy projects with descriptions
- **UI/UX Design:** 6 dummy projects with descriptions
- **App Design:** 6 projects (1 working demo)
- Masonry grid layout
- Image zoom and pan
- Responsive columns

#### Review System
- Modal interface
- Two tabs: "See Reviews" and "Post Review"
- Star rating input (1-5 stars)
- Form fields: Name, Email (optional), Rating, Comment
- Real-time review display
- Database storage
- Automatic approval

#### Working Apps
- **Task Manager App:**
  - Add/delete tasks
  - Mark complete/incomplete
  - Local storage persistence
  - Statistics dashboard
  - Responsive design

### 7.2 Technical Features

#### Responsive Design
- Mobile-first approach
- Breakpoints: 480px, 640px, 768px, 1024px, 1200px
- Hamburger menu for mobile
- Touch-friendly controls
- Adaptive layouts

#### Email System
- SMTP configuration
- HTML email templates
- Reply-to functionality
- Error handling
- Mailtrap for testing

#### Database Integration
- Eloquent ORM
- Migration system
- Seeder for dummy data
- Timestamps tracking

#### Security
- CSRF protection
- Input validation
- SQL injection prevention
- XSS protection
- Secure email handling

---

## 8. Security Considerations

### 8.1 Implemented Security Measures

1. **CSRF Protection**
   - Laravel's built-in CSRF tokens
   - All forms include @csrf directive

2. **Input Validation**
   - Server-side validation
   - Type checking
   - Length restrictions
   - Email format validation

3. **SQL Injection Prevention**
   - Eloquent ORM with parameter binding
   - No raw SQL queries

4. **XSS Protection**
   - Blade template escaping
   - {{ }} syntax for output

5. **Email Security**
   - Environment variable configuration
   - Secure SMTP connection
   - No credentials in code

### 8.2 Best Practices
- Environment variables for sensitive data
- Regular dependency updates
- Error logging
- Input sanitization

---

## 9. Deployment Architecture

### 9.1 Development Environment
```
Local Machine (XAMPP)
├── Apache Web Server
├── MySQL Database
├── PHP 8.2
└── Laravel Application
```

### 9.2 Production Deployment (Recommended)

```
┌─────────────────────────────────────┐
│         Load Balancer               │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│      Web Server (Nginx/Apache)      │
│  ┌───────────────────────────────┐  │
│  │   Laravel Application         │  │
│  │   (PHP-FPM)                   │  │
│  └───────────────────────────────┘  │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│      Database Server (MySQL)        │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│      File Storage (S3/Local)        │
└─────────────────────────────────────┘
```

### 9.3 Deployment Checklist
- [ ] Configure production .env file
- [ ] Set APP_ENV=production
- [ ] Set APP_DEBUG=false
- [ ] Configure database credentials
- [ ] Set up email service (Gmail SMTP)
- [ ] Run migrations
- [ ] Optimize application (php artisan optimize)
- [ ] Set proper file permissions
- [ ] Configure SSL certificate
- [ ] Set up backup system

---

## 10. Future Enhancements

### 10.1 Planned Features
1. **Admin Dashboard**
   - Manage contact submissions
   - Approve/reject reviews
   - Upload new portfolio images
   - View analytics

2. **Blog Section**
   - Design articles
   - Tutorial posts
   - Case studies

3. **More Working Demos**
   - Weather App
   - Music Player
   - Chat Application
   - Fitness Tracker

4. **Advanced Features**
   - Dark mode toggle
   - Multi-language support
   - Search functionality
   - Project filtering
   - Download resume button

5. **Performance Optimization**
   - Image lazy loading
   - CDN integration
   - Caching system
   - Database indexing

6. **Analytics**
   - Google Analytics integration
   - Visitor tracking
   - Conversion tracking

### 10.2 Technical Improvements
- API development for mobile app
- Progressive Web App (PWA)
- Real-time notifications
- Advanced search with Elasticsearch
- Redis caching
- Queue system for emails

---

## Appendix A: API Endpoints

### Public Routes
```
GET  /                    - Home page
GET  /about               - About page
GET  /services            - Services page
GET  /contact             - Contact page
POST /contact/submit      - Submit contact form
GET  /graphic-design      - Graphic design portfolio
GET  /web-design          - Web design portfolio
GET  /uiux-design         - UI/UX design portfolio
GET  /app-design          - App design portfolio
GET  /apps/task-manager   - Task Manager demo
GET  /reviews             - Get all reviews (JSON)
POST /reviews             - Submit new review (JSON)
```

---

## Appendix B: Environment Variables

```env
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_FROM_ADDRESS=noreply@ryanmark.com
MAIL_FROM_NAME="Ryan Mark Portfolio"
```

---

## Document Information

**Author:** Ryan Mark Lotarino  
**Email:** lotarinoryan@gmail.com  
**Phone:** +639956139821  
**Location:** Gallarde St. Digos City  
**Website:** [Portfolio URL]  
**Last Updated:** December 2024  
**Version:** 1.0

---

**End of Document**
