# Furbook
It's FurBook, the Facebook for cats!

This is a sample application utilizing Laravel. Other than what the framework generates by itself, 
the models, migrations, controllers, and views are created by me.

(For Laravel 5.4+)

**Instructions:**

1. Clone this repository to your computer.
2. Copy or rename the provided .env-example file to ".env"
3. Create a database using the mysql client or phpmyadmin (or your chosen mysql interface).
4. Enter this database's name into the "DB_DATABASE=" field of the .env file.
5. Also, enter the database credentials into the .env file, in their respective fields.
6. Run "composer install".
7. Run "php artisan key:generate" to create a secure key for the application.
8. Run "php artisan migrate --seed"
9. Now, run "php artisan serve"(or your own web server).
10. That's it! You now have a complete application with 25 randomly-generated cats, each being one of five breeds!
