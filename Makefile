# Variables
APP_CONTAINER_NAME=laravel-portfolio_app_1
MYSQL_CONTAINER_NAME=mysql

# Docker commands
build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

logs:
	docker-compose logs -f

bash:
	docker exec -it $(APP_CONTAINER_NAME) /bin/bash

artisan:
	docker exec -it $(APP_CONTAINER_NAME) php artisan $(CMD)

migrate:
	docker exec -it $(APP_CONTAINER_NAME) php artisan migrate

seed:
	docker exec -it $(APP_CONTAINER_NAME) php artisan db:seed

composer:
	docker exec -it $(APP_CONTAINER_NAME) composer $(CMD)

# Fly.io deploy commands
fly-deploy:
	fly deploy
