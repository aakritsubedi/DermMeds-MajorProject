# DermMeds
<p>
Dermatological diseases are the most prevalent diseases worldwide. Despite being common,
its diagnosis is extremely difficult and requires extensive experience in the domain.
In this report, we provide an approach to detect various kinds of these diseases.
We use a dual-stage approach that effectively combines Computer Vision and Machine
Learning on clinically evaluated histopathological attributes to accurately identify the
disease. In the first stage, the image of the skin disease is subject to various kinds
of pre-processing techniques followed by feature extraction. The second stage involves
the use of the Convolution Neural Network to identify diseases based on the histopathological
attributes observed on analyzing of the skin. We believe that the application of
automated methods will help in early diagnosis especially with the set of images with a
variety of diagnoses.
</p>
The application has major 3 Modules<br>
 a. Laravel Application using Flask API to predict types of skin cancer<br>
 b. Flask API that uses the model thus obtained from the training <br>
 c. Train the CNN model to get the model used for prediction <br>
 
 #<b>Installation</b><br>
  1.Download the project and extract the folder<br>
  2.Install the xampp server or the server of your choice<br>
  3.Cut 'dermMeds' folder from the extracted folder and paste in the htdocs folder of the xampp server <br>
  4. Setup flask server for the project <br>
    4.1 Start the flask server<br>
    MAC <br>
    $ export FLASK_APP=predict_app.py<br>
    $ flask run<br>
    Windows<br>
    > set FLASK_APP=predict_app.py<br>
    > flask run<br>
  5.Start the apache server on Xampp Control Panel<br>
  6. Visit http://127.0.0.1/dermMeds/public/ (in default case)<br>
  7. The application is loaded <br>
  8.Predicting <br>
    8.1 Click on the UPLOAD SKIN PHOTO button in the web application loaded<br>
    or <br>
    Manually visit http://localhost:5000/static/predict.html<br>
    8.2 Upload the photo and click on predict <br>
    8.3 It may take few minutes to process the result (make sure you start flask server as explained in step 4.1)<br>

  <hr>
<b> Report and Presentation:</b>
<ul>
  <li><a href="">DermMeds Report</a></li>
  <li><a href="dermMeds.pptm">DermMeds PPT File<a></li>
</ul>
  
