@extends('layouts.app')

@section('content')
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
                <div class="relative lg:mb-12">
                    <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg"
                        alt="" />
                    <div class="pl-12 pr-6">
                        <img class="relative"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/girl-working-on-laptop.jpg"
                            alt="" />
                    </div>
                    <div class="absolute left-0 pr-12 bottom-8 xl:bottom-20">
                    </div>
                </div>

                <div class="2xl:pl-16">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">We make
                        judul zakat</h2>
                    <p class="text-xl leading-relaxed text-gray-900 mt-9">deskripsi.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
                <div class="bg-white rounded-lg shadow p-4">
                    <!-- Isi Card 1 -->

                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                            Info terkait</h5>
                        <p class="font-normal text-gray-700 bg-green-500 text-center  ">ZakatGo</p>
                        <button class="bg-yellow-500 w-full p-2 rounded"></button>
                        <p>total terkumpul</p>
                        <p>10.0000.00 rp</p>
                    </a>

                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <!-- Isi Card 2 -->

                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">info detail
                        </h5>
                        <p class="font-normal text-gray-700 ">Rumah yang berdiri tak tegak ini, disangga oleh beberapa kayu
                            agar tidak rubuh. Dilihat dari segala sisi, rumah ini hanya ditopang oleh bambu-bambu yang usang
                            dan kayu yang sudah lapuk.Mendongak ke atas, atap rumah ini tak jauh lebih baik. Sekumpulan daun
                            kelapa dan rumbia kering digunakan untuk menaungi rumah dari panas dan hujan. Tentu kemampuan
                            atap ini bisa diukur untuk menghalau hujan yang deras atau angin yang bertiup</p>
                    </a>

                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <!-- Isi Card 3 -->

                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Daftar Donasi</h5>

                        <ul class="list-disc pl-6 space-y-2">
                            <li class="flex items-center space-x-2">
                                <img src="foto-profil-1.jpg" alt="Foto Profil 1" class="w-8 h-8 rounded-full">
                                <span class="text-gray-800">Nama Donatur 1</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <img src="foto-profil-2.jpg" alt="Foto Profil 2" class="w-8 h-8 rounded-full">
                                <span class="text-gray-800">Nama Donatur 2</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <img src="foto-profil-3.jpg" alt="Foto Profil 3" class="w-8 h-8 rounded-full">
                                <span class="text-gray-800">Nama Donatur 3</span>
                            </li>
                        </ul>

                    </a>

                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <!-- Isi Card 4 -->

                    <a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Berita Terkini
                        </h5>

                        <ol class="relative border-l border-gray-200 dark:border-gray-700">
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                </div>
                                <time
                                    class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                                    2022</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in
                                    Tailwind CSS</h3>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over
                                    20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order
                                    E-commerce & Marketing pages.</p>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                                    more <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg></a>
                            </li>
                            <li class="mb-10 ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                </div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March
                                    2022</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and
                                    components are first designed in Figma and we keep a parity between the two versions
                                    even as we update the project.</p>
                            </li>
                            <li class="ml-4">
                                <div
                                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                                </div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April
                                    2022</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in
                                    Tailwind CSS</h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens
                                    of
                                    web components and interactive elements built on top of Tailwind CSS.</p>
                            </li>
                        </ol>

                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
