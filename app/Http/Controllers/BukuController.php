<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Menyiapkan variabel data buku sesuai instruksi soal 2 [cite: 286]
        $data_buku = [
            "Laskar Pelangi", 
            "Bumi Manusia", 
            "Filosofi Teras"
        ];

        // Mengirim data ke view dengan key 'buku' agar sesuai dengan $buku di Blade [cite: 91, 139]
        return view('perpus_index', [
            'buku' => $data_buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan detail sesuai instruksi soal 3 [cite: 291]
        return "Anda sedang melihat detail buku dengan Kode: [" . $id . "]";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}