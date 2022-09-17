# PC & Parts
The app build with Laravel v9.17.0 for the backend and bootstrap v5.2.0 for the front end 

# How to run locally

* create local .env file with filled in `DB_*` and `MAIL_*` values (you need to create local MYSQL DB and use mailgun account for SMTP)
* run `composer install` to create vendor folder and install dependencies
* run `npm install` to install of npm dependencies
* run `php artisan migrate` to migrate DB tables 
* run `php artisan db:seed` to populate DB with data for some tables
* run `php artisan serve` to serve the app 

If you have any issues with setting up the app locally check laravel docs: https://laravel.com/docs/9.x

# How to deploy 
* go to `af-south-1` region in AWS
* find EC2 instance IP and SSH into it. Use .pem file from google drive as ssh key. (go to instance page and press "connect" button to find out what commands to run)
* run `cd /var/www/html/PC-Parts/` in the instance terminal to go to the project folder inside EC2 instance
* pull updated version of the repo from github 
* after that you may need to clear laravel cache

In this branch I have managed to do the following;

* added error messages for login and registration forms.
*the registration form for the vendor was implemented with a email confirmation feature where they can not login until they confirm their email.
* added proper validation for login and registration forms.
* differentiated the roles into Admin/Vendor and Buyers
*Admin dashboard has vendor and buyers management feature where the admin can deactive vendors
* Created forms to capture the personal and business details of the vendors.
