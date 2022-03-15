[![](http://www.dotlib.com.br/site/images/footer/bra.png)](http://www.dotlib.com)

# Installing and running the project

1. Clone the repo.

```terminal
$ git clone -b henri-borges https://github.com/henri1i/teste-desenvolvedor-php.git && cd teste-desenvolvedor-php
```

2. Create the docker .env file

```terminal
$ cd docker && cp .env.example .env
```

3. Create the laravel .env file

```terminal
$ cp ../app/.env.example ../app/.env
```

3. Run the following containers and access the workspace container

```terminal
$ docker-compose up --build -d mariadb nginx workspace && docker exec -u laradock -it laradock_workspace_1 bash
```

4. Install the composer and node dependencies

```terminal
$ composer install
```

```terminal
$ npm install && npm run dev
```

5. Generate app_key, run migrations and seeders

```terminal
$ php artisan key:generate && php artisan migrate --seed
```
