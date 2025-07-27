<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Kehadiran Mesyuarat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 via-white to-blue-100 min-h-screen flex flex-col">

    <!-- Navigation -->
    <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">e-Kehadiran</h1>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-sm font-medium text-blue-600 hover:underline">Log Masuk</a>
            <a href="{{ route('register') }}" class="text-sm font-medium text-white bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700">Daftar</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="flex-grow flex items-center justify-center">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight">
                Selamat Datang ke Sistem Kehadiran Mesyuarat
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Jejak kehadiran mesyuarat anda dengan mudah, cepat dan teratur.
                Direka khas untuk organisasi, pelajar dan kakitangan.
            </p>

            <div class="mt-6">
                <a href="{{ route('login') }}" class="inline-block bg-blue-600 text-white text-sm px-6 py-3 rounded-lg hover:bg-blue-700 transition">Mula Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center text-gray-500 text-sm py-4 border-t">
        &copy; {{ date('Y') }} Sistem e-Kehadiran. Semua Hak Terpelihara.
    </footer>

</body>
</html>
