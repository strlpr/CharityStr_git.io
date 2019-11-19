# CharityStr_git.io
<h1>To install this laravel project</h1>
<h3>You have to follow the following steps</h3>
<h4> go to the folder where you want to colne the project.</h4>
--> open terminal and write "git clone https://github.com/strlpr/CharityStr_git.io.git"
<br>
-->now install composer by cmd "composer install"
<br>
-->now copy .env file by cmd "copy .env.example .env"
and open .env file and check database setting
{
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel //write database name
    DB_USERNAME=root //user name of your database
    DB_PASSWORD=   //DB_PASSWORD if configured otherwise leave it
}
<br>
-->after this you have to genrate the application key by cmd 
"php artisan key:generate"
// it will generate application key set successfully
<br>
-->now to run development server write cmd "php artisan serve"
it will generate localhost -> http://127.0.0.1:8000/ on this you can view
