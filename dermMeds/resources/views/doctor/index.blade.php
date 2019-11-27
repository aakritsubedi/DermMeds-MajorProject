@extends('layouts.template')
@section('section')
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div id="otEmbedContainer" style="width:auto; height:640px;margin-bottom: 50px;margin-top: -25px;"></div>
                    <script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=f5e8c2fb-2f41-4d23-8469-fd44ca4f5182&room=DEFAULT_ROOM"></script>
                </div>
                <div class="col-md-5">
                    <h3 class="text-info">Prescription</h3>
                    <b>By</b>

                    <form action="{{url('storePrescription')}}" method="POST">
                        <input type="text" class="form-control" value="Anil Kumar Das" name="doctor_name"><br/>
                        {{ csrf_field() }}
                        <b>Patient Info</b>
                        <div class="form-group">
                            <label for="patient_name">Name</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="patient_name">
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Age</label>
                            <input type="text" class="form-control"  placeholder="Patient Age" name="patient_age">
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Weight</label>
                            <input type="text" class="form-control"  placeholder="Patient Weight" name="patient_weight">
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Gender</label>
                            <select name="patient_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Weight</label>
                            <input type="email" class="form-control"  placeholder="Patient Email" name="patient_email">
                        </div>
                        <div class="form-group">
                            <label for="description">Prescription</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Prescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Diseases Name</label>
                            <input type="text" class="form-control"  placeholder="Classified Disease" name="diseases_name">
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Medicine</label>
                            <input type="text" class="form-control"  placeholder="Medicine Name" name="medicine">
                            <small id="medicineHelp" class="form-text text-muted">Please seperate medicine name using comma.</small>
                        </div>
                        <div class="form-group">
                            <label for="patient_age">Appointment Date</label>
                            <input type="date" class="form-control"  name="appointment_date">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @if(Session::has('msg'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session('msg')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row section-padding">
            <div class="col-md-8 offset-2">
                <h3>Leading the way in medical excellence</h3>
                <p>
                    DERM MEDS is little try to make skin disease analysis more easy and reliable using neural network
                    to find what's wrong with your skin.
                </p>
                <a href="http://localhost:5000/static/predict.html" class="template-btn mt-3" target="_blank">Upload Skin Photo</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row section-padding">
            <div class="col-md-10 offset-1">
                <h3>Patient Info</h3>
                <p>all the record of your patient</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>PrescriptionNo.</th>
                            <th>Patient Info</th>
                            <th>Description</th>
                            <th>Medicine</th>
                            <th>Appointment</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($info as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->prescription_no}}</td>
                                <td>
                                    <b>Name: </b>{{$data->patient_name}}<br>
                                    <b>Age: </b>{{$data->patient_age}}yrs &nbsp;&nbsp;{{$data->patient_gender}}<br>
                                    <b>Weight: </b>{{$data->patient_weight}}kgs<br/>
                                    <a href="mailto:{{$data->patient_email}}">{{$data->patient_email}}</a><br/>
                                </td>
                                <td>
                                    {{substr($data->description,0,strpos($data->description,'.'))}}<br>
                                    <b>Diseases: </b> {{$data->diseases_name}}
                                </td>
                                <td>{{substr($data->medicine,0,strpos($data->medicine,','))}}</td>
                                <td>{{$data->appointment_date}}</td>
                                <td class="text-center">
                                    <a href="{{url("prescription?prescriptionNo=$data->prescription_no")}}">
                                        <i class="fa fa-eye" title="View Prescription"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
