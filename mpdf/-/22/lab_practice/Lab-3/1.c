#include<stdio.h>
#include<fcntl.h>
main()
{
	int n,i,fd1;
	char buf[1];
	fd1=open("txt3.txt",O_RDONLY);
	n=5;i=1;
	while(i<n)
		{
			lseek(fd1,0,SEEK_CUR);
			read(fd1,buf,1);
			//write(1,buf,1);
			printf("%c ",buf[0]);
			if (buf[0]=='\n')
				i++;
		}
}
