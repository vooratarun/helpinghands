#include<stdio.h>
#include<fcntl.h>
main(){
char buf[100];
FILE *fd1,*fd2,*fd3;
char ch,ch1;
fd1=fopen("txt1.txt","r");
fd2=fopen("txt2.txt","r");
fd3=fopen("txt3.txt","w");
do
	{
	//ch=fgetc(fd1);
	if( ( (ch=fgetc(fd1)) == EOF) )
	{
	fprintf(fd3,"%c",ch1);
	}
	else if( ( (ch1=fgetc(fd2)) == EOF) )
	{
	fprintf(fd3,"%c",ch);
	}
	else
	{
	fprintf(fd3,"%c%c",ch,ch1);
	}
	}while( !( ( ch=fgetc(fd1) )==EOF ) || !((ch1=fgetc(fd2))==EOF) );
fclose(fd1);fclose(fd2);fclose(fd3);
}
