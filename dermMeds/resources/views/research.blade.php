@extends('layouts.template')
@section('section')
    <section class="department-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>HOW WE WORK</h2>
                        <p>
                            We scan your skin to identify the diseases
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{asset('images/dataCollection.png')}}" alt="" class="img-fluid" style="height: 185px;">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Data Collection</h3>
                                <p>
                                    The efficiency of ML learning model depends on the size of data set. So, to achieve acceptable efficiency,
                                    a large data set is required.
                                </p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{asset('images/imgProcessing.png')}}" alt="" class="img-fluid" style="height: 185px;">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Image Pre Processing</h3>
                                <p>
                                    To make the image suitable for processing it goes through it goes through a number of filters and
                                    algorithms which makes images noise free and makes the features well defined.
                                </p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{asset('images/machineLearning.png')}}" alt="" class="img-fluid" style="height: 185px;">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Machine Learning</h3>
                                <p>
                                    To use the system, the machine needs to be trained and it takes a lot of time to do ot.
                                    This step is done individually so that the user doesn't have to deal with the complexity
                                    and they don't have to train the model every time.
                                </p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{asset('images/userInterface.png')}}" alt="" class="img-fluid" style="height: 185px;">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>User Interface</h3>
                                <p>
                                    A attractive UI is developed where patient can easily diagnosis to display result
                                    in user understandable form.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="department-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our Result</h2>
                        <p>
                            check our prediction report
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <b>Confusion Matrix</b>
                    <br><br>
                    <img src="{{asset('images/confusionMatrixProject.png')}}" alt="confusionMatrix" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <b>Accuracy Report</b>
                    <br><br><br><br>
                    <img src="{{asset('images/reportAccuracy.png')}}" alt="reportAccuracy" class="img-thumbnail">
                </div>
            </div>
            <div class="row">

                <div class="col-md-8 offset-4">
                    <br>
                    <b>Model Accuracy and Loss</b>
                    <br><br>
                    <img src="{{asset('images/graph.png')}}" alt="reportAccuracy" class="img-thumbnail">
                </div>
            </div>
        </div>
    </section>
@endsection