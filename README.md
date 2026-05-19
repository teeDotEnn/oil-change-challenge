# README

This is a simple Laravel app, styled with Bootstrap, backed by a SQLlite DB

## Migrations
Before the project is run the first time, migrations will need to be run.

To run migrations, execute the following command `php artisan migrate`.

To confirm it worked, execute `php artisan migrate:status`.

## Running the application

To run the project for the first time, the following commands will need to be run in the projects root directory:

```
npm install && npm run build

composer run dev
```

The port that the application is running on will be displayed in your terminal. Navigate to the url to view the application. 

>[!NOTE]
>This application has only been tested and styled in light mode
>Any attempts to force dark mode of any sort are untested, and may result in accessibility issues.
