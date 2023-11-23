Steps to setup project:

1) Update database details in .env file
2) Run following command in assignment folder in terminal and dont close this terminal:
a) composer install
b) php artisan migrate
c) php artisan storage:link
d) php artisan serve

2) Run following commmand in another terminal:
npm install && npm run dev

3) Register a new user
http://localhost:8000/register

4) Login with the new user
http://localhost:8000/login