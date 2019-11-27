import tensorflow as tf
import  keras as k
import matplotlib.pyplot as plt
import numpy as np
import cv2

dim = (224,224)
z = cv2.imread("../data/inputs/benign/1.jpg")
z = cv2.resize(z, dim, interpolation=cv2.INTER_AREA)
z=z/255
new_model = tf.keras.models.load_model('skinPredictionWithImgProcessing.h5')

prediction = new_model.predict(np.array([z,]))

print("Prediction: ", prediction);
print("Prediction: ", np.argmax(prediction));

plt.imshow(z)
plt.show()
