#include<stdio.h>
#include<fcntl.h>
int main()
{
	int n,i=0;
	char c[1];
	printf("Enter the line number to print from head:\t");
	scanf("%d",&n);
	int fd = open("niru.txt",O_RDONLY);
	while(i<n)
	{
		int cur = lseek(fd,0,1);
		read(fd,c,1);
		write(1,c,1);
		if(c[0]=='\n')
			i++;
		}
return 0;	
}
