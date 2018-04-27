num_samples <- 50000
data <- rexp(num_samples, 0.2)
x <- data.frame(X = seq(1 , num_samples , 1), Y = sort(data))
#print(data)
plot(x)
y<-array(data,dim = c(500,100))

# pdata<-array(rep(0,500),dim=c(5,100))
mean_data<-rep(0,500)
sd_dev<-rep(0,500)
# pmean<-rep(0,100)
# print(pdata)
for(i in 1:5){
	plot(density(y[i,]),col="blue",,main=paste("probability distribution of vector",i),xlab="X",ylab="f(X) of Vector")
	plot(ecdf(y[i,]),col.points  = "red", col.hor = "green",main=paste("Cumulative distribution of vector",i),xlab="X",ylab="F(X) of Vector")

}


for(i in 1:500){
	mean_data[i]=mean(y[i,])
	sd_dev[i]<-sd(y[i,]);
	if(i<6){
		cat("mean of vector",i,"is",mean_data[i],"\n")
		cat("standard_deviation of vector",i,"is",sd_dev[i],"\n")
	}
}




hist(mean_data,breaks=40)





plot(density(mean_data),col="blue",main="probability distribution of sample means", xlab="X", ylab="f(X) of Mean of samples")

 plot(ecdf(mean_data),col.points  = "red", col.hor = "green", main="Cumulative distribution of sample means", xlab="X", ylab="F(X) of Mean of Samples")

cat("mean of sample means is",mean(mean_data),"\n")
cat("mean of original data is",mean(data),"\n")
cat("standard_deviation of sample means is",sd(mean_data),"\n")
cat("standard_deviation of original data is",sd(data),"\n")


