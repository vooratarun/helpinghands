#include<stdio.h>
#include<fcntl.h>
main(){
char buf[100];
int fd1=open("file1.txt",O_RDONLY);
int fd2=open("file2.txt",O_RDONLY);
int fd3=open("file3.txt",O_WRONLY|O_APPEND);
int size1=lseek(fd1,0,2);lseek(fd1,0,0);
int size2=lseek(fd2,0,2);lseek(fd2,0,0);
while(1)
	{
		if(lseek(fd1,0,1)<size1)
			{
			read(fd1,buf,1);write(fd3,buf,1);
			}
		if(lseek(fd2,0,1)<size2)
			{
			read(fd2,buf,1);write(fd3,buf,1);
			}
		if(lseek(fd1,0,1)==size1 && lseek(fd2,0,1)==size2)
			{
			break;
			}
	}
return 0;
}
