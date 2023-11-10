## Project : Simplified Custom Inventory Management System (IMS)

**Summary** : It's a simple project where you can see a **CRUD** operation and authentication system using **Laravel Breeze**.

### Installation and Project Setup 
To setup the project you have to follow this steps.  

**Step 1 :** `git clone https://github.com/AR-Shahin/ims-task`

**Step 2 :** `cd ims-task`

**Step 3 :** Rename .env.example to .env and put your database credentials. 


**Step 4 :** Run this command to install all dependency `composer install`

**Step 5 :** Run this command to install node modules dependency `npm install && npm run dev`

**Step 6 :** Run seeder command to generate fake data. `php artisan migrate:fresh --seed`. it will create few dummy data and an user so that you can login the project without registration.
- Dummy credentils : Email : test@mail.com Password : password

**Step 7 :** Run `php artisan key:generate` to generate the application key.

**Step 8 :** Run `php artisan serve` to use the application. 

**Step 9 :** Now you can see a login page. You can login the dummy credentials or register new user. After login you will see a product page where all products are displayed in a table. 

To create a product you've to navigate the create page by clicking **create** button. After creating product you can do the **view** **edit** and **detete** operation. 
