@extends('layouts.admin')

@section('content')
    <div class="flex flex-row">
        <!-- Sidebar -->
        <aside id="logo-sidebar" class="top-0 left-0  w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 "
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 shadow-xl ">
                <a href="#" class="flex items-center pl-2.5 mb-5">
                    <img src="{{ asset('img/logozakat.webp') }}" class="h-9 mr-3 sm:h-11" alt="zakatgo Logo" />
                </a>
                <ul class="space-y-2 font-medium ">
                    <li>
                        <a href="/admin/dashboard"
                            class="flex items-center  p-2 text-gray-900 rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-white group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/dashboard/zakat-sekarang"
                            class="flex items-center  p-2 text-gray-900 rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-white group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white "
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Zakat Sekarang</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/dashboard/zakat-produktif"
                            class="flex items-center  p-2 text-gray-900 rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-white group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Zakat Produktif</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/dashboard/zakat-market"
                            class="flex items-center  p-2 text-gray-900 rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-white group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white "
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Zakat Market</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/dashboard/pengguna"
                            class="flex items-center  p-2 text-gray-900 rounded-lg  hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-white group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="max-w-screen-xl flex-auto m-10"> <!-- Tambahkan kelas "flex justify-end" -->
            <h1 class="text-2xl font-semibold mb-4">List of Users</h1>
            <a href="" type="button"
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
                                Name
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

    </div>
@endsection