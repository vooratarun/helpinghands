#include<stdio.h>
#include<unistd.h>
main()
{
char * const  a[]={"h","w","M"};
int pid;pid=fork();
if(pid==0)
	{
		execv("check",a);
	}

else if(pid>0)
	{
		printf("Parent Process\n");
	}

}
