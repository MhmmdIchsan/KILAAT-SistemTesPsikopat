<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pertanyaan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pertanyaan')->insert([
        [
            'id' => 'q1',
            'teks_pertanyaan' => '1. Bayangkan anda tinggal di apartemen yang cukup tinggi. Waktu itu anda kebetulan pergi ke balkon dan ketika sudah sampai di balkon dan melihat keluar anda menyaksikan seseorang membunuh. Seketika itu juga pembunuhnya menoleh ke anda dan pembunuh itu melakukan gerakan nunjuk-nunjuk ke arah anda. Pertanyaannya adalah apa yang dimaksud dengan pembunuh tersebut?'
        ],
        [
            'id' => 'q2',
            'teks_pertanyaan' => '2. Bayangkan anda berada di jembatan penyeberangan. dibawah jembatan penyeberangan ini ditengah-tengahnya ialah rel kereta. Ketika anda sudah berada di tengah-tengah jembatan, anda menyaksikan ada 5 orang yang terikat di rel. Ketika anda melihat kebelakang anda melihat ada kereta api yang sedang melaju. Seketika itu anda juga baru menyadari bahwa ada 1 orang lain yang berdiri di sebelah anda. Anda memiliki 2 pilihan, yang pertama yaitu membiarkan kereta melaju dan melindas 5 orang tersebut dan yang kedua ialah mendorong orang di sebelah anda karena dengan matinya orang tersebut bisa menyelamatkan 5 orang tersebut. Apa pilihan anda?'
        ],
        [
            'id' => 'q3',
            'teks_pertanyaan' => '3. Anda diberi pistol yang berisi 5 peluru dan disuruh membunuh lebih dari 6 orang. Pikirkan bagaimana caranya?'
        ],
        [
            'id' => 'q4',
            'teks_pertanyaan' => '4. Teman anda tiba-tiba membawa barang anda dan mengaku-ngaku bahwa itu barang miliknya. Seberapa marah anda melihat tingkah laku teman anda?'
        ],
        [
            'id' => 'q5',
            'teks_pertanyaan' => '5. Suatu hari anda sedang berjalan dan melihat di jalan ada tunawisma (homeless) yang kedinginan. Tiba-tiba ada orang yang datang dan membunuh dia. Kira-kira apa alasan/ motivasi dari pembunuh untuk membunuh tunawisma tersebut?'
        ],
        [
            'id' => 'q6',
            'teks_pertanyaan' => '6. Seseorang yang sangat anda benci, misalkan orang tersebut pernah melakukan kejahatan terhadap keluarga anda. Anda melihat orang tersebut bergelantungan di tebing dan anda harus membunuh orang tersebut. Bagaimana cara anda membunuh orang tersebut?'
        ],
        [
            'id' => 'q7',
            'teks_pertanyaan' => '7. Bayangkan ada seseorang yang terbangun dari tidurnya dan pergi kedapur untuk minum air. Tiba-tiba orang tersebut bertatapan mata dengan seorang maling yang berhasil masuk ke rumahnya. Dan orang tersebut lari masuk ke lemari baju. Anda disini sebagai malingnya, di tangan kanan anda ada sebuah pisau. Bagaimana cara anda membunuh orang yang ada dilemari tersebut?'
        ],
        [
            'id' => 'q8',
            'teks_pertanyaan' => '8. Anda bayangkan melihat sosok seseorang (tidak tampak wajahnya) yang sedang memegang pisau yang berlumuran darah. Kira-kira siapa orang tersebut?'
        ],
        [
            'id' => 'q9',
            'teks_pertanyaan' => '9. Bayangkan Anda ingin membunuh seseorang dan anda membutuhkan senjata. Anda pergi ke supermarket untuk beli pisau. Sampai di supermarket anda melihat 2 pisau. Yang pertama harga 5k dan yang kedua harga 50k. Pisau mana yang anda pilih dan berikan alasannya?'
        ],
        [
            'id' => 'q10',
            'teks_pertanyaan' => '10. Bayangkan di dalam sebuah lift yang ada jendela kacanya di pintu. Di dalam lift tersebut ada orang cowok yang satu ialah psikopat dan yang satu lagi orang biasa. Orang psikopat tersebut ternyata membunuh orang yang normal tersebut menggunakan pisau sampai darahnya keluar ke seluruh lift. Setelah membunuh psikopat ini keluar dari lift dan tiba-tiba ia melihat ke dalam lagi (berbalik) dan melihat bagian dalam dari lift tersebut dari jendela. Apa alasan psikopat melihat ke dalam melalui jendela?'
        ],
        [
            'id' => 'q11',
            'teks_pertanyaan' => '11. Ada seorang bocah memelihara seekor ikan lou han. Suatu hari ikan tersebut mati dan mamanya sesudah itu membelikan coklat untuk anak tersebut yang ukurannya mirip dengan ikan lou han. Tiba-tiba keesokan harinya bocah tersebut membunuh kakak kandungnya sendiri. Kira-kira apa motif bocah ini membunuh kakak kandungnya sendiri ?'
        ],
        [
            'id' => 'q12',
            'teks_pertanyaan' => '12. Bayangkan anda tinggal di suatu rumah yang terletak di tengah-tengah hutan dan tidak ada rumah yang lainnya. Karena rumah anda sedang kotor, anda memutuskan untuk membersihkan rumah. Karena rumah tersebut cukup besar, dari pagi sampai malam tidak selesai-selesai. Akhirnya di malam hari, paling tidak anda sudah berhasil membersihkan (hanya) ruang tengah. Setelah selesai bersih-bersih, sekarang anda ingin menata barang-barang. Kebetulan ketika anda membersihkan guci porselen, tiba-tiba ada suara dari kamar tidur anda. Karena anda kaget, guci tersebut jatuh dan pecah. Setelah itu kaki anda berdarah-darah. Terdapat 5 pilihan yang dapat anda lakukan. Apa yang anda akan lakukan?'
        ],
        [
            'id' => 'q13',
            'teks_pertanyaan' => '13. Bayangkan anda menjadi seorang pembunuh dan memiliki senjata. Didepan anda ada 3 tawanan yang bisa anda bunuh. Berapa orang yang akan anda bunuh dan apa alasannya?'
        ],
        [
            'id' => 'q14',
            'teks_pertanyaan' => '14. Bayangkan anda sedang tidur dan terbangun karena sebuah mimpi buruk. Mimpi buruk tersebut terasa sangat nyata dan menyebabkan anda sangat ketakutan. Tubuh anda penuh dengan keringat dan anda merasa kedinginan. Apa yang akan anda lakukan di rumah?'
        ],
        [
            'id' => 'q15',
            'teks_pertanyaan' => '15. Suatu ketika anda sedang menonton film horror. Tiba-tiba ada satu adegan yang membuat anda merinding.  Adegan apakah itu ? Terdapat 4 pilihan.'
        ],
        [
            'id' => 'q16',
            'teks_pertanyaan' => '16. Suatu hari ada maling masuk ke dalam rumah anda dan maling tersebut membunuh seluruh keluarga anda. Anda adalah satu-satunya yang masih hidup dan berhadapan dengan pelaku tersebut. Uniknya saat itu maling tersebut tidak membunuh anda dan membiarkan anda hidup. Apa alasan maling tersebut?'
        ],
        [
            'id' => 'q17',
            'teks_pertanyaan' => '17. Terjadi sebuah kasus pemerkosaan di apartment tua, ternyata perempuan yang menjadi korban tersebut telah membiarkan pintu gerbang terbuka lama dan ia tertidur pulas di rumahnya. Saat itulah pelaku masuk ke rumah tersebut dan memperkosanya. Apa yang terpikir di benak anda mendengar kasus tersebut? Terdapat 4 pilihan.'
        ],
        [
            'id' => 'q18',
            'teks_pertanyaan' => '18. Bayangkan anda sedang berbelanja di supermarket yang besar. Tiba-tiba terdengar bunyi ledakan dan menyebabkan gedung runtuh dan kebakaran. Anda langsung tergesa-gesa untuk keluar dari tempat tersebut dan ketika anda ingin keluar anda menemukan 3 orang yang tertimpa batu besar. Kemudian anda ingin membantu 3 orang tersebut, namun saat itu juga anda melihat di arah berlawanan terdapat teman akrab anda sedang tertimpa batu juga. Kondisi saat itu mengharuskan anda untuk keluar dengan cepat karena bara api yang membesar. Siapa yang akan anda bantu?'
        ],
        [
            'id' => 'q19',
            'teks_pertanyaan' => '19. Bayangkan anda memiliki seorang teman akrab dan suatu hari anda mendengar teman anda mati tertikam pisau. Anda sangat sedih dan berpikiran ingin balas dendam. Tak lama kemudian anda menemukan identitas pelaku tersebut dan anda tidak melaporkan ke polisi melainkan anda berencana untuk langsung membunuhnya. Bagaimana anda akan membunuh pelaku tersebut? Terdapat 7 pilihan jawaban.'
        ],
        [
            'id' => 'q20',
            'teks_pertanyaan' => '20. Ada kakak beradik keduanya perempuan. Mereka pergi ke acara pemakaman ayah mereka bersama-sama. Disana mereka bertemu seorang lelaki tampan dan mereka langsung jatuh cinta terhadap laki-laki tersebut. Berselang hari kemudian si adik membunuh si kakak. Apa alasannya?'
        ]
    ]);
    }
}