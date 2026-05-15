# Booking Servis Laptop

## Deskripsi
Aplikasi booking servis laptop berbasis Laravel untuk memudahkan pengguna melakukan reservasi servis laptop secara online serta admin dalam mengelola data booking.

## Fitur
- Login dan Register
- Role User dan Admin
- Booking servis laptop
- Validasi jadwal bentrok
- Riwayat booking
- Update status booking
- Estimasi harga servis
- Notifikasi sederhana
- REST API CRUD
- API Security dengan Laravel Sanctum

## Teknologi
- Laravel 12
- PHP
- MySQL
- Tailwind CSS

## Instalasi
1. Clone repository
2. Install dependency

```bash
composer install
```

3. Copy environment file

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Jalankan migration

```bash
php artisan migrate
```

6. Jalankan server

```bash
php artisan serve
```

## Testing

```bash
php artisan test
```

## API Endpoint
- GET /api/bookings
- POST /api/bookings
- PUT /api/bookings/{id}
- DELETE /api/bookings/{id}

## Author
Rizki Putra Pratama