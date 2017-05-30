# blog_laravel_task

installation : 
1. >> git clone <the repo>
2. >> composer install 
  to install the packages in composer.json file
3. >> cp .env.example .env
  then configure your db parameters in .env file
4. create db
5. >> php artisan migrate
6. create your admin user : 
      >> php artisan tinker
      >> $admin = new App\Admin
      >> $admin->name ="admin"                          //admin username
      >> $admin->email = "admin@blog.com"          //admin email
      >> $admin->password = Hash::make('password')      //admin password
      >> $admin->save()
7. login as admin : localhost:8000/admin
8. from admin dashboard .. create you data (users,categories,posts)
9. you can register or login as user from localhost:8000

* pagination only appear if there is more than 10 posts under certain category
* if you want arabic website you must use URL like: localhost:8000/ar/<category>
* if you want arabic website you must use URL like: localhost:8000/en/<category>
* by default language is english
