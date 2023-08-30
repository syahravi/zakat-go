@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <main class="max-w-screen-xl flex-auto m-10"> <!-- Tambahkan kelas "flex justify-end" -->
<<<<<<< HEAD
        <form action="{{ route('zakat-sekarang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Isi formulir -->
            <!-- Tombol Simpan -->
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">Thumbnail</label>
                <input class="border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="thumbnail" type="file">
            </div>

=======
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">Thumbnail</label>
                <input class="border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="thumbnail" type="file" accept="image/*">
            </div>
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" name="name" type="text" placeholder="Judul">
            </div>
<<<<<<< HEAD

=======
>>>>>>> origin/ZEN
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Deskripsi</label>
                <textarea
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" name="description" placeholder="Deskripsi"></textarea>
            </div>
<<<<<<< HEAD

=======
>>>>>>> origin/ZEN
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
        </form>
>>>>>>> origin/ZEN
    </main>
@endsection