#include<stdio.h>
#include<unistd.h>
main()
{
//char * const a[]={"hello","world","Manoj"};
int pid;pid=fork();
if(pid==0)
	{
		execlp("./check","hello","world",(char*)0);
	}

else if(pid>0)
	{
		printf("Parent Process\n");
	}

}
