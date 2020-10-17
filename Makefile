up:
	docker-compose up -d
stop:
	docker-compose stop

bash:
	docker-compose exec app bash
tinker:
	docker-compose exec app php artisan tinker
bash-nginx:
	docker-compose exec nginx bash

install:
	docker-compose run --rm node npm install
build:
	docker-compose run --rm node npm run prod
build-dev:
	docker-compose run --rm node npm run dev
watch:
	docker-compose run --rm node npm run watch

deploy:
	envoy run deploy

fix-perm-app:
	sudo chown -R $(USER):$(USER) app
fix-perm-migrations:
	sudo chown -R $(USER):$(USER) database/migrations
fix-perm-vendor:
	sudo chown -R $(USER):$(USER) vendor
fix-perm-storage:
	sudo chown -R $(USER):$(USER) storage
fix-perm-public:
	sudo chown -R $(USER):$(USER) public
fix-perm-composer:
	sudo chown -R $(USER):$(USER) composer*
fix-perm: fix-perm-app fix-perm-migrations fix-perm-vendor fix-perm-storage fix-perm-public fix-perm-composer