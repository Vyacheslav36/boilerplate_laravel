# Test-project

## Getting started
### Environment Files
This package ships with a .env.example file in the root of the project.

You must rename this file to just .env

### Run commands
1. Run `composer install`
2. Run `npm i`

### Create Database
You must create your database on your server and on your .env file update the following lines:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
Change these lines to reflect your new database settings.

### Artisan Commands
The first thing we are going to so is set the key that Laravel will use when doing encryption.
```bash
php artisan key:generate
```
You should see a green message stating your key was successfully generated. As well as you should see the APP_KEY variable in your .env file reflected.

It's time to see if your database credentials are correct.

We are going to run the built in migrations to create the database tables:
```bash
php artisan migrate
```
You should see a message for each table migrated, if you don't and see errors, than your credentials are most likely not correct.

We are now going to set the administrator account information. To do this you need to navigate to this file and change the name/email/password of the Administrator account.

You can delete the other dummy users, but do not delete the administrator account or you will not be able to access the backend.

Now seed the database with:
```bash
php artisan db:seed
```
You should get a message for each file seeded, you should see the information in your database tables.

### Storage:link
After your project is installed you must run this command to link your public storage folder for user avatar uploads:
```bash
php artisan storage:link
```

### Login
After your project is installed and you can access it in a browser, click the login button on the right of the navigation bar.

The administrator credentials are:

**Username:** admin@admin.com  
**Password:** secret

You will be automatically redirected to the backend. If you changed these values in the seeder prior, then obviously use the ones you updated to.


.
.
.
## Laravel Boilerplate (Current: Laravel 6.*) ([Demo](http://134.209.123.206/))

[![Latest Stable Version](https://poser.pugx.org/rappasoft/laravel-boilerplate/v/stable)](https://packagist.org/packages/rappasoft/laravel-boilerplate)
[![Latest Unstable Version](https://poser.pugx.org/rappasoft/laravel-boilerplate/v/unstable)](https://packagist.org/packages/rappasoft/laravel-boilerplate) 
<br/>
[![StyleCI](https://styleci.io/repos/30171828/shield?style=plastic)](https://styleci.io/repos/30171828/shield?style=plastic)
<br/>
![GitHub contributors](https://img.shields.io/github/contributors/rappasoft/laravel-boilerplate.svg)
![GitHub stars](https://img.shields.io/github/stars/rappasoft/laravel-boilerplate.svg?style=social)

### Demo Credentials

**User:** admin@admin.com  
**Password:** secret

### Official Documentation

[Click here for the official documentation](http://laravel-boilerplate.com)

### Slack Channel

Please join us in our Slack channel to get faster responses to your questions. Get your invite here: https://laravel-boilerplate.herokuapp.com

### Introduction

Laravel Boilerplate provides you with a massive head start on any size web application. It comes with a full featured access control system out of the box with an easy to learn API and is built on a Bootstrap foundation with a front and backend architecture. We have put a lot of work into it and we hope it serves you well and saves you time!

### Issues

If you come across any issues please [report them here](https://github.com/rappasoft/laravel-boilerplate/issues).

### Contributing

Thank you for considering contributing to the Laravel Boilerplate project! Please feel free to make any pull requests, or e-mail me a feature request you would like to see in the future to Anthony Rappa at rappa819@gmail.com.

### Security Vulnerabilities

If you discover a security vulnerability within this boilerplate, please send an e-mail to Anthony Rappa at rappa819@gmail.com, or create a pull request if possible. All security vulnerabilities will be promptly addressed.

### Donations

If you would like to help the continued efforts of this project, any size [donations](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=JJWUZ4E9S9SFG&lc=US&item_name=Laravel%205%20Boilerplate&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted) are welcomed and highly appreciated.

### License

MIT: [http://anthony.mit-license.org](http://anthony.mit-license.org)
