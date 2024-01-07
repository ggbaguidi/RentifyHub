# RentifyHub - Car Rental Management System

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="assets/RentifyHub_2.png" width="400">
    </a>
</p>

## Overview

RentifyHub is a web application developed with PHP, Laravel framework, and MySQL database, aiming to streamline the management of car rentals. This project focuses on handling individuals and a fleet of cars, providing essential features such as:

- **Car Management:**
  - Create, modify, and delete entries for cars in the rental fleet.
  - View a list of all cars in the fleet.

- **Rental History:**
  - List individuals who have rented a car.

- **Rental Transactions:**
  - Allow individuals to borrow and return cars.

- **User Authentication:**
  - Users must create an account and be logged in to rent a vehicle.

- **Access Control:**
  - Unauthenticated users can view the list of vehicles.
  - Administrative functionalities, such as modification, deletion, and addition of vehicles, are available only to users with administrative profiles.

- **User-Friendly Navigation:**
  - All pages include a menu (header) for seamless navigation between different sections.

## Getting Started

Follow these steps to get RentifyHub up and running on your local environment:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/username/RentifyHub.git
   cd RentifyHub
   ```

2. **Install Dependencies:**

   ```bash
   composer install
   ```

3. **Set Up Database:**
   - Create a new MySQL database.
   - Copy the `.env.example` file to `.env` and configure the database connection.
   - Run migrations and seed the database:

     ```bash
     php artisan migrate --seed
     ```

4. **Start the Development Server:**

   ```bash
   php artisan serve
   ```

5. **Access the Application:**
   Open your web browser and go to `http://localhost:8000` to access RentifyHub.

## Contributing

Contributions are welcome! Please follow the guidelines in [CONTRIBUTING.md](CONTRIBUTING.md) for more details.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- Logo design by [Guy Ahonakpon GBAGUIDI](https://www.linkedin.com/in/guy-ahonakpon-gbaguidi).
