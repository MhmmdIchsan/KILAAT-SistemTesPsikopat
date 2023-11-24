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
            'teks_jawaban' => 'Menakut-nakuti anda',
            'point' => '0'
        ],
        [
            'id' => 'q01b',
            'teks_jawaban' => 'Jangan bilang siapa-siapa ya kamu!',
            'point' => '0'
        ],
        [
            'id' => 'q01c',
            'teks_jawaban' => 'Menyuruh masuk ke dalam',
            'point' => '0'
        ],
        [
            'id' => 'q01d',
            'teks_jawaban' => 'Hitung lantai',
            'point' => '5'
        ],
        [
        // Pertanyaan 2
            'id' => 'q02a',
            'teks_jawaban' => 'Membiarkan kereta melaju',
            'point' => '0'
        ],
        [
            'id' => 'q02b',
            'teks_jawaban' => 'mendorong orang disebelah anda',
            'point' => '5'
        ],
        [
        // Pertanyaan 3
            'id' => 'q3a',
            'teks_jawaban' => 'Menyuruh untuk berbaris',
            'point' => '0'
        ],
        [
            'id' => 'q3b',
            'teks_jawaban' => 'Menembak asal-asalan',
            'point' => '0'
        ],
        [
            'id' => 'q3c',
            'teks_jawaban' => 'Membunuh ibu dan bayi yang sedang di gendong',
            'point' => '0'
        ],
        [
            'id' => 'q3d',
            'teks_jawaban' => 'Membunuh ibu hamil',
            'point' => '5'
        ],
        [
        // Pertanyaan 4
            'id' => 'q4a',
            'teks_jawaban' => '0%',
            'point' => '5'
        ],
        [
            'id' => 'q4b',
            'teks_jawaban' => '25%',
            'point' => '5'
        ],
        [
            'id' => 'q4c',
            'teks_jawaban' => '50%',
            'point' => '0'
        ],
        [
            'id' => 'q4d',
            'teks_jawaban' => '75%',
            'point' => '0'
        ],
        [
            'id' => 'q4e',
            'teks_jawaban' => '100%',
            'point' => '0'
        ],
        [
        // Pertanyaan 5
            'id' => 'q5a',
            'teks_jawaban' => 'Merasa terganggu',
            'point' => '0'
        ],
        [
            'id' => 'q5b',
            'teks_jawaban' => 'Dendam dengan orang tersebut',
            'point' => '0'
        ],
        [
            'id' => 'q5c',
            'teks_jawaban' => 'melepaskan penderitaan',
            'point' => '5'
        ],
        [
            'id' => 'q5d',
            'teks_jawaban' => 'Ingin mengambil barang-barang yang ada di orang tersebut',
            'point' => '0'
        ],
        [
        // Pertanyaan 6
            'id' => 'q6a',
            'teks_jawaban' => 'Tangannya diinjak',
            'point' => '0'
        ],
        [
            'id' => 'q6b',
            'teks_jawaban' => 'melepaskan jari satu-persatu',
            'point' => '5'
        ],
        [
            'id' => 'q6c',
            'teks_jawaban' => 'Menendang tangannya dengan keras',
            'point' => '0'
        ],
        [
            'id' => 'q6d',
            'teks_jawaban' => 'Melemparkan barang yang besar dan keras',
            'point' => '5'
        ],
        [
        // Pertanyaan 7
            'id' => 'q7a',
            'teks_jawaban' => 'Buka lemari dan tusuk',
            'point' => '0'
        ],
        [
            'id' => 'q7b',
            'teks_jawaban' => 'menunggu',
            'point' => '5'
        ],
        [
            'id' => 'q7c',
            'teks_jawaban' => 'Tusuk-tusuk lemari',
            'point' => '0'
        ],
        [
            'id' => 'q7d',
            'teks_jawaban' => 'Gembok/Kunci lemarinya',
            'point' => '5'
        ],
        [
        // Pertanyaan 8
            'id' => 'q8a',
            'teks_jawaban' => 'Tukang daging',
            'point' => '0'
        ],
        [
            'id' => 'q8b',
            'teks_jawaban' => 'Orang memasak',
            'point' => '0'
        ],
        [
            'id' => 'q8c',
            'teks_jawaban' => 'Tetangga anda',
            'point' => '0'
        ],
        [
            'id' => 'q8d',
            'teks_jawaban' => 'anda sendiri',
            'point' => '5'
        ],
        [
            'id' => 'q8e',
            'teks_jawaban' => 'Kawan anda',
            'point' => '5'
        ],
        [
        // Pertanyaan 9
            'id' => 'q9a',
            'teks_jawaban' => 'Murah, tidak lancip',
            'point' => '5'
        ],
        [
            'id' => 'q9b',
            'teks_jawaban' => 'Mahal bisa disimpan',
            'point' => '0'
        ],
        [
            'id' => 'q9c',
            'teks_jawaban' => 'Murah, hemat',
            'point' => '0'
        ],
        [
            'id' => 'q9d',
            'teks_jawaban' => 'Murah lebih banyak yang bisa beli',
            'point' => '0'
        ],
        [
        // Pertanyaan 10
            'id' => 'q10a',
            'teks_jawaban' => 'Cek apakah ada cctv',
            'point' => '0'
        ],
        [
            'id' => 'q10b',
            'teks_jawaban' => 'Melihat apakah orang tersebut sudah mati',
            'point' => '0'
        ],
        [
            'id' => 'q10c',
            'teks_jawaban' => 'Memastikan tidak ada jejak lagi',
            'point' => '0'
        ],
        [
            'id' => 'q10d',
            'teks_jawaban' => 'Melihat orang itu sedang mati',
            'point' => '5'
        ],
        [
        // Pertanyaan 11
            'id' => 'q11a',
            'teks_jawaban' => 'Kakaknya membunuh ikannya',
            'point' => '0'
        ],
        [
            'id' => 'q11b',
            'teks_jawaban' => 'Coklatnya dimakan kakaknya',
            'point' => '0'
        ],
        [
            'id' => 'q11c',
            'teks_jawaban' => 'Ingin dapat coklat lagi',
            'point' => '0'
        ],
        [
            'id' => 'q11d',
            'teks_jawaban' => 'Ingin dapat coklat sebesar kakaknya',
            'point' => '5'
        ],
        [
        // Pertanyaan 12
            'id' => 'q12a',
            'teks_jawaban' => 'mengambil kotak P3K',
            'point' => '5'
        ],
        [
            'id' => 'q12b',
            'teks_jawaban' => 'Mengintip kamar tidur',
            'point' => '0'
        ],
        [
            'id' => 'q12c',
            'teks_jawaban' => 'menyapu pecahan guci',
            'point' => '5'
        ],
        [
            'id' => 'q12d',
            'teks_jawaban' => 'Memegang pentungan',
            'point' => '0'
        ],
        [
            'id' => 'q12e',
            'teks_jawaban' => 'Keluar dari rumah',
            'point' => '0'
        ],
        [
        // Pertanyaan 13
            'id' => 'q13a',
            'teks_jawaban' => 'Membunuh 2 tawanan dan membiarkan 1 tawanan takut',
            'point' => '5'
        ],
        [
            'id' => 'q13b',
            'teks_jawaban' => 'Membunuh 1 tawanan dan membiarkan 2 tawanan takut',
            'point' => '0'
        ],
        [
            'id' => 'q13c',
            'teks_jawaban' => 'Membunuh semuanya untuk kebahagiaannya sendiri',
            'point' => '0'
        ],
        [
        // Pertanyaan 14
            'id' => 'q14a',
            'teks_jawaban' => 'pergi ke kamar mandi / bathtub',
            'point' => '5'
        ],
        [
            'id' => 'q14b',
            'teks_jawaban' => 'Menyalakan tv dan semua lampu',
            'point' => '0'
        ],
        [
            'id' => 'q14c',
            'teks_jawaban' => 'Pergi ke ruang anggota keluarga yang belum tidur',
            'point' => '0'
        ],
        [
            'id' => 'q14d',
            'teks_jawaban' => 'Telpon kawan akrab anda',
            'point' => '0'
        ],
        [
        // Pertanyaan 15
            'id' => 'q15a',
            'teks_jawaban' => 'Adegan pembunuhan',
            'point' => '0'
        ],
        [
            'id' => 'q15b',
            'teks_jawaban' => 'Pembunuh sedang mengejar korban',
            'point' => '5'
        ],
        [
            'id' => 'q15c',
            'teks_jawaban' => 'Mayat jatuh dari ketinggian',
            'point' => '0'
        ],
        [
            'id' => 'q15d',
            'teks_jawaban' => 'Orang bunuh diri',
            'point' => '0'
        ],
        [
        // Pertanyaan 16
            'id' => 'q16a',
            'teks_jawaban' => 'Menanyakan barang berharga',
            'point' => '0'
        ],
        [
            'id' => 'q16b',
            'teks_jawaban' => 'Meminta uang yang ada',
            'point' => '0'
        ],
        [
            'id' => 'q16c',
            'teks_jawaban' => 'Membiarkan anda ketakutan',
            'point' => '5'
        ],
        [
            'id' => 'q16d',
            'teks_jawaban' => 'Kesalahan identitas',
            'point' => '0'
        ],
        [
        // Pertanyaan 17
            'id' => 'q17a',
            'teks_jawaban' => 'Korbannya yang salah karena membiarkan gerbang terbuka',
            'point' => '0'
        ],
        [
            'id' => 'q17b',
            'teks_jawaban' => 'Pelaku kasus tersebut yang salah karena masuk',
            'point' => '0'
        ],
        [
            'id' => 'q17c',
            'teks_jawaban' => 'Keduanya tidak salah, situasi yang memungkinkan itu terjadi',
            'point' => '5'
        ],
        [
            'id' => 'q17d',
            'teks_jawaban' => 'Keduanya salah',
            'point' => '0'
        ],
        [
        // Pertanyaan 18
            'id' => 'q18a',
            'teks_jawaban' => '3 orang yang tidak anda kenal',
            'point' => '5'
        ],
        [
            'id' => 'q18b',
            'teks_jawaban' => 'Seorang teman akrab anda',
            'point' => '0'
        ],
        [
            'id' => 'q18c',
            'teks_jawaban' => 'Berusaha menyelamatkan semua yang dapat mengakibatkan nyawa beresiko',
            'point' => '0'
        ],
        [
        // Pertanyaan 19
            'id' => 'q19a',
            'teks_jawaban' => 'Menikam perut dengan pisau',
            'point' => '0'
        ],
        [
            'id' => 'q19b',
            'teks_jawaban' => 'Membunuhnya secara perlahan dengan memotong kakinya',
            'point' => '5'
        ],
        [
            'id' => 'q19c',
            'teks_jawaban' => 'Membunuhnya dengan memotong-motong bagian tubuh',
            'point' => '5'
        ],
        [
            'id' => 'q19d',
            'teks_jawaban' => 'Bunuh dahulu lalu potong lehernya',
            'point' => '5'
        ],
        [
            'id' => 'q19e',
            'teks_jawaban' => 'Menusuk jantungnya',
            'point' => '0'
        ],
        [
            'id' => 'q19f',
            'teks_jawaban' => 'Bunuh dahulu lalu dibakar mayatnya',
            'point' => '5'
        ],
        [
        // Pertanyaan 20
            'id' => 'q20a',
            'teks_jawaban' => 'Bersaing untuk cinta',
            'point' => '0'
        ],
        [
            'id' => 'q20b',
            'teks_jawaban' => 'ingin melihat laki-laki itu lagi',
            'point' => '5'
        ],
        [
            'id' => 'q20c',
            'teks_jawaban' => 'Bersaing untuk mendapatkan perhatian',
            'point' => '0'
        ],
        [
            'id' => 'q20d',
            'teks_jawaban' => 'Adiknya cemburu',
            'point' => '0'
        ]
        ]);
    }
}
