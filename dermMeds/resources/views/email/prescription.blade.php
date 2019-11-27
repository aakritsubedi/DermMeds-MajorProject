
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
    <meta name="viewport" content="width=600,initial-scale = 2.3,user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel="stylesheet">
    <title>Material Design for Bootstrap</title>

    <style type="text/css">
        body {
            width: 100%;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            mso-margin-top-alt: 0px;
            mso-margin-bottom-alt: 0px;
            mso-padding-alt: 0px 0px 0px 0px;
        }

        p,
        h1,
        h2,
        h3,
        h4 {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        span.preheader {
            display: none;
            font-size: 1px;
        }

        html {
            width: 100%;
        }

        table {
            font-size: 14px;
            border: 0;
        }
        /* ----------- responsivity ----------- */

        @media only screen and (max-width: 640px) {
            /*------ top header ------ */
            .main-header {
                font-size: 20px !important;
            }
            .main-section-header {
                font-size: 28px !important;
            }
            .show {
                display: block !important;
            }
            .hide {
                display: none !important;
            }
            .align-center {
                text-align: center !important;
            }
            .no-bg {
                background: none !important;
            }
            /*----- main image -------*/
            .main-image img {
                width: 440px !important;
                height: auto !important;
            }
            /* ====== divider ====== */
            .divider img {
                width: 440px !important;
            }
            /*-------- container --------*/
            .container590 {
                width: 440px !important;
            }
            .container580 {
                width: 400px !important;
            }
            .main-button {
                width: 220px !important;
            }
            /*-------- secions ----------*/
            .section-img img {
                width: 320px !important;
                height: auto !important;
            }
            .team-img img {
                width: 100% !important;
                height: auto !important;
            }
        }

        @media only screen and (max-width: 479px) {
            /*------ top header ------ */
            .main-header {
                font-size: 18px !important;
            }
            .main-section-header {
                font-size: 26px !important;
            }
            /* ====== divider ====== */
            .divider img {
                width: 280px !important;
            }
            /*-------- container --------*/
            .container590 {
                width: 280px !important;
            }
            .container590 {
                width: 280px !important;
            }
            .container580 {
                width: 260px !important;
            }
            /*-------- secions ----------*/
            .section-img img {
                width: 280px !important;
                height: auto !important;
            }
        }
    </style>
    <style type=”text/css”>
        body {
            font-family: arial, sans-serif!important;
        }
    </style>
</head>

<body>
@php
    $data = $info;
@endphp
<table>
    <tr style="border-bottom: 1px solid grey;width: 80%;margin:2px auto;">
        <td align="center">
            <h1>
                <span style="color: maroon;size: 15px;">Derm</span>
                <span style="color: navy;size:15px;font-family: cursive;">Medicine</span>
                <h5>your online dermatologist</h5>
                <h4 style="margin-top: -3px;">Dhapakhel,Lalitpur</h4><br/>
                <span>+977-1-2070021</span>
            </h1>
        </td>
    </tr>
    <tr>
        <td>
            Hello {{$data->patient_name}},
            <p style="text-indent: 50px;">
                I want to thank you for your trust in our services and we always give an appreciation for
                people like you to send this email as confirmation of your medical examination.
                <br/><br/>
                <b>Your Medical Info</b>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    @php
                        $data = $info;
                    @endphp
                    <br>
                    <span class="pull-right">Date: {{$data->created_at}}</span><br>
                    <span class="h4">Dr.{{$data->doctor_name}}</span>,<br/>
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
            <br>
            <b>Note:</b> Please call us at +977-1-20700021 if you have any queries.
            <br><br/>
            <span>
                    Regards <br/>
                    Administrator@DermMeds<br/>
                    +977-9808858237
                </span>
        </td>
    </tr>
    <hr>
    <tr>
        <td align="center">
            Copyright © 2019 Derm Meds, All rights reserved. You are receiving this email because you used
            services in at dermmeds.com.np
        </td>
    </tr>
</table>
</body>

</html>