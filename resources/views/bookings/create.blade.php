<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Servis</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-lg">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">
        Booking Jadwal Servis Laptop
    </h1>

    @if(session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif

    <form action="/bookings" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" name="customer_name"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">No Whatsapp</label>
            <input type="text" name="phone"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Merk Laptop</label>
            <input type="text" name="laptop_brand"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Keluhan</label>
            <textarea name="complaint"
                class="w-full border rounded-lg px-3 py-2"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Tanggal Booking</label>
            <input type="date" name="booking_date"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Jam Booking</label>
            <input type="time" name="booking_time"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Submit Booking
        </button>
    </form>

    <a href="/" class="block text-center mt-4 text-blue-600 hover:underline">
        Kembali ke Home
    </a>
</div>

</body>
</html>