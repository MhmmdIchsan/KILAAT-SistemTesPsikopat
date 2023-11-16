<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jawaban extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('jawaban')->insert([
        // Pertanyaan 1
        [
            'id' => 'q01a',
            'jawaban' => 'Menakut-nakuti anda',
            'point' => '0'
        ],
        [
            'id' => 'q01b',
            'jawaban' => 'Jangan bilang siapa-siapa ya kamu!',
            'point' => '0'
        ],
        [
            'id' => 'q01c',
            'jawaban' => 'Menyuruh masuk ke dalam',
            'point' => '0'
        ],
        [
            'id' => 'q01d',
            'jawaban' => 'Hitung lantai',
            'point' => '5'
        ],
        [
        // Pertanyaan 2
            'id' => 'q2a',
            'jawaban' => 'Membiarkan kereta melaju',
            'point' => '0'
        ],
        [
            'id' => 'q2b',
            'jawaban' => 'mendorong orang disebelah anda',
            'point' => '5'
        ],
        [
        // Pertanyaan 3
            'id' => 'q3a',
            'jawaban' => 'Menyuruh untuk berbaris',
            'point' => '0'
        ],
        [
            'id' => 'q3b',
            'jawaban' => 'Menembak asal-asalan',
            'point' => '0'
        ],
        [
            'id' => 'q3c',
            'jawaban' => 'Membunuh ibu dan bayi yang sedang di gendong',
            'point' => '0'
        ],
        [
            'id' => 'q3d',
            'jawaban' => 'Membunuh ibu hamil',
            'point' => '5'
        ],
        [
        // Pertanyaan 4
            'id' => 'q4a',
            'jawaban' => '0%',
            'point' => '5'
        ],
        [
            'id' => 'q4b',
            'jawaban' => '25%',
            'point' => '5'
        ],
        [
            'id' => 'q4c',
            'jawaban' => '50%',
            'point' => '0'
        ],
        [
            'id' => 'q4d',
            'jawaban' => '75%',
            'point' => '0'
        ],
        [
            'id' => 'q4e',
            'jawaban' => '100%',
            'point' => '0'
        ],
        [
        // Pertanyaan 5
            'id' => 'q5a',
            'jawaban' => 'Merasa terganggu',
            'point' => '0'
        ],
        [
            'id' => 'q5b',
            'jawaban' => 'Dendam dengan orang tersebut',
            'point' => '0'
        ],
        [
            'id' => 'q5c',
            'jawaban' => 'melepaskan penderitaan',
            'point' => '5'
        ],
        [
            'id' => 'q5d',
            'jawaban' => 'Ingin mengambil barang-barang yang ada di orang tersebut',
            'point' => '0'
        ],
        [
        // Pertanyaan 6
            'id' => 'q6a',
            'jawaban' => 'Tangannya diinjak',
            'point' => '0'
        ],
        [
            'id' => 'q6b',
            'jawaban' => 'melepaskan jari satu-persatu',
            'point' => '5'
        ],
        [
            'id' => 'q6c',
            'jawaban' => 'Menendang tangannya dengan keras',
            'point' => '0'
        ],
        [
            'id' => 'q6d',
            'jawaban' => 'Melemparkan barang yang besar dan keras',
            'point' => '5'
        ],
        [
        // Pertanyaan 7
            'id' => 'q7a',
            'jawaban' => 'Buka lemari dan tusuk',
            'point' => '0'
        ],
        [
            'id' => 'q7b',
            'jawaban' => 'menunggu',
            'point' => '5'
        ],
        [
            'id' => 'q7c',
            'jawaban' => 'Tusuk-tusuk lemari',
            'point' => '0'
        ],
        [
            'id' => 'q7d',
            'jawaban' => 'Gembok/Kunci lemarinya',
            'point' => '5'
        ],
        [
        // Pertanyaan 8
            'id' => 'q8a',
            'jawaban' => 'Tukang daging',
            'point' => '0'
        ],
        [
            'id' => 'q8b',
            'jawaban' => 'Orang memasak',
            'point' => '0'
        ],
        [
            'id' => 'q8c',
            'jawaban' => 'Tetangga anda',
            'point' => '0'
        ],
        [
            'id' => 'q8d',
            'jawaban' => 'anda sendiri',
            'point' => '5'
        ],
        [
            'id' => 'q8e',
            'jawaban' => 'Kawan anda',
            'point' => '5'
        ],
        [
        // Pertanyaan 9
            'id' => 'q9a',
            'jawaban' => 'Murah, tidak lancip',
            'point' => '5'
        ],
        [
            'id' => 'q9b',
            'jawaban' => 'Mahal bisa disimpan',
            'point' => '0'
        ],
        [
            'id' => 'q9c',
            'jawaban' => 'Murah, hemat',
            'point' => '0'
        ],
        [
            'id' => 'q9d',
            'jawaban' => 'Murah lebih banyak yang bisa beli',
            'point' => '0'
        ],
        [
        // Pertanyaan 10
            'id' => 'q10a',
            'jawaban' => 'Cek apakah ada cctv',
            'point' => '0'
        ],
        [
            'id' => 'q10b',
            'jawaban' => 'Melihat apakah orang tersebut sudah mati',
            'point' => '0'
        ],
        [
            'id' => 'q10c',
            'jawaban' => 'Memastikan tidak ada jejak lagi',
            'point' => '0'
        ],
        [
            'id' => 'q10d',
            'jawaban' => 'Melihat orang itu sedang mati',
            'point' => '5'
        ],
        [
        // Pertanyaan 11
            'id' => 'q11a',
            'jawaban' => 'Kakaknya membunuh ikannya',
            'point' => '0'
        ],
        [
            'id' => 'q11b',
            'jawaban' => 'Coklatnya dimakan kakaknya',
            'point' => '0'
        ],
        [
            'id' => 'q11c',
            'jawaban' => 'Ingin dapat coklat lagi',
            'point' => '0'
        ],
        [
            'id' => 'q11d',
            'jawaban' => 'Ingin dapat coklat sebesar kakaknya',
            'point' => '5'
        ],
        [
        // Pertanyaan 12
            'id' => 'q12a',
            'jawaban' => 'mengambil kotak P3K',
            'point' => '5'
        ],
        [
            'id' => 'q12b',
            'jawaban' => 'Mengintip kamar tidur',
            'point' => '0'
        ],
        [
            'id' => 'q12c',
            'jawaban' => 'menyapu pecahan guci',
            'point' => '5'
        ],
        [
            'id' => 'q12d',
            'jawaban' => 'Memegang pentungan',
            'point' => '0'
        ],
        [
            'id' => 'q12e',
            'jawaban' => 'Keluar dari rumah',
            'point' => '0'
        ],
        [
        // Pertanyaan 13
            'id' => 'q13a',
            'jawaban' => 'Membunuh 2 tawanan dan membiarkan 1 tawanan takut',
            'point' => '5'
        ],
        [
            'id' => 'q13b',
            'jawaban' => 'Membunuh 1 tawanan dan membiarkan 2 tawanan takut',
            'point' => '0'
        ],
        [
            'id' => 'q13c',
            'jawaban' => 'Membunuh semuanya untuk kebahagiaannya sendiri',
            'point' => '0'
        ],
        [
        // Pertanyaan 14
            'id' => 'q14a',
            'jawaban' => 'pergi ke kamar mandi / bathtub',
            'point' => '5'
        ],
        [
            'id' => 'q14b',
            'jawaban' => 'Menyalakan tv dan semua lampu',
            'point' => '0'
        ],
        [
            'id' => 'q14c',
            'jawaban' => 'Pergi ke ruang anggota keluarga yang belum tidur',
            'point' => '0'
        ],
        [
            'id' => 'q14d',
            'jawaban' => 'Telpon kawan akrab anda',
            'point' => '0'
        ],
        [
        // Pertanyaan 15
            'id' => 'q15a',
            'jawaban' => 'Adegan pembunuhan',
            'point' => '0'
        ],
        [
            'id' => 'q15b',
            'jawaban' => 'Pembunuh sedang mengejar korban',
            'point' => '5'
        ],
        [
            'id' => 'q15c',
            'jawaban' => 'Mayat jatuh dari ketinggian',
            'point' => '0'
        ],
        [
            'id' => 'q15d',
            'jawaban' => 'Orang bunuh diri',
            'point' => '0'
        ],
        [
        // Pertanyaan 16
            'id' => 'q16a',
            'jawaban' => 'Menanyakan barang berharga',
            'point' => '0'
        ],
        [
            'id' => 'q16b',
            'jawaban' => 'Meminta uang yang ada',
            'point' => '0'
        ],
        [
            'id' => 'q16c',
            'jawaban' => 'Membiarkan anda ketakutan',
            'point' => '5'
        ],
        [
            'id' => 'q16d',
            'jawaban' => 'Kesalahan identitas',
            'point' => '0'
        ],
        [
        // Pertanyaan 17
            'id' => 'q17a',
            'jawaban' => 'Korbannya yang salah karena membiarkan gerbang terbuka',
            'point' => '0'
        ],
        [
            'id' => 'q17b',
            'jawaban' => 'Pelaku kasus tersebut yang salah karena masuk',
            'point' => '0'
        ],
        [
            'id' => 'q17c',
            'jawaban' => 'Keduanya tidak salah, situasi yang memungkinkan itu terjadi',
            'point' => '5'
        ],
        [
            'id' => 'q17d',
            'jawaban' => 'Keduanya salah',
            'point' => '0'
        ],
        [
        // Pertanyaan 18
            'id' => 'q18a',
            'jawaban' => '3 orang yang tidak anda kenal',
            'point' => '5'
        ],
        [
            'id' => 'q18b',
            'jawaban' => 'Seorang teman akrab anda',
            'point' => '0'
        ],
        [
            'id' => 'q18c',
            'jawaban' => 'Berusaha menyelamatkan semua yang dapat mengakibatkan nyawa beresiko',
            'point' => '0'
        ],
        [
        // Pertanyaan 19
            'id' => 'q19a',
            'jawaban' => 'Menikam perut dengan pisau',
            'point' => '0'
        ],
        [
            'id' => 'q19b',
            'jawaban' => 'Membunuhnya secara perlahan dengan memotong kakinya',
            'point' => '5'
        ],
        [
            'id' => 'q19c',
            'jawaban' => 'Membunuhnya dengan memotong-motong bagian tubuh',
            'point' => '5'
        ],
        [
            'id' => 'q19d',
            'jawaban' => 'Bunuh dahulu lalu potong lehernya',
            'point' => '5'
        ],
        [
            'id' => 'q19e',
            'jawaban' => 'Menusuk jantungnya',
            'point' => '0'
        ],
        [
            'id' => 'q19f',
            'jawaban' => 'Bunuh dahulu lalu dibakar mayatnya',
            'point' => '5'
        ],
        [
        // Pertanyaan 20
            'id' => 'q20a',
            'jawaban' => 'Bersaing untuk cinta',
            'point' => '0'
        ],
        [
            'id' => 'q20b',
            'jawaban' => 'ingin melihat laki-laki itu lagi',
            'point' => '0'
        ],
        [
            'id' => 'q20c',
            'jawaban' => 'Bersaing untuk mendapatkan perhatian',
            'point' => '0'
        ],
        [
            'id' => 'q20d',
            'jawaban' => 'Adiknya cemburu',
            'point' => '5'
        ]
        ]);
    }
}
