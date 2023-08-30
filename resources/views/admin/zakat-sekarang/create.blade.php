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
>>>>>>> origin/ZEN
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Name">
            </div>
<<<<<<< HEAD

=======
>>>>>>> origin/ZEN
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
                <textarea
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" placeholder="Description"></textarea>
            </div>
<<<<<<< HEAD

=======
>>>>>>> origin/ZEN
            <div class="my-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">Amount</label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="amount" type="number" placeholder="Amount">
            </div>
<<<<<<< HEAD
            <button type="submit"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Simpan
            </button>
        </form>


=======
        </form>
>>>>>>> origin/ZEN
    </main>
@endsection