<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = Team::all();

        return view('dashboard/team/index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/team/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Team();
        $data->nama = $request->nama;
        $data->user_Created = Auth::user()->name;
        $data->posisi = $request->posisi;

        if (!empty($request->gambar)) {
            $gambar = $request->file('gambar');
            $gambarName = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('gambar', $gambarName); // Simpan gambar di storage
            $gambar->move(public_path('images'), $gambarName); // Simpan gambar di direktori publik
        } else {
            $gambarName = 'null';
        }
    
        // Simpan nama gambar ke database
        $data->gambar = $gambarName;
        $data->save();

        session()->flash('success', 'Data has been insert successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
