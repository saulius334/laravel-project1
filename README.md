<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Quickstart  
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)  
  
Clone the repository  
  
```git clone git@github.com:saulius334/laravel-project1.git```  
  
Switch to the repo folder  
  
```cd laravel-project1```  
  
Install all the dependencies using composer  
  
```composer install```  
  
  
Copy the example env file and make the required configuration changes in the .env file  
  
```cp .env.example .env```  
  
Generate a new application key  
  
```php artisan key:generate```  
  
Start Apache and MySQL servers  
Set the database connection in .env before migrating  
  
```php artisan migrate```  
  
Start the local development server  
  
```php artisan serve```  






## Database seeding    
Open the DummyDataSeeder and set the property values as per your requirement  
  
```database/seeders/DatabaseSeeder.php```  
  
Run the database seeder and you're done  
  
```php artisan db:seed```  
  
Note : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command  
  
```php artisan migrate:refresh```  
  




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).  
This project is open-sourced licensed under the [MIT license](https://opensource.org/licenses/MIT).
