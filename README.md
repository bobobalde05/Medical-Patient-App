1) clone the project

in the project directory run the following commands

2) composer update

3) create a new file and add a new file called .env in the root directory

create a database in your local server(xampp) and name it patientapp 
then copy the following and put in your .env file

APP_NAME=MedicalApp
APP_ENV=local
APP_KEY=base64:F7xlQc1tg8n45/OouXq84jEApsFQdoIOoGqzTeBpYr8=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=patientapp
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=5fcf278ac6fc32
MAIL_PASSWORD=e2864b1723744e
MAIL_ENCRYPTION=null
MAIL_FROM_NAME="${APP_NAME}"
MAIL_FROM_ADDRESS="patient-app@support.com"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


to migrate the database

4) php artisan migrate

To start application and generate link to browser
5) php artisan serve

LOG IN DETAILS FOR ADMIN
admin@gmail.com
password: "password"

LOG IN DETAILS FOR DOCTOR
doctor1@gmail.com
password:"password"
