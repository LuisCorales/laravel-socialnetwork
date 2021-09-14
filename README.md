# laravel-socialnetwork

This is a project built in Laravel PHP made to simulate a social network like Instagram!

## Getting Started

Run these commands in order to setup the project:
~~~
 - npm install 
 - composer install
 - npm run dev
~~~

Then, create your _.env_ file to use a database (there is an _.env.example_ file on the project, just copy and paste the content on the new _.env_ file):
~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_socialnetwork
DB_USERNAME=root
DB_PASSWORD=yourpassword
~~~
Create the database in MySQL named _laravel_socialnetwork_.

**TIP 0: To use every feature of the app, make an account on mailtrap.io, and copy the .env portion of code with your credentials as the one below.**
~~~
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
~~~

**(OPTIONAL) Run this command in another terminal if you want to make changes to the project:**
~~~
 - npm run watch
~~~
More commands to run:
~~~
 - php artisan key:generate
 - php artisan migrate:fresh --seed
 - php artisan storage:link
 - php artisan serve
~~~

**TIP 1: Every time you change your _.env_ file, restart the server using _php artisan serve_ otherwise you won't see the changes.**

**TIP 2: Make sure you already have PHP 8 and Laravel 8 properly installed before any command.**

**TIP 3: Sometimes, you would need to configurate your own _php.ini_ file to avoid errors when running the server.**

## Access every view

The home page: http://127.0.0.1:8000/

With the keyword /profile/number you could access to any profile registered in the database: http://127.0.0.1:8000/profile/1

With the keyword /p/number you could access to any post by its id: http://127.0.0.1:8000/p/1

When you create your own user, it will probably be the third one if you followed the steps correctly, so access to it via: http://127.0.0.1:8000/profile/3

## Try it!

You can add your own posts to your profile, edit your profile, follow other users and be followed!
