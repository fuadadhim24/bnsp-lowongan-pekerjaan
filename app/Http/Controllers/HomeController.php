<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $lowongan = Lowongan::all();
        $lamaran = Lamaran::with('user', 'lowongan')->where('id_user', $userId)->get();
        return view('user.home.index', compact('lowongan','userId','lamaran'));
    }
    public function adminHome(): View
    {
        return view('admin.pelamar.index');
    }
    public function adminLowongan(): View
    {
        $lowongan = Lowongan::all();
        return view('admin.lowongan.index', compact('lowongan'));
    }
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'gaji' => 'required|string',
        //     'kategori' => 'required|string',
        //     'perusahaan' => 'required|string|max:255',
        //     'jenis' => 'required|integer', 
        //     'status' => 'required|integer',
        // ]);

        Lowongan::create($request->all());

        return redirect()->route('admin.lowongan')
                         ->with('success', 'Lowongan telah berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        $lowongan = Lowongan::findOrFail($id);

        $lowongan->delete();

        return redirect()->back()->with('success', 'Lowongan berhasil dihapus.');
    }
    public function update(Request $request, $id)
    {
        $lowongan = Lowongan::findOrFail($id);

        $lowongan->update($request->all());

        return redirect()->route('admin.lowongan')
                         ->with('success', 'Lowongan berhasil diperbarui.');
    }
}
