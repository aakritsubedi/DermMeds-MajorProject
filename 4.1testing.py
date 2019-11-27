import tensorflow as tf
import matplotlib.pyplot as plt
import numpy as np
import cv2
import os
import  random
import pickle

DATADIR = "../data/processedImg512/"
#CATEGORIES = ["benign", 'malignant', 'skinCancer', 'melanoma']
CATEGORIES = ['skinCancer', 'melanoma']
#CATEGORIES = ["benign"]


#trainingData
trainingData = []

def create_training_data():
    for category in CATEGORIES :
        class_num = CATEGORIES.index(category)
        path = os.path.join(DATADIR, category)  # path to skin problems
        for img in os.listdir(path) :
            try:
                img_array = cv2.imread(os.path.join(path, img))
                # resize
                #im
                # g_size = 224
                #img_array = cv2.resize(img_array,(img_size,img_size))
                trainingData.append([img_array, class_num])
            except Exception as e:
                pass


create_training_data()
random.shuffle(trainingData)

x=[]
y=[]

for features,label  in trainingData:
    x.append(features)
    y.append(label)

x = np.array(x).reshape(-1, 512, 512, 3)


pickle_out = open("x512.pickle","wb")
pickle.dump(x,pickle_out)
pickle_out.close()

pickle_out = open("y512.pickle","wb")
pickle.dump(y,pickle_out)
pickle_out.close()