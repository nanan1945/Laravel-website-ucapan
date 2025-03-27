<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function acc(Request $request)
    {
        Ucapan::create($request->all());

        return response()->json(['message' => 'Pesan untuk kak Nando sudah terkirim nih. Makasih ya']);
    }

    public function accView()
    {
        $ucapans = Ucapan::all();
        return view('ucapan.index', compact('ucapans'));
    }
}
