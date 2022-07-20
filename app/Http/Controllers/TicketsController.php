<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Destination $destination)
    {
        return view('pages.user.tiket', ['destinations'=>$destination->orderBy('name', 'ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'NIK' => 'required|numeric|digits:16',
            'noHp' => 'required|numeric',  
            'tempatWisata' => 'required',
            'tanggalKunjungan' => 'required', 
            'pengunjungDewasa' => 'required|numeric',
            'pengunjungAnak' => 'required|numeric', 
            'hargaTiket' => 'required|numeric', 
            'totalHarga' => 'required|numeric', 
        ]);
    
        Tickets::create($validatedData);
        return redirect('/')->with('status', 'Tiket berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
