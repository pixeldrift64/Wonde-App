<p align="center">
    <svg width="131" height="32" viewBox="0 0 131 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.2991 0C8.77743 0 4.32222 0.666667 0 2V16.6667C0 24.3333 5.31965 29.4667 13.2991 32C21.2786 29.4667 26.5983 24.3333 26.5983 16.6667V2C22.276 0.666667 17.8208 0 13.2991 0ZM19.9487 3.33333V16L13.2991 12L6.64957 16V3.33333C8.64443 2.66667 13.2991 2.66667 13.2991 2.66667C13.2991 2.66667 17.9538 2.66667 19.9487 3.33333ZM13.2991 29.2C10.4398 28.2667 7.84649 26.6667 5.71863 24.5333L13.2991 19.9333L20.8796 24.5333C18.7518 26.6667 16.1584 28.2667 13.2991 29.2Z" fill="#4368FA"></path>
        <path d="M54.9919 8.6665H60.112L54.9919 24.6665H50.5367L48.0098 16.1332L45.483 24.6665H41.0278L35.9741 8.6665H41.0278L43.3551 17.2665L45.8155 8.6665H50.2707L52.731 17.2665L54.9919 8.6665Z" fill="#27325E"></path>
        <path d="M74.2092 22.6664C70.9509 25.9997 65.6312 25.9997 62.3064 22.733C60.7106 21.133 59.7796 18.933 59.8461 16.6664C59.8461 11.9997 63.5699 8.19971 68.2246 8.19971C72.8793 8.19971 76.6695 11.933 76.6695 16.5997V16.6664C76.6695 18.933 75.8051 21.0664 74.2092 22.6664ZM65.6312 19.3997C67.0941 20.7997 69.4215 20.7997 70.8179 19.3997C71.5493 18.6664 71.8818 17.6664 71.8818 16.6664C71.9483 15.6664 71.5493 14.6664 70.8179 13.933C69.355 12.533 67.0276 12.533 65.6312 13.933C64.8998 14.6664 64.5008 15.6664 64.5673 16.6664C64.5008 17.6664 64.8998 18.6664 65.6312 19.3997Z" fill="#27325E"></path>
        <path d="M87.8407 8.19988C89.4366 8.13322 90.966 8.79988 92.0964 9.93322C93.2933 11.2665 93.8918 12.9999 93.8253 14.7999V24.6665H89.0376V15.5332C89.1041 14.7332 88.8381 13.9332 88.2397 13.3999C87.7077 12.8666 86.9763 12.5999 86.2448 12.6666C85.4469 12.5999 84.6489 12.9332 84.1169 13.4666C83.5185 14.1332 83.2525 15.0665 83.319 15.9332V24.6665H78.5313V8.66655H83.319V10.1999C84.2499 8.86655 85.7793 8.19988 87.8407 8.19988Z" fill="#27325E"></path>
        <path d="M107.789 3.79993L112.577 2.2666V24.6666H107.789V23.1333C106.593 24.4666 104.864 25.1999 103.068 25.0666C101.007 25.0666 99.012 24.1999 97.6821 22.5999C96.2192 20.9333 95.4213 18.7999 95.4878 16.5999C95.4213 14.3999 96.2192 12.2666 97.6821 10.5999C99.012 8.99994 101.007 8.13327 103.068 8.13327C104.864 7.99993 106.593 8.73327 107.789 10.0666V3.79993ZM101.273 19.5333C102.802 20.9333 105.196 20.9333 106.726 19.5333C107.457 18.7999 107.856 17.7333 107.789 16.6666C107.856 15.5999 107.457 14.5999 106.726 13.7999C105.196 12.3999 102.802 12.3999 101.273 13.7999C100.541 14.5333 100.142 15.5999 100.209 16.6666C100.209 17.7333 100.541 18.7333 101.273 19.5333Z" fill="#27325E"></path>
        <path d="M119.493 18.5999C120.025 20.0665 121.288 20.8665 123.283 20.8665C124.413 20.9332 125.544 20.4665 126.342 19.6665L130.132 21.8665C128.536 24.0665 126.275 25.1332 123.216 25.1332C120.823 25.2665 118.562 24.3999 116.833 22.7332C115.237 21.1332 114.372 18.9332 114.439 16.6665C114.306 12.1332 117.83 8.3332 122.352 8.19987C122.551 8.19987 122.684 8.19987 122.884 8.19987C125.078 8.1332 127.14 8.99987 128.669 10.5999C130.198 12.1999 131.063 14.3999 130.996 16.5999C130.996 17.2665 130.93 17.8665 130.797 18.5332L119.493 18.5999ZM119.426 14.9999H126.275C125.943 13.3999 124.48 12.3332 122.884 12.4665C121.022 12.4665 119.892 13.3332 119.426 14.9999Z" fill="#27325E"></path>
    </svg>
</p>

## Wonde Example App
This Application uses the Wonde API to display information about the lessons and classes that an employee of a school will have in the current week. It is quite a basic app as it is only an example, but could be expanded on to provide more data from the Wonde API.

In order to satisfy the User Story and display all their classes and students for a given week, I am fetching their lessons for the week, and then displaying a list of students for each class assigned to the lessons that they are the teacher for.

### Getting Started
This project can be run locally using Docker and Laravel Sail. To get started, run the following commands:

`composer install`
`./vendor/bin/sail up`
`php artisan migrate`

The docker containers will be created and the application initialised, once this is done you can view the application at http://localhost

In order to use the application, you will need to add a Wonde API token and School ID to the .env file.

To add example users which are setup with employee details and IDs for the school ID `A1930499544`, run the following command:
`php artisan db:seed`
these users will be visible in the users table and all have the password `password`.

## Notes & Observations
Thank you for taking the time to view my example app. During the creation of this application I made several observations and assumptions which I have documented here.

### Application Setup & Scope
This application has been built to fulfil the user story on the assumption that it will be run as a single tenancy system installed by a school and accessing the Wonde API. Therefore, the Wonde School ID is set in the .env file and sent through explicitly to the Wonde API Client. Users have a wonde_employee_id field which is used when making requests to the API to get the data for the employee who is logged in. It is also assumed that the School Name will be set as the APP_NAME variable. This saves making another API request for this info.

I have used the standard Laravel Auth scaffolding to implement a quick and robust authentication system.

I have used the default Laravel template and a few custom tailwind components to make up the app.

The code for this project follows the PSR-2 Standard which is inline with Laravel's standard.

### Wonde SDK & API Requests
This application makes use of the Wonde PHP SDK, which has been integrated using a custom Service Provider in Laravel.

As previously mentioned, the Employee ID sent in the requests is tied to the user in Laravel. There is some middleware in place to log the user out if they are missing this ID, as the app relies on it.

The app makes a request to the Wonde API on every page load. In a real world application I would either implement caching to reduce the amount of API requests being sent to the Wonde API, or implement syncing of data and use Eloquent Models to save the data locally within our app, however for the purposes of this example app this has not been done. The data is currently being manipulated directly as arrays instead of being converted to Models.

### Employees Class
I have created an Employees class to store Business Logic. This currently has a function that converts the API response data into a format that I can loop over in the view nicely to display an employee's classes for the current week.

### App Controller
Since there are only a couple of routes, I have implemented these all in the AppController. It was not necessary to split the two routes into their own controllers for the purposes of this example app.

### Testing
I have implemented a couple of basic Feature tests in AppTest. These check some of the various responses we're expecting from our controller when certain conditions are met.
