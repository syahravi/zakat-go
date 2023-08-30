@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <main class="max-w-screen-xl flex-auto m-10"> <!-- Tambahkan kelas "flex justify-end" -->
        <h1 class="text-2xl font-semibold mb-4">Buat Zakat Sekarang</h1>
        <form action="{{ route('admin.dashboard.zakat-sekarang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Judul</label>
                <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" name="name" type="text" placeholder="Judul">
            </div>
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Deskripsi</label>
                <textarea
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" name="description" placeholder="Deskripsi"></textarea>
            </div>
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Jumlah</label>
                <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="amount" name="amount" type="number" placeholder="Jumlah">
            </div>
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">Thumbnail</label>
                <input class="border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="thumbnail" name="thumbnail" type="file" accept="image/*">
            </div>
            <button href="" type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Simpan
            </button>
        </form>
    </main>
@endsection