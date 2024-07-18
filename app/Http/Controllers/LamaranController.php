<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi request jika diperlukan
        $validatedData = $request->validate([
            'id_lowongan' => 'required|integer',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048', // Contoh validasi untuk file CV
        ]);

        // Proses unggah file CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('public/assets/cv');
            $namaCv = basename($cvPath);
        } else {
            $namaCv = null;
        }

        $id_user = Auth::id(); 

        $data = [
            'id_user' => $id_user,
            'id_lowongan' => $request->id_lowongan,
            'status' => 1,
            'cv' => $namaCv,
        ];

        Lamaran::create($data);

        return redirect()->route('home')
                         ->with('success', 'Lamaran telah berhasil dikirim.');
    }
}
