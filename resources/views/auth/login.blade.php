<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">
        Login Booking Servis
    </h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Password</label>
            <input type="password" name="password"
                class="w-full border rounded-lg px-3 py-2">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Login
        </button>
    </form>

    <p class="text-center mt-4">
        Belum punya akun?
        <a href="/register" class="text-blue-600 hover:underline">Register</a>
    </p>
</div>

</body>
</html>