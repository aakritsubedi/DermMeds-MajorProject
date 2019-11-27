@extends('layouts.template')
@section('section')

    <section class="department-area section-padding3">
        <div class="container">
            <div class="row d-print-none" style="margin-bottom: -70px;">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <br>
                        <h2>Prescription</h2>
                        <p>
                            your medical summary
                        </p>
                    </div>
                    @if(Session::has('msg'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session('msg')}}
                        </div>
                    @endif
                </div>
            </div>
            <button class="btn btn-info pull-right d-print-none" onclick="window.print()">
                <i class="fa fa-print" ></i> Print
            </button>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div id="logo" style="margin-top: 50px;" class="text-center">
                        <a href="{{url('/')}}" >
                            <h2>
                                <img src="{{asset('images/dermmeds.png')}}" style="height: 100px;width: 100px;">
                                {{--<i class="fa fa-stethoscope"></i>--}}
                                <font color="navy">DERM</font>
                                <font color="maroon">MEDS</font>
                            </h2>
                            <h4 style="margin-top: -42px; margin-left: 15px;">your online dermatologist</h4>
                        </a>
                    </div>
                    @php
                        $data = $info;
                    @endphp
                    <br>
                    <span class="pull-right">Date: {{$data->created_at}}</span>
                    <span class="h4">Dr.{{$data->doctor_name}}</span>,
                    <small>MBBS,MD[Dermatology]</small><br/>
                    <b>Online Consultant at Derm Meds</b><br/>
                    NMC No.: <span class="badge">12356</span>
                    <hr>
                    <div id="patientInfo" style="padding: 25px;">
                        <span class="h4">Patient Info:</span><br>
                        <b>Name: </b> {{$data->patient_name}}<br>
                        <b>Age: </b> {{$data->patient_age}}yrs<br>
                        <b>Weight: </b> {{$data->patient_weight}}kg<br>
                        <b>Gender: </b> {{$data->patient_gender}}<br>
                        <b>Email: </b> {{$data->patient_email}}<br>
                        <hr>
                    </div>
                    <div id="description">
                        <b>Description</b><br/>
                        <p style="text-indent: 25px;">
                            {{$data->description}}
                        </p>
                    </div>
                    <br>
                    <b>Clinical Detection: </b> {{$data->diseases_name}}
                    <br>
                    <div id="medicine">
                        <b>Medicine</b>
                        @php
                            $medicine = explode(',',$data->medicine);
                        @endphp
                        @foreach($medicine as $med)
                            <ul style="list-style-type: disc; list-style-position: inside;">
                                <li>{{$med}}</li>
                            </ul>
                        @endforeach
                    </div>
                    <br>
                    {{--<img src="{{asset('images/akj.png')}}" style="height:125px;width: 125px;" class="pull-right">--}}
                    <b>Appointment Date: </b> <u>{{$data->appointment_date}}</u>
                    <br>
                    <hr>
                    <div class="text-center">
                        <p>&copy Derm Meds </p>
                        <span>doctor@dermmeds.com.np</span><br>
                        <span>+977-1-2070021</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection