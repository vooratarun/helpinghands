#include<stdio.h>
#include<unistd.h>
main()
{
int pid;pid=fork();
if(pid==0)
	{
		execl("check","hello","world",(char*)0);
	}

else if(pid>0)
	{
		printf("Parent Process\n");
	}
}
