#include<stdio.h>
int main()
{
	FILE *fp;
	char ch;
	int line,line_count=0;
	fp=fopen("in1.txt","r");
	printf("Enter Number of Lines That you want read: ");
	scanf("%d",&line);
	while(1)
	{
		ch=fgetc(fp);
		if(ch==EOF)
			break;
		if(ch=='\n')
			++line_count;
		if(line_count==line)
			break;
		putchar(ch);
	}
	fclose(fp);
	printf("\n");
	return 0;
}
