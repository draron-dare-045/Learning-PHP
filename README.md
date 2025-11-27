#  PHP Contact Form --- Beginner's Toolkit

A simple, secure **PHP contact form** with validation and email
notification.\
Perfect for learning PHP fundamentals!

##  Project Overview

This project demonstrates core PHP concepts through a practical contact
form implementation. It includes:

-   HTML form with modern styling\
-   Server-side input validation\
-   Email notification system\
-   Security best practices\
-   Error handling and logging\
-   User-friendly success page

Built as part of **Moringa School AI Capstone Project**.

##  Quick Start

### Prerequisites

-   PHP 7.4 or higher
-   A web browser
-   A text editor (VS Code recommended)

### Installation

Clone the repository:

``` bash
git clone https://github.com/yourusername/php-contact-form.git
cd php-contact-form
```

Start PHP's built-in server:

``` bash
php -S localhost:8000
```

Open in browser:

    http://localhost:8000/index.html

## Project Structure

    php-contact-form/
    │
    ├── index.html
    ├── process.php
    ├── thank-you.php
    ├── submissions.log
    └── README.md

##  What This Project Teaches

### PHP Concepts

-   Superglobals
-   Form handling
-   Validation
-   Sanitization
-   File I/O
-   Headers
-   mail()
-   Security basics

### Skills

-   Clean code
-   Error handling
-   UX design
-   Secure input handling

##  Testing

-   **Valid Submission** → Redirect + log entry\
-   **Empty Fields** → Error\
-   **Invalid Email** → Error\
-   **XSS Attempt** → Sanitized

##  Configuration

### Options:

1.  Log file (default)\
2.  SMTP via PHPMailer\
3.  MailHog for local testing

##  Troubleshooting

-   Header error → Remove whitespace before `<?php`\
-   Data missing → Check `name` attributes\
-   PHP downloads → Use proper server\
-   Email issues → Use SMTP or log

##  Security

-   Validation\
-   Sanitization\
-   Email filtering\
-   Block empty submissions\
-   Server-side validation

**Future Enhancements:** CSRF, rate limiting, honeypot, reCAPTCHA.

## Extensions

-   Database storage\
-   AJAX submission\
-   File uploads\
-   Laravel/Symfony\
-   Deployment with SSL

## Resources

-   PHP Manual
-   PHP: The Right Way
-   W3Schools
-   OWASP Guide

## Contributing

Fork → Branch → Commit → Push → PR

## License

MIT License

## Author

Aron Ondieki Onkware\
GitHub: draron-dare-045\
Project Link: https://github.com/draron-dare-045/Learning-PHP

-------------------------------------------------------------------