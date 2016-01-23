#include<stdio.h>
#include<fcntl.h>
main(){
	int n,fd2;
	char buf[500];
	fd2=open("txt1.txt",O_RDWR);
	n=read(fd2,buf,sizeof(buf));
	write(1,buf,n);
	}
