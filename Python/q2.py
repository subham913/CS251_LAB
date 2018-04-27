import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from math import sqrt
df1=pd.read_csv('train.csv')
df2=pd.read_csv('test.csv')
X_train=np.array(df1['X_train'])
Y_train=np.array(df1['Y_train'])
X_train1=X_train.reshape(10000,1)
Y_train1=Y_train.reshape(10000,1)
one=np.ones((10000,1))
X_train2=np.concatenate((one,X_train1),axis=1)
w=np.random.rand(2,1)
X_train2_trans=np.transpose(X_train2)
w_trans=np.transpose(w)
np_new=np.dot(w_trans,X_train2_trans)
np_new=np_new.reshape(10000,)
product=np.dot(X_train2.transpose(),X_train2)
X_Xtrans_inv=np.linalg.inv(product)
#print X_Xtrans_inv.shape
C=np.dot(X_Xtrans_inv,X_train2.transpose())
#print C.shape
w_direct=np.dot(C,Y_train1)
D=np.dot(w_direct.transpose(),X_train2_trans)
D_trans=D.transpose()
D_trans=D_trans.reshape(10000,)

plt.figure(1)
#plt.subplot(211)
plt.scatter(X_train,Y_train)
plt.plot(X_train,np_new,'g')
#plt.subplot(212)
#plt.scatter(X_train,Y_train)
plt.plot(X_train,D_trans,'r')
plt.show()


for i in range(0,2):
	for j in range(0,10000):
		x,y=X_train[j],Y_train[j]
		#print x,y
		X_prime=np.array([1,x])
		X_prime=X_prime.reshape(2,1)
		scal=(((w.transpose()).dot(X_prime))[0,0]-y)*0.00000001
		w=w-(scal*X_prime)
		#print w
		if(j%100==0):
			plt.figure(2)
			#plt.subplot(211)
			plt.scatter(X_train,Y_train)
			plt.plot(X_train,((w.transpose()).dot(X_train2_trans)).reshape(10000,),'g')
			plt.show()
plt.scatter(X_train,Y_train)
plt.plot(X_train,((w.transpose()).dot(X_train2_trans)).reshape(10000,),'g')
plt.show()
X_test=np.array(df2['X_test'])
Y_test=np.array(df2['Y_test'])
X_test1=X_test.reshape(10500,1)
Y_test1=Y_test.reshape(10500,1)
one=np.ones((10500,1))
X_test2=np.concatenate((one,X_test1),axis=1)
Y_pred1=X_test2.dot(w)
squared_1=np.array(((Y_pred1-Y_test1)**2))
mean_error_1=np.mean(squared_1[:,0])
rmse_1=sqrt(mean_error_1)
print rmse_1
Y_pred2=X_test2.dot(w_direct)
squared_2=np.array(((Y_pred2-Y_test1)**2))
mean_error_2=np.mean(squared_2[:,0])
rmse_2=sqrt(mean_error_2)
print rmse_2
#print Y_pred2.shape


