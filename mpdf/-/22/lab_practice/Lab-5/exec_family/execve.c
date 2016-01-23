#include<stdio.h>
#include<unistd.h>
main()
{
char * const a[]={"h","w","M"};
char * const env[]={"username:rgukt","password:iiitn"};
int pid;pid=fork();
if(pid==0)
	{
		execve("check",a,env);
	}

else if(pid>0)
	{
		printf("Parent Process\n");
	}

}
