<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mesyuarat - Kehadiran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-10 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Sistem Kehadiran Mesyuarat</h1>
            <p class="text-gray-500 mt-2">Selamat datang ke panel kehadiran mesyuarat.</p>
        </div>

        <!-- Ringkasan Kehadiran -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl shadow-md text-center">
                <h2 class="text-lg text-gray-600">Jumlah Mesyuarat</h2>
                <p class="text-3xl font-bold text-blue-600 mt-2">5</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-md text-center">
                <h2 class="text-lg text-gray-600">Hadir</h2>
                <p class="text-3xl font-bold text-green-500 mt-2">4</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-md text-center">
                <h2 class="text-lg text-gray-600">Tidak Hadir</h2>
                <p class="text-3xl font-bold text-red-500 mt-2">1</p>
            </div>
        </div>

        <!-- Senarai Mesyuarat -->
        <div class="bg-white rounded-2xl shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Senarai Mesyuarat</h2>
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-sm">
                        <th class="p-3 text-left">Tarikh</th>
                        <th class="p-3 text-left">Topik</th>
                        <th class="p-3 text-left">Status</th>
                        <th class="p-3 text-left">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    <tr class="border-t">
                        <td class="p-3">25 Julai 2025</td>
                        <td class="p-3">Perancangan Projek Q3</td>
                        <td class="p-3">
                            <span class="inline-block px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Hadir</span>
                        </td>
                        <td class="p-3">
                            <button class="px-4 py-1 bg-gray-300 text-gray-600 rounded-lg cursor-not-allowed" disabled>Telah Daftar</button>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-3">30 Julai 2025</td>
                        <td class="p-3">Laporan Audit Dalaman</td>
                        <td class="p-3">
                            <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-600 rounded-full text-xs">Belum Hadir</span>
                        </td>
                        <td class="p-3">
                            <form method="POST" action="/hadir">
                                @csrf
                                <button type="submit" class="px-4 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Daftar Hadir</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
        Log Keluar
    </button>
</form>
</body>
</html>
