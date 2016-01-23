#include<stdio.h>
#include<fcntl.h>
main(){
	int n,fd1,fd2;
	char buf[200];
	fd1=open("txt1.txt",O_RDONLY);
	fd2=creat("txt2.txt",777);
	n=read(fd1,buf,sizeof(buf));
	printf("%d\n",n);
	write(fd2,buf,n);
	}
