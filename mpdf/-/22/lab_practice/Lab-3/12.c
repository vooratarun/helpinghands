#include<stdio.h>
main()
{
FILE *fp,*fp1;
char ch;
fp=fopen("contacts.txt","r");
int i=0;
int lcount=0;
while(1)
{
	if (ch==EOF){break;}	
	ch=fgetc(fp);
	if(ch=='\n'){lcount++;}

}
fclose(fp);
fp1=fopen("contacts.txt","r");
if (lcount<10)
	{
		while(1)
		{
			if (ch==EOF){break;}
			ch=fgetc(fp1);
			printf("%c", ch);
		}
	}
else if(lcount>10)
	{
		while(i<lcount-10)
		{
			ch=fgetc(fp1);
			if(ch=='\n'){i++;}
		}
		while(1)
		{
			if (ch==EOF){break;}
			ch=fgetc(fp1);
			printf("%c", ch);
		}
	}
fclose(fp1);
}
