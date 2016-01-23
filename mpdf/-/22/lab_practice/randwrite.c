#include<stdio.h>
#include<fcntl.h>
main()
{
	int c[150];
	int fdo = open("niru.txt",O_RDONLY);
	int fdr = read(fdo,c,sizeof(c));
	int fdw = write(1,c,fdr);
	int fdc = creat("copy.txt",461);
	int fdw2 = write(fdc,c,fdr);
}
