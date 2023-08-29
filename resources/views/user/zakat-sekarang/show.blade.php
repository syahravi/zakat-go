@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-center">
        Bantu Sembako Pejuang Keluarga di Tengah Pandemi Corona
    </h1>

    <img class="w-full h-auto md:w-2/3 lg:w-1/2 rounded-lg mx-auto" src="{{ asset('img/login.webp') }}"
        alt="logo" />

    <div class="bg-white max-w-xl mx-auto rounded-lg shadow-md p-6 mb-4">
        <button type="button"
            class="w-full px-3 py-2 bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Zakat Sekarang
        </button>
        <p class="mt-3 text-2xl text-green-500 font-bold">Rp.1000.800 </p>
        <p class="text-dark mt-1">telah terkumpul</p>
        <p class="text-sm text-gray-600 mt-2">kategori zakat</p>
    </div>

    <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-3">
        <!-- Headline Accordion -->
        <div class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
            <h1 class="accordion-header font-bold mb-0" id="headingOne">
                <button class="group relative flex w-full items-center rounded-t-[15px] border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                    type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="false"
                    aria-controls="collapseOne">
                    info Detail
                    <span
                        class="rotate-icon -mr-1 ml-auto h-5 w-5 shrink-0 fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h1>
            <div id="collapseOne" class="accordion-body">
                <div class="px-5 py-4">
                    <div class="bg-white max-w-xl mx-auto rounded-lg shadow-md p-6 mb-4">
                        <h1 class="mb-2 font-bold">Deskripsi</h1>
                        <p>"Kemanusiaan itu tak mengenal batas negara dan agama. Ia tumbuh dari keajaiban nuranimu
                            tanpa sekat, tanpa musim." Helvy Tiana Rosa Sejak akhir Ramadhan, bahkan sampai detik
                            ini langit Palestina masih merah. Tanda serangan militer Israel terus terjadi,
                            masyarakat sipil terus diusik.Pedih hati ini mendengar teriakan pilu, tangisan seorang
                            Ayah, Ibu dan Anak yang harus kehilangan sanak saudaranya, ya Allah...Hassbunallah wa
                            nikmal wakil nikmal maula wanikman nasir.Ratusan tahun berlalu dan ribua...</p>
                        <br>
                        <h1 class="mb-2 font-bold">Detail lokasi</h1>
                        <div class="bg-slate-500 max-w-xl mx-auto rounded-lg shadow-md p-6 mb-4">
                            <p class="text-slate-300">Perum. IKIP Gunung Anyar B-48 Surabaya. Telp:
                                031-8783344. WA: 0878-5252-5300

                                Suraabya, Gunung Anyar

                                Kota Surabaya, Jawa Timur

                                Longitude
                                Latitude</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donatur Accordion -->
        <div class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
            <h2 class="accordion-header mb-0" id="headingTwo">
                <button class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                    type="button" data-te-collapse-init data-te-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    Daftar donasi
                    <span
                        class="rotate-icon -mr-1 ml-auto h-5 w-5 shrink-0 fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-body">
                <div class="px-5 py-4">
                    <div class="bg-white max-w-xl mx-auto rounded-lg shadow-md p-6 mb-4">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi fugiat dolorem nostrum
                            iste corporis ratione optio laborum voluptates unde natus.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Terkini Accordion -->
        <div class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
            <h2 class="accordion-header mb-0" id="headingThree">
                <button class="group relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)] [&[data-te-collapse-collapsed]]:rounded-b-[15px] [&[data-te-collapse-collapsed]]:transition-none"
                    type="button" data-te-collapse-init data-te-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    Accordion Item #3
                    <span
                        class="rotate-icon -mr-1 ml-auto h-5 w-5 shrink-0 fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-body">
                <div class="px-5 py-4">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                </div>
            </div>
        </div>
    </div>

    <div id="fixedButton" class="fixed bottom-4 right-4 z-20 w-screen text-center">
        <button type="button"
            class="text-white block w-screen px-6 py-4 bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-blue-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Zakat Sekarang
        </button>
    </div>

    <script type="module">
        $(document).ready(function () {
            $('[data-te-collapse-init]').click(function () {
                const target = $($(this).data('te-target'));
                const parent = $(this).closest('[data-te-parent]');

                if (target) {
                    const isCollapsed = target.hasClass('hidden');
                    target.toggleClass('hidden', !isCollapsed);
                    parent.toggleClass('active', !isCollapsed);
                }

                $('[data-te-collapse-init]').each(function () {
                    if (this !== this && $(this).data('te-parent') === $(this).data('te-parent')) {
                        const accTarget = $($(this).data('te-target'));
                        accTarget.addClass('hidden');
                        $(this).closest('[data-te-parent]').removeClass('active');
                    }
                });
            });
        });
    </script>
</div>
@endsection
