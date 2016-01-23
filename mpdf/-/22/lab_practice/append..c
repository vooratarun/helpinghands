#include<stdio.h>
#include<fcntl.h>
main()
{
	char c[150],d[150];
	int fo1 = open("niru.txt",O_RDONLY);
	int fo2 = open("copy.txt",O_RDONLY);
	int fr1 = read(fo1,c,150);
	int fr2 = read(fo2,d,150);
	//int fo  = creat("append.txt",O_WRONLY);
	int fdo = open("append.txt",O_WRONLY);
	int fdw1 = write(fo1,c,fr1);	
	int fdw2 = write(fo2,d,fr2);	
}
