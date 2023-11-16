<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SaikoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(): View
    {
        $pertanyaan1 = Pertanyaan::find('q1');
        $pertanyaan2 = Pertanyaan::find('q2');
        $pertanyaan3 = Pertanyaan::find('q3');
        $pertanyaan4 = Pertanyaan::find('q4');
        $pertanyaan5 = Pertanyaan::find('q5');
        $pertanyaan6 = Pertanyaan::find('q6');
        $pertanyaan7 = Pertanyaan::find('q7');
        $pertanyaan8 = Pertanyaan::find('q8');
        $pertanyaan9 = Pertanyaan::find('q9');
        $pertanyaan10 = Pertanyaan::find('q10');
        $pertanyaan11 = Pertanyaan::find('q11');
        $pertanyaan12 = Pertanyaan::find('q12');
        $pertanyaan13 = Pertanyaan::find('q13');
        $pertanyaan14 = Pertanyaan::find('q14');
        $pertanyaan15 = Pertanyaan::find('q15');
        $pertanyaan16 = Pertanyaan::find('q16');
        $pertanyaan17 = Pertanyaan::find('q17');
        $pertanyaan18 = Pertanyaan::find('q18');
        $pertanyaan19 = Pertanyaan::find('q19');
        $pertanyaan20 = Pertanyaan::find('q20');

        # get teks_jawaban from table jawaban where id like 'q01%'
        $jawaban1 = DB::table('jawaban')->where('id', 'like', 'q01%')->get();
        $jawaban2 = DB::table('jawaban')->where('id', 'like', 'q2%')->get();
        $jawaban3 = DB::table('jawaban')->where('id', 'like', 'q3%')->get();
        $jawaban4 = DB::table('jawaban')->where('id', 'like', 'q4%')->get();
        $jawaban5 = DB::table('jawaban')->where('id', 'like', 'q5%')->get();
        $jawaban6 = DB::table('jawaban')->where('id', 'like', 'q6%')->get();
        $jawaban7 = DB::table('jawaban')->where('id', 'like', 'q7%')->get();
        $jawaban8 = DB::table('jawaban')->where('id', 'like', 'q8%')->get();
        $jawaban9 = DB::table('jawaban')->where('id', 'like', 'q9%')->get();
        $jawaban10 = DB::table('jawaban')->where('id', 'like', 'q10%')->get();
        $jawaban11 = DB::table('jawaban')->where('id', 'like', 'q11%')->get();
        $jawaban12 = DB::table('jawaban')->where('id', 'like', 'q12%')->get();
        $jawaban13 = DB::table('jawaban')->where('id', 'like', 'q13%')->get();
        $jawaban14 = DB::table('jawaban')->where('id', 'like', 'q14%')->get();
        $jawaban15 = DB::table('jawaban')->where('id', 'like', 'q15%')->get();
        $jawaban16 = DB::table('jawaban')->where('id', 'like', 'q16%')->get();
        $jawaban17 = DB::table('jawaban')->where('id', 'like', 'q17%')->get();
        $jawaban18 = DB::table('jawaban')->where('id', 'like', 'q18%')->get();
        $jawaban19 = DB::table('jawaban')->where('id', 'like', 'q19%')->get();
        $jawaban20 = DB::table('jawaban')->where('id', 'like', 'q20%')->get();

        return view('main', compact('pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'pertanyaan11', 'pertanyaan12', 'pertanyaan13', 'pertanyaan14', 'pertanyaan15', 'pertanyaan16', 'pertanyaan17', 'pertanyaan18', 'pertanyaan19', 'pertanyaan20',
        'jawaban1', 'jawaban2', 'jawaban3', 'jawaban4', 'jawaban5', 'jawaban6', 'jawaban7', 'jawaban8', 'jawaban9', 'jawaban10', 'jawaban11', 'jawaban12', 'jawaban13', 'jawaban14', 'jawaban15', 'jawaban16', 'jawaban17', 'jawaban18', 'jawaban19', 'jawaban20'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            // 'point' => 'required',
            // 'status' => 'required',
        ]);

        $answers = [
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
            'q11' => $request->q11,
            'q12' => $request->q12,
            'q13' => $request->q13,
            'q14' => $request->q14,
            'q15' => $request->q15,
            'q16' => $request->q16,
            'q17' => $request->q17,
            'q18' => $request->q18,
            'q19' => $request->q19,
            'q20' => $request->q20,
        ];

        $total = collect($answers)->sum();

        if ($total >= 80 && $total <= 100) {
            $status = "Anda Psikopat Ekstrim";
        }elseif ($total >= 60 && $total <= 79) {
            $status = "Anda Psikopat Tinggi";
        }elseif ($total >= 40 && $total <= 59) {
            $status = "Anda Psikopat Sedang";
        }elseif ($total >= 20 && $total <= 39) {
            $status = "Anda Psikopat Rendah";
        }else {
            $status = "Anda Tidak Menunjukkan Tanda-tanda Psikopat";
        }

        $pengguna = new Pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->point = $total;
        $pengguna->status = $status;
        // save data
        $pengguna->save();

        // Pengguna::create([
        //     'nama' => $request->nama,
        //     'point' => $total,
        //     'status' => $status
        // ]);

        return redirect()->route('saiko.result', compact('total', 'status','pengguna'));
        
    }

    public function result()
    {
        // $point = Pengguna::all();
        // $status = Pengguna::all();
        // $nama = Pengguna::all();
        $pengguna = Pengguna::latest()->first();
        return view('/result', compact('pengguna'));
    }
}
