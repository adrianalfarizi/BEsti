<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tabel_proyek = Proyek::all();
        return view('admin.pages.proyek', ['data_proyek' => $tabel_proyek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tambahproyek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_proyek' => 'required',
            'tanggal_pembuatan' => 'required',
            'lokasi_proyek' => 'required',
            'foto_proyek' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        if ($request->hasFile('foto_proyek')) {
            $imagename = $request->file('foto_proyek')->getClientOriginalName();
            $request->file('foto_proyek')->move('image_proyek/', $imagename);
            $data['foto_proyek'] = $imagename;
        }

        // $data['foto_proyek']='asd';

        Proyek::create($data);
        return redirect('/proyek');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function show(Proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        return view('admin.pages.editproyek', ['proyek' => $proyek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyek $proyek)
    {
        $request->validate([
            'nama_proyek' => 'required',
            'tanggal_pembuatan' => 'required',
            'lokasi_proyek' => 'required',
            'foto_proyek' => 'nullable|image|mimes:jpeg,jpg,png',
        ]);
        $data = $request->only([
            'nama_proyek',
            'tanggal_pembuatan',
            'lokasi_proyek'
        ]);

        if ($request->hasFile('foto_proyek')) {
            // Hapus gambar lama jika ada
            if ($proyek->foto_proyek) {
                File::delete(public_path('image_proyek') . '/' . $proyek->foto_proyek);
            }

            // Simpan gambar baru
            $imageName = $request->file('foto_proyek')->getClientOriginalName();
            $request->file('foto_proyek')->move('image_proyek/', $imageName);
            $data['foto_proyek'] = $imageName;
        }

        $proyek->update($data);
        return redirect('/proyek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyek $proyek)
    {
        $data = Proyek::where('id', $proyek->id)->first();
        File::delete(public_path('image_proyek') . '/' . $data->foto_proyek);
        Proyek::destroy('id', $proyek->id);

        return redirect('/proyek');
    }
}
