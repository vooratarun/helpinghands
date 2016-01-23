#include<stdio.h>
#include<fcntl.h>
main(){
	int n,fd2;
	char buf[200];
	fd2=open("txt1.txt",O_WRONLY);
	n=read(0,buf,sizeof(buf));
	write(fd2,buf,n);
	}
