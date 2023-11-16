<!DOCTYPE html>
<html>
<head>
  <title>SAIKO | Main</title>
  <link rel="stylesheet" href="/static/css/main.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.5.0/fabric.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ ('images/pngwing.png') }}">

</head>

<body class="bg-black font-Poppins text-white">
  <header>
    <nav class=" text-white bg-gray-900 border-gray-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center">
              <img src="{{('static/images/p.png')}}" class="h-10 mr-3 bg-blue-600" alt="Logo" />
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

  <main>
    <div class="container w-5/5 mx-auto m-6 p-8 h-auto block border rounded-xl shadow-lg bg-gray-900 border-gray-700">

      <form action="{{ route('main.store') }}" method="post" class=" rounded-lg p-8 text-justify">
        @csrf
        <h5 class="mb-16 text-white text-3xl font-bold tracking-tight text-center ">PENILAIAN KARAKTER PSIKOPAT</h5>
        <fieldset class="nama">
            <legend class="mb-2 text-gray-200">Isi Nama Anda :</legend>
            <div class="mb-2">
              <input type="text" name="nama" id="nama" required class="mr-2 text-black">
            </div>
          </fieldset>

          <!-- Pertayaan 1 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan1->teks_pertanyaan }}</legend>
            @forelse ( $jawaban1 as $jawaban1)
            <div class="mb-2">
              <input type="radio" name="q1" id="{{ $jawaban1->id }}" value="{{ $jawaban1->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban1->id }}">{{ $jawaban1->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>
          
          <!-- Pertayaan 2 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan2->teks_pertanyaan }}</legend>
            @forelse ( $jawaban2 as $jawaban2)
            <div class="mb-2">
              <input type="radio" name="q2" id="{{ $jawaban2->id }}" value="{{ $jawaban2->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban2->id }}">{{ $jawaban2->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 3 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan3->teks_pertanyaan }}</legend>
            @forelse ( $jawaban3 as $jawaban3)
            <div class="mb-2">
              <input type="radio" name="q3" id="{{ $jawaban3->id }}" value="{{ $jawaban1->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban3->id }}">{{ $jawaban3->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 4 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan4->teks_pertanyaan }}</legend>
            @forelse ( $jawaban4 as $jawaban4)
            <div class="mb-2">
              <input type="radio" name="q4" id="{{ $jawaban4->id }}" value="{{ $jawaban4->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban4->id }}">{{ $jawaban4->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>
      
          <!-- Pertayaan 5 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan5->teks_pertanyaan }}</legend>
            @forelse ( $jawaban5 as $jawaban5)
            <div class="mb-2">
              <input type="radio" name="q5" id="{{ $jawaban5->id }}" value="{{ $jawaban5->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban1->id }}">{{ $jawaban5->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 6 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan6->teks_pertanyaan }}</legend>
            @forelse ( $jawaban6 as $jawaban6)
            <div class="mb-2">
              <input type="radio" name="q6" id="{{ $jawaban6->id }}" value="{{ $jawaban6->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban6->id }}">{{ $jawaban6->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 7 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan7->teks_pertanyaan }}</legend>
            @forelse ( $jawaban7 as $jawaban7)
            <div class="mb-2">
              <input type="radio" name="q7" id="{{ $jawaban7->id }}" value="{{ $jawaban7->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban7->id }}">{{ $jawaban7->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 8 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan8->teks_pertanyaan }}</legend>
            @forelse ( $jawaban8 as $jawaban8)
            <div class="mb-2">
              <input type="radio" name="q8" id="{{ $jawaban8->id }}" value="{{ $jawaban8->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban8->id }}">{{ $jawaban8->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 9 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan9->teks_pertanyaan }}</legend>
            @forelse ( $jawaban9 as $jawaban9)
            <div class="mb-2">
              <input type="radio" name="q9" id="{{ $jawaban9->id }}" value="{{ $jawaban9->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban9->id }}">{{ $jawaban9->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 10 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan10->teks_pertanyaan }}</legend>
            @forelse ( $jawaban10 as $jawaban10)
            <div class="mb-2">
              <input type="radio" name="q10" id="{{ $jawaban10->id }}" value="{{ $jawaban10->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban10->id }}">{{ $jawaban10->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 11 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan11->teks_pertanyaan }}</legend>
            @forelse ( $jawaban11 as $jawaban11)
            <div class="mb-2">
              <input type="radio" name="q11" id="{{ $jawaban11->id }}" value="{{ $jawaban11->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban11->id }}">{{ $jawaban11->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 12 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan12->teks_pertanyaan }}</legend>
            @forelse ( $jawaban12 as $jawaban12)
            <div class="mb-2">
              <input type="radio" name="q12" id="{{ $jawaban12->id }}" value="{{ $jawaban12->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban12->id }}">{{ $jawaban12->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 13 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan13->teks_pertanyaan }}</legend>
            @forelse ( $jawaban13 as $jawaban13)
            <div class="mb-2">
              <input type="radio" name="q13" id="{{ $jawaban13->id }}" value="{{ $jawaban13->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban13->id }}">{{ $jawaban13->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 14 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan14->teks_pertanyaan }}</legend>
            @forelse ( $jawaban14 as $jawaban14)
            <div class="mb-2">
              <input type="radio" name="q14" id="{{ $jawaban14->id }}" value="{{ $jawaban14->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban14->id }}">{{ $jawaban14->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 15 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan15->teks_pertanyaan }}</legend>
            @forelse ( $jawaban15 as $jawaban15)
            <div class="mb-2">
              <input type="radio" name="q15" id="{{ $jawaban15->id }}" value="{{ $jawaban15->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban15->id }}">{{ $jawaban15->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 16 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan16->teks_pertanyaan }}</legend>
            @forelse ( $jawaban16 as $jawaban16)
            <div class="mb-2">
              <input type="radio" name="q16" id="{{ $jawaban16->id }}" value="{{ $jawaban16->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban16->id }}">{{ $jawaban16->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 17 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan17->teks_pertanyaan }}</legend>
            @forelse ( $jawaban17 as $jawaban17)
            <div class="mb-2">
              <input type="radio" name="q17" id="{{ $jawaban17->id }}" value="{{ $jawaban17->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban17->id }}">{{ $jawaban17->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 18 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan18->teks_pertanyaan }}</legend>
            @forelse ( $jawaban18 as $jawaban18)
            <div class="mb-2">
              <input type="radio" name="q18" id="{{ $jawaban18->id }}" value="{{ $jawaban18->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban18->id }}">{{ $jawaban18->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 19 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan19->teks_pertanyaan }}</legend>
            @forelse ( $jawaban19 as $jawaban19)
            <div class="mb-2">
              <input type="radio" name="q19" id="{{ $jawaban19->id }}" value="{{ $jawaban19->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban19->id }}">{{ $jawaban19->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>

          <!-- Pertayaan 20 -->
          <fieldset class="mb-14">
            <legend class="mb-2 text-gray-200">{{ $pertanyaan20->teks_pertanyaan }}</legend>
            @forelse ( $jawaban20 as $jawaban20)
            <div class="mb-2">
              <input type="radio" name="q20" id="{{ $jawaban20->id }}" value="{{ $jawaban20->point }}" class="mr-2">
              <label class="text-sky-500" for="{{ $jawaban20->id }}">{{ $jawaban20->teks_jawaban }}</label>
            </div>
            @empty
            <p class="text-red-500">Data jawaban tidak ditemukan.</p>
            @endforelse
          </fieldset>


          <div class="flex justify-center">
          <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Kirim</button>
        </div>
      </form>
    </div>

    </main>

    <footer class="bg-gray-900 w-full absolute border-t-2 border-black  block">
      <div class="w-full max-w-screen-xl mx-auto p-2 flex justify-center">
          <span class="block text-sm text-white dark:text-gray-400 mt-5">© 2023 <span class="font-semibold">SAIKO</span><a href="https://flowbite.com/" class="hover:underline"></a>. All Rights Reserved.</span> 
      </div>
      <div class="flex justify-center">
          <span class="text-sm text-white dark:text-gray-400 mb-4"> Designed by <a href="https://bootstrapmade.com/">Kelompok 2</a></span>
      </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
