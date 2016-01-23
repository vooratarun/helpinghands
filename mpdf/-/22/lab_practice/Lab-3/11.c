#include<stdio.h>
main()
{
FILE *fp,*fp1;
char ch;
fp=fopen("contacts.txt","r");
int i=0;
while(i<10)
{
	ch=fgetc(fp);
	printf("%c", ch);
	if(ch=='\n'){i++;}
	if (ch==EOF){break;}
}
	fclose(fp);
}
