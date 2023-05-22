 
# eWaste Web App

![eWaste Web App](app-screenshot.png)

Welcome to the eWaste Web App! This application is built with Laravel, Tailwind CSS, and MySQL, allowing users to schedule their e-waste pick-up and connecting them with vendors who can collect the e-waste from their specified address.

## Features

- User Registration and Authentication: Users can create an account, log in, and manage their profile.
- User Dashboard: Users have access to a personalized dashboard where they can schedule e-waste pick-ups, view their scheduled pick-ups, and manage their account information.
- Schedule Pick-up: Users can schedule a convenient date and time for their e-waste pick-up by providing the address details.
- Vendor Registration: Vendors can create an account and provide necessary information to become a registered vendor for e-waste collection.
- Vendor Dashboard: Vendors have access to a dashboard where they can view and manage the scheduled pick-ups assigned to them.
- Pick-up Status: Users can track the status of their scheduled pick-ups and receive notifications.
- Admin Panel: An admin panel is available to manage users, vendors, pick-up requests, and other application settings.

## Installation

To get started with the eWaste Web App, follow these steps:

1. Clone the repository:

```git clone https://github.com/your-username/ewaste-webapp.git```

2. Navigate to the project directory:

```cd ewaste-webapp```

arduino

3. Install the dependencies using Composer:

```composer install```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the necessary configuration details such as database credentials.

```cp .env.example .env```
 

5. Generate an application key:

```php artisan key:generate```


6. Run the database migrations:

```php artisan migrate```


7. (Optional) Seed the database with sample data:

```php artisan db:seed```

 
8. Serve the application:

```php artisan serve```

 

9. Visit `http://localhost:8000` in your web browser to access the eWaste Web App.

## Screenshots

### User Dashboard
![User Dashboard](screenshots/user-dashboard.png)

### Schedule Pick-up
![Schedule Pick-up](screenshots/schedule-pickup.png)

### Vendor Dashboard
![Vendor Dashboard](screenshots/vendor-dashboard.png)

## Customization

To customize the appearance of the eWaste Web App and incorporate the requested lime green color, you can modify the styles using Tailwind CSS.

 
Open the resources/css/app.css file.

Locate the Tailwind CSS section and update the color classes with the desired lime green color values. For example:

 
```
.bg-lime {
  background-color: #00ff00; /* Your lime green color code */
}

.text-lime {
  color: #00ff00; /* Your lime green color code */
} 
``` 

Save the changes.
Rebuild the CSS file using Laravel Mix:
 
``npm install 
 npm run dev``
 
The application will now use the customized lime green color for specific elements throughout the interface.



## Author

[Leaveitblank](https://github.com/Leave-it-blank),  

## License

Licensed under the Apache License. See [LICENSE](LICENSE)

## <h3 align="center"> © E waste Manangement App @2023 <h3/>
