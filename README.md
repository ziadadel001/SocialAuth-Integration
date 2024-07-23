<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel Social Media Authentication with Socialite

This project is a Laravel application that implements social media authentication using the Laravel Socialite package. Users can log in using their Google, GitHub, LinkedIn, and Facebook accounts, and their information will be stored in the database.

## Features

- Google OAuth Authentication
- GitHub OAuth Authentication
- LinkedIn OAuth Authentication (coming soon)
- Facebook OAuth Authentication (coming soon)
- User Registration and Login
- Dashboard for logged-in users

## Requirements

- PHP 7.4 or higher
- Composer
- Laravel 11
- A Google Developer account for OAuth credentials
- A GitHub Developer account for OAuth credentials

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/ziadadel001/social-media-Authentication.git
    cd social-media-Authentication
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set up the environment**:

    Copy the `.env.example` file to `.env` and update the environment variables:

    ```bash
    cp .env.example .env
    ```

    Generate the application key:

    ```bash
    php artisan key:generate
    ```

4. **Configure OAuth Credentials**:

    In your `.env` file, add the following lines with your OAuth credentials:

    ```env
    GOOGLE_CLIENT_ID=your-google-client-id
    GOOGLE_CLIENT_SECRET=your-google-client-secret
    GOOGLE_REDIRECT_URI=http://your-app-url/auth/google/callback

    GITHUB_CLIENT_ID=your-github-client-id
    GITHUB_CLIENT_SECRET=your-github-client-secret
    GITHUB_REDIRECT_URI=http://your-app-url/auth/github/callback


    ```

5. **Run migrations**:

    ```bash
    php artisan migrate
    ```

6. **Serve the application**:

    ```bash
    php artisan serve
    ```


## License

This project is open-source and available under the [MIT License](LICENSE).

