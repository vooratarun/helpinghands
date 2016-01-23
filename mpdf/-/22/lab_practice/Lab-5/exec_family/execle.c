#include<stdio.h>
#include<unistd.h>
main()
{
int pid;pid=fork();
const char * env[]={"username:rgukt","password:iiitn"};
if(pid==0)
	{
		execle("check","hello","world",(char*)0,env);
	}

else if(pid>0)
	{
		printf("Parent Process\n");
	}

}
