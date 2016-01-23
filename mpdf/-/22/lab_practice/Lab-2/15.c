#include<stdio.h>
main()
{
FILE *fp,*fp1,*fp2;
char ch;
fp=fopen("contacts.txt","r");
fp1=fopen("contacts1.txt","r");
fp2=fopen("contacts2.txt","a");
while(1)
{
ch=fgetc(fp);
if (ch==EOF)
	break;
fprintf(fp2, "%c", ch);
}
while(1)
{
ch=fgetc(fp1);
if (ch==EOF)
	break;
fprintf(fp2, "%c", ch);
}
fclose(fp);
}
