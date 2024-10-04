

## Clone the Repository

git clone https://github.com/your-username/api_code_particles.git
cd api_code_particles

## Install Dependencies
composer install
cp .env.example .env
Generate Application Key: php artisan key:generate
Run Migrations and Seed Data: php artisan migrate --seed

##Install JWT Authentication Package
composer require tymon/jwt-auth
Publish JWT Config: php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
Generate JWT Secret Key- php artisan jwt:secret

## Test the API Using postman
