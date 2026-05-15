<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

@if(auth()->user()->role == 'admin')
    <h1 class="text-2xl font-bold text-blue-600 mb-6">
        Daftar Booking
    </h1>
@else
    <h1 class="text-2xl font-bold text-blue-600 mb-6">
        Riwayat Booking
    </h1>
@endif

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

<div class="bg-white shadow rounded overflow-hidden">
  <table class="w-full border-collapse">
        <thead>
        <tr class="bg-blue-600 text-white">
            <th class="p-3">Tanggal</th>
            <th class="p-3">Jam</th>
            <th class="p-3">Nama</th>
            <th class="p-3">No WA</th>
            <th class="p-3">Merk Laptop</th>
            <th class="p-3">Keluhan</th>
            <th class="p-3">Estimasi Biaya</th>
            <th class="p-3">Status</th>
        @if(auth()->user()->role == 'admin')
            <th class="p-3">Aksi</th>
        @else
            <th class="p-3"></th>
        @endif
        </tr>
    </thead>
</div>

    <tbody>
        @foreach($bookings as $booking)
        <tr class="border-b">
            <td class="p-3 text-center">{{ $booking->booking_date }}</td>
            <td class="p-3 text-center">{{ $booking->booking_time }}</td>
            <td class="p-3 text-center">{{ $booking->customer_name }}</td>
            <td class="p-3 text-center">{{ $booking->phone }}</td>
            <td class="p-3 text-center">{{ $booking->laptop_brand }}</td>
            <td class="p-3 text-center">{{ $booking->complaint }}</td>
            <td class="p-3 text-center">
                @if($booking->estimated_price)
                 Rp {{ number_format($booking->estimated_price, 0, ',', '.') }}
                @else
                  -
                 @endif
        </td>
            <td class="p-3 text-center">{{ $booking->status }}</td>
            <td class="p-3 text-center">
                @if(auth()->user()->role == 'admin')
                <form action="/bookings/{{ $booking->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <select name="status" class="border rounded p-1">
                        <option value="pending">Pending</option>
                        <option value="diproses">Diproses</option>
                        <option value="selesai">Selesai</option>
                    </select>

                    <input type="number"
                    name="estimated_price"
                    placeholder="Estimasi"
                    class="border rounded p-1 w-28"
                    value="{{ $booking->estimated_price }}">

                    <button class="bg-blue-600 text-white px-3 py-1 rounded">
                        Update
                    </button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>