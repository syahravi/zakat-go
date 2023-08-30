@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <main class="max-w-screen-xl flex-auto m-10"> <!-- Tambahkan kelas "flex justify-end" -->
        <h1 class="text-2xl font-semibold mb-4">List of Users</h1>
        <a href="{{ route('admin.dashboard.zakat-produktif.create') }}" type="button"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Tambah Data
            <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                height="100" viewBox="0,0,256,256">
                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <g transform="scale(10.66667,10.66667)">
                        <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                    </g>
                </g>
            </svg>
        </a>
        <div class="overflow-x-auto shadow-md mt-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-5 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-5 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-5 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-5 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through your users and display them here -->
                    <tr class="bg-white border-b text-black ">
                        <td class="px-5 py-4 ">John Doe</td>
                        <td class="px-5 py-4 ">john@example.com</td>
                        <td class="px-5 py-4 ">Admin</td>
                        <td class="px-5 py-4 ">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="text-red-500 hover:underline ml-2">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </main>
@endsection
