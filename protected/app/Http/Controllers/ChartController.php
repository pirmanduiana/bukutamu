<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\content;
use App\lokasi;
use Response;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = lokasi::where('flag_aktif','=',1)->first();
        $countTamu = DB::table('t_tamu')
                ->select('t_tamu.id as tamu')
                ->where('lokasi_id','=',$lokasi->id)
                ->whereDay('created_at', '=', date('d'))
                ->count();
        
        $countFB = DB::table("t_feedbackid")
                ->select('t_feedbackid.id as fb')
                ->where('lokasi_id','=',$lokasi->id)
                ->whereDay('created_at', '=', date('d'))
                ->count();

        $countsmile = DB::table("t_feedbackid")
                ->select('t_feedbackid.feedback as fb')
                ->where('lokasi_id','=',$lokasi->id)
                ->where('feedback', '=', 1)
                ->count();

        $countflat = DB::table("t_feedbackid")
                ->select('t_feedbackid.feedback as fb')
                ->where('lokasi_id','=',$lokasi->id)
                ->where('feedback', '=', 0)
                ->count();

        return view('tabs-persentase', ['countTamu' => $countTamu, 'countFB' => $countFB, 'lokasi' => $lokasi, 'countsmile' => $countsmile, 'countflat' => $countflat]);

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

    public function getChart()
    {
        $feedback = DB::table("t_feedbackid")
                ->select(DB::raw('DATE(created_at) as tgl'),DB::raw('SUM(feedback = 1) as puas'), DB::raw('SUM(feedback = 0) as cukup'))
                ->groupBy('tgl')
                ->get();
        // $labels = []; $puas = [];
        // foreach ($feedback as $key=>$value) {
        //     $labels[] = $value->tgl;
        //     $puas[] = $value->puas;
        // }

        // $datas = [];
        // foreach ($feedback as $key=>$value) {
        //     $datas [] = $value;
        // }

        return response()->json($feedback);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    public function validatePengaduan(Request $request)
    {
        
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