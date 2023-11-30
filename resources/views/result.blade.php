<!DOCTYPE html>
<html lang="en">
<head>
    <title>SAIKO | Result</title>
    <link rel="stylesheet" href="/static/css/main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400;500&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{('images/pngwing.png') }}">
    
</head>
<body class="bg-black font-Poppins ">
    <header>
        <nav class=" text-white bg-gray-900 border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center">
                    <img src="{{('static/images/p.png')}}" class="h-10 mr-3 bg-blue-600" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SAIKO</span>
                </a>
                <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="bg-black">
        <div class="container w-full mx-auto m-6 p-4 h-auto block  border rounded-xl shadow-lg text-white bg-gray-900 border-gray-700">
            <div class="bg-gray-700 rounded-lg p-4 pb-8 w-full">
        
                <p class="text-center mt-3 mb-8 text-5xl font-normal font-Pixelify">Your psycho percentage : {{ $pengguna->point }} % </p>
                <div class="flex justify-between mb-1 w-1/2 mx-auto mt-4">
                    <span class="text-base font-medium text-white dark:text-white">0%</span>
                    <span class="text-sm font-medium text-white dark:text-white">100%</span>
                </div>
                <div class="w-1/2 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mx-auto relative">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%" data-width="{{ $pengguna->point }}">
                        <span class="absolute mt-3 text-white font-medium text-xs" id="percentage">
                            {{ $pengguna->point }}%
                        </span>
                    </div>
                </div>
                
                <div class="text-5xl font-normal font-Pixelify mt-14 text-center">
                    <p>{{ $pengguna->status }}</p>
                </div>

                @if ($pengguna->point >= 80 && $pengguna->point <= 100)
                <div class="mt-6 mb-4 flex justify-center">
                    <img src="static/images/ekstrim.png" alt="" class="w-64 h-80">
                </div>
                <div class="text-5xl font-normal font-Pixelify mt-12 text-center">
                    <p>Saran : </p>
                </div>
                <div class="text-3xl font-normal font-Pixelify text-center">
                    <p>Perlunya penanganan oleh profesional kesehatan mental, terapi intensif, dan pengawasan ketat untuk keselamatan semua pihak.</p>
                </div>

                @elseif ($pengguna->point >= 60 && $pengguna->point <= 79)
                <div class="mt-6 mb-4 flex justify-center">
                    <img src="static/images/tinggi.png" alt="" class="w-64 h-80">
                </div>
                <div class="text-5xl font-normal font-Pixelify mt-12 text-center">
                    <p>Saran : </p>
                </div>
                <div class="text-3xl font-normal font-Pixelify text-center">
                    <p>Penerapan terapi perilaku kognitif dan pemantauan perilaku serta interaksi sosial untuk mengurangi potensi perilaku berbahaya.</p>
                </div>

                @elseif ($pengguna->point >= 40 && $pengguna->point <= 59)
                <div class="mt-6 mb-4 flex justify-center">
                    <img src="static/images/sedang.png" alt="" class="w-64 h-80">
                </div>
                <div class="text-5xl font-normal font-Pixelify mt-12 text-center">
                    <p>Saran : </p>
                </div>
                <div class="text-3xl font-normal font-Pixelify text-center">
                    <p>Fokus pada pengembangan empati dan keterampilan sosial, serta menyediakan dukungan emosional.</p>
                </div>

                @elseif ($pengguna->point >= 20 && $pengguna->point <= 39)
                <div class="mt-6 mb-4 flex justify-center">
                    <img src="static/images/rendah.png" alt="" class="w-64 h-80">
                </div>
                <div class="text-5xl font-normal font-Pixelify mt-12 text-center">
                    <p>Saran : </p>
                </div>
                <div class="text-3xl font-normal font-Pixelify text-center">
                    <p>Edukasi tentang kondisi mereka, serta pembentukan jaringan dukungan yang kuat termasuk keluarga, teman, dan profesional kesehatan.</p>
                </div>

                @else
                <div class="mt-6 mb-4 flex justify-center">
                    <img src="static/images/0.png" alt="" class="w-64 h-80">
                </div>
                <div class="text-5xl font-normal font-Pixelify mt-12 text-center">
                    <p>Saran : </p>
                </div>
                <div class="text-3xl font-normal font-Pixelify text-center">
                    <p>Jadilah diri sendiri dan terus tumbuh secara pribadi dan emosional dengan kepercayaan dan positivitas.</p>
                </div>

                @endif

                <div class="flex justify-center mt-10">
                    <a href="{{ route('main') }}" class="  py-2 px-6 text-lg font-normal text-center rounded-lg  bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 shadow-black drop-shadow-xl hover:shadow-none hover:drop-shadow-none">
                        Retry
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 w-full absolute bottom-0 border-t-2 border-black  block">
        <div class="w-full max-w-screen-xl mx-auto p-2 flex justify-center">
            <span class="block text-sm text-white dark:text-gray-400 mt-5">© 2023 <span class="font-semibold">SAIKO</span><a href="https://flowbite.com/" class="hover:underline"></a>. All Rights Reserved.</span> 
        </div>
        <div class="flex justify-center">
            <span class="text-sm text-white dark:text-gray-400 mb-4"> Designed by <a href="https://bootstrapmade.com/">Kelompok 2</a></span>
        </div>
  </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bar = document.querySelector('[data-width]');
            const percentageSpan = document.getElementById('percentage');
            
            const width = bar.getAttribute('data-width') + '%';
            bar.style.width = width;
            percentageSpan.style.left = width; // Atur posisi span berdasarkan persentase bar
        });
    </script>

        


    <!-- untuk tombol reload ke homepage -->

    <script>
        // Fungsi untuk mengubah URL saat tombol "Back" ditekan
        function kembaliKeHomepage() {
            history.pushState({}, '', '/'); // Mengubah URL ke homepage
        }

        // Menambahkan event listener untuk tombol "Back" pada peramban
        window.addEventListener('popstate', function (event) {
            if (window.location.pathname === '/') {
            // Ini adalah halaman homepage, Anda bisa melakukan apa yang diperlukan di sini
            // Misalnya, menampilkan pesan "Anda sudah berada di homepage"
        }
        });

        // Memanggil fungsi kembaliKeHomepage saat halaman dimuat
        kembaliKeHomepage();
    </script>    

</body>
</html>