<?php

namespace App\Http\Controllers;

use App\Prescription;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Medical extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Prescription::all();
        return view('doctor.index',compact('info'));
    }

    public function report(Request $request){

        $prescription_no = $request['prescriptionNo'];
        $id = substr($prescription_no,strpos($prescription_no,'_')+1,1);
        $info = Prescription::findOrFail($id);
        $fullName=$info->patient_name;
        $toEmail=$info->patient_email;
        Mail::send('email.prescription', ['info' => $info], function ($m) use ($fullName, $toEmail, $request) {
            $m->from('onlinedoctor@dermmeds.com.np', 'Derm Meds-your online dermatologist');

            $m->to($toEmail, $fullName)->subject('Your Medical Report');
        });
        return view('prescription',compact('info'))->with('msg','Thank you for choosing us. Your prescription has been sent to your email.');;
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

        $fullName=$request->patient_name;
        $toEmail=$request->patient_email;
        $input=Prescription::create($request->all());

        $id = $input['id'];

        $prescription_no="anil_".$id;

        $prescription = Prescription::findOrFail($input['id']);
        $prescription['prescription_no'] = $prescription_no;
        $prescription->update();

        Mail::send('email.prescription', ['info' => $input], function ($m) use ($fullName, $toEmail, $request) {
            $m->from('onlinedoctor@dermmeds.com.np', 'Derm Meds-your online dermatologist');

            $m->to($toEmail, $fullName)->subject('Your Medical Report');
        });
        return redirect('doctors')->with('msg','The Prescription No. is'.$prescription_no.". Please forward this code to patient.");
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
