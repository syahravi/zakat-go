@extends('layouts.admin')

@section('content')
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 text-dark p-4">
            <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
            <ul class="space-y-2">
                <li>
                    <a href="/admin/dashboard" class="block hover:bg-gray-800 p-2 rounded transition duration-300">Overview</a>
                </li>
                <li>
                    <a href="/admin/dashboard/zakat-sekarang" class="block hover:bg-gray-800 p-2 rounded transition duration-300">Zakat Sekarang</a>
                </li>
                <li>
                    <a href="/admin/dashboard/zakat-produktif" class="block hover:bg-gray-800 p-2 rounded transition duration-300">Zakat Produktif</a>
                </li>
                <li>
                    <a href="/admin/dashboard/zakat-market" class="block hover:bg-gray-800 p-2 rounded transition duration-300">Zakat Market</a>
                </li>
                <li>
                    <a href="/admin/dashboard/pengguna" class="block hover:bg-gray-800 p-2 rounded transition duration-300">Users</a>
                </li>
                <!-- Add more navigation items as needed -->
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow p-8">
            <div class="bg-white rounded p-4 shadow-md">
                <h2 class="text-xl font-semibold mb-4">Overview</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- Overview Card 1 -->
                    <div class="bg-blue-500 p-4 rounded-lg shadow-md text-white">
                        <h3 class="text-lg font-semibold mb-2">Total Donasi</h3>
                        <p class="text-2xl font-bold">Rp 10,000,000</p>
                    </div>
            
                    <!-- Overview Card 2 -->
                    <div class="bg-green-500 p-4 rounded-lg shadow-md text-white">
                        <h3 class="text-lg font-semibold mb-2">Donasi Terakhir</h3>
                        <p class="text-xl">Rp 500,000</p>
                        <p class="text-sm mt-2">Tanggal: 2023-08-28</p>
                    </div>
            
                    <!-- Overview Card 3 -->
                    <div class="bg-orange-500 p-4 rounded-lg shadow-md text-white">
                        <h3 class="text-lg font-semibold mb-2">Total Zakat</h3>
                        <p class="text-2xl font-bold">Rp 5,000,000</p>
                    </div>
                    <!-- Add more overview cards as needed -->
                </div>
            </div>            
        </main>
    </div>
@endsection