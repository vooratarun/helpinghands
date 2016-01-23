#include<stdio.h>
#include<fcntl.h>
main(){
	int n,fd1,fd2,fd3;
	char buf[200];
	fd1=open("txt1.txt",O_RDONLY);
	fd2=open("txt2.txt",O_RDONLY);
	fd3=creat("txt3.txt",777);
	n=read(fd1,buf,sizeof(buf));
	write(fd3,buf,n);
	printf("%d\n",n);
	n=read(fd2,buf,sizeof(buf));
	printf("%d\n",n);
	write(fd3,buf,n);
	}
