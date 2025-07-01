# Blog API

A RESTful API for a blog application built with Laravel and Laravel Sanctum for authentication.

## Features

- User authentication (register, login, logout)
- JWT token-based authentication
- CRUD operations for posts
- Category and tag management
- Protected routes for authenticated users
- Input validation and error handling

## API Endpoints

### Authentication

| Method | Endpoint | Description | Authentication |
|--------|----------|-------------|----------------|
| POST   | `/api/register` | Register a new user | No |
| POST   | `/api/login` | Login user | No |
| POST   | `/api/logout` | Logout user | Yes |
| GET    | `/api/me` | Get current user info | Yes |

### Posts

| Method | Endpoint | Description | Authentication |
|--------|----------|-------------|----------------|
| GET    | `/api/posts` | Get all posts | No |
| GET    | `/api/posts/{slug}` | Get a single post | No |
| POST   | `/api/posts` | Create a new post | Yes |
| PUT    | `/api/posts/{post}` | Update a post | Yes |
| DELETE | `/api/posts/{post}` | Delete a post | Yes |

### Categories

| Method | Endpoint | Description | Authentication |
|--------|----------|-------------|----------------|
| GET    | `/api/categories` | Get all categories | No |
| GET    | `/api/categories/{category}` | Get a single category | No |
| POST   | `/api/categories` | Create a new category | Yes |
| PUT    | `/api/categories/{category}` | Update a category | Yes |
| DELETE | `/api/categories/{category}` | Delete a category | Yes |

### Tags

| Method | Endpoint | Description | Authentication |
|--------|----------|-------------|----------------|
| GET    | `/api/tags` | Get all tags | No |
| POST   | `/api/tags` | Create a new tag | Yes |
| PUT    | `/api/tags/{tag}` | Update a tag | Yes |
| DELETE | `/api/tags/{tag}` | Delete a tag | Yes |

## Authentication

### Register

```http
POST /api/register
Content-Type: application/json

{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password",
    "password_confirmation": "password",
    "bio": "A short bio about the user"
}
```

### Login

```http
POST /api/login
Content-Type: application/json

{
    "email": "john@example.com",
    "password": "password"
}
```

### Authenticated Requests

Include the token in the Authorization header for protected routes:

```
Authorization: Bearer your_token_here
```

## Setup

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```
3. Copy `.env.example` to `.env` and configure your environment variables
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations:
   ```bash
   php artisan migrate
   ```
6. Install Laravel Sanctum:
   ```bash
   php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```

## Testing

Run the test suite:

```bash
php artisan test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
