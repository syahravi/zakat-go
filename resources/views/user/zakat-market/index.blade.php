@extends('layouts.app')

@section('content')
    <div class="container mx-auto ">
        {{-- landing zakat sekarang --}}
        <div class="bg-white">
            <section class="py-10 sm:py-16 lg:py-24">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                        <div>
                            <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">

                                Menebarkan Kebahagian, melalui.
                                <div class="relative inline-flex">
                                    <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                                    <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                                        ZakatProduktif.</h1>
                                </div>
                            </h1>

                            <p class="mt-8 text-base text-black sm:text-xl">Ajaran berbagi Islam ditingkatkan lewat platform
                                digital untuk distribusi efisien. Investasi dalam proyek berdampak jadi fokus, manfaat
                                jangka panjang.</p>

                            <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                                <a href="#daftarzakat" title=""
                                    class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-green-500 hover:bg-green-600 focus:bg-green-600"
                                    role="button"> Zakat Produktif </a>

                                {{-- <a href="#" title="" class="inline-flex items-center mt-6 text-base font-semibold transition-all duration-200 sm:mt-0 hover:opacity-80">
                                    <svg class="w-10 h-10 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path fill="#F97316" stroke="#F97316" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Watch video
                                </a> --}}
                            </div>
                        </div>

                        <div>
                            <img class="w-full" src="{{ asset('img/zakatmarket.jpg') }}" alt="zakat market" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- end --}}
        <form class="mt-2">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Cari sesuai Alamat" required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
        </form>
        <h1 class="text-center font-bold text-5xl mt-6"> Daftar Penerima Zakat Market</h1>
        <div id="daftarzakat" class="mt-10 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4">

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-xl">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('img/jaza-zakat.webp') }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">Apple Watch Series 7 GPS, Aluminium
                            Case, Starlight Sport</h5>
                    </a>
                    <div x-data="{ showModal: false, namaPenerima: '', alamat: '' }">
                        <div class="flex items-center mt-2 justify-between">
                            <span class="text-3xl font-bold text-gray-900">$599</span>
                            <button @click="showModal = true"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Beli Sekarang
                            </button>
                        </div>

                        <div x-show="showModal" class="fixed inset-0 flex items-center justify-center z-50">
                            <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-75"></div>

                            <div class="modal-container bg-white w-96 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                <div class="modal-content py-4 text-left px-6">
                                    <h2 class="text-2xl font-semibold mb-4">Beli Sekarang</h2>
                                    <form @submit.prevent="submitForm">
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700">Nama Penerima</label>
                                            <input x-model="namaPenerima"
                                                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700">Alamat</label>
                                            <textarea x-model="alamat" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="button" @click="showModal = false"
                                                class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800">Batal</button>
                                            <button type="submit"
                                                class="ml-2 px-4 py-2 bg-green-700 text-white rounded-md hover:bg-green-800">Beli</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
