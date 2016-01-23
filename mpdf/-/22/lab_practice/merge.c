#include<stdio.h>
#include<fcntl.h>
main()
{
	char[1];
	int f1 = open("niru.txt",O_RDONLY);
	int f2 = open("copy.txt",O_RDONLY);
	int f3 = open("merge.txt",O_RDONLY|O_APPEND);
	int size1 = lseek(f1,0,2);
	
}
