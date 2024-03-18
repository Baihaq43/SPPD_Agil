<?php

namespace App\Http\Controllers;

use App\Models\TabelPengajuan;
use App\Http\Requests\StoreTabelPengajuanRequest;
use App\Http\Requests\UpdateTabelPengajuanRequest;

class TabelPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabelpengajuan = TabelPengajuan::all();
        return view('tabelpengajuan.index', compact('tabelpengajuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTabelPengajuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TabelPengajuan $tabelPengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelPengajuan $tabelPengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTabelPengajuanRequest $request, TabelPengajuan $tabelPengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelPengajuan $tabelPengajuan)
    {
        //
    }
}
