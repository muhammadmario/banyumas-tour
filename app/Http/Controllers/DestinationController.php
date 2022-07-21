<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.wisata.index', ['destinations'=> Destination::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data request
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address'=>'required',
            'description'=>'required',
            'price'=>'required',
            'video'=>'required',
            'image'=> 'image|file|max:2024'
        ]);

        // jika ada request image taruh di folder image-wisata
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-wisata');
        }

        // buat destinasi
        Destination::create($validatedData);

        return redirect('/admin/wisata')->with('success', 'Wisata berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('pages.user.detail-wisata', ['destination'=>$destination]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        return view('pages.admin.wisata.edit', ['destination'=>$destination]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        // validasi request yang masuk
        $rules =[
            'name' => 'required|max:255',
            'address'=>'required',
            'description'=>'required',
            'price'=>'required',
            'video'=>'required',
            'image'=> 'image|file|max:2024'
        ];

        $validateData = $request->validate($rules);

        // jika ada image yang diganti hapus yang lama, ganti yang baru
        if ($request->file('image')) {
            if($destination->image){
                Storage::delete($destination->image);
            }
            $validateData['image']=$request->file('image')->store('image-destination');
        }

        // edit destinasi berdasarkan id
        Destination::where('id', $destination->id)->update($validateData);

        return redirect('/admin/wisata')->with('success', 'Wisata Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        // hapus image
        if($destination->image){
            Storage::delete($destination->image);
        }
        Destination::destroy($destination->id);

        return redirect('/admin/wisata')->with('success', 'Wisata berhasil dihapus!');
    }
}
