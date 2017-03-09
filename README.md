[![in2it PHP Bootcamp](https://www.in2it.be/wp-content/uploads/2017/01/in2it-php-bootcamp.png)](https://www.in2it.be/training-courses/php-bootcamp/)

# Laravel Shop

This is a shop build on top of [Laravel](https://laravel.com/) using [Aimeos Laravel Package](https://aimeos.org/integrations/laravel-ecommerce-package/).

This project is part of [in2it PHP Bootcamp](https://www.in2it.be/training-courses/php-bootcamp/) training course. Feel free to [contact](https://www.in2it.be/contact) us for more details and to schedule a training at your offices (BENELUX only).

## Requirements

Please check you meet the following requirements:

	- PHP 5.6.4 (or higher)
- MySQL 5.7.16 (or higher)

## Getting started

	All stories have a beginning and so does this project. You can read the [Laravel Documentation] and [Aimeos Documentation] to get started quickly, but we've done all the grunt work for you.

	Just follow these steps and you should be all-right.

### 1. Set up your MySQL Database

	This application requires a database, the easiest way is to set up [MySQL Community Server](https://dev.mysql.com/downloads/mysql/) and add the following:

	- database "homestead"
	- username "homestead@localhost"
	- password "secret"

	These are the default settings for Laravel and are working great for the goal of this training.

	```
	mysql -uroot -p
	password: ******

	mysql> create database homestead;
	mysql> create user homestead@localhost identified by 'secret';
	mysql> grant all on homestead.* to homestead@localhost;
	mysql> \q
	```

### 2. Install this repo

	If you didn't received an invitation from us for our classroom, please contact @dragonbe or @bartmcleod to provide you the invitation link.

	```
	cd /path/to/workspace
	git clone git@git@github.com:in2it-training-<username>/phpbootcamp-shop.git phpbootcamp-shop
	cd phpbootcamp-shop
	```

### 3. Install the PHP packages

	You need [Composer] to continue as we're needing several packages to continue.

	```
	composer install
	```

### 4. Set environment settings

	```
	cp .env.example .env
	```

	Depending on your database settings, if you followed from the beginning these default settings are going to be enough.

	Next thing you need to do is set an application key

	```
	php artisan key:generate
	```

### 5. Edit your MySQL my.ini file and update the Aimeos installation

	Open C:\ProgramData\MySQL\MySQL Server 5.7\my.ini with notepad run as Administrator. (This is a hidden folder).

	Edit the sort_buffer_size and set it to a higher value (ex. 4M).

	Now execute these artisan commands to get a working or updated Aimeos installation:

	```
	php artisan vendor:publish
	php artisan migrate
	php artisan aimeos:setup --option=setup/default/demo:1
	php artisan aimeos:cache
	```

### 6. Launch your application

	```
	php artisan serve
	```

	Now point your browser to [localhost:8000/list](http://localhost:8000/list) to see the webshop application.

### 6. How to install Stripe payment method.

	```
	composer require symfony/event-dispatcher:^2.8
	composer require omnipay/stripe
	php artisan aimeos:account --admin <e-mail>
	choose password
	```

	Browse to: [localhost:8000/admin](http://localhost:8000/admin)
	- Log in with your admin credentials.
	- Click on expert mode in the menu.
	- Go to the service tab.
	- Click the add button.
	- Set the data for your new payment type (make sure to set price as well).
	Optional:
	Add text
	Add image
	- Click save button.

	Go to your project folder.: ../vendor/Omnipay/Stripe/src/gateway.php
	- Complete function 'getDefaultParameters()'.
Enter your stripe API-key inside the empty string provided in the array (test API-key = sk_test_BQokikJOvBiI2HlWgH4olfQ2)
	More information about the API can be found at 'https://stripe.com/docs/api'.

[Laravel Documentation]: https://laravel.com/docs/5.3/installation
[Aimeos Documentation]: https://github.com/aimeos/aimeos-laravel#aimeos-laravel-package
[Composer]: https://getcomposer.org
