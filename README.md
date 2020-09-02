those are the steps to launch the project
- clone the project using git
- open the project and run this command in the terminal ( Composer install )
- create a database in Mysql 
- change  the .env-example file name to .env and add the database  name that you just created 
for example 

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pixelperfect
    DB_USERNAME=root
    DB_PASSWORD=


- now run this command ( php artisan migrate )
- bcs we dont have a register method in the api you can access you database and add a new user to the user table 
- you can use those for example

    name : PixelPerfect 
    email : PixelPerfect@test.com
    rool : customer 
    password : $2y$12$j3GKXSb8PacEJMasPWMhMuqWSEQ3FfU1sDWjrKSvRogR5HJvMlUVq    ( this password is equal to 123 ) 

the password always need to be hashed you can use this site to do that  https://bcrypt-generator.com/

- the last step in the backend is to start the project with this command ( php artisan serve  )

Go to the frontend repository 
