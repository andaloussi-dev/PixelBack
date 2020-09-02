those are the steps to launch the project
- clone the project using git
- open the project and run this command in the terminal ``Composer install``
- create a database in Mysql 
- change  the .env-example file name to .env and add the database  name that you just created 

for example 
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pixelperfect
DB_USERNAME=root
DB_PASSWORD=
````
- now migrate your database with  `` php artisan migrate ``
- and install passport `` php artisan passport:install ``
- now you have to add a new user to test with you can use tinker for that 

for example 

run this command `` php artisan tinker ``

and write this line of code to create a new user 

````
User::create(['name'=>'PixelPerfect','email'=>'pixelperfect@test.com','password'=>bcrypt('secret')]))

````
- the final step in the backend is to launch the project with  `` php artisan serve ``

- pls go to the frontEnd repository to complete
