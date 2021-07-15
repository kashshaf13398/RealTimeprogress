### CSE 446 : Web Technologies
 
# Real time Progress
 
 
 
 
It's a web project build by Laravel for the course CSE 446 : Web Technology. The owner of this project is:
 
 
- Kashshaf Mahbub
 
  Reg No: 2016331016,
 
  Student of CSE, SUST
 
  Email: sakif1327@gmail.com
 
  Github: https://github.com/kashshaf13398
 
 
 
 
 
## Motivation
 
Motivation of my project is to build a web application by which teachers can take attendance of students of sust cse, upload term-test results and can post any assignments ar regular post in a class room and students can join the class and can see the real time progress of their attendances, Term test results and see assignment posts.

 
 
 
 
## Features
 
 
- User register and login
 
- Any user can create classroom.
 
- Students can join a classroom.
 
- Teachers can upload TT results.
 
- Teachers can take attendance any time easily via our web application.
 
- Teachers can post assignment posts or any post.
- Students can watch realtime attendaces, Term test results and the posts in the classroom and see the realtime progress on the course

 
 
## Requriments
 
Real time progress is a web application, built in Laravel. So, we need following requirements to run our project.
 
- PHP  >= 7.3.3
 
We also need some PHP extension they are basically integreted with PHP.
- Composer
- Xampp
- MySQL
- Laravel
- Google Captcha API
- Google Drive API
- Source Code Editor: Visual Studio Code
 
 
## PHP Version Check
To check if PHP is already install in the system or to check the version we can run the simple command:
 
```sh
php --version
```
 
To install PHP we can simply follow the instructions of this site:
https://www.sitepoint.com/how-to-install-php-on-windows/
 
## XAMPP Istallation
To install XAMPP, we need to visit the following link:
https://www.apachefriends.org/index.html
 
From there, we have to download appropriate XAMPP version.
 
## Composer Istallation
 
To manually download composer, we need to visit the following link and download exe file:
https://getcomposer.org/download/
 
For command line installation, we need to run the following commands:
 
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
 
## LARAVEL Istallation
First, download the Laravel installer using Composer:
```sh
composer global require laravel/installer
```
 
To create new project , we can run the following command:
```sh
composer create-project --prefer-dist laravel/laravel blog "6.*" Real_time_project
```
 
To run project, we can run the following command:
 
```sh
php artisan serve
```
 
To know more about laravel, we can follow the instructions of this link:
https://laravel.com/docs/6.x
 

 
 
## Clone and run project from Github:
We can follow this tutorial, to clone and run project from github:
https://www.youtube.com/watch?v=D5MZaCmpxvM
