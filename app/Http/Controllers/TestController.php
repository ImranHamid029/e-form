<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo 'test';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Applicant $applicant)
    {
        echo($applicant);
        $tes = Applicant::find($applicant->_id);
        echo($tes);
        
        $pdf = PDF::loadView('tiket.cetak', compact('tes'));
        return $pdf->stream('tkt.pdf');
        //return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //echo ($request);
        //echo ($request->nama_lengkap);
        Applicant::create($request->all());
        //echo ($request);
        return view('tiket.show', compact('request'));
        //return view('mahasiswa', compact('mahasiswa'));
        
        //return view('tiket.show', compact('request'));
        //
        //echo view('layout.header2');
        //echo view('home');
        //echo view('layout.footer2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //echo ('masuk show');
        /*$mahasiswa = [
            "Didik Prabowo",
            "Prabowo Didik",
            "Mas Didik Prabowo",
            "Didik Prabowo Mas"
        ];*/
        //$pdf = PDF::loadView('mahasiswa', compact('mahasiswa'));
        //return $pdf->stream('mahasiswa.pdf');
        //$applicant = Applicant::find($applicant);
        //echo ($tes);
        //echo ('test');
        $applicant = Applicant::all();
        
        //echo ($applicant);
        //return view('tiket.print', compact('applicant'));
        $pdf = PDF::loadView('tiket.print', compact('applicant'));
        return $pdf->stream('tiket.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
