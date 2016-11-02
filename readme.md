# Oberlo Backend Task - Mailbox API

## Description
A local firm is building a small E-mail client to manage their internal messaging.
You have been asked to provide a simple prototype for a basic mailbox API in which the provided
messages are listed. Each message can be marked as read and you can archive single messages.

## Solution
### Used technology
I choosed [Laravel framework](http://laravel.com/docs) for this task, because of its simplicity and its powerful RESTful API handler.

### Installation
To install the app, simply use `composer`
̀`̀ `
composer.phar install
`̀ `

### Import messages from a JSON file
First, you need to create the table and change the configurations in `.env` file at the root of the project.

Then, go to the command line and type the following command:
`̀ `
php artisan migrate --seed
`̀ `
The command will create the `messages` table and import the json file to seed it.

The `messages` contains the following attributes:
```
- id: integer // primary key
- sender: string
- subject: string
- message: string
- time_sent: datetime
- is_read: boolean // false by default
- time_read: datetime // read timestamp
- is_archived: boolean // false by default
- time_archived: datetime // archived timestamp
```

The creation of the table is defined in `./database/migrations/##_create_messages_table.php`

To import the json file, I first pasted a copy of it in `./storage/app/messages_sample.json`
And then, I created a Seeder (`./database/seeds/MessagesTableSeeder.php`), in which we read the json file and import the content into the database.

To run the app, use the following command:
``̀
php artisan serve
```
It should be running on `http://localhost:8000`

### Message API
Using the `./app/Message.php` model, which contains all the previous attributes, we can interact easly with the database.

All the routes are listed in `./routes/api.php` which is protected by a middleware by default.
The routes are:
`̀ `
- /api/messages : list of all messages
- /api/messages/archived : list of all archived messages
- /api/messages/{id} : show a message
- /api/messages/{id}/read : read a message
- /api/messages/{id}/archive : archive a message
```

All the actions are routed to the controller `./app/Http/Controllers/Api/MessagesController.php`.
