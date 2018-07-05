<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tabs-bukutamu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validatePengaduan($request);

        $content = new content();
        $content->nama = $request->nama;
        $content->email = $request->email;
        $content->no_hp = $request->no_hp;
        $content->asal = $request->asal;
        $content->save();  

        return redirect('daftar')->with('status','sukses'); 

        // content::create($request->all());
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Terima kasih atas partisipasi anda',
        //     'data' => $request->all()
        // ]);
    }

    public function validatePengaduan(Request $request)
    {
        return $this->validate($request, [
            'nama' => 'required',
            'asal' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
