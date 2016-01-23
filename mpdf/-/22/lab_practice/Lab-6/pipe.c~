#include <stdio.h>
#include<unistd.h>
main()
{
	int pfd[2];
	int pid,m,n;
	char buf1[100]={'1','2','3','4','5'};
	char buf2[100];
//Parent write Child read
pipe(pfd);
pid = fork();

if (pid == 0)
	{
	close(pfd[1]);
	m=read(pfd[0],buf2,sizeof(buf2));
	write(1,buf2,m);
	close(pfd[0]);
	}
else
	{
	close(pfd[0]);
	write(pfd[1],buf1,sizeof(buf1));
	close(pfd[1]);
  	}
//Child write Parent read
pipe(pfd);
pid = fork();

if (pid == 0)
	{
	close(pfd[0]);
	write(pfd[1],buf1,sizeof(buf1));
	close(pfd[1]);
	}
else
	{
	close(pfd[1]);
	m=read(pfd[0],buf2,sizeof(buf2));
	write(1,buf2,m);
	close(pfd[0]);
  	}
//Full Duplex Connection
pipe(pfd);
pid = fork();
pipe(pfd);
if (pid == 0)
	{
	write(pfd[1],buf1,sizeof(buf1));
	close(pfd[1]);
	m=read(pfd[0],buf2,sizeof(buf2));
	write(1,buf2,m);
	close(pfd[0]);
	}
else
	{
	write(pfd[1],buf1,sizeof(buf1));
	close(pfd[1]);
	m=read(pfd[0],buf2,sizeof(buf2));
	write(1,buf2,m);
	close(pfd[0]);
  	}
}
