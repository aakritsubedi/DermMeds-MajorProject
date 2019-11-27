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
    <section class="department-area">
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
        </div>
    </section>
    <!-- Specialist Area Starts -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our system is expert deciding</h2>
                        <p>
                            we have trained our model for the following phase of skin cancer.
                        </p>
                        <p>
                            Derm Meds initially works by collecting data from different sources.
                            The data then proceeds for pre-image processing. Here, data taken from trusted
                            sources(Kaggle) are filtered, cropped for noise reduction and then given a standard size.
                            Hence the output of pre-image processing is a noise-free standard-sized image.
                        </p>
                        <b>Data Source:</b>
                        <ul>
                            <li><a href="https://www.kaggle.com/drscarlat/melanoma" target="_blank">Kaggle/Melanoma</a></li>
                            <li><a href="https://www.kaggle.com/fanconic/skin-cancer-malignant-vs-benign" target="_blank">Kaggle/Benign & Malignant SkinCancer</a></li>
                            <li><a href="https://www.kaggle.com/kmader/skin-cancer-mnist-ham10000" target="_blank">Kaggle/Final Stage SkinCancer</a></li>
                        </ul>
                        <br>
                        <b>Pre Processing:</b>
                        <p>
                            Various pre processing steps are performed to remove the noise and resize the image into the standard size.
                            The following are the steps we followed:
                        </p>
                        <ul>
                            <li> Renaming the images and storing them as dataset in local machine</li>
                            <li> Load them in pickle file applying
                                a.	Grey Scale Filter,
                                b.	Sharpening Filter,
                                c.	Median Filter,
                                d.	Smooth Filter,
                                e.	Resize into 150*150
                            </li>
                            <li> Save the processed image</li>
                        </ul>
                        <br><br>
                        <b>Feed the processed image into CNN input layer:</b>
                        <p>
                            The image then proceeds for classification which is done using CNN. The image is fed to the classifier,
                            where the CNN learns from it and then extracts the features and updates it weights. Here, classifier
                            trains a model which is later on used to classifying images uploaded by the user.
                        </p>
                        <img src="{{asset('images/CNN.jpg')}}" alt="CNN" class="img-thumbnail">
                        <br>
                        <b>Upload infected image and get prediction</b>
                        <p>
                            Here, classifier trains a model which is later on used to classifying images uploaded by the user.
                            At the end, the report is saved.
                        </p>
                        <img src="{{asset('images/result.jpg')}}" alt="result.jpg" class="img-thumbnail">
                        <br><br>
                        <b>Check your skin</b>
                        <p>Scan and Upload a Photo</p>
                        <a href="http://localhost:5000/static/predict.html" class="template-btn mt-3" target="_blank">Upload Skin Photo</a>
                        <br><br>
                        <b>Video Conference with Doctors</b>
                        <p>Call doctors and discuss about the report</p>
                        <a href="{{url('index.php/doctors')}}" class="template-btn mt-2" target="_blank">
                            <i class="fa fa-phone">  </i> Call Dermatologist
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div id="otEmbedContainer" style="width:800px; height:640px;margin-bottom: 50px;margin-top: -25px;"></div>
                    <script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=f5e8c2fb-2f41-4d23-8469-fd44ca4f5182&room=DEFAULT_ROOM"></script>
                </div>
                <div class="clear-fix"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="section-top text-center">
                        <b>PRESCRIPTION</b>
                        <p>Print out precription issued</p>
                        <a id="printPrescription" class="template-btn mt-3" target="_blank">
                            <i class="fa fa-files-o"></i>  Prescription
                        </a>
                    </div>
                    <div id="prescriptionId" style="margin-bottom:25px;">
                        <form action="{{url('index.php/prescription')}}" method="GET">
                            <div class="form-group">
                                <label for="prescriptionNo">Prescription No.:</label>
                                <input type="text" class="form-control" placeholder="Please Enter Prescription No." name="prescriptionNo">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{asset('images/melanoma.jpg')}}" alt="" class="img-fluid" width="100%" height="250px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Melanoma</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{asset('images/skinCancer.jpeg')}}" alt="" class="img-fluid" width="100%" height="250px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Squamous Cell Carcinoma</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{asset('images/malignant.jpg')}}" alt="" class="img-fluid" width="100%" height="250px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Basal Cell Carcinoma</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{asset('images/benign.jpg')}}" alt="" class="img-fluid" width="100%" height="250px" >
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Actinic Keratosis</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <img src="{{asset('images/project.png')}}" class="img-thumbnail">
                </div>
            </div>
        </div>
    </section>
@endsection