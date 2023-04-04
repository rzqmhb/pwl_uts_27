<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = Auth::user();
        $nasabah = Nasabah::paginate(6);
        $nasabah = Nasabah::where([
            ['no_rek', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('no_rek', 'LIKE', '%' . $search . '%')
                    ->get();
                }
            }]
        ])->orWhere([
            ['nama', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('nama', 'LIKE', '%' . $search . '%')
                    ->get();
                }
            }]
        ])->paginate(6);
        $posts = Nasabah::orderBy('no_rek', 'desc');
        return view('nasabah', compact('nasabah','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //valisadi data
        $request->validate([
            'no_rek' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Nasabah::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')
        ->with('success', 'Nasabah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_rek)
    {
        //
        $user = Auth::user();
        $Nasabah = Nasabah::find($no_rek);
        return view('detail', compact('Nasabah', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rek)
    {
        //
        $user = Auth::user();
        $Nasabah = Nasabah::find($no_rek);
        return view('edit', compact('Nasabah', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_rek)
    {
        //
        $request->validate([
            'no_rek' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
            ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Nasabah::find($no_rek)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')
        ->with('success', 'Nasabah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rek)
    {
        //
        Nasabah::find($no_rek)->delete();
        return redirect()->route('nasabah.index')
        -> with('success', 'Nasabah Berhasil Dihapus');
    }
}
