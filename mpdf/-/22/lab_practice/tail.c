#include<stdio.h>
#include<fcntl.h>
int main()
{
	int n,i=0;
	char c[1];
	printf("Enter the line number to print from tail:\t");
	scanf("%d",&n);
	int fd = open("niru.txt",O_RDONLY);
	int head = lseek(fd,0,0);
	int tail = lseek(fd,0,2);
	
	while(i<n)
	{
		int cur = lseek(fd,-2,1);
		read (fd,c,1);
		if(c[0]=='\n')
		i++;
		if(cur == head){
		printf("came to head nomore lines");
		write(1,c,1);
		n=n+1;
		break;			
		}
	}
	while(1)
	{
		int cur = lseek(fd,0,1);
		read(fd,c,1);
		write(1,c,1);
		if(cur == tail)
		{break;}
	}
	
		
}
