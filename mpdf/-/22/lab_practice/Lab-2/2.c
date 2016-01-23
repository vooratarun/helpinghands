#include<stdio.h>
#include<fcntl.h>
main(){
	int n;
	char buf[200];
	n=read(1,buf,sizeof(buf));
	write(0,buf,n);
	printf("%d\n",n);
	}
