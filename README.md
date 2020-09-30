# MeetupApis
MeetupApis is nothing but a set of APIs used to list, create and update RSVPs of meetup participants

# Follow below steps after cloning the repo
1. Create <b>".env"</b> file in the root with below content. Replace <b>APP_KEY,Admin creds and db creds.</b>

    APP_NAME=Lumen
    
    APP_ENV=local
    
    APP_KEY=randomappkey
    
    APP_DEBUG=false
    
    APP_URL=http://localhost
    
    APP_TIMEZONE=UTC

    LOG_CHANNEL=stack
    
    LOG_SLACK_WEBHOOK_URL=

    DB_CONNECTION=mysql
    
    <b>DB_HOST=127.0.0.1</b>
    
    <b>DB_PORT=3306</b>
    
    <b>DB_DATABASE=</b>
    
    <b>DB_USERNAME=</b>
    
    <b>DB_PASSWORD=</b>

    CACHE_DRIVER=file
    
    QUEUE_CONNECTION=sync
    
    <b>ADMIN_USERNAME=admin</b>

    <b>ADMIN_PASSWORD=randompass</b>


2. Run <b>"php artisan migrate"</b> in root to create db schema

3. Run <b>"php -S localhost:8000 -t public"</b> in root to start the server

3. Check below mentioned APIS with sample data
    
    a) GET http://localhost:8000/api/v1/participants
    
    b) POST http://localhost:8000/api/v1/participants
    
        {"name":"Aplha","age":29,"dob":"1990-01-01","profession":"student","locality":"red sea","guests":2,"address":"mars"}
    
    c) PUT http://localhost:8000/api/v1/participants/{id}
    
        {"name":"Aplha 2","age":29,"dob":"1990-01-01","profession":"employed","locality":"red sea lake","guests":1,"address":"saturn"}
        
4. Check participant Listing in admin page using below url(Use admin creds mentioned in .env)
    
    http://localhost:8000/admin


