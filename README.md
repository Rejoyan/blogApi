On Master Branch...


Blog Post CRUD API
Setup and Run
Clone the repository:
git clone <https://github.com/Rejoyan/blogApi.git>
cd blogApi
Install dependencies:
composer install

Set up your .env file with your database credentials.

Run migrations

Start the server

php artisan serve

API Endpoints
Create a Post: POST /api/posts

List All Posts: GET /api/posts

View a Single Post: GET /api/posts/{id}
