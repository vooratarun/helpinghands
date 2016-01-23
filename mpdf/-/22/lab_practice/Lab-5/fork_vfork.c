#include<stdio.h>
#include<unistd.h>
int g=6;
int h=6;
main()
{
int pid;pid=fork();
if(pid==0){printf("Child Process\n");}
else if(pid>0){printf("Parent Process\n");}

int a=5,pid0;pid0=fork();
if(pid0==0){g++;a++;}
else if(pid0>0){printf("fork %d %d \n",g,a);}

int c=5,pid1;pid1=vfork();
if(pid1==0){h++;c++;}
else if(pid1>0){printf("vfork %d %d \n",h,c );}

int pid2;pid2=fork();
if(pid2==0){printf("%d %d \n",getpid(),getppid());}
else if(pid2>0){printf("%d %d %d \n",pid2,getpid(),getppid());}

}
