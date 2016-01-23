#include<stdio.h>
#include<fcntl.h>
main()
{
	char c[100],d[1000];
	//int fd = creat("niru.txt",461);
	//int fdo = open("niru.txt",O_WRONLY|O_APPEND);
	int fdo = open("niru.txt",O_RDONLY);
	//printf("%d",fdo);
	//printf("\nEnter text to be written into file:\t");
	int fdr = read(fdo,d,100);
	printf("\n%d\n",fdr);
	int fdw = write(1,d,100);
	//int fdr2 = read(0,d,100);
	//int fdw2 = write(1,d,fdr2c);
	
}
