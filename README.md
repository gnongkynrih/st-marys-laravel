composer config -g github-oauth.github.com your-token

if you are downloading from github. after download run the command
https://github.com/gnongkynrih/st-marys-laravel

git clone https://github.com/gnongkynrih/st-marys-laravel.git

1. npm install
2. composer install
   if you have already downloaded earlier (cloned)
   then don't download again but go to the project folder and run this command
   git pull origin master

nodejs --> https://nodejs.org/en/download/
composer ---> https://getcomposer.org
php
mysql
vscode

Laravel - -PHP Framework
--> Livewire
CSS --> tailwindCSS is a CSS framework
JS --> AlpineJS

nielit2.1 5G
password: nielit364#

TO create a new project
composer create-project larave/laravel projectName
After creating the project we run the command
npm install --> install all the packages/modules
npm run dev

TO run a server
php artisan serve

MVC --> Model View Controller
View --> is what we see
view is inside resources folder

model --> table
model is inside app/Models folder

controller --> interaction between model and view
controller is inside app/Http/Controllers folder

install livewire
composer require livewire/livewire

intall tailwindcss
npm install tailwindcss @tailwindcss/vite
npm install @tailwindcss/forms --save-dev
npm run dev

https://tailwindcss.com/docs

To create livewire page
php artisan make:livewire LivewireName

https://wireui.dev/
how to install
composer require wireui/wireui
in resources/css/app.css add the following

@import '../../vendor/wireui/wireui/ts/global.css';
@source '../../vendor/wireui/wireui';

npm run build

to make configuration changes we use the .env file
eg. to make db connection we can use .env
DB_CONNECTION

TO MIGRATE THE TABLE WE USE THE COMMAND
php artisan migrate

TO MAKE A MODEL WITH MIGRATION
php artisan make:model ModelName -m
(model name is singular)

TO CREATE A MIGRATION FILE
php artisan make:migration add_column_name_to_table_name --table=table_name
eg php artisan make:migration add_date_of_completion_to_tasks_table --table=tasks
