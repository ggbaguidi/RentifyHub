# RentifyHub

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="assets/RentifyHub_2.png" width="400">
    </a>
</p>

RentifyHub is a web application developed in PHP using the Laravel framework for managing car rentals. This project allows users to seamlessly handle various aspects of car rental services, including the management of cars, user accounts, and rental transactions.

## Features

- **Car Management:** Create, modify, and delete entries for cars in the rental fleet.
- **User Accounts:** Users can create accounts, log in, and manage their rental history.
- **Rent and Return:** Facilitates the process of renting and returning cars for registered users.
- **Authentication:** Secure user authentication system with role-based access (admin and regular user roles).
- **Administrative Functions:** Admin users can perform actions like modifying, deleting, and adding cars.

## Getting Started

To get started with RentifyHub, follow these steps:

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
