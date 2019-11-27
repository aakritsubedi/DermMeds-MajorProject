import base64
from keras.models import load_model
from flask import Flask
from flask import request
from flask import jsonify
import random
import numpy as np
import cv2
import keras.backend as K

app = Flask(__name__)

##Pre Image Processing
def rgb2gray(rgb) :
    return np.dot(rgb[..., :3], [0.299, 0.587, 0.144])


def sharpen(grayImg) :
    kernel = np.array([[0, -1, 0],
                       [-1, 5, -1],
                       [0, -1, 0]])
    sharpened = cv2.filter2D(grayImg, -1, kernel)
    return sharpened


def medianFilter(data, filter_size) :
    temp = []
    indexer = filter_size // 2
    data_final = []
    data_final = np.zeros((len(data), len(data[0])))
    for i in range(len(data)) :

        for j in range(len(data[0])) :

            for z in range(filter_size) :
                if i + z - indexer < 0 or i + z - indexer > len(data) - 1 :
                    for c in range(filter_size) :
                        temp.append(0)
                else :
                    if j + z - indexer < 0 or j + indexer > len(data[0]) - 1 :
                        temp.append(0)
                    else :
                        for k in range(filter_size) :
                            temp.append(data[i + z - indexer][j + k - indexer])

            temp.sort()

            data_final[i][j] = temp[len(temp) // 2]
            temp = []
    return data_final


def mean(img) :
    kernel = np.ones((3, 3), np.float32) / 9
    meaned = cv2.filter2D(img, -1, kernel)
    return meaned


def gaussianFilter(img) :
    return cv2.GaussianBlur(img, (5, 5), 0)


def resizeImg(data, dim) :
    dim = (dim, dim)
    return cv2.resize(data, dim, interpolation=cv2.INTER_AREA)


def preProcessing(imgArray, width, height) :
    img = imgArray
    dim = (width, height)
    # gray = rgb2gray(img)
    sharpened = sharpen(img)
    # median = medianFilter(sharpened, 2)
    smooth = gaussianFilter(sharpened)
    resize = resizeImg(smooth, height)
    # plt.imshow(resize, cmap='gray')
    processedImg = resize

    return processedImg

def get_model():
    global model
    # Before prediction
    K.clear_session()

    model = load_model('skinPrediction_98_72.h5')
    #print(model.summary())

def preprocess_image(image, target_size):
    height=150
    width=150
    image = preProcessing(image,height,width)
    #if image.mode != "RGB":
        #image = image.convert("RGB")
    #image = image.resize((target_size,target_size))
    #image = img_to_array(image)
    #image = np.expand_dims(image, axis=0)

    return image

@app.route('/predict', methods=['POST','GET'])
def predicting():
    get_model()
    message = request.get_json(force=True)
    encoded = message['image']
    decoded = base64.b64decode(encoded)
    filename = 'userUpload.jpg'
    with open(filename, 'wb') as f:
        f.write(decoded)
    image = cv2.imread("userUpload.jpg")
    processed_img = preprocess_image(image, target_size=(224, 224))
    z = processed_img
    z=z/255
    z = np.array([z])
    result = model.predict(z)
    diseases=""
    index= np.argmax(result)
    if index == 0:
        diseases = "Actinic Keratosis"
    elif index == 1:
        diseases = "Basal Cell Carcinoma"
    elif index == 2:
        diseases = "Melanoma"
    elif index == 3:
        diseases = "Squamous Cell Carcinoma"
    else:
        diseases="error"
    newFileName=diseases+str(random.randint(100,999))+".jpg"
    cv2.imwrite("static/"+newFileName,processed_img)
    #print(np.amax(result))
    result = result.tolist()
    response = {
        'imgName' : newFileName,
        'diseases' : diseases,
        'precision' : result[0][index]*100,
        'result' : {
            'actinic_keratosis' : result[0][0],
            'melanoma' : result[0][2],
            'basal_cell_carcinoma' : result[0][1],
            'squamous_cell_carcinoma' : result[0][3]
        }
    }

    return jsonify(response)
if __name__ == '__main__':
    app.run(debug=True, port=5000)