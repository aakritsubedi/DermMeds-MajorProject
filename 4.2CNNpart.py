#importing the KERAS libraries and packages
import tensorflow as tf
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Conv2D
from tensorflow.keras.layers import MaxPooling2D
from tensorflow.keras.layers import Flatten
from tensorflow.keras.layers import Dense, Dropout, Activation
import keras
import numpy as np
import pickle

X = pickle.load(open("x.pickle","rb"))
y = pickle.load(open("y.pickle","rb"))

y= keras.utils.to_categorical(y, num_classes=4, dtype='float32')

#Initialling CNN
classifier = Sequential()

#adding different layers
#step1 = Convolution
classifier.add(Conv2D(32,(3,3),input_shape=X.shape[1:], activation='relu'))

#step2 = Max Pooling
classifier.add(MaxPooling2D(pool_size=(2,2)))

#step 1&2
classifier.add(Conv2D(32,(3,3), activation='relu'))
classifier.add(MaxPooling2D(pool_size=(2,2)))

#step3 = Flattening
classifier.add(Flatten())

#step4== FullConnection
classifier.add(Dense(units=64, activation='relu'))
#output layer
classifier.add(Dense(4, activation='softmax'))

#compiling the CNN
classifier.compile(optimizer= 'adam', loss='categorical_crossentropy',metrics=['accuracy'])

classifier.fit(X, y, batch_size=32, epochs=2, validation_split=0.1,shuffle=True)


classifier.save('final512.model')

