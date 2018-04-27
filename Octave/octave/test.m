df1=csvread("train.csv");
x_train1=df1(2:10001,1);
y_train1=df1(2:10001,2);
size(x_train1);
size(y_train1);
a=ones(10000,1);
x_train2=[a,x_train1];
w=rand(2,1);
x_train2_trans=transpose(x_train2);
w_trans=transpose(w);
np_new=w_trans*x_train2_trans;
product=x_train2_trans*x_train2;
x_xtrans_inv=inv(product);
c=x_xtrans_inv*x_train2_trans;
w_direct=c*y_train1;
D=(transpose(w_direct))*(x_train2_trans);
D_trans=transpose(D);



scatter(x_train1,y_train1,"b");
hold on;
plot(x_train1,np_new,"g");
plot(x_train1,D_trans,"r");
print -dpdf "fig1.pdf";
hold off;

 scatter(x_train1,y_train1,"b");
 cnt=0;
 hold on;
 for i=1:2,
   for j=1:10000,
     x=x_train1(j);
     y=y_train1(j);
     x_prime=[1;x];
     scale=((transpose(w)*(x_prime))-y)*0.00000001;
     w=w-(scale*x_prime);
     if(mod(j,100)==0),
       #cnt=cnt+1;
       #if(cnt==1 || cnt==5 || cnt==10 || cnt==20 || cnt==50 || cnt==100),
         plot(x_train1,(transpose(w)*transpose(x_train2)),"g");
         hold on;
         
     end,  
   end,  

 end,
 
 print -dpdf ("fig2.pdf");

 hold off;


#  scatter(x_train1,y_train1,"b");
# hold on;
# plot(x_train1,(transpose(w)*transpose(x_train2)),"g");
# print -dpdf "fig4.pdf";
# hold off;
# df2=csvread("test.csv");
# x_test1=df2(2:1001,1);
# y_test1=df2(2:1001,2);
# a=ones(1000,1);
# size(x_test1);
# size(y_test1);
# x_test2=[a,x_test1];
# size(x_test2);
# y_pred1=x_test2*w;
# size(y_pred1);
# squared_1=((y_pred1-y_test1).^2);
# l=size(squared_1);
# mean_error_1=mean(squared_1);
# rmse_1=sqrt(mean_error_1)
# y_pred2=x_test2*w_direct;
# squared_2=((y_pred2-y_test1).^2);
# mean_error_2=mean(squared_2);
# rmse_2=sqrt(mean_error_2)







