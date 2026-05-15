<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Servis Laptop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-600 text-white p-4 flex justify-between">
    <h1 class="text-xl font-bold">Booking Servis Laptop</h1>

    <div>
        @auth
        <span class="text-white">
            Hi, {{ auth()->user()->name }}
        </span>

            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit"
                    class="bg-white text-blue-600 px-4 py-2 rounded">
                    Logout
                </button>
            </form>
        @else
            <div class="flex gap-1">
            <a href="/login"
               class="bg-white text-blue-600 px-4 py-2 rounded">
                Login
            </a>
            <a href="/register"
               class="bg-white text-blue-600 px-4 py-2 rounded">
                Register
            </a>
            </div>
        @endauth
    </div>
</nav>

    <section class="text-center mt-20 px-6">
        <h2 class="text-4xl font-bold mb-4">
            Sistem Booking Jadwal Servis Laptop
        </h2>

        <p class="text-gray-600 text-lg mb-8">
            Booking jadwal servis laptop dan pantau progres perbaikannya dengan mudah.
        </p>

    <div class="flex justify-center gap-4">
        @auth
        @if(auth()->user()->role == 'user')
            <a href="/bookings/create"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Booking Sekarang
        </a>
        @endif

        @if(auth()->user()->role == 'user')
            <a href="/bookings" 
            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Riwayat Booking
            </a>
        @endif

        @if(auth()->user()->role == 'admin')
            <a href="/bookings"
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                Kelola Booking
            </a>
        @endif

        @endauth
         </div>
    </section>

    <section class="grid md:grid-cols-3 gap-6 px-10 mt-20">
        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-bold text-lg mb-2">Booking Online</h3>
            <p>Pesan jadwal servis tanpa antre langsung.</p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-bold text-lg mb-2">Tracking Status</h3>
            <p>Pantau status perbaikan laptop Anda.</p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-bold text-lg mb-2">Admin Management</h3>
            <p>Kelola booking dan update status servis.</p>
        </div>
    </section>

</body>
</html>