# TestTask

![Build Status](data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='20'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E)
![License](data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='20'%3E%3Crect width='100%25' height='100%25' fill='%23ccc'/%3E%3C/svg%3E)

## Description
A Laravel-based web application for managing user accounts and articles with an optional Vue.js frontend.

## Table of Contents
- [Background](#background)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Directory Structure](#directory-structure)
- [Testing](#testing)
- [CI/CD](#cicd)
- [Contributing](#contributing)
- [Code of Conduct](#code-of-conduct)
- [License](#license)
- [Acknowledgments](#acknowledgments)
- [Contact](#contact)
- [Roadmap](#roadmap)
- [Badges](#badges)

## Background
This project was created as a test assignment to demonstrate a typical Laravel setup with article management and user profile features. It solves the problem of creating, editing, and deleting articles while allowing registered users to manage their profiles and passwords. The application uses Laravel's authentication and authorization features and integrates Vue.js components for a dynamic frontend. It also shows how to handle image uploads and soft deletion of records.

## Features
- User registration and authentication
- CRUD operations for articles
- Soft delete and restoration of articles
- User profile editing including avatar upload
- Password update workflow with validation
- Example Vue.js integration via Laravel Mix

## Technology Stack
- PHP 8.2 with Laravel 12
- MySQL or any supported database
- Node.js with Webpack Mix for frontend assets
- Vue.js 2 components
- PHPUnit for tests

### Dependencies
```json
{
    "name": "laravel/laravel",
    "type": "project",
    "description": "The Laravel Framework.",
    "keywords": [
        "framework",
        "laravel"
    ],
    "license": "MIT",
    "require": {
        "php": "^8.2",
        "guzzlehttp/guzzle": "^7.9",
        "intervention/image": "^3.11",
        "intervention/image-laravel": "^1.5",
        "laravel/framework": "^12.0",
        "laravel/tinker": "^2.10",
        "laravel/ui": "^4.6"
    },
    "require-dev": {
        "fakerphp/faker": "^1.24",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.8",
        "phpunit/phpunit": "^12.1"
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "minimum-stability": "dev",
    "prefer-stable": true,
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi"
        ]
    }
}
```
```json

{
    "private": true,
    "scripts": {
        "dev": "npm run development",
        "development": "cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
        "watch": "npm run development -- --watch",
        "watch-poll": "npm run watch -- --watch-poll",
        "hot": "cross-env NODE_ENV=development node_modules/webpack-dev-server/bin/webpack-dev-server.js --inline --hot --disable-host-check --config=node_modules/laravel-mix/setup/webpack.config.js",
        "prod": "npm run production",
        "production": "cross-env NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
    },
    "devDependencies": {
        "axios": "^0.19",
        "bootstrap": "^4.0.0",
        "cross-env": "^7.0",
        "jquery": "^3.2",
        "laravel-mix": "^5.0.1",
        "lodash": "^4.17.19",
        "popper.js": "^1.12",
        "resolve-url-loader": "^2.3.1",
        "sass": "^1.20.1",
        "sass-loader": "^8.0.0",
        "vue": "^2.5.17",
        "vue-template-compiler": "^2.6.10"
    }
}

```
## Installation
1. Clone the repository:
```bash
git clone https://github.com/YourUsername/TestTask.git
cd TestTask
```
2. Install PHP dependencies:
```bash
composer install
```
3. Install frontend dependencies:
```bash
npm install
```
4. Copy the environment file and set variables:
```bash
cp .env.example .env
# edit .env as needed
```
5. Generate application key and run migrations:
```bash
php artisan key:generate
php artisan migrate
```

## Configuration
Edit the `.env` file to match your local settings. Example:
```properties
APP_NAME=Laravel
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
These variables control database access, application URL, and general environment settings.

## Usage
Start the development servers:
```bash
php artisan serve           # Laravel backend
npm run dev                 # Compile assets with Laravel Mix
```
Example API call to create an article:
```bash
curl -X POST http://localhost:8000/articles/store \
  -H "Content-Type: application/json" \
  -d '{"title":"Test Article","text":"Lorem ipsum"}'
```
Updating user details via form submission is done through the web UI under `/account/edit`.

## Directory Structure
```text
TestTask/
├── app/                 # Laravel application code
├── bootstrap/           # Bootstrap files for Laravel
├── config/              # Configuration files
├── database/            # Migrations and seeders
├── public/              # Publicly accessible files
├── resources/           # Views and frontend assets
├── routes/              # Route definitions
├── tests/               # PHPUnit test cases
├── package.json         # Node.js dependencies
├── composer.json        # PHP dependencies
└── webpack.mix.js       # Asset build configuration
```

## Testing
Run the test suite with PHPUnit:
```bash
php artisan test
```
Coverage reports can be generated using PHPUnit's built-in coverage tools.

## CI/CD
The project can integrate with providers like GitHub Actions to run linting and test jobs on every push. Workflow files would live in `.github/workflows/`.

## Contributing
1. Fork the repository and create your branch:
```bash
git checkout -b feature/MyFeature
```
2. Commit your changes and push:
```bash
git commit -am "Add new feature"
git push origin feature/MyFeature
```
3. Open a pull request. Please follow PSR-12 coding style and run tests before submitting.

## Code of Conduct
This project follows the [Contributor Covenant Code of Conduct](CODE_OF_CONDUCT.md). By participating, you agree to abide by its terms.

## License
This project is licensed under the MIT License – see the [LICENSE](LICENSE) file for details.

## Acknowledgments
- [Laravel](https://laravel.com/) – framework used for the backend
- [Vue.js](https://vuejs.org/) – frontend components
- Thanks to all contributors and testers

## Contact
If you have any questions or run into problems, open an issue on GitHub or email `maintainer@example.com`.

## Roadmap
- Docker setup for easier development
- API endpoints for mobile clients
- Improved unit test coverage

## Badges
The build badge indicates the latest CI status. The license badge shows the code is released under MIT.

