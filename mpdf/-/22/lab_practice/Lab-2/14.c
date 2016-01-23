#include<stdio.h>
main()
{
FILE *fp,*fp1;
char ch;
fp=fopen("contacts.txt","r");
fp1=fopen("contacts1.txt","a");
while(1)
{
ch=fgetc(fp);
if (ch==EOF)
	break;
fprintf(fp1, "%c", ch);
}
fclose(fp);
}
