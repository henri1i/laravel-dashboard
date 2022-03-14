# Dashboard

## Overview

The user should be able to:
 - Perform CRUD operations for clients, products, discounts and orders.
 - Add as many products as you want to an order.
 - Add one discount to an order.
 - Perform most of these operations through API (saved the discounts).

The interface was totally inspired (if not copied :D) by the [Filament](https://filamentphp.com/) project.
## Preview

![](https://github.com/henri1i/laravel-dashboard/blob/beta/images/preview.gif?raw=true)

## How to install and run the project?
Tutorial [here](https://github.com/henri1i/teste-desenvolvedor-php/blob/henri-borges/teste-junior.md)!

## How to perform the tests?
You should create a specific database, just to perform tests. The connection can be set on Laravel .env.

For example:

```terminal
$ docker exec -u root -it laradock_mariadb_0 bash

# mysql -p root

mysql> CREATE DATABASE testing;
```
Defining the connection:
```terminal
DB_TEST_DATABASE=testing
DB_TEST_USERNAME=root
DB_TEST_PASSWORD=root
```

## Improvements

 - Create the routes protection, login and register page.
 - Allow multiple items deletion on table.
 - Allow the sidebar opening on small resolutions.
 - Create API endpoints for the discount use and creation.

## Decisions

I've documented [here](https://github.com/henri1i/teste-desenvolvedor-php/blob/henri-borges/decisions.md) some of my train of though I had along the development of this dashboard.

## Technologies used
 - Laravel 8
 - Tailwind
 - Livewire
