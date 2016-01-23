#include<stdio.h>
#include<fcntl.h>
main()
{
	
	char c[1],b[1];
	int fd5,fd4,i=0,j=0;
	int fd=open("1.txt",O_RDONLY); 
	int fd1=open("2.txt",O_RDONLY);
	int fd2=open("3.txt",O_WRONLY);
	int size1=lseek(fd,0,SEEK_END);
	int size2=lseek(fd1,0,SEEK_END);
	printf("%d %d",size1,size2);
	lseek(fd,0,0);
	lseek(fd1,0,0);
	do{
	i++;j++;
	lseek(fd,0,SEEK_CUR);
	lseek(fd1,0,SEEK_CUR);
	fd4=read(fd,c,1);
	fd5=read(fd1,b,1);
	if(j>size2)
		{write(fd2,c,fd4);}
	else if(i>size1)
		{write(fd2,b,fd5);}
	else
		{write(fd2,c,fd4);
		write(fd2,b,fd5);}
	}while(i<=size1 && j<=size2);
	
	
}
